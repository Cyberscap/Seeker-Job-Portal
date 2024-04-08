<?php
include_once 'core/csDb.php';

function getJobs()
{
  $conn = openDatabaseConnection();
  // $userId = $_SESSION['userData']['UserID'];

  if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
    $userId = $_SESSION['userData']['UserID'];
    $sql = "SELECT Jobs.*, Users.*
    FROM Jobs 
    INNER JOIN Users ON Jobs.ProviderID = Users.UserID 
    LEFT JOIN Applications ON Jobs.JobID = Applications.JobID AND Applications.SeekerID = '$userId'
    WHERE Jobs.Status='Open' 
    AND Users.RoleID = 3 
    AND Applications.JobID IS NULL
    ORDER BY Jobs.JobID DESC";
  } else {
    $sql = "SELECT Jobs.*, Users.* FROM Jobs 
    INNER JOIN Users ON Jobs.ProviderID = Users.UserID 
    WHERE Jobs.Status='Open' AND Users.RoleID = 3 
    ORDER BY Jobs.JobID DESC";
  }
  $result = $conn->query($sql);
  $jobs = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $jobs[] = $row;
    }
  }
  closeDatabaseConnection($conn);
  return $jobs;
}

//search job by keyword function
function searchJobs($keyword)
{
  $conn = openDatabaseConnection();
  $sql = "SELECT Jobs.*, Users.* FROM Jobs 
      INNER JOIN Users ON Jobs.ProviderID = Users.UserID 
      WHERE Jobs.Status='Open' AND Users.RoleID = 3 AND Jobs.Title LIKE '%$keyword%' 
      ORDER BY Jobs.JobID DESC";
  $result = $conn->query($sql);
  $jobs = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $jobs[] = $row;
    }
  }
  closeDatabaseConnection($conn);
  return $jobs;
}

if (isset($_GET['searchJobs']) && $_GET['searchJobs'] == 1 && isset($_GET['keyword']) && !empty($_GET['keyword'])) {
  $keyword = htmlspecialchars($_GET['keyword']);
  $jobs = searchJobs($keyword);
} else {
  $jobs = getJobs();
}
// var_dump($jobs);
?>
<section class="section-box-2">
  <div class="container">
    <div class="banner-hero banner-single banner-single-bg">
      <div class="block-banner text-center">
        <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2"><?php echo count($jobs); ?> Jobs</span> Available Now</h3>
        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
        <div class="form-find text-start mt-40 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
          <form method="get" action="<?php mainUrl('?uri=jobs') ?>">
            <input hidden type="text" name="uri" value="jobs">
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
            <input class="form-input input-keysearch mr-10" type="text" name="keyword" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>" placeholder="Your keyword... ">
            <button class="btn btn-default btn-find font-sm" value="1" name="searchJobs">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-box mt-30">
  <div class="container">
    <div class="row flex-row-reverse">
      <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
        <div class="content-page">
          <div class="box-filters-job">
            <div class="row">
              <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing <strong>All </strong>of <strong><?php echo count($jobs); ?> </strong>jobs</span></div>
              <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                <div class="display-flex2">
                  <div class="box-border"><span class="text-sortby">Sort by:</span>
                    <div class="dropdown dropdown-sort">
                      <button class="btn dropdown-toggle" disabled id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                      <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                        <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                        <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                        <li><a class="dropdown-item" href="#">Rating Post</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="box-view-type"><a class="view-type" href="#"><img src="<?php mainUrl('/theme/assets/imgs/template/icons/icon-list.svg') ?>" alt="jobBox"></a><a class="view-type" href="#"><img src="<?php mainUrl('/theme/assets/imgs/template/icons/icon-grid-hover.svg') ?>" alt="jobBox"></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row display-list">
            <?php foreach ($jobs as $job) { ?>
              <div class="col-xl-12 col-12">
                <div class="card-grid-2 hover-up"><span class="flash"></span>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="card-grid-2-image-left">
                        <div class="image-box"><img src="https://api.dicebear.com/8.x/icons/svg?seed=<?php echo $job["ProviderID"]; ?>&radius=10&backgroundColor=80cbc4,80deea,81d4fa,90caf9,9fa8da,a5d6a7,b39ddb,c5e1a5,ce93d8,e6ee9c,ef9a9a,f48fb1,ffab91,ffcc80,ffe082,ffd5dc&backgroundType=solid,gradientLinear&randomizeIds=true" alt="jobBox"></div>
                        <div class="right-info"><a class="name-job" href=""><?php echo $job["Name"]; ?></a><span class="location-small">Colombo, LK</span></div>
                      </div>
                    </div>
                    <!-- <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                          <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                        </div> -->
                  </div>
                  <div class="card-block-info">
                    <h4><a href="#jobDit"><?php echo $job["Title"]; ?></a></h4>
                    <div class="mt-5">
                      <span class="card-briefcase"><?php echo $job["JobType"]; ?></span>
                      <span class="card-time"><?php echo timeString($job["PostDate"]); ?></span>
                    </div>
                    <p class="font-sm color-text-paragraph mt-10"><?php echo substr($job["Description"], 0, 122); ?>...</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-7 col-7"><span class="card-text-price">Rs <?php echo $job["Amount"]; ?></span><span class="text-muted">/Per Month</span></div>
                        <div class="col-lg-5 col-5 text-end">
                          <button class="btn btn-apply-now applyJob" id="<?php echo $job["JobID"]; ?>" <?php echo isset($_SESSION['role']) && $_SESSION['role'] != 2 ? 'disabled' : '' ?>>Apply now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>
        <!-- <div class="paginations">
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
              </div> -->
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="sidebar-shadow none-shadow mb-30">
          <div class="sidebar-filters">
            <div class="filter-block head-border mb-30">
              <h5>Advance Filter <a class="link-reset" href="#">Reset</a></h5>
            </div>
            <div class="filter-block mb-30">
              <div class="form-group select-style select-style-icon">
                <select class="form-control form-icons select-active">
                  <option selected>Sri Lanka, LK</option>
                </select><i class="fi-rr-marker"></i>
              </div>
            </div>
            <div class="filter-block mb-20">
              <h5 class="medium-heading mb-15">Industry</h5>
              <div class="form-group">
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                    </label><span class="number-item">180</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Software</span><span class="checkmark"></span>
                    </label><span class="number-item">12</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Finance</span><span class="checkmark"></span>
                    </label><span class="number-item">23</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Recruting</span><span class="checkmark"></span>
                    </label><span class="number-item">43</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Management</span><span class="checkmark"></span>
                    </label><span class="number-item">65</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Advertising</span><span class="checkmark"></span>
                    </label><span class="number-item">76</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="filter-block mb-30">
              <h5 class="medium-heading mb-10">Popular Keyword</h5>
              <div class="form-group">
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">Software</span><span class="checkmark"></span>
                    </label><span class="number-item">24</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Developer</span><span class="checkmark"></span>
                    </label><span class="number-item">45</span>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Web</span><span class="checkmark"></span>
                    </label><span class="number-item">57</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>