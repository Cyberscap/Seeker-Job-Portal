<?php
isUserLoggedIn();
// var_dump($_SESSION);
if ($_SESSION['role'] == 2) {
    $roleX = 'Job Seeker';
} else if ($_SESSION['role'] == 3) {
    $roleX = 'Recruiter';
} else {
    $roleX = 'Administator';
}

//Return image by role
function roleImage()
{
    $role = $_SESSION['role'];
    $userID = $_SESSION['userData']['UserID'];
    if ($role == 2) {
        return 'https://api.dicebear.com/8.x/adventurer/svg?seed='.$userID.'&radius=10&backgroundType=solid,gradientLinear&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf';
    } else if ($role == 3) {
        return 'https://api.dicebear.com/8.x/icons/svg?seed='.$userID.'&radius=10&backgroundColor=80cbc4,80deea,81d4fa,90caf9,9fa8da,a5d6a7,b39ddb,c5e1a5,ce93d8,e6ee9c,ef9a9a,f48fb1,ffab91,ffcc80,ffe082,ffd5dc&backgroundType=solid,gradientLinear&randomizeIds=true';
    } else {
        return 'https://api.dicebear.com/8.x/adventurer/svg?seed='.$userID.'&radius=10&backgroundType=solid,gradientLinear&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf';
    }
}
?>
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
<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-image-single"><img src="<?php mainUrl('/theme/assets/imgs/page/candidates/img.png') ?>" alt="jobbox"><a class="btn-editor" href="#"></a></div>
        <div class="box-company-profile">
            <div class="image-compay"><img src="<?php echo roleImage(); ?>" width="85px" height="85px" alt="SEEKER"></div>
            <div class="row mt-10">
                <div class="col-lg-8 col-md-12">
                    <h5 class="f-18"><?php csUserData('user') ?> <span class="card-location font-regular ml-20">Sri Lanka</span></h5>
                    <p class="mt-0 font-md color-text-paragraph-2 mb-15"><?php echo $roleX ?></p>
                </div>
            </div>
        </div>
        <div class="border-bottom pt-10 pb-10"></div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="box-nav-tabs nav-tavs-profile mb-5">
                    <ul class="nav" role="tablist">
                        <li><a class="btn btn-border aboutus-icon mb-20 active" href="#tab-my-profile" data-bs-toggle="tab" role="tab" aria-controls="tab-my-profile" aria-selected="true">My Profile</a></li>
                        <!-- <li><a class="btn btn-border recruitment-icon mb-20" href="#tab-my-jobs" data-bs-toggle="tab" role="tab" aria-controls="tab-my-jobs" aria-selected="false">My Jobs</a></li>
                        <li><a class="btn btn-border people-icon mb-20" href="#tab-saved-jobs" data-bs-toggle="tab" role="tab" aria-controls="tab-saved-jobs" aria-selected="false">Saved Jobs</a></li> -->
                    </ul>
                    <div class="border-bottom pt-10 pb-10"></div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                <div class="content-single">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-my-profile" role="tabpanel" aria-labelledby="tab-my-profile">
                            <h3 class="mt-0 mb-15 color-brand-1">My Account</h3><a class="font-md color-text-paragraph-2" href="#">Update your profile</a>

                            <div class="row form-contact">
                                <form class="form-contact" method="post" action="<?php mainUrl('/xhr.php?uri=profile') ?>" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Full Name *</label>
                                        <input class="form-control" type="text" name="fullname" value="<?php csUserData('user') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Username</label>
                                        <input class="form-control" type="text" name="username" value="<?php echo $_SESSION['userData']['Username'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Email *</label>
                                        <input class="form-control" type="text" name="email" value="<?php echo $_SESSION['userData']['Email'] ?>">
                                    </div>
                                    <div class="row">

                                    </div>
                                    <div class="border-bottom pt-10 pb-10 mb-30"></div>
                                    <h6 class="color-orange mb-20">Change your password</h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Password</label>
                                                <input class="form-control" type="password" name="password" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Re-Password *</label>
                                                <input class="form-control" type="password" name="re-password" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom pt-10 pb-10"></div>
                                    <!-- <div class="box-agree mt-30">
                                        <label class="lbl-agree font-xs color-text-paragraph-2">
                                            <input class="lbl-checkbox" type="checkbox" value="1">Available for freelancers
                                        </label>
                                    </div> -->
                                    <div class="box-button mt-15">
                                        <button class="btn btn-apply-big font-md font-bold" name="profile">Save Changes</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="box-skills">
                                        <h5 class="mt-0 color-brand-1">Membership</h5>
                                        <div class="mt-40"> <span class="card-info font-sm color-text-paragraph-2">Your Current Role: <b style="color: #3b65f5;"><?php echo $roleX ?></b></span></div>
                                        <?php if ($_SESSION['role'] == 2) { ?>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                               <div class="mt-40"> <span class="card-info font-sm color-text-paragraph-2">Your CV: <b style="color: #000000;"><?php echo isset($_SESSION['userData']['Cv_Url']) ? 'Uploaded ✅':'Not Uploaded Yet 🚩' ?></b></span></div>
                                                <input class="form-control" type="file" name="cv">
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-my-jobs" role="tabpanel" aria-labelledby="tab-my-jobs">
                            <h3 class="mt-0 color-brand-1 mb-50">My Jobs</h3>
                            <div class="row display-list">
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-5.png') ?>" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Linkedin</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">React Native Web Developer</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>4</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-6.png') ?>" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Quora JSC</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">Senior System Engineer</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time"><span>5</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-7.png') ?>" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Nintendo</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">Products Manager</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time"><span>6</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Periscope</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">Lead Quality Control QA</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time"><span>6</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations">
                                <ul class="pager">
                                    <li><a class="pager-prev" href="#"></a></li>
                                    <li><a class="pager-number" href="#">1</a></li>
                                    <li><a class="pager-number" href="#">2</a></li>
                                    <li><a class="pager-number" href="#">3</a></li>
                                    <li><a class="pager-number" href="#">4</a></li>
                                    <li><a class="pager-number" href="#">5</a></li>
                                    <li><a class="pager-number active" href="#">6</a></li>
                                    <li><a class="pager-number" href="#">7</a></li>
                                    <li><a class="pager-next" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-saved-jobs" role="tabpanel" aria-labelledby="tab-saved-jobs">
                            <h3 class="mt-0 color-brand-1 mb-50">Saved Jobs</h3>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-1.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-2.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-3.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-4.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-5.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-6.png') ?>" alt="cyber"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-7.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="<?php mainUrl('/theme/assets/imgs/brands/brand-8.png') ?>" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations">
                                <ul class="pager">
                                    <li><a class="pager-prev" href="#"></a></li>
                                    <li><a class="pager-number" href="#">1</a></li>
                                    <li><a class="pager-number" href="#">2</a></li>
                                    <li><a class="pager-number" href="#">3</a></li>
                                    <li><a class="pager-number" href="#">4</a></li>
                                    <li><a class="pager-number" href="#">5</a></li>
                                    <li><a class="pager-number active" href="#">6</a></li>
                                    <li><a class="pager-number" href="#">7</a></li>
                                    <li><a class="pager-next" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>