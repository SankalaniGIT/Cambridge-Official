<?php require_once('../../../resources/layout/index.php') ?>
<?php

//Status
require('../../../helpers/status.php');


?>
<?php

  init_header('apply_online', ['http://localhost/cmb/resources/applications/applyOnline/css/application.css'], false);

?>

<?php 

require_once('../../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('Online application');

?>


</header>
<section class="onlineApplication">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                            <div id="application">
                                <div class="panel">
                                    <div class="panel-heading bg-info" style="text-align: left"><h5>STUDENTS
                                            DETAILS</h5></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-md-4"><label for="firstName">First Name <span style="color: red">(Required)</span></label>
                                                <input type="text" id="firstName" name="firstName"
                                                       class="form-control" placeholder="Enter Your First Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="middleName">Middle Name</label>
                                                <input type="text" id="middleName" name="middleName"
                                                       class="form-control"
                                                       placeholder="Enter Your Middle Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="lastName">Last Name <span style="color: red">(Required)</label>
                                                <input type="text" id="lastName" name="lastName"
                                                       class="form-control" placeholder="Enter Your Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="dob">Date Of Birth <span style="color: red">(Required)</label>
                                                <input type="text" id="dob" name="dob" class="form-control"
                                                       placeholder="Enter Your Date Of Birth">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gender">Gender <span style="color: red">(Required)</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="Null" selected>Select Your Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="nationality">Nationality <span style="color: red">(Required)</label>
                                                <input type="text" id="nationality" name="nationality"
                                                       class="form-control"
                                                       placeholder="Enter Your Nationality">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bPlace">Birth Place</label>
                                                <input type="text" id="bPlace" name="bPlace"
                                                       class="form-control"
                                                       placeholder="Enter Your Birth Place">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="religion">Religion <span style="color: red">(Required)</label>
                                                <select name="religion" id="religion" class="form-control">
                                                    <option value="Null" selected>Select Your Religion</option>
                                                    <option value="Buddhism">Buddhism</option>
                                                    <option value="Hinduism">Hinduism</option>
                                                    <option value="Christianity">Christianity</option>
                                                    <option value="Islam">Islam</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="language">Language <span style="color: red">(Required)</label>
                                                <select name="language" id="language" class="form-control">
                                                    <option value="Null" selected>Select Language</option>
                                                    <option value="Sinhalese">Sinhalese</option>
                                                    <option value="Tamil">Tamil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading bg-success" style="text-align: left;"><h5>CONTACT
                                            DETAILS</h5></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="address1">Address Line <span style="color: red">(Required)</label>
                                                <input type="text" id="address1" name="address1"
                                                       class="form-control"
                                                       placeholder="Enter Your Address Line 1">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address2">Address Line(Optional)</label>
                                                <input type="text" id="address2" name="address2"
                                                       class="form-control"
                                                       placeholder="Enter Your Address Line 2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="city">City <span style="color: red">(Required)</label>
                                                <input type="text" id="city" name="city" class="form-control"
                                                       placeholder="Enter Your City">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="state">State</label>
                                                <input type="text" id="state" name="state" class="form-control"
                                                       placeholder="Enter Your State">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="country">Country <span style="color: red">(Required)</label>
                                                <select name="country" id="country" class="form-control">
                                                    <option value="Null" selected>Select Your Country</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Deps">Antigua and Deps</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina">Burkina</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Central African Rep">Central African Rep</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="40">Congo {Democratic Rep}</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="80">Ireland {Republic}</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Ivory Coast">Ivory Coast</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea North">Korea North</option>
                                                    <option value="Korea South">Korea South</option>
                                                    <option value="Kosovo">Kosovo</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar, {Burma}">Myanmar, {Burma}</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Kitts and Nevis">St Kitts and Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                        and
                                                        the Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City">Vatican City</option>
                                                    <option value="Venezuea">Venezuea</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email">Email Address <span style="color: red">(Required)</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                       placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="landLine">LandLine Number <span style="color: red">(Required)</label>
                                                <input type="text" id="landLine" name="landLine"
                                                       class="form-control"
                                                       placeholder="Enter Your Land Line Number">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="mobile">Mobile Number <span style="color: red">(Required)</label>
                                                <input type="text" id="mobile" name="mobile"
                                                       class="form-control"
                                                       placeholder="Enter Your Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group submit">
                                        <button value="submit" class="btn btn-primary"
                                                onclick="validateApplication()">Submit
                                        </button>
                                    </div>
                                </div>
                                <div class="statusAlert">
                                    <div id="successAlert" class="hidden" role="alert">
                                        You have successfully submitted your application Thank
                                        You
                                    </div>
                                    <div id="failureAlert" class="hidden" role="alert">
                                        You couldn't send your application Retry Correcting
                                        Errors
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>

<?php
include('../../../helpers/database.class.php');
include('../../../helpers/copyright.php');

?>

<?php init_footer(['http://localhost/cmb/resources/applications/applyOnline/js/application.js']) ?>
