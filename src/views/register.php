<?php

?>

<section class="pt-100 login-register">
    <div class="container">
        <?php
        if (isset($_SESSION['success'])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['success'] . '</div>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                <div class="text-center">
                    <p class="font-sm text-brand-2">Register </p>
                    <h2 class="mt-10 mb-5 text-brand-1">Start for free Today</h2>
                    <p class="font-sm text-muted mb-30">Access to all features for free.</p>
                </div>
                <form class="login-register text-start mt-20" method="post" action="<?php mainUrl('/xhr.php?uri=register') ?>">
                    <div class="form-group">
                        <label class="form-label" for="input-1">Full Name *</label>
                        <input class="form-control" id="input-1" type="text" required="" value="" name="fullname" placeholder="First and Last Name">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-2">Email *</label>
                        <input class="form-control" id="input-2" type="email" required="" name="email" placeholder="mail@gmail.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-3">Username *</label>
                        <input class="form-control" id="input-3" type="text" required="" name="username" placeholder="stevenjob">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-4">Password *</label>
                        <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-5">Re-Password *</label>
                        <input class="form-control" id="input-5" type="password" required="" name="re-password" placeholder="************">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Select your role *</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="jobSeeker" required name="role" value="Job Seeker">
                            <label for="jobSeeker">I'm a Job Seeker</label><br>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="jobProvider" required name="role" value="Job Provider">
                            <label for="jobProvider">I'm a Job Provider</label><br>
                        </div>
                    </div>
                    <div class="login_footer form-group d-flex justify-content-between">
                        <label class="cb-container">
                            <input type="checkbox" checked><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                        </label><a class="text-muted" href="page-contact.html">Lean more</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-brand-1 hover-up w-100" type="submit" name="register">Submit &amp; Register</button>
                    </div>
                    <div class="text-muted text-center">Already have an account? <a href="<?php mainUrl('?uri=login') ?>">Sign in</a></div>
                </form>
            </div>
            <div class="img-1 d-none d-lg-block"><img class="shape-1" src="<?php mainUrl('/theme/assets/imgs/page/login-register/img-1.svg') ?>" alt="cyber"></div>
            <div class="img-2"><img src="<?php mainUrl('/theme/assets/imgs/page/login-register/img-2.svg') ?>" alt="cs"></div>
        </div>
    </div>
</section>