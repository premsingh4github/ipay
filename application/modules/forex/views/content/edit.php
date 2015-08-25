<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

if (isset($forex))
{
	$forex = (array) $forex;
}
$id = isset($forex['id']) ? $forex['id'] : '';

?>
<div class="admin-box">
	<h3>Forex</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>
                    <div class="control-group ">
                        <label class="control-label" ></label>
                        <label class="control-label" >Country</label>
                        <label class="control-label" >Currency</label>

                    </div>
                    <?php
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
    $currencies = array (
'ALL' => 'Albania Lek',
'AFN' => 'Afghanistan Afghani',
'ARS' => 'Argentina Peso',
'AWG' => 'Aruba Guilder',
'AUD' => 'Australia Dollar',
'AZN' => 'Azerbaijan New Manat',
'BSD' => 'Bahamas Dollar',
'BBD' => 'Barbados Dollar',
'BDT' => 'Bangladeshi taka',
'BYR' => 'Belarus Ruble',
'BZD' => 'Belize Dollar',
'BMD' => 'Bermuda Dollar',
'BOB' => 'Bolivia Boliviano',
'BAM' => 'Bosnia and Herzegovina Convertible Marka',
'BWP' => 'Botswana Pula',
'BGN' => 'Bulgaria Lev',
'BRL' => 'Brazil Real',
'BND' => 'Brunei Darussalam Dollar',
'KHR' => 'Cambodia Riel',
'CAD' => 'Canada Dollar',
'KYD' => 'Cayman Islands Dollar',
'CLP' => 'Chile Peso',
'CNY' => 'China Yuan Renminbi',
'COP' => 'Colombia Peso',
'CRC' => 'Costa Rica Colon',
'HRK' => 'Croatia Kuna',
'CUP' => 'Cuba Peso',
'CZK' => 'Czech Republic Koruna',
'DKK' => 'Denmark Krone',
'DOP' => 'Dominican Republic Peso',
'XCD' => 'East Caribbean Dollar',
'EGP' => 'Egypt Pound',
'SVC' => 'El Salvador Colon',
'EEK' => 'Estonia Kroon',
'EUR' => 'Euro Member Countries',
'FKP' => 'Falkland Islands (Malvinas) Pound',
'FJD' => 'Fiji Dollar',
'GHC' => 'Ghana Cedis',
'GIP' => 'Gibraltar Pound',
'GTQ' => 'Guatemala Quetzal',
'GGP' => 'Guernsey Pound',
'GYD' => 'Guyana Dollar',
'HNL' => 'Honduras Lempira',
'HKD' => 'Hong Kong Dollar',
'HUF' => 'Hungary Forint',
'ISK' => 'Iceland Krona',
'INR' => 'India Rupee',
'IDR' => 'Indonesia Rupiah',
'IRR' => 'Iran Rial',
'IMP' => 'Isle of Man Pound',
'ILS' => 'Israel Shekel',
'JMD' => 'Jamaica Dollar',
'JPY' => 'Japan Yen',
'JEP' => 'Jersey Pound',
'KZT' => 'Kazakhstan Tenge',
'KPW' => 'Korea (North) Won',
'KRW' => 'Korea (South) Won',
'KGS' => 'Kyrgyzstan Som',
'LAK' => 'Laos Kip',
'LVL' => 'Latvia Lat',
'LBP' => 'Lebanon Pound',
'LRD' => 'Liberia Dollar',
'LTL' => 'Lithuania Litas',
'MKD' => 'Macedonia Denar',
'MYR' => 'Malaysia Ringgit',
'MUR' => 'Mauritius Rupee',
'MXN' => 'Mexico Peso',
'MNT' => 'Mongolia Tughrik',
'MZN' => 'Mozambique Metical',
'NAD' => 'Namibia Dollar',
'NPR' => 'Nepal Rupee',
'ANG' => 'Netherlands Antilles Guilder',
'NZD' => 'New Zealand Dollar',
'NIO' => 'Nicaragua Cordoba',
'NGN' => 'Nigeria Naira',
'NOK' => 'Norway Krone',
'OMR' => 'Oman Rial',
'PKR' => 'Pakistan Rupee',
'PAB' => 'Panama Balboa',
'PYG' => 'Paraguay Guarani',
'PEN' => 'Peru Nuevo Sol',
'PHP' => 'Philippines Peso',
'PLN' => 'Poland Zloty',
'QAR' => 'Qatar Riyal',
'RON' => 'Romania New Leu',
'RUB' => 'Russia Ruble',
'SHP' => 'Saint Helena Pound',
'SAR' => 'Saudi Arabia Riyal',
'RSD' => 'Serbia Dinar',
'SCR' => 'Seychelles Rupee',
'SGD' => 'Singapore Dollar',
'SBD' => 'Solomon Islands Dollar',
'SOS' => 'Somalia Shilling',
'ZAR' => 'South Africa Rand',
'LKR' => 'Sri Lanka Rupee',
'SEK' => 'Sweden Krona',
'CHF' => 'Switzerland Franc',
'SRD' => 'Suriname Dollar',
'SYP' => 'Syria Pound',
'TWD' => 'Taiwan New Dollar',
'THB' => 'Thailand Baht',
'TTD' => 'Trinidad and Tobago Dollar',
'TRY' => 'Turkey Lira',
'TRL' => 'Turkey Lira',
'TVD' => 'Tuvalu Dollar',
'UAH' => 'Ukraine Hryvna',
'GBP' => 'United Kingdom Pound',
'USD' => 'United States Dollar',
'UYU' => 'Uruguay Peso',
'UZS' => 'Uzbekistan Som',
'VEF' => 'Venezuela Bolivar',
'VND' => 'Viet Nam Dong',
'YER' => 'Yemen Rial',
'ZWD' => 'Zimbabwe Dollar'
);
    ?>
                    <div class="control-group ">
                        <label class="control-label" for="forex_from_country">From<span class="required">*</span></label>
                        <div class="controls">
                            <select name="forex_from_country"  >
                                <option value="">Select Country</option>
                                <?php
                                foreach ($countries as $country) {
                                    ?>
                                    <option value="<?php echo $country; ?>" <?php if($country == $forex['from_country'] ){ echo 'selected' ; } ?> ><?php echo $country ; ?></option>
                                    <?php
                                }
                                ?>

                            </select>
                            <select name="forex_from_currency"   >
                                <option value="">Select Currency</option>
                                <?php
                                foreach($currencies as $key => $value ){
                                    ?>
                                    <option value="<?php echo $key; ?>" <?php if($key == $forex['from_currency'] ){ echo 'selected' ; } ?> ><?php echo $value ; ?></option>
                                    <?php
//                                    $options[$country] = $country ; 
                                }
                                ?>
                            </select>

                        </div>
                    </div>

			
                    <div class="control-group ">
                        <label class="control-label" for="forex_from_currency">To<span class="required">*</span></label>
                        <div class="controls">
                            <select name="forex_to_country"  >
                                <option value="">Select Country</option>
                                <?php
                                foreach ($countries as $country) {
                                    ?>
                                    <option value="<?php echo $country; ?>" <?php if($country == $forex['to_country'] ){ echo 'selected' ; } ?> ><?php echo $country; ?></option>
                                    <?php
                                }
                                ?>

                            </select>
                            <select name="forex_to_currency"   >
                                <option value="">Select Currency</option>
                                <?php
                                foreach($currencies as $key => $value ){
                                    ?>
                                    <option value="<?php echo $key; ?>" <?php if($key == $forex['to_currency'] ){ echo 'selected' ; } ?> ><?php echo $value ; ?></option>
                                    <?php
//                                    $options[$country] = $country ; 
                                }
                                ?>
                            </select>

                        </div>
                    </div>


			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					"1" => "Active",
					"0" => "Inactive",
				);

				echo form_dropdown('forex_status', $options, set_value('forex_status', isset($forex['status']) ? $forex['status'] : ''), 'Status');
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('forex_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/forex', lang('forex_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Forex.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('forex_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('forex_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>