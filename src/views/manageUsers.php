<?php
if (isset($_SESSION['RoleID']) && $_SESSION['RoleID'] != 1) {
    echo '<script>window.location.href = "' . $baseUrl . '";</script>';
}

include_once 'core/csDb.php';
$pagination = isset($_GET['p']) ? $_GET['p'] : '1';

function getAllUsers($pagination)
{
    if ($pagination == '' || $pagination < 1) {
        $pagination = 1;
    }
    $conn = openDatabaseConnection();
    $limit = 30;
    $offset = ($pagination - 1) * $limit;
    $sql = "SELECT Users.*, Roles.RoleName 
            FROM Users 
            JOIN Roles ON Users.RoleID = Roles.RoleID 
            WHERE Users.RoleID = 2 OR Users.RoleID = 3
            LIMIT $limit OFFSET $offset";

    $result = $conn->query($sql);
    $users = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    closeDatabaseConnection($conn);
    return $users;
}
$users = getAllUsers($pagination);
?>


<section class="section-box mt-50">
    <div class="container">
        <div class="row">

            <div class="csEditorCore d-none">
                <form action="<?php mainUrl('/xhr.php?uri=manageUsers') ?>" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="status">Name</label>
                                <input type="text" name="name" id="csMName" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="status">Username</label>
                                <input type="text" name="username" readonly id="csMUsername" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="status">Email</label>
                                <input type="email" name="email" id="csMEmail" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="status">Role</label>
                                <select name="role" id="csMRole" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Job Seeker</option>
                                    <option value="3">Job Provider</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-20">
                        <button type="submit" name="updateUser" id="csMUpdate" class="btn btn-primary">Update</button>
                        <button name="closeFrm" id="closeFrm" class="btn btn-warning">Close</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4 class="card-title">Users</h4>
                        <div class="d-flex justify-content-between">
                            <a href="<?php mainUrl('/?uri=manageUsers&p=' . ($pagination - 1)) ?>" class="text-link-bd-btom hover-up">Previous</a>
                            <a href="<?php mainUrl('/?uri=manageUsers&p=' . ($pagination + 1)) ?>" class="text-link-bd-btom hover-up">Next</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr id="<?php echo $user['UserID']; ?>">
                                        <th scope="row"><?php echo $user['UserID']; ?></th>
                                        <td class="name"><a href="<?php mainUrl('/' . $user['Cv_Url']) ?>" target="_blank" style="font-weight: 700;"><?php echo $user['Name']; ?> </a></td>
                                        <td class="username"><?php echo $user['Username']; ?></td>
                                        <td class="email"><?php echo $user['Email']; ?></td>
                                        <td class="role" id="<?php echo $user['RoleID']; ?>"><?php echo $user['RoleName']; ?></td>
                                        <td>
                                            <button class="rounded-pill editCsUser" style="color: #fff;background-color: #007bff;">Edit</button>
                                            <button class="rounded-pill removeCsUser" style="color: #fff;background-color: #dc3545;">Delete</button>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if (count($users) == 0) : ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No users found</td>
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