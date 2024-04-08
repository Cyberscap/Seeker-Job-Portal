<?php
isUserLoggedIn();
?>
<section class="section-box mt-70">
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
            <div class="col-lg-8 mb-40"><span class="font-md color-brand-2 mt-20 d-inline-block">Jobs</span>
              <h2 class="mt-5 mb-10">Post a Job</h2>
              <p class="font-md color-text-paragraph-2">The right move at the right time saves your investment. live<br class="d-none d-lg-block"> the dream of expanding your business.</p>
              <form class="contact-form-style mt-30" id="contact-form" action="<?php mainUrl('/xhr.php?uri=posting') ?>" method="post">
                <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                  <div class="col-lg-12 col-md-12">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="job_title" placeholder="Enter job title" type="text">
                    </div>
                  </div>
                  <!-- <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="status" disabled placeholder="Open" value="Open" type="text">
                    </div>
                  </div> -->
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="amount" placeholder="Salary Amount (Per Month)" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                        <select class="font-sm color-text-paragraph-2" name="job_type">
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Contract">Contract</option>
                            <option value="Remote">Remote</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="textarea-style mb-30">
                      <textarea class="font-sm color-text-paragraph-2" name="description" placeholder="Job details"></textarea>
                    </div>
                    <button class="submit btn btn-send-message" name="postJob" type="submit">Post</button>
                  </div>
                </div>
              </form>
              <p class="form-messege"></p>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block"><img src="<?php mainUrl('/theme/assets/imgs/page/contact/img.png') ?>" alt="joxBox"></div>
          </div>
        </div>
      </section>