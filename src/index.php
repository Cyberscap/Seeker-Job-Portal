<?php
include 'core/csCore.php';
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php mainUrl('/theme/assets/imgs/template/favicon.svg') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css">
    <link href="<?php mainUrl('/theme/assets/css/style.css?version=4.1') ?>" rel="stylesheet">
    <title>SEEKER - Job Portal </title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="<?php mainUrl('/theme/assets/imgs/template/loading.gif') ?>" alt="cyber"></div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body pl-30 pr-30 pt-50">
            <div class="text-center">
              <p class="font-sm text-brand-2">Job Application </p>
              <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
              <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.                   </p>
            </div>
            <form class="login-register text-start mt-20 pb-30" action="#">
              <div class="form-group">
                <label class="form-label" for="input-1">Full Name *</label>
                <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-2">Email *</label>
                <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
              </div>
              <div class="form-group">
                <label class="form-label" for="number">Contact Number *</label>
                <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89">
              </div>
              <div class="form-group">
                <label class="form-label" for="des">Description</label>
                <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
              </div>
              <div class="form-group">
                <label class="form-label" for="file">Upload Resume</label>
                <input class="form-control" id="file" name="resume" type="file">
              </div>
              <div class="login_footer form-group d-flex justify-content-between">
                <label class="cb-container">
                  <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                </label><a class="text-muted" href="page-contact.html">Lean more</a>
              </div>
              <div class="form-group">
                <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
              </div>
              <div class="text-muted text-center">Do you need support? <a href="page-contact.html">Contact Us</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include 'views/navbar.php'; ?>
    <!-- mobile header  -->
    <main class="main">
    <?php include $viewsDirectory . $page; ?>
    </main>
    <footer class="footer mt-50">
      <div class="container">
        <div class="row">
          <div class="footer-col-1 col-md-3 col-sm-12"><a href="<?php mainUrl('/') ?>"><img alt="SEEKER" src="<?php mainUrl('/theme/assets/imgs/STAPH.svg') ?>"></a>
            <div class="mt-20 mb-20 font-xs color-text-paragraph-2">SEEKER is the best job listing service.</div>
            <div class="footer-social"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
          </div>
          <div class="footer-col-2 col-md-2 col-xs-6">
            <h6 class="mb-20">Resources</h6>
            <ul class="menu-footer">
              <li><a href="#">About us</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="footer-col-3 col-md-2 col-xs-6">
            <h6 class="mb-20">Community</h6>
            <ul class="menu-footer">
              <li><a href="#">Feature</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Credit</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col-4 col-md-2 col-xs-6">
            <h6 class="mb-20">Quick links</h6>
            <ul class="menu-footer">
              <li><a href="#">iOS</a></li>
              <li><a href="#">Android</a></li>
              <li><a href="#">Microsoft</a></li>
              <li><a href="#">Desktop</a></li>
            </ul>
          </div>
          <div class="footer-col-5 col-md-2 col-xs-6">
            <h6 class="mb-20">More</h6>
            <ul class="menu-footer">
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col-6 col-md-3 col-sm-12">
            <h6 class="mb-20">Visit Us</h6>
            <p class="color-text-paragraph-2 font-xs">Now you can visit us and have a consultation!</p>
            <div class="mt-15"><a class="mr-5" href="#"><img src="<?php mainUrl('/theme/assets/imgs/template/icons/app-store.png') ?>" alt="joxBox"></a><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/template/icons/android.png') ?>" alt="joxBox"></a></div>
          </div>
        </div>
        <div class="footer-bottom mt-50">
          <div class="row">
            <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; 2024. Cyberscap all right reserved</span></div>
            <div class="col-md-6 text-md-end text-start">
              <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms &amp; Conditions</a><a class="font-xs color-text-paragraph" href="#">Security</a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php mainUrl('/theme/assets/js/vendor/modernizr-3.6.0.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/vendor/jquery-migrate-3.3.0.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/vendor/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/waypoints.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/wow.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/magnific-popup.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/select2.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/isotope.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/scrollup.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/swiper-bundle.min.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/plugins/counterup.js') ?>"></script>
    <script src="<?php mainUrl('/theme/assets/js/main.js') ?>?v=4.1"></script>
    <script src="<?php mainUrl('/theme/core.js') ?>?v=1.1"></script>
  </body>
</html>