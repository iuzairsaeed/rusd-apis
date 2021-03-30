<template>
    <form id="form-data" method="POST"  v-on:submit.prevent="saveFormData">
   
            <input type="hidden" name="csrf-token" :value=tokenData>

             <!-- Contact -->
          <div id="step-1" v-if="stepNo == 1">
            <div class="col-sm-12 pl-4 pr-4">
                <div class="d-flex mb-3">
                  <div class="text-left p-0 col-sm-1 col-1"> 
                    <a href=""><img src="images/assets/login/asset37.png" class="img-fluid col-sm-6 col-11 p-0" style="margin:0.2em 0px;">
                    </a>
                  </div>
                  <div class="col-sm-10 col-10 p-0 text-center">
                      <h3 class="helveticabold-font text-dark fontsize25px">Contact Information {{formDataDetail.length}} </h3>
                  </div>
                  <div class="col-sm-1 col-1 p-0 text-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum"><img src="images/assets/signup/Asset12.png" width="32"></a>
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
                        <input id="name" type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 lightblackcolor" name="first_name" :value="formDataDetail.length > 0 ? formDataDetail.first_name:''" placeholder="First Name" required autocomplete="name" autofocus>

                    </div>

                    <div class="col-sm-4 pl-1 pr-1 form-group">
                         <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Middle Name</label>
                         <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" placeholder="Middle Name" name="middle_name" required>

                    </div>

                    <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Last Name</label>
                        <input type="text" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="last_name" placeholder="Last Name" required>

                    </div>

                    <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                        <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Date of Birth</label>
                        <input type="date" id="date" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 lightblackcolor" name="dob" required>

                    </div>


                    <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                          <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                            Mobile</label>
                     
                          <input type="number" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 lightblackcolor" pattern="^\d{4}-\d{3}-\d{4}$" name="mobile" placeholder="+966" required="required">
                    </div>


                    <div class="col-sm-4 pl-1 pr-1 mt-3 form-group">
                          <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">Email</label>
                          <input id="email" type="email" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 height50px fontweight400 lineheight2px col-sm-12 " name="email" value="" placeholder="Email" autocomplete="email" required>

                    </div>

            </div>


            <div class="col-sm-12 d-flex mb-5" style="flex-wrap: wrap;">
                <h3 class="helveticabold-font text-center col-sm-12 p-0 mt-5 mb-4 fontsize25px">Security Questions</h3>

                <div class="col-sm-4 pl-1 pr-1 form-group">
                 <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question One</label>
                    <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="security_question_1" required>
                                <option>Choose One</option>
                                <option>What is Your Favourite Color</option>
                                <option>What is Your Nick Name?</option>
                       </select>

                    </div>

                 <div class="col-sm-4 pl-1 pr-1 form-group">
                 <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question Two</label>
                    <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="security_question_2">
                                <option>Choose One</option>
                                <option>What is Your First Car?</option>
                                <option>Who was Your First Employee?</option>
                       </select>

                    </div>

                    <div class="col-sm-4 pl-1 pr-1 form-group">
                 <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question Three</label>
                    <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="security_question_3">
                                <option>Choose One</option>
                                <option>What was the first concert you attended?</option>
                                <option>In What city was Your father born?</option>
                       </select>

                    </div>
            </div>


            <div class="col-sm-12 d-flex mb-5" style="flex-wrap: wrap;">

                <div class="col-sm-4 pl-1 pr-1 form-group">
                 <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question One</label>
                    <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="security_question_1" required>
                                <option>Choose One</option>
                                <option>What is Your Favourite Color</option>
                                <option>What is Your Nick Name?</option>
                       </select>

                    </div>

                 <div class="col-sm-4 pl-1 pr-1 form-group">
                 <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question Two</label>
                    <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="security_question_2">
                                <option>Choose One</option>
                                <option>What is Your First Car?</option>
                                <option>Who was Your First Employee?</option>
                       </select>

                    </div>

                    <div class="col-sm-4 pl-1 pr-1 form-group">
                 <label class="text-capitalize fontsize13px greycolor helveticafont">Security Question Three</label>
                    <select class="borderblack fontsize15px height50px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="security_question_3">
                                <option>Choose One</option>
                                <option>What was the first concert you attended?</option>
                                <option>In What city was Your father born?</option>
                       </select>

                    </div>
            </div>



          </div>


          <!-- Citizenship Details -->
            <div id="step-2" v-if="stepNo == 2">
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
              
               </div>
            </div>
             <!-- Citizenship Details -->


            <div class="col-md-12 mt-5 text-center d-inline-block">
                  <button type="submit"  class="col-sm-6 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover"> Next 
                  </button>
            </div>
           
    </form>
</template>

<script>
    export default {
        props: ['token','userDetail'],
        data () {
          return {
            stepNo:1,
            tokenData:this.token,
            userDetailData : this.userDetailsData,
            info:[],
            formDataDetail:[]
          }
        },

         methods: {
            saveFormData() {
                let myForm = document.getElementById('form-data');
                let formData = new FormData(myForm);
                var stepNo = this.stepNo;
                this.stepNo = stepNo+1;

              const thisData = this;
              axios.post('formDataByStep',formData).then(function (result) {
                console.log(result.data);
              // thisData.formDataDetail = result.data.data            
                // console.log(thisData.formDataDetail);
              });



                // console.log(formData);
            }
          },

        created() {
           // default form value
           const thisData = this;
           axios.get('formDataByStep',{
                params: {
                  step: this.userDetail.form_step
                }
              })
              .then(function (result) {

              thisData.formDataDetail = result.data.data            
                // console.log(thisData.formDataDetail);
            });

            const apiStep = this.userDetail.form_step;
            if (apiStep == 0) {
                this.stepNo = 1;
            }else{
                this.stepNo = apiStep;
            }
            console.log(baseUrl,'app data')
        }
    }
</script>
