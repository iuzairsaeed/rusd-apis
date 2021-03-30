@extends('layouts.master')
@section('content')
<div class="container-fluid h-100vh">
   <div class="row h-100">
      <div class="col-sm-5 cover pt-6 pb-6 bg-100 text-center shadow-lg h-sm-322px" style="background-image: url('images/assets/login/asset34.png')">
         <img src="images/assets/login/asset33.png" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
      </div>
      <div class="stepwizard d-none">
         <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
               <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
               <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
               <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
               <p>Step 3</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               <p>Step 4</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               <p>Step 5</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               <p>Step 6</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               <p>Step 7</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               <p>Step 8</p>
            </div>
            <div class="stepwizard-step">
               <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               <p>Step 9</p>
            </div>
         </div>
      </div>
      <div class="col-md-7 pl-md-5 pr-md-5 pt-5 pb-4">
         <form method="POST" action="">
            <!-- Contact -->
            <div class="setup-content" id="step-1">
               <div class="col-sm-12 pl-4 pr-4">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-sm-1 col-1"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 p-0 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Contact Information </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont">Salutations</label>
                     <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="solutation" required>
                        <option>Select</option>
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Ms.</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">First Name</label>
                     <input id="name" type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 @error('name') is-invalid @enderror lineheight2px col-sm-12 lightblackcolor" name="name" value="{{ old('name') }}" placeholder="First Name" required autocomplete="name" autofocus>
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Middle Name</label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" placeholder="Middle Name" name="middle" required>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Last Name</label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="last" placeholder="Last Name" required>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Date of Birth</label>
                     <input type="date" id="date" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 lightblackcolor" name="date_birth" required>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Mobile</label>
                     <input type="number" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 lightblackcolor" pattern="^\d{4}-\d{3}-\d{4}$" name="phone_residence" placeholder="+966" required="required">
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Email</label>
                     <input id="email" type="email" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" required>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-sm-12 d-flex mb-5" style="flex-wrap: wrap;">
                  <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-5 mb-4 fontsize25px">Security Questions</h3>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question One</label>
                     <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" required>
                        <option>Choose One</option>
                        <option>What is Your Favourite Color</option>
                        <option>What is Your Nick Name?</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question Two</label>
                     <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon">
                        <option>Choose One</option>
                        <option>What is Your First Car?</option>
                        <option>Who was Your First Employee?</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question Three</label>
                     <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon">
                        <option>Choose One</option>
                        <option>What was the first concert you attended?</option>
                        <option>In What city was Your father born?</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-12 mt-5 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover"> Next </button>
               </div>
            </div>
            <!-- Contact -->
            <!-- Citizenship Details -->
            <div class="setup-content" id="step-2">
               <div class="col-sm-12 pl-1 pr-1">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-sm-1 col-1"> <a href=""><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Citizenship Details</h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="images/assets/signup/Asset12.png" width="32"></a>
                     </div>
                  </div>
                  <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                     <div class="col-sm-4 pl-1 pr-1 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Country </label>
                        <select name="country" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px selecticon">
                           <option>Select</option>
                           <option value="Afganistan">Afghanistan</option>
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
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bonaire">Bonaire</option>
                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Canary Islands">Canary Islands</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Channel Islands">Channel Islands</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos Island">Cocos Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote DIvoire">Cote DIvoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Curaco">Curacao</option>
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
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Ter">French Southern Ter</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Great Britain">Great Britain</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="India">India</option>
                           <option value="Iran">Iran</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea North">Korea North</option>
                           <option value="Korea Sout">Korea South</option>
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
                           <option value="Macau">Macau</option>
                           <option value="Macedonia">Macedonia</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Midway Islands">Midway Islands</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Nambia">Nambia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherland Antilles">Netherland Antilles</option>
                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                           <option value="Nevis">Nevis</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau Island">Palau Island</option>
                           <option value="Palestine">Palestine</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Phillipines">Philippines</option>
                           <option value="Pitcairn Island">Pitcairn Island</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                           <option value="Republic of Serbia">Republic of Serbia</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="St Barthelemy">St Barthelemy</option>
                           <option value="St Eustatius">St Eustatius</option>
                           <option value="St Helena">St Helena</option>
                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                           <option value="St Lucia">St Lucia</option>
                           <option value="St Maarten">St Maarten</option>
                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                           <option value="Saipan">Saipan</option>
                           <option value="Samoa">Samoa</option>
                           <option value="Samoa American">Samoa American</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
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
                           <option value="Tahiti">Tahiti</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania">Tanzania</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Erimates">United Arab Emirates</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uraguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Vatican City State">Vatican City State</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Vietnam">Vietnam</option>
                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                           <option value="Wake Island">Wake Island</option>
                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zaire">Zaire</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        Phone Number 
                        </label>
                        <input type="tel" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" pattern="^\d{4}-\d{3}-\d{4}$" required name="phone" value="966">
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Document Type </label>
                        <select name="country" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px selecticon" required>
                           <option>Choose One</option>
                           <option>Driving licence</option>
                           <option>National Identity Card</option>
                           <option>Passport</option>
                        </select>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Document Name</label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="document_no" placeholder="Document Name" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-0 mt-3 form-group">
                        <label class="text-capitalize fontsize12px greycolor helveticafont col-sm-12 p-0">
                        Country of Issuance (rearranged seq) </label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="country_issuance" placeholder="Country of Issuance" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-0 mt-3 form-group hide-number">
                        <label class="text-capitalize fontsize12px greycolor helveticafont col-sm-12 p-0">
                        Other Number </label>
                        <input type="number" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="other_num" placeholder="Other Document">
                     </div>
                     <div class="col-sm-4 pl-1 pr-0 mt-3 form-group hide-citizen">
                        <label class="text-capitalize fontsize12px greycolor helveticafont col-sm-12 p-0">
                        Citizenship </label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="citizen" placeholder="Citizenship">
                     </div>
                     <div class="col-sm-12 p-0 d-flex flex-wrap">
                        <div class="col-sm-6 pl-1 pr-1 mt-1">
                           <a href="javascript:void(0)" class="bg-transparent border-0 outlinenone shadow-none p-0 more-number"> <label class="fontsize13px greycolor"><img src="images/assets/signup/Asset10.png" width="22" height="22" class="p-1 rounded-circle mr-3" style="border: 1px solid #6d6d6d;"> Add Another Number </label></a>
                        </div>
                        <div class="col-sm-6 pl-1 pr-1 mt-1">
                           <a href="javascript:void(0)" class="bg-transparent border-0 outlinenone shadow-none p-0 add-citizen"> 
                            <label class="fontsize13px greycolor"><img src="images/assets/signup/Asset10.png" width="22" height="22" class="p-1 rounded-circle mr-3" style="border: 1px solid #6d6d6d;"> Add Citizenship </label></a>
                        </div>
                     </div>
                     <div class="col-sm-6 pl-1 pr-1 mt-1">
                        <label class="check-mark fontsize13px greycolor">I also have a different Country of Citizenship
                        <input type="checkbox" name="country_citizenship">
                        <span class="checkmark"></span>
                        </label>
                     </div>
                     <div class="col-sm-6 pl-1 pr-1 mt-1">
                        <label class="check-mark fontsize13px greycolor">Enter all countries for which you are a full citizen
                        <input type="checkbox" name="countries_full">
                        <span class="checkmark"></span>
                        </label>
                     </div>
                  </div>
                  <div class="col-sm-12 d-flex mb-5" style="flex-wrap: wrap;">
                     <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-5 mb-4 fontsize25px">Residency Details</h3>
                     <div class="col-sm-4 pl-1 pr-1 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        Addressed </label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" placeholder="Address" name="address" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        PO Box </label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="pobox" placeholder="PO Box" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        Zip/Postal Code </label>
                        <input type="number" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 height50px lineheight2px col-sm-12 lightblackcolor" name="zipcode" placeholder="Zip Code" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        City</label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="city_residence" placeholder="City" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        Country</label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="country_residence" placeholder="Country" required>
                     </div>
                     <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        Phone Number</label>
                        <input type="tel" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" pattern="^\d{4}-\d{3}-\d{4}$" name="phone_residence" value="966" required>
                     </div>
                  </div>
                  <div class="col-md-12 mt-2 text-center d-inline-block">
                     <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover"> Next </button>
                  </div>
    
               </div>
            </div>
            <!-- Citizenship Details -->
            <!-- Employment  -->
            <div class="setup-content" id="step-3">
               <div class="col-sm-12 pl-4 pr-4">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-sm-1 col-1"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Employment </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont">Employment Status</label>
                     <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="employee" required>
                        <option>Select</option>
                        <option>Employed(Full-time)</option>
                        <option>Employed(Part-time)</option>
                        <option>Self Employed</option>
                        <option>Retired</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Employeer Name</label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-4 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" placeholder="Employeer Name" name="employee_name">
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Occupation </label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" placeholder="Occupation" name="occupation">
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Country </label>
                     <select name="country" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px selecticon">
                        <option>Select</option>
                        <option value="Afganistan">Afghanistan</option>
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
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
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
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
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
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
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
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Addressed </label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" placeholder="Address" name="address" required>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     City
                     </label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 height50px" placeholder="City" name="city">
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     State/Province </label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 height50px lineheight2px col-sm-12" placeholder="State/Province" name="state">
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Zip/Postal Code </label>
                     <input type="number" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 height50px" placeholder="Zip Code" name="zipcode">
                  </div>
               </div>
               <div class="col-sm-12 d-flex mb-5" style="flex-wrap: wrap;">
                  <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-5 mb-4 text-dark fontsize25px">Tax Residence </h3>
                  <div class="col-sm-12 pl-1 pr-1">
                     <label class="fontsize13px greycolor helveticafont col-sm-12 p-0 pb-1"> Are you a citizen or resident of the USA? </label>
                     <label class="check-mark fontsize13px greycolor d-inline-block mr-3">Yes
                     <input type="radio" name="yes" data-toggle="collapse" data-target="#usresident">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor d-inline-block ml-4">No
                     <input type="radio" name="yes" class="close-show">
                     <span class="checkmark"></span>
                     </label>
                  </div>
                  <div class="col-sm-12 pl-1 pr-1 mt-3 collapse" id="usresident">
                     <label class="fontsize13px greycolor helveticafont col-sm-12 p-0 pb-2"> US Resident - tick the appropriate box below </label>
                     <label class="check-mark fontsize13px greycolor d-inline-block">US Citizen
                     <input type="radio"  name="us_citizen">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor d-inline-block ml-4">Green Card Holder
                     <input type="radio" name="us_citizen">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor d-inline-block ml-4">Resides in the USA for over 183 days
                     <input type="radio" name="us_citizen">
                     <span class="checkmark"></span>
                     </label>
                  </div>
               </div>
               <div class="col-md-12 mt-5 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Next </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="{{url('login')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!-- Employment  -->
            <!--  tax residence -->
            <div class="setup-content" id="step-4">
               <div class="col-sm-12 pl-4 pr-4">
                  <div class="d-flex mb-4">
                     <div class="text-left p-0 col-1 col-sm-1"> <a href="{{url('/employment')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-11 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Tax Residence</h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <h5 class="pl-3 text-dark fontsize20px">Country of Citizenship Tax Residency </h5>
               <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Tax Identification Number (TIN) </label>
                     <input type="number" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" name="tax_number" placeholder="Tax Identification" required>
                  </div>
               </div>
               <div class="col-sm-12 d-flex mb-3 mt-3" style="flex-wrap: wrap;">
                  <p class="greycolor fontsize13px"><span class="colorblack">Please</span> complete the following table indicating <span class="colorblack">(i) where the Account Holder is tax resident and (ii) the Account Holder’s TIN for each country/jurisdiction indicated.</span> Countries/Jurisdictions adopting the wider approach may require that the self-certification include a tax identifying number for each country/jurisdiction of residence (rather than for each Reportable Jurisdiction).</p>
                  <p class="greycolor fontsize13px"><i> If the Account Holder is tax resident in more than three countries/jurisdictions, please use a separate sheet </i></p>
                  <p class="greycolor fontsize13px mb-0">If <span class="colorblack">a TIN </span> is unavailable <span class="colorblack">please</span> provide the appropriate reason <span class="colorblack">A, B</span> or  <span class="colorblack">C where indicated below:</span></p>
                  <div class="col-sm-12 pl-1 pr-1 mt-3">
                     <label class="check-mark fontsize13px greycolor"><span class="colorblack"> Reason A </span>- The country/jurisdiction where the Account Holder is resident does not issue <br/> TINs to its residents
                     <input type="checkbox"  name="us_citizen">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor mt-2"><span class="colorblack"> Reason B </span>- The Account Holder is otherwise unable to obtain a TIN or equivalent number (Please explain why you are unable to obtain a TIN in the below table if you have selected this reason)
                     <input type="checkbox" name="green_card">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor mt-2"><span class="colorblack"> Reason C </span>-  No TIN is required. (Note. Only select this reason if the domestic law of the relevant jurisdiction does not require the collection of the TIN issued by such jurisdiction)
                     <input type="checkbox" name="resides_usa">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor mt-2"><span class="colorblack"> FATCA
                     <input type="checkbox" name="resides_usa">
                     <span class="checkmark"></span>
                     </label>
                     <label class="check-mark fontsize13px greycolor mt-4"><span class="colorblack"> CSR
                     <input type="checkbox" name="resides_usa">
                     <span class="checkmark"></span>
                     </label>
                  </div>
                  <div class="col-sm-12 pl-1 pr-1 mt-3">
                     <label class="fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Please explain in the following boxes why you are unable to obtain a TIN  </label>
                     <textarea class="border borderblack fontsize15px helveticafont borderradius15px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor" name="explain_tin" placeholder="Please explain"></textarea>
                  </div>
               </div>
               <div class="col-md-12 mt-3 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Next </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="{{url('login')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!--  tax residence -->
            <!-- Income and Worth -->
            <div class="setup-content" id="step-5">
               <div class="col-sm-12 pl-2 pr-2">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-1 col-sm-1"> <a href="{{url('/tax')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Income and Worth </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="fontsize13px greycolor helveticafont col-sm-12 p-0">Annual Net income in (Unit)</label>
                     <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="annual_income" required>
                        <option>Choose One</option>
                        <option><40,000</option>
                        <option>40,000 - 44,999</option>
                        <option>45,000 - 49,999</option>
                        <option> 50,000 - 99,999</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="fontsize13px greycolor helveticafont col-sm-12 p-0">Net Worth in (Unit)</label>
                     <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="net_worth" required>
                        <option>Choose One</option>
                        <option><40,000</option>
                        <option>40,000 - 44,999</option>
                        <option>45,000 - 49,999</option>
                        <option>50,000 - 99,999</option>
                     </select>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Liquid net worth in (Unit) </label>
                     <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="liquid_net" required>
                        <option>Choose One</option>
                        <option><40,000</option>
                        <option>40,000 - 44,999</option>
                        <option>45,000 - 49,999</option>
                        <option>50,000 - 99,999</option>
                     </select>
                  </div>
               </div>
               <div class="col-sm-12 d-flex mb-5" style="flex-wrap: wrap;">
                  <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-5 mb-4 text-dark fontsize25px">Source of Funds </h3>
                  <p class="greycolor fontsize13px" style="line-height: 1.3;">Please select all categories that contribute to your net worth which will be used to found your account. Regulations require that we collect this information</p>
                  <ul class="col-sm-12 pl-1 pr-1 list-unstyled">
                     <li class="col-sm-6 float-left p-0">
                        <label class="check-mark fontsize13px greycolor">Allowance / Spousal Income
                        <input type="checkbox" name="allowance">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left p-0"> <label class="check-mark fontsize13px greycolor">Disability / Severance / Unemployment
                        <input type="checkbox" name="disability">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Income from Employment
                        <input type="checkbox" name="income_employee">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Inheritance / Gift
                        <input type="checkbox" name="inheritance">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Interest / Dividend Income
                        <input type="checkbox" name="interest_income">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Market Trading Profites
                        <input type="checkbox" name="market_profit">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Pension / Government Retiremnet Benefit
                        <input type="checkbox" name="pension">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Property
                        <input type="checkbox" name="property">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3 p-0"> <label class="check-mark fontsize13px greycolor">Other
                        <input type="checkbox" name="other" data-toggle="collapse" data-target="#other">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                  </ul>
                  <div class="col-sm-4 pl-1 pr-1 mt-3 form-group collapse" id="other">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0"> Other </label>
                     <input type="text" class="border borderblack fontsize16px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12" name="other">
                  </div>
               </div>
               <div class="col-md-12 mt-5 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Next </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="{{url('login')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!-- Income and Worth -->
            <!-- Investment Objectives -->
            <div class="setup-content" id="step-6">
               <div class="col-sm-12 pl-2 pr-2">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-1 col-sm-1"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Investment Objectives </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 float-left">
                  <label class="fontsize13px greycolor helveticafont col-sm-12 p-0 pb-1"> Your choices below determine the investment products that suits your appetite </label>
                  <ul class="col-sm-12 pl-1 pr-1 list-unstyled">
                     <li class="col-sm-6 float-left">
                        <label class="check-mark fontsize13px greycolor">Growth
                        <input type="radio" name="objects">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left"> <label class="check-mark fontsize13px greycolor">Hedging 
                        <input type="radio" name="objects">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3"> <label class="check-mark fontsize13px greycolor">Preservation of capital and income generation
                        <input type="radio" name="objects">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                     <li class="col-sm-6 float-left pt-3"> <label class="check-mark fontsize13px greycolor">Profits from activie trading and spectulation
                        <input type="radio" name="objects">
                        <span class="checkmark"></span>
                        </label>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-12 d-flex mb-4" style="flex-wrap: wrap;">
                  <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-5 mb-4 text-dark fontsize25px">Your Experiences in Capital <br/> Markets and Investments </h3>
                  <div id="accordion" class="col-sm-12 p-0">
                     <div class="card borderradius30px borderblack">
                        <div class="card-header bg-transparent border-0">
                           <a class="collapsed card-link lightblackcolor helveticafont fontsize13px d-block" data-toggle="collapse" href="#stocks">
                           Stocks  <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="stocks" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px pb-1">Experience and Trading Knowledge</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Choose One</option>
                                       <option>10 Years of..</option>
                                       <option>12 Years of..</option>
                                       <option>15 Years of..</option>
                                       <option>17 Years of..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="num_trades">
                                       <option>Choose One</option>
                                       <option>11- 25 Trades..</option>
                                       <option>25- 40 Trades..</option>
                                       <option>40- 65 Trades..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Total Trades</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-0">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Good Knowledged</option>
                                       <option>Excellent Work</option>
                                    </select>
                                 </div>
                              </div>
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px mt-4 pb-1"> Location Your Trade</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Country Name</option>
                                       <option>Dubai</option>
                                       <option>US</option>
                                       <option>UK</option>
                                       <option>Russia</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-3">
                        <div class="card-header bg-transparent border-0">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#bonds">
                           Bonds <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="bonds" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px pb-1">Experience and Trading Knowledge</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Choose One</option>
                                       <option>10 Years of..</option>
                                       <option>12 Years of..</option>
                                       <option>15 Years of..</option>
                                       <option>17 Years of..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="num_trades">
                                       <option>Choose One</option>
                                       <option>11- 25 Trades..</option>
                                       <option>25- 40 Trades..</option>
                                       <option>40- 65 Trades..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Total Trades</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-0">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Good Knowledged</option>
                                       <option>Excellent Work</option>
                                    </select>
                                 </div>
                              </div>
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px mt-4 pb-1"> Location Your Trade</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Country Name</option>
                                       <option>Dubai</option>
                                       <option>US</option>
                                       <option>UK</option>
                                       <option>Russia</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-3">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#warrants">
                           Warrants <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="warrants" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px pb-1">Experience and Trading Knowledge</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Choose One</option>
                                       <option>10 Years of..</option>
                                       <option>12 Years of..</option>
                                       <option>15 Years of..</option>
                                       <option>17 Years of..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="num_trades">
                                       <option>Choose One</option>
                                       <option>11- 25 Trades..</option>
                                       <option>25- 40 Trades..</option>
                                       <option>40- 65 Trades..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2" name="total_trades">
                                       <option>Total Trades</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-0">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Good Knowledged</option>
                                       <option>Excellent Work</option>
                                    </select>
                                 </div>
                              </div>
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px mt-4 pb-1"> Location Your Trade</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Country Name</option>
                                       <option>Dubai</option>
                                       <option>US</option>
                                       <option>UK</option>
                                       <option>Russia</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-3">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#options">
                           Options <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="options" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px pb-1">Experience and Trading Knowledge</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Choose One</option>
                                       <option>10 Years of..</option>
                                       <option>12 Years of..</option>
                                       <option>15 Years of..</option>
                                       <option>17 Years of..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="num_trades">
                                       <option>Choose One</option>
                                       <option>11- 25 Trades..</option>
                                       <option>25- 40 Trades..</option>
                                       <option>40- 65 Trades..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Total Trades</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-0">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2" name="total_trades">
                                       <option>Good Knowledged</option>
                                       <option>Excellent Work</option>
                                    </select>
                                 </div>
                              </div>
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px mt-4 pb-1"> Location Your Trade</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Country Name</option>
                                       <option>Dubai</option>
                                       <option>US</option>
                                       <option>UK</option>
                                       <option>Russia</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-3">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#future">
                           Futures <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="future" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-1 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Next </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="#" data-toggle="modal" data-target="#alertModal" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!-- Investment Objectives -->
            <!-- Experiences in Capital -->
            <div class="setup-content" id="step-7">
               <div class="col-sm-12 pl-2 pr-2">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-sm-1 col-1"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 text-center col-10">
                        <h3 class="helveticabold-font text-dark fontsize25px">Your Experiences in Capital <br/> Markets and Investments  </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 mb-5">
                  <div id="accordion" class="col-sm-12 p-0">
                     <div class="card borderradius30px borderblack mt-3">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#future-opations">
                           Future Options <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="future-opations" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px pb-1">Experience and Trading Knowledge</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Choose One</option>
                                       <option>10 Years of..</option>
                                       <option>12 Years of..</option>
                                       <option>15 Years of..</option>
                                       <option>17 Years of..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="num_trades">
                                       <option>Choose One</option>
                                       <option>11- 25 Trades..</option>
                                       <option>25- 40 Trades..</option>
                                       <option>40- 65 Trades..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2" name="total_trades">
                                       <option>Total Trades</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-0">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Good Knowledged</option>
                                       <option>Excellent Work</option>
                                    </select>
                                 </div>
                              </div>
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px mt-4 pb-1"> Location Your Trade</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Country Name</option>
                                       <option>Dubai</option>
                                       <option>US</option>
                                       <option>UK</option>
                                       <option>Russia</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-4">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#mutual-funds">
                           Mutual Funds <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="mutual-funds" class="collapse" data-parent="#accordion">
                           <div class="card-body pt-0">
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px pb-1">Experience and Trading Knowledge</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="annual_income" name="years_exp">
                                       <option>Choose One</option>
                                       <option>10 Years of..</option>
                                       <option>12 Years of..</option>
                                       <option>15 Years of..</option>
                                       <option>17 Years of..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="num_trades">
                                       <option>Choose One</option>
                                       <option>11- 25 Trades..</option>
                                       <option>25- 40 Trades..</option>
                                       <option>40- 65 Trades..</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Total Trades</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3 pl-1 pr-0">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2 selecticon" name="total_trades">
                                       <option>Good Knowledged</option>
                                       <option>Excellent Work</option>
                                    </select>
                                 </div>
                              </div>
                              <h6 class="text-uppercase greycolor border-bottom col-sm-12 p-0 fontsize13px mt-4 pb-1"> Location Your Trade</h6>
                              <div class="col-sm-12 d-flex p-0 mt-3" style="flex-wrap: wrap;">
                                 <div class="col-sm-3 pl-0 pr-1">
                                    <select class="borderblack fontsize11px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 lightblackcolor pt-2 pb-2" name="annual_income" name="years_exp">
                                       <option>Country Name</option>
                                       <option>Dubai</option>
                                       <option>US</option>
                                       <option>UK</option>
                                       <option>Russia</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-4">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#nextshare">
                           NextShares <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="nextshare" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-4">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#currency-conversion">
                           Currency Conversion <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="currency-conversion" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           </div>
                        </div>
                     </div>
                     <div class="card borderradius30px borderblack mt-4">
                        <div class="card-header border-0 bg-transparent">
                           <a class="collapsed card-link lightblackcolor fontsize15px helveticafont d-block" data-toggle="collapse" href="#complex">
                           Complex or Leveraged Exchange Traded Products <span class="bgyellow-gradiant fontsize20px colorwhite rounded-circle d-inline-block position-absolute width-29 text-center" style="right: 55px;top: 8px;">0</span>
                           </a>
                        </div>
                        <div id="complex" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-5 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Next </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="{{url('register')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!-- Experiences in Capital -->
            <!-- Documents Upload -->
            <div class="setup-content" id="step-8">
               <div class="col-sm-12 pl-2 pr-2">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-1 col-sm-1"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Documents Upload </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont" title="Upload Passport Copy Format jpg, png, pdf">Passport Copy</label>
                     <label class="passlabel inputfield border borderblack fontsize15px helveticafont borderradius30px fontweight400 lightblackcolor d-flex p-2 lineheight2px pl-3">
                     <span class="title col-sm-10 p-0 text-left helveticafont">
                     Passport
                     </span>
                     <i class="fa fa-paperclip bgyellow-gradiant textclip">
                     </i>
                     <input class="FileUpload1" id="passport" name="passport" type="file" required />
                     </label>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0" title="Upload Second ID Copy Format jpg, png, pdf">Second ID Copy</label>
                     <label class="secondcopy inputfield border borderblack fontsize15px helveticafont borderradius30px fontweight400 lightblackcolor d-flex p-2 lineheight2px pl-3">
                     <span class="title col-sm-10 p-0 text-left helveticafont">
                     Second ID
                     </span>
                     <i class="fa fa-paperclip bgyellow-gradiant textclip">
                     </i>
                     <input class="FileUpload1" id="secondcopy" name="passport" type="file" required />
                     </label>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0" title="Upload Picture Format jpg, png, pdf">
                     Picture</label>
                     <label class="picture inputfield border borderblack fontsize15px helveticafont borderradius30px fontweight400 lightblackcolor d-flex p-2 lineheight2px pl-3">
                     <span class="title col-sm-10 p-0 text-left helveticafont">
                     Picture
                     </span>
                     <i class="fa fa-paperclip bgyellow-gradiant textclip">
                     </i>
                     <input class="FileUpload1" id="picture" name="passport" type="file" required />
                     </label>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0" title="Upload Proof of Address Format jpg, png, pdf">
                     Proof of Address</label>
                     <label class="proofadd inputfield border borderblack fontsize15px helveticafont borderradius30px fontweight400 lightblackcolor d-flex p-2 lineheight2px pl-3">
                     <span class="title col-sm-10 p-0 text-left helveticafont">
                     Proof
                     </span>
                     <i class="fa fa-paperclip bgyellow-gradiant textclip">
                     </i>
                     <input class="FileUpload1" id="proofadd" name="passport" type="file"/>
                     </label>
                  </div>
               </div>
               <div class="col-sm-12 d-flex mb-2 mt-2" style="flex-wrap: wrap;">
                  <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-4 mb-4 fontsize25px">Signature</h3>
                  <p class="helveticafont fontsize13px colorblack mb-0">I understand that the information supplied by me is covered by the full provisions of the terms and conditions governing the Account Holder’s relationship with <span class="helveticabold-font">RUSD Investment Bank (“RUSD”)</span> setting out how <span class="helveticabold-font">RUSD</span> may use and share the information supplied by me. I acknowledge that the information contained in this form and information regarding the Account Holder and any Reportable Account(s) may be provided to the tax authorities of the country/jurisdiction in which this account(s) is/are maintained and exchanged with tax authorities of another country/jurisdiction or countries/jurisdictions in which the Account Holder may be tax resident pursuant to intergovernmental agreements to exchange financial account information.</p>
                  <p class="helveticafont fontsize13px colorblack">I certify that I am the Account Holder (or am authorised to sign for the Account Holder) of all the account(s) to which this form relates.</p>
                  <p class="helveticabold-font fontsize13px colorblack">I declare that all statements made in this declaration are, to the best of my knowledge and belief, correct and complete.</p>
                  <p class="fontsize13px colorblack">I undertake to advise <span class="helveticabold-font">RUSD Investment Bank</span> within <span class="helveticabold-font">30</span> days of any change in circumstances which affects the tax residency status of the individual identified in Part 1 of this form or causes the information contained herein to become incorrect or incomplete, and to provide <span class="helveticabold-font"> RUSD</span> with a suitably updated self-certification and Declaration within <span class="helveticabold-font"> up to 60 </span>days of such change in circumstances.</p>
               </div>
               <div class="col-md-12 mt-2 text-center d-inline-block">
                  <button type="button" class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Next
                  </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="{{url('login')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!-- Documents Upload -->
            <!-- Signature -->
            <div class="setup-content" id="step-9">
               <div class="col-sm-12 pl-2 pr-2">
                  <div class="d-flex mb-3">
                     <div class="text-left p-0 col-1 col-sm-1"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                        </a>
                     </div>
                     <div class="col-sm-10 col-10 text-center">
                        <h3 class="helveticabold-font text-dark fontsize25px">Signature </h3>
                     </div>
                     <div class="col-sm-1 col-1 p-0 text-right">
                        <a href="#" data-toggle="tooltip" data-toggle="modal" data-target="#needhelp"><img src="{{asset('images/assets/signup/Asset12.png')}}" width="32"></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 d-flex" style="flex-wrap: wrap;">
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont">Signature*</label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-4 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" name="sigture" placeholder="Signature" required>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Name*</label>
                     <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-4 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" name="signature_name" placeholder="Name" required>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 form-group">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                     Date*</label>
                     <input type="date" id="date" class="border borderblack fontsize16px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor" name="date_birth" required>
                  </div>
               </div>
               <div class="col-sm-12 d-flex mb-5 mt-3" style="flex-wrap: wrap;">
                  <p class="greycolor fontsize14px helveticafont mb-2"><span class="colorblack">Note:</span> If you are not the Account Holder please indicate the capacity in which you are signing the form. If signing under a power of Attorney, please also attach a certified copy of the power of attorney</p>
                  <div class="col-sm-12 pl-1 pr-1 form-group">
                     <div class="col-sm-4 p-0 mt-1">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                        Capacity*</label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px col-sm-12 lightblackcolor height50px" name="capacity" placeholder="Capacity" required>
                     </div>
                     <label class="check-mark fontsize13px greycolor d-inline-block mr-3 mt-3">Power of attorney
                     <input type="checkbox" name="power_attorney">
                     <span class="checkmark"></span>
                     </label>
                  </div>
                  <div class="col-sm-4 pl-1 pr-1 mt-3">
                     <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0 pb-2"> Power of attorney</label>
                     <label class="filelabel inputfield border borderblack fontsize15px helveticafont borderradius30px fontweight400 lightblackcolor d-flex p-2 lineheight2px pl-3">
                     <span class="title col-sm-10 p-0 text-left helveticafont">
                     Add File
                     </span>
                     <i class="fa fa-paperclip bgyellow-gradiant textclip">
                     </i>
                     <input class="FileUpload1" id="FileInput" name="booking_attachment" type="file"/>
                     </label>
                  </div>
               </div>
               <div class="col-md-12 mt-5 text-center d-inline-block">
                  <button type="submit" class="col-sm-6 col-11 m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover">
                  Submit
                  </button>
               </div>
               <!-- <div class="text-center mt-4"><p class="greycolor fontsize12px">or
                  <a href="{{url('register')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p>
                  </div> -->
            </div>
            <!-- Signature -->
         </form>
      </div>
   </div>
</div>
</div>
<!-- The Modal -->
<div class="modal fade" id="needhelp">
   <div class="modal-dialog maxwidth560px" style="height: 89%;">
      <div class="modal-content borderradius15px p-2 position-absolute m-auto" style="top:0;bottom: 0;height: 71%;">
         <!-- Modal body -->
         <div class="modal-body pl-4 pr-4 pb-4 pt-3">
            <button type="button" class="close bgyellow-gradiant text-white rounded-circle font-weight-light outlinenone shadow-none fontsize18px" data-dismiss="modal" style="width: 22px;height: 22px;line-height: 0;opacity: 1;"><span class="d-block" style="margin-top: -2px;">&times;</span></button>
            <h6 class="helveticafont text-dark fontsize15px">Need Help?</h6>
            <p class="greycolor fontsize13px helveticafont">There are multiple ways you can get help. Choose from the options below.</p>
            <a href="#" class="text-decoration-none">
               <div class="borderradius50px p-3 pl-4 pr-4 w-100 hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
                  <div class="media position-relative">
                     <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
                     <div class="media-body mt-1">
                        <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Phone</h4>
                        <p class="mb-0 greycolor helveticafont fontsize12px">+01 234 5678 912</p>
                        <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
                     </div>
                  </div>
               </div>
            </a>
            <a href="#" class="text-decoration-none">
               <div class="borderradius50px p-3 pl-4 pr-4 w-100 mt-4 hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
                  <div class="media position-relative">
                     <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
                     <div class="media-body mt-1">
                        <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Email</h4>
                        <p class="mb-0 greycolor helveticafont fontsize12px">info@rusdbank.com</p>
                        <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
                     </div>
                  </div>
               </div>
            </a>
            <a href="#" class="text-decoration-none">
               <div class="borderradius50px p-3 pl-4 pr-4 w-100 mt-4 hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
                  <div class="media position-relative">
                     <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
                     <div class="media-body mt-1">
                        <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">WhatsApp</h4>
                        <p class="mb-0 greycolor helveticafont fontsize12px">+01 234 5678 901</p>
                        <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
@stop