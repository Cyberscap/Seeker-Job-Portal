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
    WHERE Applications.SeekerID = '$userId'
    ORDER BY Applications.ApplicationID DESC";
    } else {
        $whereClause = $_SESSION['role'] == 1 ? '' : "WHERE Applications.ProviderID = '$userId'";

        $sql = "SELECT Applications.*, Jobs.*, Applications.Status As AppStatus, Seekers.UserID AS SeekerID, Seekers.Name AS SeekerName, Seekers.Cv_Url AS SeekersCV, Providers.UserID AS ProviderID, Providers.Name AS ProviderName
        FROM Applications
        LEFT JOIN Jobs ON Applications.JobID = Jobs.JobID
        LEFT JOIN Users AS Providers ON Applications.ProviderID = Providers.UserID
        LEFT JOIN Users AS Seekers ON Applications.SeekerID = Seekers.UserID
        $whereClause
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
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Applications</h4>
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
                                    <th scope="col">Status</th>
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
                                            <?php if ($_SESSION['role'] == 3) : ?>
                                                <select name="appStatus" class="appStatus" id="<?php echo $application['ApplicationID']; ?>" data-seeker="<?php echo $application['SeekerID']; ?>" <?php echo $application['AppStatus'] == 'Rejected' ? 'disabled' : ''; ?>>
                                                    <option value="Applied" <?php echo $application['AppStatus'] == 'Applied' ? 'selected' : ''; ?>>Applied</option>
                                                    <option value="Selected" <?php echo $application['AppStatus'] == 'Selected' ? 'selected' : ''; ?>>Selected</option>
                                                    <option value="Rejected" <?php echo $application['AppStatus'] == 'Rejected' ? 'selected' : ''; ?>>Rejected</option>
                                                </select>
                                            <?php else : ?>
                                                <?php echo $application['AppStatus']; ?>
                                            <?php endif; ?>

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
        </div>
    </div>
</section>