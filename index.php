<?php 
session_start();
$_SESSION['cc']= 1;
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cell Central - Top Cellphone Rental and SIM in Los Angeles</title>
        <meta name="description" content="">
        <meta name="description" content="Tour Transport - Your tour! your convenience!">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Hind|Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="fav icon" type="image/x-icon" href="favicon.ico?" />

        <!-- Icons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="all" rel="stylesheet" type="text/css">


        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/daterangepicker.min.css">
        <script type="text/javascript" src="js/vendor/moment.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/vendor/jquery.daterangepicker.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script> 
    </head>
    <body>
        <noscript>Your browser does not support JavaScript!</noscript>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="ccontainer"> 
            <form id="tourForm" class="ccontainer" action="values_receiver.php" method="post">
                <div id="summary-container">
                    <div id="cover-summary">
                        <!-- TOOLBAR COVER -->
                        <div id="toolbar-cover">
                            <div class="open-left" data-activates="left-sidebar-slide-out">
                              <i class="ion-android-menu"></i>
                            </div>
                            <h1 class="ctitle">Cell Central</h1>
                            <div class="open-right" data-activates="right-sidebar-slide-out">
                              <i class="ion-information-circled"></i>
                            </div>
                        </div>
                        <!-- END OF TOOLBAR COVER -->

                        <div id="cover-flexes" class="cover-flexes">
                            <div class="flex3">
                                <div class="city-booking-overlay"></div>
                                <div class="city-booking-container">
                                    <div class="col s12">
                                        <label>City</label>
                                        <select name="city" class="browser-default">
                                            <option value="0" selected>Los Angeles</option>
                                        </select>
                                    </div>
                                    <div class="col s12">
                                        <label>Get a SIM</label>
                                        <select id="simCount" name="simCount" class="browser-default">
                                            <option selected disabled>-- Select quantity --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col s12">
                                        <ul id="simAccordion" class="hidden">
                                            <li id="simListAccordion">
                                                <div class="collapsible-header">
                                                    <label class="oneEm addphone" for="phone1Box">Add Phone for SIM</label>
                                                </div>
                                                <div class="collapsible-body">
                                                    <span>
                                                        <i class="material-icons">phone_iphone</i>
                                                        <input class="radio-red" name="phone1Group" type="radio" id="iphone1Select" value="iphoneSelect" checked />
                                                        <label class="oneEm" for="iphone1Select">iPhone</label>
                                                        <input class="radio-red" name="phone1Group" type="radio" id="android1Select" value="androidSelect"/>
                                                        <label class="oneEm" for="android1Select">Android</label>
                                                    </span>
                                                    <input type="checkbox" class="filled-in checkbox-red" id="phone1Box" checked/>
                                                    <label class="phoneBox" for="phone1Box">&nbsp;</label>
                                                </div>
                                                <div class="collapsible-body">
                                                    <span>
                                                        <i class="material-icons">phone_iphone</i>
                                                        <input class="radio-red" name="phone2Group" type="radio" id="iphone2Select" value="iphoneSelect" checked />
                                                        <label class="oneEm" for="iphone2Select">iPhone</label>
                                                        <input class="radio-red" name="phone2Group" type="radio" id="android2Select" value="androidSelect"/>
                                                        <label class="oneEm" for="android2Select">Android</label>
                                                    </span>
                                                    <input type="checkbox" class="filled-in checkbox-red" id="phone2Box" checked/>
                                                    <label class="phoneBox" for="phone2Box">&nbsp;</label>
                                                </div>
                                                <div class="collapsible-body">
                                                    <span>
                                                        <i class="material-icons">phone_iphone</i>
                                                        <input class="radio-red" name="phone3Group" type="radio" id="iphone3Select" value="iphoneSelect" checked />
                                                        <label class="oneEm" for="iphone3Select">iPhone</label>
                                                        <input class="radio-red" name="phone3Group" type="radio" id="android3Select" value="androidSelect"/>
                                                        <label class="oneEm" for="android3Select">Android</label>
                                                    </span>
                                                    <input type="checkbox" class="filled-in checkbox-red" id="phone3Box" checked/>
                                                    <label class="phoneBox" for="phone3Box">&nbsp;</label>
                                                </div>
                                                <div class="collapsible-body">
                                                    <span>
                                                        <i class="material-icons">phone_iphone</i>
                                                        <input class="radio-red" name="phone4Group" type="radio" id="iphone4Select" value="iphoneSelect" checked />
                                                        <label class="oneEm" for="iphone4Select">iPhone</label>
                                                        <input class="radio-red" name="phone4Group" type="radio" id="android4Select" value="androidSelect"/>
                                                        <label class="oneEm" for="android4Select">Android</label>
                                                    </span>
                                                    <input type="checkbox" class="filled-in checkbox-red" id="phone4Box" checked/>
                                                    <label class="phoneBox" for="phone4Box">&nbsp;</label>
                                                </div>
                                                <div class="collapsible-body">
                                                    <span>
                                                        <i class="material-icons">phone_iphone</i>
                                                        <input class="radio-red" name="phone5Group" type="radio" id="iphone5Select" value="iphoneSelect" checked />
                                                        <label class="oneEm" for="iphone5Select">iPhone</label>
                                                        <input class="radio-red" name="phone5Group" type="radio" id="android5Select" value="androidSelect"/>
                                                        <label class="oneEm" for="android5Select">Android</label>
                                                    </span>
                                                    <input type="checkbox" class="filled-in checkbox-red" id="phone5Box" checked/>
                                                    <label class="phoneBox" for="phone5Box">&nbsp;</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>   
                                    <div class="col s12">
                                        <label for="pickupDate" class="active">Rental Dates</label>
                                        <div class="inline-flex">
                                            <input type="text" name="rentDate" value="" id="pickupDate" class="browser-default pickupDate" required/>
                                            <input type="text" name="returnDate" value="" id="toDate" class="browser-default pickupDate" required/>
                                        </div>
                                    </div>
                                    <div class="book-button">
                                        <button  type="button" class="font-medium waves-effect btn waves-light red accent-4 block animated bouncein delay-6"> 
                                            BOOK NOW<i class="material-icons right">location_on</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex2 hide-on-small-only">
                                <div class="cover-info-overlay"></div>
                                <div class="city-booking-container">
                                    <h2>Easiest and most convenient way to rent a SIM and smart phone in the US!</h2>
                                    <p></p>
                                    <p class="paragraph">
                                        We provide you affordable, unlimited call and text including 4GB of data a month. All starting at $29.99.
                                    </p>
                                    <p class="paragraph">
                                        Having problems with paying an expensive GPS device? Constantly looking for a wi-fi hotspots? Or simply making your cellphone an open line 
                                        that works with a SIM in the US? Worry no more because we've got you covered.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div id="form-container">
                    <!-- toolbar -->
                    <div id="toolbar" class="primary-bg-color z-depth-1">
                        <div class="open-left" data-activates="left-sidebar-slide-out">
                            <i class="ion-android-menu"></i>
                        </div>
                        <h1 class="ctitle">Cell Central</h1>
                        <div class="summary-slide-down" onclick="smoothScrollToTop()">
                            <i class="ion-chevron-down"></i>
                        </div>
                    </div>
                    <!-- end of toolbar -->
                    <div class="booking-container">
                        <div class="cheaders">
                            <h2 class="toppest-title">Booking Information</h2>
                        </div>
                        <div class="flexes">
                            <div class="flex1">
                                <div class="input-field animated fadeInUp">
                                  <input id="firstName" name="firstName" type="text" class="validate" required/>
                                  <label for="firstName">First Name*</label>
                                </div>
                            </div>
                            <div class="flex1"> 
                                <div class="input-field animated fadeInUp">
                                    <input id="lastName" name="lastName" type="text" class="validate" required/>
                                    <label for="lastName">Last Name*</label>
                                </div>
                            </div>
                        </div>
                        <div class="flexes">
                            <div class="flex1">
                                <div class="input-field animated fadeInUp">
                                    <select name="ageRange" required>
                                        <option value="0" selected>46+</option>
                                        <option value="1">36-45</option>
                                        <option value="2">26-35</option>
                                        <option value="3">18-25</option>
                                    </select>
                                    <label class="active">Age*</label>
                                </div>
                            </div>
                            <div class="flex1">
                                <div class="input-field animated fadeInUp">
                                    <select name ="nationality" required>
                                        <option value="" selected>- select one -</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
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
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
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
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
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
                                        <option value="FK">Falkland Islands (Malvinas)</option>
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
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
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
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
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
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>   
                                    <label class="active">Nationality*</label>                            
                                </div>
                            </div>  
                        </div>

                        <div class="cheaders">
                            <h4>U.S. Mailing Address</h4>
                            <span class="cdescription">Please make sure you input the correct mailing address. We will send the 
                                merchandise to this address.</span>
                        </div>
                        <div class="flexes">
                            <div class="flex1">
                                <div class="input-field animated fadeInUp delay-2">
                                    <input id="address1" name="address1" type="text" class="validate" required/>
                                    <label for="address1">Address 1*</label>
                                </div>
                            </div>
                            <div class="flex1">
                                <div class="input-field animated fadeInUp delay-2">
                                    <input id="address2" name="address2" type="text"/>
                                    <label for="address2">Address 2</label>
                                </div>
                            </div>
                        </div>

                        <div class="flexes">
                            <div class="flex1">
                                <div class="input-field animated fadeInUp delay-2">
                                    <input id="cityAddress" name="cityMail" type="text" class="validate" required/>
                                    <label for="cityAddress">City*</label>
                                </div>
                            </div>
                            <div class="flex1">
                                <div class="input-field animated fadeInUp delay-2">
                                    <input id="stateAddress" name="stateMail" type="text" class="validate" 
                                        value="California" required/>
                                    <label for="stateAddress">State*</label>
                                </div>
                            </div>
                            <div class="flex1">
                                <div class="input-field animated fadeInUp delay-2">
                                    <input id="zipCode" name="zipcodeMail" type="text" class="validate" required/>
                                    <label for="zipCode">Zip Code</label>
                                </div>
                            </div>
                            <div class="flex1">
                                <div class="input-field animated fadeInUp delay-4">
                                    <input id="countryAddress" name="countryMail" type="text" class="validate" 
                                        value="United States" required/>
                                    <label for="countryAddress" class="active">Country</label>
                                </div>  
                            </div>
                        </div>

                        <div class="flexes">
                            <div class="termsAgree">
                                <input type="checkbox" class="filled-in checkbox-red" id="agreeBox" required/>
                                <label for="agreeBox">I agree to the <a target="_blank" href="terms.php">Terms and Conditions</a></label>
                            </div>
                        </div>

                        <div class="next-button">
                            <input class="font-large waves-effect waves-light btn-large red accent-4 block animated bouncein delay-6" type="submit" value="GO">
                        </div>

                        <!-- footer -->
                        <div class="footer z-depth-1">
                            <div class="footer-icons">
                                <!-- <i class="ion-social-facebook"></i>
                                <i class="ion-social-pinterest"></i>
                                <i class="ion-social-instagram"></i>
                                <i class="ion-social-linkedin"></i>
                                <i class="ion-social-googleplus"></i>
                                <i class="ion-social-twitter"></i>
                                <i class="ion-social-github"></i> -->
                            </div>
                            <div class="copyrights">
                                <p>Copyrights &copy 2017. All rights reserved.</p> &nbsp;| <a target="_blank" href="terms.php">Terms and Conditions</a>
                            </div>
                        </div>
                        <!-- end of footer -->
                    </div>
                </div>
            </form>

            <!-- Sidebars -->
              <!-- Left Sidebar -->
              <ul id="left-sidebar-slide-out" class="side-nav collapsible">
                <div class="sidebar-toppest"></div>
                <li>
                  <a href="#" class="navi waves-effect"><i class="ion-android-home"></i> Rent a Phone</a>
                </li>
                <li>
                  <a href="contact.html" class="navi waves-effect"><i class="ion-bookmark"></i> Contact Us</a>
                </li>
              </ul>
              <!-- End of Left Sidebar -->  

              <!--Start of Right Sidebar -->
              <div id="right-sidebar-slide-out" class="side-nav collapsible">
                <div class="close-right">
                    <a id="close-right-sidebar" href="#" data-activates="right-sidebar-slide-out" class="button-collapse">
                        <i class="ion-ios-close"></i>
                    </a>
                </div>
                <div class="info-content">
                    <h5>Information
                        <i class="ion-information-circled"></i>
                    </h5>
                </div>
              </div>
              <!-- End of Right Sidebar -->    
            </div>
            <!-- End of Main Container -->
        </div>
        <script src="js/plugins.js"></script>
        <script src="js/vendor/materialize.min.js"></script>
        <script src="js/main.js"></script>
    

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
