<?php
require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary() || User::is_visitor()){ redirect_to('index.php');}

?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Advanced Form Elements</title>

    <link href="<?php echo $Nav->path_public;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $Nav->path_public;?>css/style.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper1">


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-5">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Knob input <small>http://anthonyterrien.com/knob/</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <h3>
                            Knob - Dial
                        </h3>
                        <p>
                            Easily create knob input style.
                        </p>
                        <div class="text-center">
                            <small>Simple knob example</small><br/><br/>
                            <div class="m-r-md inline">
                            <input type="text" value="75" class="dial m-r-sm" data-fgColor="#1AB394" data-width="85" data-height="85" />
                            </div>
                            <div class="m-r-md inline">
                            <input type="text" value="25" class="dial m-r" data-fgColor="#1AB394" data-width="85" data-height="85"/>
                            </div>
                            <div class="m-r-md inline">
                            <input type="text" value="50" class="dial m-r" data-fgColor="#1AB394" data-width="85" data-height="85"/>
                            </div>
                        </div>
                        <div class="text-center">
                            <small>Dynamic knob example</small><br/><br/>
                            <div class="m-r-md inline">
                            <input type="text" value="75" class="dial m-r-sm" data-fgColor="#ED5565" data-width="85" data-height="85" data-cursor=true data-thickness=.3/>
                            </div>
                            <div class="m-r-md inline">
                            <input type="text" value="25" class="dial m-r" data-fgColor="#ED5565" data-width="85" data-height="85" data-step="1000" data-min="-15000" data-max="15000" data-displayPrevious=true/>
                            </div>
                            <div class="m-r-md inline">
                            <input type="text" value="60" class="dial m-r" data-fgColor="#ED5565" data-width="85" data-height="85" data-angleOffset=-125 data-angleArc=250 />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Chosen select <small>http://harvesthq.github.io/chosen/</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                <p>
                    With chosen select user can  choose from large in select input.
                </p>
                <div class="form-group">
                <label class="font-noraml">Basic example</label>
                <div class="input-group">
                <select data-placeholder="Choose a Country..." class="chosen-select" style="width:350px;" tabindex="2">
                <option value="">Select</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
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
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthelemy">Saint Barthelemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="font-noraml">Multi select</label>
                <div class="input-group">
                <select data-placeholder="Choose a Country..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                <option value="">Select</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
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
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option selected value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option selected value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthelemy">Saint Barthelemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                </div>

                </div>
                </div>

            </div>
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Range Slider <small>https://github.com/IonDen/ion.rangeSlider</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Sliders
                            </h3>
                            <p>
                                Are perfect for range select option.
                            </p>
                            <div class="m-b-sm">
                                <small ><strong>Example of:</strong> Set diapason from 0 to 5000, Adding postfix "+" to max value, Set slider type to double, Dollar symbol as prefix, Enable grid  </small>
                            </div>
                            <div id="ionrange_1"></div>

                            <div class="m-b-sm m-t">
                                <small ><strong>Example of:</strong> Set diapason from 0 to 10, Set fractional step value: 0.1, Enable grid  </small>
                            </div>
                            <div id="ionrange_2"></div>

                            <div class="m-b-sm m-t">
                                <small ><strong>Example of:</strong> Set diapason from -50 to +50, Set FROM value to 0, Add degree symbol as postfix  </small>
                            </div>
                            <div id="ionrange_3"></div>

                            <div class="m-b-sm m-t">
                                <small ><strong>Example of:</strong>Change common slider numbers to custom (Month names). Using values array for that. Array can be any length, Slider will change min and max number automaticaly to fit values array length, Step parameter also will be changed to one, to allow to choose items in values array </small>
                            </div>
                            <div id="ionrange_4"></div>

                            <div>
                            <a class="btn btn-white pull-right btn-sm" href="https://github.com/IonDen/ion.rangeSlider" target="_blank">Read about API</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>TouchSpin <small>http://www.virtuosoft.eu/code/bootstrap-touchspin/</small></h5>
                        </div>
                        <div class="ibox-content">
                            <p>
                                A mobile and touch friendly input spinner component for Bootstrap 3. It supports the mousewheel and the up/down keys.
                            </p>

                            <div class="row">
                                <div class="col-md-4">

                                    <p class="font-bold">
                                        Basic example with empty value
                                    </p>

                                    <input class="touchspin1" type="text" value="" name="demo1">
                                </div>
                                <div class="col-md-4">
                                    <p class="font-bold">
                                        Example with postfix
                                    </p>
                                    <input class="touchspin2" type="text" value="55" name="demo2">
                                </div>
                                <div class="col-md-4">

                                    <p class="font-bold">
                                        Example with vertical button alignment:
                                    </p>
                                    <input class="touchspin3" type="text" value="" name="demo3">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Select2 <small>https://select2.github.io/</small></h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-4">
                                    <p>
                                        Select2 is a jQuery based replacement for select boxes. It can take a regular select box and turn it into:
                                    </p>
                                    <select class="select2_demo_1 form-control">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <p>
                                        A placeholder value can be defined and will be displayed until a selection is made.
                                    </p>
                                    <select class="select2_demo_3 form-control">
                                        <option></option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <p>
                                        Select2 also supports multi-value select boxes. The select below is declared with the multiple attribute.
                                    </p>
                                    <select class="select2_demo_2 form-control" multiple="multiple">
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Range Slider <small>http://refreshless.com/nouislider/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Range Slider
                            </h3>
                            <p>
                                Simple and clean range select slider.
                            </p>
                            <div class="row m-b-lg">
                                <div class="col-lg-12">
                                    <div id="drag-fixed" class="slider_red"></div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-bold">Basic example</p>
                                    <div id="basic_slider"></div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="font-bold">Range select example</p>
                                    <div id="range_slider"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-5">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Picker <small>https://github.com/eternicode/bootstrap-datepicker</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Data picker
                            </h3>
                            <p>
                                Simple and easy select a time for a text input using your mouse.
                            </p>

                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Simple data input format</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_2">
                                <label class="font-noraml">One Year view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="08/09/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_3">
                                <label class="font-noraml">Decade view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                </div>
                            </div>

                            <div class="form-group" id="data_4">
                                <label class="font-noraml">Month select</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_5">
                                <label class="font-noraml">Range select</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>ClockPicker <small>http://weareoutman.github.io/clockpicker/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                ClockPicker
                            </h3>
                            <p>
                                A clock-style timepicker for Bootstrap (or jQuery).
                            </p>

                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" class="form-control" value="09:30" >
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Date Range Picker <small>http://www.daterangepicker.com/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Date Range Picker
                            </h3>
                            <p>
                                A JavaScript widget for choosing date ranges.
                                Designed to work with the Bootstrap CSS framework.
                            </p>
                            <h4>Minimal example</h4>
                            <p>
                                The Date Range Picker is attached to a text input. It will use the current value of the input to initialize, and update the input if new dates are chosen.
                            </p>
                            <input class="form-control" type="text" name="daterange" value="01/01/2015 - 01/31/2015" />

                            <h4>All options example</h4>
                            <div id="reportrange" class="form-control">
                                <i class="fa fa-calendar"></i>
                                <span></span> <b class="caret"></b>
                            </div>
                        </div>
                    </div>

                    <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                        <h5>Color picker <small>http://mjolnic.github.io/bootstrap-colorpicker/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Colorpicker
                            </h3>
                            <p>
                                Colorpicker plugin for the Twitter Bootstrap toolkit.
                            </p>

                            <h5>As normal input</h5>
                            <input type="text" class="form-control demo1" value="#5367ce" />
                            <h5>As a link</h5>
                            <a data-color="rgb(255, 255, 255)" id="demo_apidemo" class="btn small demo colorpicker-element" href="#">Change background color</a>
                            <br/>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Input Mask <small>http://jasny.github.io/bootstrap/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Input Mask
                            </h3>
                            <p>
                                Input masks allows a user to more easily enter data where you would like them to enter the data in a certain format.
                            </p>
                            <form class="form-horizontal m-t-md" action="#">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">ISBN 1</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="">
                                        <span class="help-block">999-99-999-9999-9</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ISBN 2</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="999 99 999 9999 9" placeholder="">
                                        <span class="help-block">999 99 999 9999 9</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ISBN 3</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="999/99/999/9999/9" placeholder="">
                                        <span class="help-block">999/99/999/9999/9</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">IPV4</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="">
                                        <span class="help-block">192.168.100.200</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tax ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="99-9999999" placeholder="">
                                        <span class="help-block">99-9999999</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="">
                                        <span class="help-block">(999) 999-9999</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Currency</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="$ 999,999,999.99" placeholder="">
                                        <span class="help-block">$ 999,999,999.99</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="">
                                        <span class="help-block">dd/mm/yyyy</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Switcher <small>http://abpetkov.github.io/switchery/</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Switcher
                            </h3>
                            <p>
                                Is iOS 7 style switches for your checkboxes.
                            </p>
                            <input type="checkbox" class="js-switch" checked />
                            <input type="checkbox" class="js-switch_2" checked />
                            <br/>
                            <br/>
                            <input type="checkbox" class="js-switch_3"  />
                        </div>
                    </div>

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Custom switch </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h4>
                                Custom switch
                            </h4>
                            <p>
                                Pure CSS3 On/Off flipswitches with animated transitions.
                            </p>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title  back-change">
                        <h5>Image cropper <small>http://fengyuanchen.github.io/cropper/</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p>
                            A simple jQuery image cropping plugin.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-crop">
                                    <img src="img/p3.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Preview image</h4>
                                <div class="img-preview img-preview-sm"></div>
                                <h4>Comon method</h4>
                                <p>
                                    You can upload new image to crop container and easy download new cropped image.
                                </p>
                                <div class="btn-group">
                                    <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                        <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                        Upload new image
                                    </label>
                                    <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                </div>
                                <h4>Other method</h4>
                                <p>
                                    You may set cropper options with <code>$(image}).cropper(options)</code>
                                </p>
                                <div class="btn-group">
                                    <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                    <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                    <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                    <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                    <button class="btn btn-warning" id="setDrag" type="button">New crop</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                            <h5>Awesome bootstrap checkbox</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Basic
                                        </h3>
                                        <p>
                                            Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Default
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked="">
                                            <label for="checkbox2">
                                                Primary
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Success
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                Info
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox" checked="">
                                            <label for="checkbox5">
                                                Warning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox6" type="checkbox" checked="">
                                            <label for="checkbox6">
                                                Check me out
                                            </label>
                                        </div>
                                        <p>Checkboxes without label text</p>
                                        <div class="checkbox">
                                            <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                            <label></label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="singleCheckbox2" value="option2" checked="" aria-label="Single checkbox Two">
                                            <label></label>
                                        </div>
                                        <p>Inline checkboxes</p>
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label for="inlineCheckbox1"> Inline One </label>
                                        </div>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                            <label for="inlineCheckbox2"> Inline Two </label>
                                        </div>
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3"> Inline Three </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Circled
                                        </h3>
                                        <p>
                                            <code>.checkbox-circle</code> for roundness.
                                        </p>
                                        <div class="checkbox checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                Simply Rounded
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="checkbox8" type="checkbox" checked="">
                                            <label for="checkbox8">
                                                Me too
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Radio
                                        </h3>
                                        <p>
                                            Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                    <label for="radio1">
                                                        Small
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2">
                                                        Big
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                                    <label for="radio3">
                                                        Next
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                    <label for="radio4">
                                                        One
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Radios without label text</p>
                                        <div class="radio">
                                            <input type="radio" id="singleRadio1" value="option1" name="radioSingle1" aria-label="Single radio One">
                                            <label></label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="radio" id="singleRadio2" value="option2" name="radioSingle1" checked="" aria-label="Single radio Two">
                                            <label></label>
                                        </div>
                                        <p>Inline radios</p>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Inline One </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> Inline Two </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
                    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo $Nav->path_public;?>js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
<!--    <script src="--><?php //echo $Nav->path_public;?><!--js/inspinia.js"></script>-->
    <script src="<?php echo $Nav->path_public;?>js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo $Nav->path_public;?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="<?php echo $Nav->path_public;?>js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="<?php echo $Nav->path_public;?>js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="<?php echo $Nav->path_public;?>js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="<?php echo $Nav->path_public;?>js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="<?php echo $Nav->path_public;?>js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="<?php echo $Nav->path_public;?>js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                };
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>

</body>

</html>
