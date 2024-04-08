<section class="pt-100 login-register">
        <div class="container"> 
        <?php if(!isset($_SESSION['reg_key'])): ?>
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <p class="font-sm text-brand-2">Welcome back! </p>
                <h2 class="mt-10 mb-5 text-brand-1">Member Login</h2>
                <p class="font-sm text-muted mb-30">Access to all features for free.</p>
              </div>
              <form class="login-register text-start mt-20" method="post" action="<?php mainUrl('/xhr.php?uri=login') ?>">
                <div class="form-group">
                  <label class="form-label" for="input-1">Email address *</label>
                  <input class="form-control" id="input-1" type="text" required="" name="email" placeholder="sample@mail.com">
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">Password *</label>
                  <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                </div>
                <div class="login_footer form-group d-flex justify-content-between">
                  <label class="cb-container">
                    <input type="checkbox"><span class="text-small">Remember me</span><span class="checkmark"></span>
                  </label><a class="text-muted" href="page-contact.html">Forgot Password</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                </div>
                <div class="text-muted text-center">Don't have an Account? <a href="<?php mainUrl('?uri=register') ?>">Sign up</a></div>
              </form>
            </div>
            <div class="img-1 d-none d-lg-block"><img class="shape-1" src="<?php mainUrl('/theme/assets/imgs/page/login-register/img-4.svg') ?>" alt="JobBox"></div>
            <div class="img-2"><img src="<?php mainUrl('/theme/assets/imgs/page/login-register/img-3.svg') ?>" alt="JobBox"></div>
          </div>
        <?php else: ?>
          <script>
            window.location.href = "<?php mainUrl('/') ?>";
          </script>
        <?php endif; ?>
        </div>
      </section>