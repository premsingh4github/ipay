<!-- Main Header  -->

<div class="main-header affix">

    <div class="container ">

        <!-- logo  -->
        <div id="logo">
            <a href="index.html"><img src="<?php echo base_url(); ?>themes/ipay/images/logo-ipay.png" alt="iPay" class="img-responsive"></a>
        </div>
        <div class="page-navigator clearfix"><?php echo $records->name; ?></div>

        <div id="sb-search" class="sb-search">
            <form>
                <input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search"></span>
            </form>
        </div>
        <!-- send money -->

        <div class="main-send-money-now">
            <a href="#" class="btn-send-money">Send Money Now!</a>
        </div> 

    </div>

</div>
<div class="main-header main-nav affix">
    <div class="container">
        <!-- Moblie Nav Wrapper  -->
        <div class="mobile-nav-wrapper">
            <!-- mobile-menu-icon -->

            <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
            </div> 
            <!-- Nav --> 

            <nav class="mobile-menu">

                <ul class="clearfix">
                    <?php
//                                    $this->db->order_by('position asc,added desc');
                    $this->db->order_by('position asc,added desc');
                    $menus = $this->menu_model->find_all_by(array('status' => 1, 'department_ID' => $records->ID, 'parent_ID' => 0));
                    if ($this->menu_model->count_by(array('status' => 1, 'department_ID' => $records->ID, 'parent_ID' => 0)) > 0) {
                        $i = 0;
                        foreach ($menus as $menu) {
                            ?>
                            <li class=" <?php if ($this->menu_model->count_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $records->ID)) > 0) {
                        echo 'parent ';
                    } if ($i == 0) {
                        echo 'active';
                    } $i++; ?>" ><a href="<?php echo $menu->url; ?>"><?php echo $menu->name; ?></a>
                                <!-- Sub memu -->

                                <!--<li class="arrow"></li>-->
                                <?php
                                $submenus = $this->menu_model->find_all_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $records->ID));
                                if ($this->menu_model->count_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $records->ID)) > 0) {
                                    echo ' <ul class="sub-menu">';
                                    foreach ($submenus as $submenu) {
                                        ?>

                                    <li><a href="<?php echo $submenu->url; ?>"><?php echo $submenu->name . $this->menu_model->count_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $records->ID)); ?></a></li>

                                    <?php
                                }
                                echo '</ul>';
                            }
                            ?>

                            </li>


                            <?php
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- header -->  
<!-- Banner -->
<div class="banner">
    <div class="container">
        <div class="row wrap">
            <div class="col-md-6">
                <h2>SEND MONEY ONLINE</h2>
                <div class="form-components clearfix">
                    <form class="left-right send-money-form">
                        <div class="form-input">
                            <div class="styled-select">
                                <select name="country">
                                    <option value="">SELECT COUNTRY</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
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
                                    <option value="Cote DIvoire">Cote D'Ivoire</option>
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
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
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
                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
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
                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>  
                            </div>
                        </div>
                        <div class="form-input">
                            <button class="btn btn-pri" style="background:  #5a9aa8 url(<?php echo base_url() . "themes/ipay/img/send-1.png" ?>) no-repeat right; ">Send &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo $records->image; ?>" alt="<?php echo $records->name; ?>"/>
            </div>

        </div>     
    </div>
</div>

<!-- On-counter and online -tabs -->
<section class="tabs text-left newsection">
    <div class="container">
        <section class="switch-tabs newsection">

            <div id="switch-tabs">    
                <ul class="tab-tools-ul resp-tabs-list clearfix">
                    <?php
                    if (count($tabs) > 0 ) {
                        foreach ($tabs as $tab) {
                            if ($D_tab = $this->tab_model->find_all_by(array('ID' => $tab->tab_ID, 'status' => '1'))) {
                                foreach ($D_tab as $value) {
                                    echo"<li>" . $value->name . "</li>";
                                }
                            }
                        }
                    }
                    ?>
                </ul>
                <div class="resp-tabs-container">     

                    <?php
                   
                        foreach ($tabs as $tab) {
                            if ($D_tab = $this->tab_model->find_all_by(array('ID' => $tab->tab_ID, 'status' => '1'))) {
                                foreach ($D_tab as $value) {
                                    ?>
                                    <div>
                                        <div class="tab-toolss">
                                            <div class="tab-tools clearfix">

                                                <div class="row">

                                                    <?php
                                                    if ($value->information != '') {
                                                        // echo $value->information; 
                                                    }
                                                    // for step
                                                    $this->db->order_by('order asc');
                                                    if ($steps = $this->steps_model->find_all_by(array('department' => $value->ID, 'status' => '1'))) {
                                                        if ($this->steps_model->count_by('department', $value->ID) > 0) {
                                                            ?>


                                                            <div class="col-md-6">
                                                                <h2><?php echo count($steps); ?> easy steps</h2><br><br>
                                                                <form id="commentForm">
                                                                    <div id="rootwizard" class="col-md-12">
                                                                        <div class="form-wizard-steps">
                                                                            <ul class="wizard-steps">
                                                                                <?php $i = 0;

                                                                                foreach ($steps as $step) {
                                                                                    ?>
                                                                                    <li class="<?php if ($i == 0) {
                                                            echo 'active';
                                                        } $i++; ?>" data-target="#step<?php echo $step->ID; ?>"> <a href="#tab<?php echo $step->ID; ?>" data-toggle="tab"> <span class="step"><?php echo $i; ?></span> <span class="title"><?php echo $step->step_title; ?></span> </a> </li>        

                                                                                <?php }
                                                                                ?>
                                                                            </ul>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <div class="tab-content transparent">
                                                                            <?php
                                                                            $i = 0;
                                                                            foreach ($steps as $step) {
                                                                                ?>
                                                                                <div class="tab-pane <?php if ($i == 0) {
                                                        echo 'active';
                                                    } $i++; ?>" id="tab<?php echo $step->ID; ?>"> <br>
                                                                                    <h4 class="semi-bold">Step <?php echo $i; ?> - <span class="light"><?php echo $step->step_title; ?></span></h4>
                                                                                    <br>
                                                                                    <ul>
                                                                                        <?php echo $step->information; ?>
                                                                                        <?php
                                                                                        if ($value->information != '') {
                                                                                            echo $value->information;
                                                                                        }
                                                                                        ?>
                                                                                    </ul>
                                                                                </div>   
                                                                                <?php
                                                                            }
                                                                            ?>




                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <div class="col-md-6">
                                                            <h2></h2>
                                                            <form id="commentForm">
                                                                <div id="rootwizard" class="col-md-12">
                                                                    <div class="form-wizard-steps">

                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="tab-content transparent">

                                                                        <div class="tab-pane active" id="tab1">

                                                                            <ul>
                                                                                <?php
                                                                                if ($value->information != '') {
                                                                                    echo $value->information;
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>   





                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>


                                                        <?php
                                                    }
                                                    // for video
                                                    if ($value->video != '') {
                                                        ?>
                                                        <div class="col-md-6 text-right clearfix">
                                                            <video id="our-video" width="476" height="312" controls class="video-ads">
                                                                <source src="<?php echo $value->video; ?>" type="video/mp4">
                                                                <source src="<?php echo $value->video; ?>" type="video/mp4">
                                                            </video>
                                                        </div> <!-- /video -->
                                                    <?php }
                                                    ?>



                                                </div>

                                            </div>

                                        </div> 
                                    </div>


                                    <?php
                                }
                            }
                        }
                    
                    ?>

                    <div>
                        <div class="tab-toolss">  
                            <div class="tab-tools clearfix">
                                <?php echo ''; ?>
                            </div>

                        </div>
                    </div>
                </div> 
            </div>   

        </section>
    </div>
</section>

<!-- Our Rate-->
<section class="eventform newsection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>OUR RATES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate <br>
                    commodo lectus, ac blandit elit tincidunt id. </p>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>From Country</th>
                                <th>To Country</th>
                                <th>Price Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Australia (AUS $)</td>
                                <td>Philippines (PHIL RS)</td>
                                <td>3.09</td>
                            </tr>
                            <tr>
                                <td>Australia (AUS $)</td>
                                <td>Zimbabwe (ZIM RS)</td>
                                <td>0.67</td>
                            </tr>
                            <tr>
                                <td>Australia (AUS $)</td>
                                <td>Zimbabwe (ZIM RS)</td>
                                <td>0.67</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-calc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Click Here</button>
                            </div>
                            <div class="col-md-8"><div class="calc-quote">To calculate your rates with our calculator !!</div></div>
                        </div>
                    </div>
                    <div class="col-md-6">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<div  class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <h2 class="title">Contact Us
                    <span class="border"></span></h2>
                <span class="address"> <?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'address'"); ?></span><br>
                <span class="location"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'postal'"); ?></span><br>
                <span class="telephone"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'admin_number'"); ?></span>
                <a href="mailto:info@yourmain.com" class="email"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'admin_email'"); ?></a>
                <div class="social">
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-facebook-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-twitter-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-googleplus-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-linkedin-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-youtube-24.png" alt=""/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-9">
                <div class="row">
                    <?php
                    $departments = $this->department_model->find_all_by('status', 1);
                    if (count($departments) > 0) {
                        foreach ($departments as $department) {
                            $this->db->order_by('position asc,added desc');
                            $menus = $this->menu_model->find_all_by(array('status' => 1, 'department_ID' => $department->ID, 'parent_ID' => 0));
                            if ($this->menu_model->count_by(array('status' => 1, 'department_ID' => $department->ID, 'parent_ID' => 0)) > 0) {
                                ?>
                                <div class="col-md-3">
                                    <h2 class="title"><?php echo $department->name; ?>
                                        <span class="border"></span></h2>
                                    <ul class="fa-ul">
                                        <?php
                                        foreach ($menus as $menu) {
                                            ?>
                                            <li><a href="<?php echo $menu->url; ?>"><?php echo $menu->name; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                            } else {

                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>