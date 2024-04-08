<?php
isUserLoggedIn();
include_once 'core/csDb.php';
function getNotifications()
{
  $conn = openDatabaseConnection();
  $userId = $_SESSION['userData']['UserID'];

  $sql = "SELECT Notifications.* From Notifications WHERE Notifications.UserID = '$userId' ORDER BY Notifications.ID DESC LIMIT 10";

  $result = $conn->query($sql);
  $notifications = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $notifications[] = $row;
    }
  }
  closeDatabaseConnection($conn);
  return $notifications;
}

//set all unread notifications to read
function setAllApplicationsRead()
{
    $conn = openDatabaseConnection();
    $userId = $_SESSION['userData']['UserID'];
    $sql = "UPDATE Notifications SET IsRead = 1 WHERE UserID = '$userId' AND IsRead = 0";
    $conn->query($sql);
    closeDatabaseConnection($conn);
}
setAllApplicationsRead();

$notifications = getNotifications();
?>
<section class="section-box mt-30">
  <div class="container">
    <div class="row flex-row-reverse">
      <?php if (count($notifications) > 0) : ?>
        <?php foreach ($notifications as $notification) : ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">
            <div class="content-page">
              <div class="row display-list">
                <div class="col-xl-12 col-12">
                  <div class="card-grid-2 hover-up"><span class="flash"></span>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-grid-2-image-left">
                          <div class="right-info"><a class="name-job" href=""><?php echo $notification['Title'] ?></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-block-info">
                      <p class="font-sm color-text-paragraph mt-10"><?php echo $notification['Description'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <center><h2>Hey,You Have No Notifications!</h2></center>
      <?php endif; ?>

    </div>
  </div>
</section>