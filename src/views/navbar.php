<?php
require_once 'core/csDb.php';
// get unread notifications count
function getUnreadNotificationsCount()
{
  $conn = openDatabaseConnection();
  $userId = $_SESSION['userData']['UserID'];
  $sql = "SELECT COUNT(*) AS UnreadCount FROM Notifications WHERE UserID = '$userId' AND IsRead = 0";
  $result = $conn->query($sql);
  $unreadCount = 0;
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $unreadCount = $row['UnreadCount'];
  }
  closeDatabaseConnection($conn);
  return $unreadCount;
}
if (isset($_SESSION['reg_key'])) {
  $unreadCount = getUnreadNotificationsCount();
}
?>
<header class="header sticky-bar">
  <div class="container">
    <div class="main-header">
      <div class="header-left">
        <div class="header-logo"><a class="d-flex" href="<?php mainUrl('/') ?>"><img alt="SEEKER" src="<?php mainUrl('/theme/assets/imgs/STAPH.svg') ?>"></a></div>
      </div>
      <div class="header-nav">
        <nav class="nav-main-menu">
          <ul class="main-menu">
            <li class=""><a class="<?php isActivePage('home.php') ?>" href="<?php mainUrl(); ?>">Home</a>
            </li>
            <li class=""><a class="<?php isActivePage('jobs.php') ?>" href="<?php mainUrl('?uri=jobs'); ?>">Find a Job</a>
            </li>
            <li class=""><a class="<?php isActivePage('about.php') ?>" href="<?php mainUrl('?uri=about'); ?>">About</a>
            </li>
            <li class=""><a class="<?php isActivePage('contact.php') ?>" href="<?php mainUrl('?uri=contact'); ?>">Contact Us</a>
            </li>
            <?php if (isset($_SESSION['reg_key'])) : ?>
              <li class="has-children"><a href="#">Profile</a>
                <ul class="sub-menu">
                  <?php if ($_SESSION['role'] == 2) : ?>
                    <li><a href="<?php mainUrl('?uri=profile') ?>">My Profile</a></li>
                    <li><a href="<?php mainUrl('?uri=notifications') ?>">Notifications</a></li>
                    <li><a href="<?php mainUrl('?uri=interviews') ?>">Interviews</a></li>
                    <li><a href="<?php mainUrl('?uri=applications') ?>">View Applications</a></li>
                  <?php elseif ($_SESSION['role'] == 3) : ?>
                    <li><a href="<?php mainUrl('?uri=profile') ?>">My Profile</a></li>
                    <li><a href="<?php mainUrl('?uri=applications') ?>">View Applications</a></li>
                    <li><a href="<?php mainUrl('?uri=interviews') ?>">Manage Interviews</a></li>
                  <?php else : ?>
                    <li><a href="<?php mainUrl('?uri=profile') ?>">My Profile</a></li>
                    <li><a href="<?php mainUrl('?uri=applications') ?>">View Applications</a></li>
                    <li><a href="<?php mainUrl('?uri=manageUsers') ?>">Manage Users</a></li>
                  <?php endif; ?>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </nav>
        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
      </div>
      <div class="header-right">
        <div class="block-signin">
          <?php if (isset($_SESSION['reg_key'])) : ?>
            <?php if ($_SESSION['role'] == 3) : ?>
              <a class="text-link-bd-btom hover-up" href="<?php mainUrl('?uri=posting') ?>">Post a Job</a>
            <?php endif; ?>
            <?php if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) : ?>
              <?php if ($unreadCount > 0) : ?>
                <a class="text-link-bd-btom hover-up alertWarn" href="<?php mainUrl('?uri=notifications') ?>">Alerts (<?php echo $unreadCount ?>)</a>
              <?php else : ?>
                <a class="text-link-bd-btom hover-up" href="<?php mainUrl('?uri=profile') ?>">My Profile</a>
              <?php endif; ?>
            <?php endif; ?>
            <a class="btn btn-default btn-shadow ml-40 hover-up" href="<?php mainUrl('?uri=logout') ?>">Logout</a>
          <?php else : ?>
            <a class="text-link-bd-btom hover-up" href="<?php mainUrl('?uri=register') ?>">Register</a>
            <a class="btn btn-default btn-shadow ml-40 hover-up" href="<?php mainUrl('?uri=login') ?>">Sign in</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>