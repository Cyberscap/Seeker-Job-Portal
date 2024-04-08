<?php
if (isset($_SESSION['success'])) {
  echo '<div class="alert alert-success" role="alert"><center>' . $_SESSION['success'] . '</center></div>';
  unset($_SESSION['success']);
}
function randomSeed()
{
  $math = rand(1, 99999);
  $randText = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $pick = rand(0, strlen($randText) - 1);
  $return = $pick + $math;
  return $return;
}
?>
<section class="section-box mb-70">
  <div class="banner-hero hero-1 banner-homepage5">
    <div class="banner-inner">
      <div class="row">
        <div class="col-xl-7 col-lg-12">
          <div class="block-banner">
            <h1 class="heading-banner wow animate__animated animate__fadeInUp">Unlock Opportunities,<br class="d-none d-lg-block">Discover Careers</h1>
            <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Where 3 Million Dreams Flourish Monthly: Over 140,000 Paths Paved Daily.</div>
            <div class="mt-30"> <a class="btn btn-default mr-15">Get Started</a><a class="btn btn-border-brand-2">Learn more</a></div>
            <div class="mt-50 mb-20"><span class="font-md color-text-paragraph-2">Jobs Opportunities by</span></div>
            <div class="box-logos-485">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-4-banner swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/microsoft.svg') ?>" alt="cyber"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/sony.svg') ?>" alt="cyber"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/acer.svg') ?>" alt="cyber"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/nokia.svg') ?>" alt="cyber"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/asus.svg') ?>" alt="cyber"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/casio.svg') ?>" alt="cyber"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage3/dell.svg') ?>" alt="cyber"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">
          <div class="banner-imgs">
            <div class="banner-1 shape-1"><img class="img-responsive" width="356" height="356" alt="cyberscap_ui" src="https://api.dicebear.com/8.x/notionists/svg?seed=<?php echo randomSeed(); ?>&flip=true&radius=50&backgroundType=solid,gradientLinear&beardProbability=5&gestureProbability=45&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf"></div>
            <div class="banner-2 shape-2"><img class="img-responsive" width="192" height="192" alt="cyberscap_ui" src="https://api.dicebear.com/8.x/notionists/svg?seed=<?php echo randomSeed(); ?>&flip=true&radius=50&backgroundType=solid,gradientLinear&beardProbability=5&gestureProbability=45&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf"></div>
            <div class="banner-3 shape-3"><img class="img-responsive" width="165" height="165" alt="cyberscap_ui" src="https://api.dicebear.com/8.x/notionists/svg?seed=<?php echo randomSeed(); ?>&flip=true&radius=50&backgroundType=solid,gradientLinear&beardProbability=5&gestureProbability=45&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf"></div>
            <div class="banner-4 shape-3"><img class="img-responsive" width="145" height="145" alt="cyberscap_ui" src="https://api.dicebear.com/8.x/notionists/svg?seed=<?php echo randomSeed(); ?>&flip=true&radius=50&backgroundType=solid,gradientLinear&beardProbability=5&gestureProbability=45&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf"></div>
            <div class="banner-5 shape-2"><img class="img-responsive" width="131" height="131" alt="cyberscap_ui" src="https://api.dicebear.com/8.x/notionists/svg?seed=<?php echo randomSeed(); ?>&flip=true&radius=50&backgroundType=solid,gradientLinear&beardProbability=5&gestureProbability=45&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf"></div>
            <div class="banner-6 shape-1"><img class="img-responsive" width="120" height="120" alt="cyberscap_ui" src="https://api.dicebear.com/8.x/notionists/svg?seed=<?php echo randomSeed(); ?>&flip=true&radius=50&backgroundType=solid,gradientLinear&beardProbability=5&gestureProbability=45&backgroundColor=b6e3f4,c0aede,d1d4f9,ffd5dc,ffdfbf"></div>
          </div>
        </div>
      </div>
      <div class="box-search-2">
        <div class="block-banner">
          <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <form method="get" action="<?php mainUrl('?uri=jobs') ?>">
              <input hidden type="text" name="uri" value="jobs">
              <input class="form-input input-keysearch mr-10" type="text" name="keyword" placeholder="Your keyword... ">
              <select class="form-input mr-10 select-active">
                <option value="">Location</option>
                <option value="AX">Aland Islands</option>
                <option value="AF">Afghanistan</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctica</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="PW">Belau</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia</option>
                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="VG">British Virgin Islands</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="CV">Cape Verde</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos (Keeling) Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo (Brazzaville)</option>
                <option value="CD">Congo (Kinshasa)</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Cura&Ccedil;ao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czech Republic</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HM">Heard Island and McDonald Islands</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran</option>
                <option value="IQ">Iraq</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="CI">Ivory Coast</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Laos</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao S.A.R., China</option>
                <option value="MK">Macedonia</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldova</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="AN">Netherlands Antilles</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="KP">North Korea</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PS">Palestinian Territory</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="QA">Qatar</option>
                <option value="IE">Republic of Ireland</option>
                <option value="RE">Reunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russia</option>
                <option value="RW">Rwanda</option>
                <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                <option value="BL">Saint Barth&eacute;lemy</option>
                <option value="SH">Saint Helena</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="SX">Saint Martin (Dutch part)</option>
                <option value="MF">Saint Martin (French part)</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="SM">San Marino</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia/Sandwich Islands</option>
                <option value="KR">South Korea</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syria</option>
                <option value="TW">Taiwan</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor-Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom (UK)</option>
                <option value="US">USA (US)</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VA">Vatican</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="WS">Western Samoa</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
              </select>
              <div class="box-industry">
                <select class="form-input mr-10 select-active input-industry">
                  <option value="0">Industry</option>
                  <option value="1">Software</option>
                  <option value="2">Finance</option>
                  <option value="3">Recruting</option>
                  <option value="4">Management</option>
                  <option value="5">Advertising</option>
                  <option value="6">Development</option>
                </select>
              </div>
              <button class="btn btn-default btn-find font-sm" value="1" name="searchJobs">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-box overflow-visible mt-50 mb-50">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="text-center">
          <h1 class="color-brand-2"><span class="count">25</span><span> K+</span></h1>
          <h5>Completed Cases</h5>
          <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of<br class="d-none d-lg-block"> any business</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="text-center">
          <h1 class="color-brand-2"><span class="count">17</span><span> +</span></h1>
          <h5>Our Office</h5>
          <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="text-center">
          <h1 class="color-brand-2"><span class="count">86</span><span> +</span></h1>
          <h5>Skilled People</h5>
          <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="text-center">
          <h1 class="color-brand-2"><span class="count">28</span><span> +</span></h1>
          <h5>CHappy Clients</h5>
          <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-box mt-50 mb-30 bg-brand-2 pt-60 pb-60">
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <div class="pt-70">
          <h2 class="color-white mb-20">Explore the Marketplace</h2>
          <p class="color-white mb-30">Search and connect with the right candidates faster. Tell us what you’ve looking for and we’ll get to work for you.</p>
          <div class="mt-20"> <a class="btn btn-brand-1 btn-icon-more hover-up">Explore</a></div>
        </div>
      </div>
      <div class="col-xl-7">
        <div class="box-swiper mt-50 layout-brand-1">
          <div class="swiper-container swiper-group-3-explore mh-none swiper">
            <div class="swiper-wrapper pb-70 pt-5">
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('<?php mainUrl('/theme/assets/imgs/page/homepage4/img-big1.png') ?>')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">Marketing &amp; Sales</h6>
                        <p class="color-white font-xs"><span>123</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('<?php mainUrl('/theme/assets/imgs/page/homepage4/img-big2.png') ?>')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">Human resource</h6>
                        <p class="color-white font-xs"><span>154</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('<?php mainUrl('/theme/assets/imgs/page/homepage4/img-big3.png') ?>')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">Finance</h6>
                        <p class="color-white font-xs"><span>546</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('<?php mainUrl('/theme/assets/imgs/page/homepage4/img-big4.png') ?>')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">Market Research</h6>
                        <p class="color-white font-xs"><span>24</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('<?php mainUrl('/theme/assets/imgs/page/homepage4/img-big5.png') ?>')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">Furniture design</h6>
                        <p class="color-white font-xs"><span>54</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('<?php mainUrl('/theme/assets/imgs/page/homepage4/img-big6.png') ?>')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">Content writer</h6>
                        <p class="color-white font-xs"><span>87</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next swiper-button-next-1"></div>
          <div class="swiper-button-prev swiper-button-prev-1"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="section-box mt-50">
  <div class="section-box wow animate__animated animate__fadeIn">
    <div class="container">
      <div class="text-start">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Latest Jobs Post</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Explore the different types of available jobs to apply<br class="d-none d-lg-block">discover which is right for you.</p>
        <div class="list-tabs list-tabs-2 mt-30">
          <ul class="nav nav-tabs" role="tablist">
            <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/management.svg') ?>" alt="cyber"> Management</a></li>
            <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/marketing.svg') ?>" alt="cyber"> Marketing &amp; Sale</a></li>
            <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/finance.svg') ?>" alt="cyber"> Finance</a></li>
            <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/human.svg') ?>" alt="cyber"> Human Resource</a></li>
            <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/retail.svg') ?>" alt="cyber"> Retail &amp; Products</a></li>
            <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/content.svg') ?>" alt="cyber"> Content Writer</a></li>
            <li><a id="nav-tab-job-7" href="#tab-job-7" data-bs-toggle="tab" role="tab" aria-controls="tab-job-7" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/content.svg') ?>" alt="cyber"> Funiture Design</a></li>
            <li><a id="nav-tab-job-8" href="#tab-job-8" data-bs-toggle="tab" role="tab" aria-controls="tab-job-8" aria-selected="false"><img src="<?php mainUrl('/theme/assets/imgs/page/homepage1/content.svg') ?>" alt="cyber"> Other</a></li>
          </ul>
        </div>
      </div>
      <div class="mt-50">
        <div class="tab-content" id="myTabContent-1">
          <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS </a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS </a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word </a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS </a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS </a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-7" role="tabpanel" aria-labelledby="tab-job-7">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
          <div class="tab-pane fade" id="tab-job-8" role="tabpanel" aria-labelledby="tab-job-8">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img4.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img1.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Web Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img2.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img3.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img5.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                    <div class="image-box">
                      <figure><img src="<?php mainUrl('/theme/assets/imgs/page/homepage2/img6.png') ?>" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS </a>
                        </div>
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="section-box mt-50 mb-30 bg-border-3 pt-100 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"><img class="bdrd-10" src="<?php mainUrl('/theme/assets/imgs/page/homepage5/img-profile.png') ?>" alt="jobBox"></div>
      <div class="col-lg-6">
        <div class="pl-30">
          <h5 class="color-brand-2 mb-15 mt-15">Create Profile</h5>
          <h2 class="color-brand-1 mt-0 mb-15">Create Your Personal Account Profile</h2>
          <p class="font-lg color-text-paragraph-2">Work Profile is a personality assessment that measures an individual's work personality through their workplace traits, social and emotional traits; as well as the values and aspirations that drive them forward.</p>
          <div class="mt-20"><a class="btn btn-default">Create Profile</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-box mt-70 mb-40">
  <div class="container">
    <div class="text-start">
      <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">How It Works</h2>
      <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Just via some simple steps, you will find your ideal candidates you’r looking for!</p>
    </div>
    <div class="mt-70">
      <div class="row">
        <div class="col-lg-4">
          <div class="box-step step-1">
            <h1 class="number-element">1</h1>
            <h4 class="mb-20">Register an<br class="d-none d-lg-block">account to start</h4>
            <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-step step-2">
            <h1 class="number-element">2</h1>
            <h4 class="mb-20">Explore over<br class="d-none d-lg-block">thousands of resumes</h4>
            <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-step">
            <h1 class="number-element">3</h1>
            <h4 class="mb-20">Find the most<br class="d-none d-lg-block">suitable candidate</h4>
            <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-50 text-center"><a class="btn btn-default">Get Started</a></div>
  </div>
</section>
<section class="section-box mt-50 mb-20">
  <div class="container">
    <div class="box-newsletter box-newsletter-3">
      <div class="row">
        <div class="col-xl-12 text-center">
          <div class="d-inline-block">
            <h2 class="color-white mt-30">Subscribe our newsletter</h2>
            <p class="mt-10 font-lg color-white">New Things Will Always Update Regularl</p>
            <div class="box-form-newsletter mt-30">
              <form class="form-newsletter">
                <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>