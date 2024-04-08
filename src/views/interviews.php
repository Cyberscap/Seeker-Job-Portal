<?php
isUserLoggedIn();
include_once 'core/csDb.php';
function getApplications()
{
    $conn = openDatabaseConnection();
    $userId = $_SESSION['userData']['UserID'];

    if ($_SESSION['role'] == 2) {
        $sql = "SELECT Applications.*, Jobs.*, Applications.Status As AppStatus, Seekers.UserID AS SeekerID, Seekers.Name AS SeekerName, Seekers.Cv_Url AS SeekersCV, Providers.UserID AS ProviderID, Providers.Name AS ProviderName
    FROM Applications
    LEFT JOIN Jobs ON Applications.JobID = Jobs.JobID
    LEFT JOIN Users AS Providers ON Applications.ProviderID = Providers.UserID
    LEFT JOIN Users AS Seekers ON Applications.SeekerID = Seekers.UserID
    -- WHERE Applications.SeekerID = '$userId'
    WHERE Applications.SeekerID = 0
    ORDER BY Applications.ApplicationID DESC";
    } else {
        $whereClause = $_SESSION['role'] == 1 ? '' : "Applications.ProviderID = '$userId' AND ";

        $sql = "SELECT Applications.*, Jobs.*, Applications.Status As AppStatus, Seekers.UserID AS SeekerID, Seekers.Name AS SeekerName, Seekers.Cv_Url AS SeekersCV, Providers.UserID AS ProviderID, Providers.Name AS ProviderName
        FROM Applications
        LEFT JOIN Jobs ON Applications.JobID = Jobs.JobID
        LEFT JOIN Users AS Providers ON Applications.ProviderID = Providers.UserID
        LEFT JOIN Users AS Seekers ON Applications.SeekerID = Seekers.UserID
        WHERE Applications.Status = 'Selected' AND $whereClause
        Applications.ApplicationID NOT IN (SELECT ApplicationID FROM Interviews)
        ORDER BY Applications.ApplicationID DESC";
    }
    $result = $conn->query($sql);
    $applications = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $applications[] = $row;
        }
    }
    closeDatabaseConnection($conn);
    return $applications;
}

$applications = getApplications();
// print_r($applications[0]);
?>

<section class="section-box mt-50">
    <div class="container">
        <?php
        if (isset($_SESSION['success'])) {
            echo '<div class="alert alert-success" role="alert"><center>' . $_SESSION['success'] . '</center></div>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger" role="alert"><center>' . $_SESSION['error'] . '</center></div>';
            unset($_SESSION['error']);
        }
        ?>
        <div class="row">
        <div id="calendar"></div>
        <?php if ($_SESSION['role'] == 3) : ?>
        <hr>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Interviews</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Seeker</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Provider</th>
                                    <th scope="col">Applied On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($applications as $application) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $application['ApplicationID']; ?></th>
                                        <td><a href="<?php mainUrl('/' . $application['SeekersCV']) ?>" target="_blank"><?php echo $application['SeekerName']; ?> <b style="font-weight: 700;">(View CV)</b></a></td>
                                        <td><?php echo $application['Title']; ?></td>
                                        <td><?php echo $application['ProviderName']; ?></td>
                                        <td><?php echo timeString($application['AppliedDate']); ?></td>
                                        <td>
                                            <!-- //add datetime calander to pick -->
                                            <form id="sheduleInterFrm" action="<?php mainUrl('/xhr.php?uri=scheduleInterview') ?>" method="post">
                                                <input type="hidden" name="applicationId" value="<?php echo $application['ApplicationID']; ?>">
                                                <input type="hidden" name="seekerId" value="<?php echo $application['SeekerID']; ?>">
                                                <input type="hidden" name="prodName" value="<?php echo $application['ProviderName']; ?>">
                                                <input type="hidden" name="seekerName" value="<?php echo $application['SeekerName']; ?>">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="datetime-local" name="interviewDate" class="form-control" required>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-default hover-up w-100" type="submit" id="sheduleInterBtn" name="scheduleInterview">Schedule</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if (count($applications) == 0) : ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No applications found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>