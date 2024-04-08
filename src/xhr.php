<?php
session_start(); // Start session
$call = isset($_GET['uri']) ? $_GET['uri'] : '';
include_once 'core/csDb.php';

function securePassword($password)
{
    $password = trim($password) . trim('CS');
    return sha1($password);
}

//Filter user input
function cleanUp($value)
{
    return htmlspecialchars($value, ENT_QUOTES);
}

// setup user session
function loggedUser($username, $password)
{
    $conn = openDatabaseConnection();

    $sql = "SELECT * FROM Users WHERE Email='$username' AND UserID='$password'";
    // $sql = "SELECT * FROM Users WHERE Email='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['user'] = $row['Name'];
            $_SESSION['role'] = $row['RoleID'];
            $_SESSION['userData'] = $row;
            $_SESSION['reg_key'] = securePassword($row['Email'] . $row['Name']);
        }
    } else {
        echo "Invalid username or password. Please try again.";
    }

    closeDatabaseConnection($conn);
}

// Send notification to user
function notifyUser($userId, $title, $message)
{
    $conn = openDatabaseConnection();
    $sql = "INSERT INTO Notifications (UserID, Title, Description) VALUES ('$userId', '$title', '$message')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
    closeDatabaseConnection($conn);
}

// Send Email to user
function sendEmail($recipientName, $recipientEmail, $subject, $htmlContent)
{
    $url = 'https://api.brevo.com/v3/smtp/email';

    $data = array(
        "sender" => array(
            "name" => 'SEEKER Job Portal',
            "email" => 'contact@cyberscap.com'
        ),
        "to" => array(
            array(
                "email" => $recipientEmail,
                "name" => $recipientName
            )
        ),
        "subject" => $subject,
        "htmlContent" => $htmlContent
    );

    $dataJson = json_encode($data);

    $headers = array(
        'accept: application/json',
        'api-key: ' . 'xkeysib-cyberscapKeyDetected',
        'content-type: application/json'
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($httpcode == 200 || $httpcode == 201) {
        return true;
    } else {
        echo "Failed to send email. HTTP Status Code: $httpcode";
    }

    return $response;
}

if ($call == 'register') { //Register function
    function insertMemberRegistration($fullname, $username, $password, $confirmPassword, $email, $role, $passwordClean)
    {

        $errors = [
            "Invalid email format" => !filter_var($email, FILTER_VALIDATE_EMAIL),
            "Invalid username format" => !preg_match("/^[a-zA-Z0-9]*$/", $username),
            "Invalid password format" => !preg_match("/^[a-zA-Z0-9]*$/", $password),
            "Passwords do not match, Please check." => $password != $confirmPassword,
            "Password must be at least 8 characters" => strlen($passwordClean) < 8,
        ];

        foreach ($errors as $error => $invalid) {
            if ($invalid) {
                $_SESSION['error'] = $error;
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }

        $conn = openDatabaseConnection();

        $sql = "INSERT INTO Users (Name, Username, Password, Email, RoleID) VALUES ('$fullname', '$username', '$password', '$email', '$role')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Registration Successful!";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        closeDatabaseConnection($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
        $fullname = cleanUp($_POST['fullname']);
        $email = cleanUp($_POST['email']);
        $username = cleanUp($_POST['username']);
        $password = securePassword($_POST['password']);
        $confirmPassword = securePassword($_POST['re-password']);
        if ($_POST['role'] == 'Job Seeker') {
            $role = 2;
        } else {
            $role = 3;
        }

        insertMemberRegistration($fullname, $username, $password, $confirmPassword, $email, $role, $_POST['password']);
    }
} else if ($call == 'profile') { //Profile function
    //update user details
    function updateMemberProfile($fullname, $username, $email, $password, $confirmPassword, $cv, $role = 0)
    {

        $cvUpload = false;
        $cvFileName = "";
        if ($cv['name'] != "") {
            // File upload path
            $targetDir = "cv_uploads/";
            // only get file type from cv
            $cvFileName = $_SESSION['reg_key'] . '_' . $cv['name'];
            $targetFilePath = $targetDir . $cvFileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('pdf', 'doc', 'docx');

            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($cv["tmp_name"], $targetFilePath)) {
                    $conn = openDatabaseConnection();
                    $id = $_SESSION['userData']['UserID'];
                    $sql = "UPDATE Users SET Cv_Url='$targetFilePath' WHERE UserID='$id'";
                    if ($conn->query($sql) === TRUE) {
                        $cvUpload = true;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    closeDatabaseConnection($conn);
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                    exit();
                }
            } else {
                $_SESSION['error'] = "Sorry, only PDF, DOC, and DOCX files are allowed.";
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }

        $errors = [
            "Fullname is required" => $fullname == "",
            "Invalid email format" => !filter_var($email, FILTER_VALIDATE_EMAIL),
            "Invalid username format" => !preg_match("/^[a-zA-Z0-9]*$/", $username),
            "Invalid password format" => !preg_match("/^[a-zA-Z0-9]*$/", $password),
            // "Password must be at least 8 characters" => strlen($password) < 8,
            "Passwords do not match, Please check." => $password != $confirmPassword,
        ];

        foreach ($errors as $error => $invalid) {
            if ($invalid) {
                $_SESSION['error'] = $error;
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }

        $id = $_SESSION['userData']['UserID'];
        $conn = openDatabaseConnection();

        if ($password != null && $confirmPassword != null) {
            $password = securePassword($password);
            $sql = "UPDATE Users SET Name='$fullname', Username='$username', Password='$password', Email='$email' WHERE UserID='$id'";
        } else {
            $sql = "UPDATE Users SET Name='$fullname', Username='$username', Email='$email' WHERE UserID='$id'";
        }

        if ($conn->query($sql) === TRUE) {
            if ($password != $_SESSION['userData']['Password']) {
                if ($cvUpload) {
                    $_SESSION['success'] = "Profile & password updated successfully! CV uploaded successfully!";
                } else {
                    $_SESSION['success'] = "Profile updated successfully!";
                }
            } else {
                $_SESSION['success'] = "Profile & password updated successfully!";
            }
            loggedUser($email, $_SESSION['userData']['UserID']); //Update session
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        closeDatabaseConnection($conn);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['profile'])) {
        $fullname = cleanUp($_POST['fullname']);
        $email = cleanUp($_POST['email']);
        $username = cleanUp($_POST['username']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['re-password'];
        $cv = $_FILES['cv'];

        updateMemberProfile($fullname, $username, $email, $password, $confirmPassword, $cv);
    }
} else if ($call == 'login') { //Login function
    function loginMember($username, $password)
    {
        $password = securePassword($password);
        $conn = openDatabaseConnection();

        $sql = "SELECT * FROM Users WHERE Email='$username' AND Password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['success'] = "Welcome back, " . $row['Name'] . "!";
                $_SESSION['user'] = $row['Name'];
                $_SESSION['role'] = $row['RoleID'];
                $_SESSION['userData'] = $row;
                $_SESSION['reg_key'] = securePassword($row['Email'] . $row['Name']);
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        } else {
            echo "Invalid username or password. Please try again.";
        }

        closeDatabaseConnection($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];
        loginMember($username, $password);
    }
} else if ($call == 'posting') { //Posting function
    function postJob($title, $amount, $type, $description)
    {

        $errors = [
            "Job title is required" => $title == "",
            "Amount is required" => $amount == "",
            "Amount must be only numbers" => !is_numeric($amount),
            "Job type is required" => $type == "",
            "Description is required" => $description == "",
        ];

        foreach ($errors as $error => $invalid) {
            if ($invalid) {
                $_SESSION['error'] = $error;
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }

        $conn = openDatabaseConnection();
        $providerID = $_SESSION['userData']['UserID'];
        $sql = "INSERT INTO Jobs (Title, Amount, JobType, Description, ProviderID) VALUES ('$title', '$amount', '$type', '$description', '$providerID')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Job published successfully!";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        closeDatabaseConnection($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['postJob'])) {
        $title = cleanUp($_POST['job_title']);
        $amount = cleanUp($_POST['amount']);
        $type = cleanUp($_POST['job_type']);
        $description = cleanUp($_POST['description']);

        postJob($title, $amount, $type, $description);
    }
} else if ($call == 'applyJob') { //Apply Job api function
    function applyForJob($data)
    {
        if ($_SESSION['userData']['Cv_Url'] == '') {
            return json_encode(['status' => 'error', 'message' => 'Please upload your CV before applying for a job!']);
        } else {
            $conn = openDatabaseConnection();
            $jobID = $data['jobId'];
            $userID = $_SESSION['userData']['UserID'];
            $providerID = $conn->query("SELECT ProviderID FROM Jobs WHERE JobID='$jobID'")->fetch_assoc()['ProviderID'];

            $sql = "INSERT INTO Applications (JobID, SeekerID, ProviderID) VALUES ('$jobID', '$userID', '$providerID')";

            if ($conn->query($sql) === TRUE) {
                return json_encode(['status' => 'success', 'message' => 'Job application submitted successfully!']);
            } else {
                return json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . "<br>" . $conn->error]);
            }
            closeDatabaseConnection($conn);
        }
        return json_encode(['status' => 'success', 'message' => 'Job application submitted successfully!']);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo applyForJob($_POST);
    }
} else if ($call == 'applications') { //Update Application status api function
    function updateApplicationStatus($data)
    {
        $conn = openDatabaseConnection();
        $applicationID = $data['appId'];
        $status = $data['status'];
        $seekerID = $data['seekerId'];
        $getUserDataById = $conn->query("SELECT * FROM Users WHERE UserID='$seekerID'")->fetch_assoc();

        $sql = "UPDATE Applications SET Status='$status' WHERE ApplicationID='$applicationID'";

        if ($conn->query($sql) === TRUE) {
            notifyUser($seekerID, 'Application #' . $applicationID . ' Status Update', 'Hello! Your application status has been updated to ' . $status . '!');
            sendEmail($getUserDataById['Name'], $getUserDataById['Email'], 'Application #' . $applicationID . ' Status Update', 'Hello! Your application status has been updated to ' . $status . '!');
            return json_encode(['status' => 'success', 'message' => 'Application status updated successfully!']);
        } else {
            return json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . "<br>" . $conn->error]);
        }
        closeDatabaseConnection($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo updateApplicationStatus($_POST);
    }
} else if ($call == 'manageUsers') { //Edit Users api function
    $data = $_POST;
    function editUser($data)
    {
        $conn = openDatabaseConnection();
        $userID = $data['userId'];
        $name = $data['name'];
        $username = $data['username'];
        $email = $data['email'];
        $role = $data['role'];

        $sql = "UPDATE Users SET Name='$name', Username='$username', Email='$email', RoleID='$role' WHERE UserID='$userID'";

        if ($conn->query($sql) === TRUE) {
            return json_encode(['status' => 'success', 'message' => 'User updated successfully!']);
        } else {
            return json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . "<br>" . $conn->error]);
        }
        closeDatabaseConnection($conn);
    }
    function deleteUser($data)
    {
        $conn = openDatabaseConnection();
        $userID = $data['userId'];

        $sql = "DELETE FROM Users WHERE UserID='$userID'";

        if ($conn->query($sql) === TRUE) {
            return json_encode(['status' => 'success', 'message' => 'User deleted successfully!']);
        } else {
            return json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . "<br>" . $conn->error]);
        }
        closeDatabaseConnection($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($data['action']) && $data['action'] == 'edit') {
            echo editUser($data);
        } else if (isset($data['action']) && $data['action'] == 'delete') {
            echo deleteUser($data);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid action!']);
        }
    }
} else if ($call == 'scheduleInterview') { //Shedule Interview function
    function scheduleInterview($data)
    {
        $conn = openDatabaseConnection();
        $applicationID = $data['applicationId'];
        $interviewDate = $data['interviewDate'];
        $seekerID = $data['seekerId'];
        if ($data['interviewDate'] == '') {
            $_SESSION['error'] = "Please select a date for the interview!";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
        $locationURL = "https://zoom.us/j/5551112222";
        $providerID = $conn->query("SELECT ProviderID FROM Applications WHERE ApplicationID='$applicationID'")->fetch_assoc()['ProviderID'];
        $seekerEmail = $conn->query("SELECT Email FROM Users WHERE UserID='$seekerID'")->fetch_assoc()['Email'];

        $sql = "INSERT INTO Interviews (ApplicationID, InterviewDate, ProviderID, Location) VALUES ('$applicationID', '$interviewDate', '$providerID', '$locationURL')";

        if ($conn->query($sql) === TRUE) {
            notifyUser($seekerID, 'Your Interview Scheduled', 'Hello! Your interview has been scheduled for ' . $interviewDate . ' at ' . $locationURL . ' By ' . $data['prodName'] . '!');
            sendEmail($data['seekerName'], $seekerEmail, 'Your Interview Scheduled', 'Hello! Your interview has been scheduled for ' . $interviewDate . ' at ' . $locationURL . ' By ' . $data['prodName'] . '!');
            $_SESSION['success'] = "Interview scheduled successfully!";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
        closeDatabaseConnection($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo scheduleInterview($_POST);
    }
} else if ($call == 'getInterviews') { // Get Interviews api function
    function getInterviews()
    {
        $conn = openDatabaseConnection();
        $userId = $_SESSION['userData']['UserID'];

        if ($_SESSION['role'] == 2) {
            $sql = "SELECT Interviews.*, Applications.*, Jobs.*, Users.Name AS ProviderName
            FROM Interviews
            LEFT JOIN Applications ON Interviews.ApplicationID = Applications.ApplicationID
            LEFT JOIN Jobs ON Applications.JobID = Jobs.JobID
            LEFT JOIN Users ON Interviews.ProviderID = Users.UserID
            WHERE Applications.SeekerID = '$userId'
            ORDER BY Interviews.InterviewID DESC";
        } else {
            $sql = "SELECT Interviews.*, Applications.*, Jobs.*, Users.Name AS SeekerName
            FROM Interviews
            LEFT JOIN Applications ON Interviews.ApplicationID = Applications.ApplicationID
            LEFT JOIN Jobs ON Applications.JobID = Jobs.JobID
            LEFT JOIN Users ON Applications.SeekerID = Users.UserID
            WHERE Applications.ProviderID = '$userId'
            ORDER BY Interviews.InterviewID DESC";
        }
        $result = $conn->query($sql);
        $interviews = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $interviews[] = $row;
            }
        }
        closeDatabaseConnection($conn);
        return $interviews;
    }

    $interviews = getInterviews();
    $returnArr = [];
    foreach ($interviews as $interview) {
        $returnArr[] = [
            'id' => $interview['InterviewID'],
            'title' => 'Interview with ' . ($_SESSION['role'] == 2 ? $interview['ProviderName'] : $interview['SeekerName']),
            'start' => $interview['InterviewDate'],
            'end' => $interview['InterviewDate'],
            'url' => $interview['Location'],
        ];
    }
    echo json_encode($returnArr);
} else {
    echo 'Request not allowed!';
}
