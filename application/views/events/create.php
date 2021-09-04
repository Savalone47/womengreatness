<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
			<div class="box-header with-border">
				<h3 class="box-title">New Event <small></small></h3>
			</div>
			<?=validation_errors()?>
			<?=form_open_multipart('Events/create')?>
				<div class="box-body box-profile">
					<div class="col-md-3">
						<div class="pic_size" id="image-holder">
							<?php
							if(file_exists('assets/images/') && isset($user_data[0])){
								$profile_pic ='';
							}else{
								$profile_pic = 'user.png';}?>
							<center> <img class="thumb-image setpropileam" src="<?php echo base_url();?>/assets/images/<?php echo isset($profile_pic)?$profile_pic:'user.png';?>" alt="User profile picture"></center>
						</div>
						<br>
						<div class="fileUpload btn btn-success wdt-bg">
							<span>Select Picture</span>
							<input id="fileUpload" class="upload" name="ev_picture" type="file" accept="image/*" /><br />
							<input type="hidden" name="fileOld" value="<?php echo isset($user_data[0]->profile_pic)?$user_data[0]->profile_pic:'';?>" />
						</div>
					</div>
					<div class="col-md-8">
						<h3>Event Informations:</h3>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Title:</label>
							<input type="text"  name="ev_title" required="required" class="form-control" placeholder="Title">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="ev_description">Description:</label>
							<textarea class="form-control" name="ev_description"> </textarea>
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<label for="ev_cat_id">Category:</label>
							<select name="ev_cat_id" class="form-control">
								<?php 
									foreach ($event_categories as $event_category) {
								?>
									<option value="<?=$event_category['ev_cat_id']?>"><?=$event_category['ev_cat_name']?></option>
								<?php
									}
								?>
							</select>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Start Date:</label>
							<input type="date"  name="ev_date" required="required" class="form-control" 
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<label for="ev_country">Country:</label>
							<select name="ev_country" id="country-list" class="form-control"></select>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">City:</label>
							<input type="text"  name="ev_city" required="required" class="form-control" placeholder="City">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Place:</label>
							<input type="text"  name="ev_place" required="required" class="form-control" placeholder="Place">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Price:</label>
							<input type="number" name="ev_price" required="required" class="form-control">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback sub-btn-wdt pull-right" >
							<button name="submit1" type="button" id="profileSubmit" class="btn btn-success btn-md wdt-bg">Add</button>
							<!-- <div class=" pull-right">
							</div> -->
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</form>
			<!-- /.box -->
		</div>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
<script>
	window.addEventListener('DOMContentLoaded', function() {
		var user_country_code = "IN";
		var option =  '';

		//firt option
		option += '<option>country</option>';

		for(var country_code in countries){
			var selected = (country_code === user_country_code) ? ' selected' : '';
			option += '<option value="' +country_code+ '"'+selected+'>' +countries[country_code]+ '</option>';
		}
		document.getElementById('country-list').innerHTML = option;

	});
</script>
<!-- /.content-wrapper -->
<script>
	// All countries
	var countries = {
		"AF": "Afghanistan",
		"AX": "Aland Islands",
		"AL": "Albania",
		"DZ": "Algeria",
		"AS": "American Samoa",
		"AD": "Andorra",
		"AO": "Angola",
		"AI": "Anguilla",
		"AQ": "Antarctica",
		"AG": "Antigua and Barbuda",
		"AR": "Argentina",
		"AM": "Armenia",
		"AW": "Aruba",
		"AU": "Australia",
		"AT": "Austria",
		"AZ": "Azerbaijan",
		"BS": "Bahamas",
		"BH": "Bahrain",
		"BD": "Bangladesh",
		"BB": "Barbados",
		"BY": "Belarus",
		"BE": "Belgium",
		"BZ": "Belize",
		"BJ": "Benin",
		"BM": "Bermuda",
		"BT": "Bhutan",
		"BO": "Bolivia",
		"BQ": "Bonaire, Sint Eustatius and Saba",
		"BA": "Bosnia and Herzegovina",
		"BW": "Botswana",
		"BV": "Bouvet Island",
		"BR": "Brazil",
		"IO": "British Indian Ocean Territory",
		"BN": "Brunei Darussalam",
		"BG": "Bulgaria",
		"BF": "Burkina Faso",
		"BI": "Burundi",
		"KH": "Cambodia",
		"CM": "Cameroon",
		"CA": "Canada",
		"CV": "Cape Verde",
		"KY": "Cayman Islands",
		"CF": "Central African Republic",
		"TD": "Chad",
		"CL": "Chile",
		"CN": "China",
		"CX": "Christmas Island",
		"CC": "Cocos (Keeling) Islands",
		"CO": "Colombia",
		"KM": "Comoros",
		"CG": "Congo",
		"CD": "Congo, Democratic Republic of the Congo",
		"CK": "Cook Islands",
		"CR": "Costa Rica",
		"CI": "Cote D'Ivoire",
		"HR": "Croatia",
		"CU": "Cuba",
		"CW": "Curacao",
		"CY": "Cyprus",
		"CZ": "Czech Republic",
		"DK": "Denmark",
		"DJ": "Djibouti",
		"DM": "Dominica",
		"DO": "Dominican Republic",
		"EC": "Ecuador",
		"EG": "Egypt",
		"SV": "El Salvador",
		"GQ": "Equatorial Guinea",
		"ER": "Eritrea",
		"EE": "Estonia",
		"ET": "Ethiopia",
		"FK": "Falkland Islands (Malvinas)",
		"FO": "Faroe Islands",
		"FJ": "Fiji",
		"FI": "Finland",
		"FR": "France",
		"GF": "French Guiana",
		"PF": "French Polynesia",
		"TF": "French Southern Territories",
		"GA": "Gabon",
		"GM": "Gambia",
		"GE": "Georgia",
		"DE": "Germany",
		"GH": "Ghana",
		"GI": "Gibraltar",
		"GR": "Greece",
		"GL": "Greenland",
		"GD": "Grenada",
		"GP": "Guadeloupe",
		"GU": "Guam",
		"GT": "Guatemala",
		"GG": "Guernsey",
		"GN": "Guinea",
		"GW": "Guinea-Bissau",
		"GY": "Guyana",
		"HT": "Haiti",
		"HM": "Heard Island and Mcdonald Islands",
		"VA": "Holy See (Vatican City State)",
		"HN": "Honduras",
		"HK": "Hong Kong",
		"HU": "Hungary",
		"IS": "Iceland",
		"IN": "India",
		"ID": "Indonesia",
		"IR": "Iran, Islamic Republic of",
		"IQ": "Iraq",
		"IE": "Ireland",
		"IM": "Isle of Man",
		"IL": "Israel",
		"IT": "Italy",
		"JM": "Jamaica",
		"JP": "Japan",
		"JE": "Jersey",
		"JO": "Jordan",
		"KZ": "Kazakhstan",
		"KE": "Kenya",
		"KI": "Kiribati",
		"KP": "Korea, Democratic People's Republic of",
		"KR": "Korea, Republic of",
		"XK": "Kosovo",
		"KW": "Kuwait",
		"KG": "Kyrgyzstan",
		"LA": "Lao People's Democratic Republic",
		"LV": "Latvia",
		"LB": "Lebanon",
		"LS": "Lesotho",
		"LR": "Liberia",
		"LY": "Libyan Arab Jamahiriya",
		"LI": "Liechtenstein",
		"LT": "Lithuania",
		"LU": "Luxembourg",
		"MO": "Macao",
		"MK": "Macedonia, the Former Yugoslav Republic of",
		"MG": "Madagascar",
		"MW": "Malawi",
		"MY": "Malaysia",
		"MV": "Maldives",
		"ML": "Mali",
		"MT": "Malta",
		"MH": "Marshall Islands",
		"MQ": "Martinique",
		"MR": "Mauritania",
		"MU": "Mauritius",
		"YT": "Mayotte",
		"MX": "Mexico",
		"FM": "Micronesia, Federated States of",
		"MD": "Moldova, Republic of",
		"MC": "Monaco",
		"MN": "Mongolia",
		"ME": "Montenegro",
		"MS": "Montserrat",
		"MA": "Morocco",
		"MZ": "Mozambique",
		"MM": "Myanmar",
		"NA": "Namibia",
		"NR": "Nauru",
		"NP": "Nepal",
		"NL": "Netherlands",
		"AN": "Netherlands Antilles",
		"NC": "New Caledonia",
		"NZ": "New Zealand",
		"NI": "Nicaragua",
		"NE": "Niger",
		"NG": "Nigeria",
		"NU": "Niue",
		"NF": "Norfolk Island",
		"MP": "Northern Mariana Islands",
		"NO": "Norway",
		"OM": "Oman",
		"PK": "Pakistan",
		"PW": "Palau",
		"PS": "Palestinian Territory, Occupied",
		"PA": "Panama",
		"PG": "Papua New Guinea",
		"PY": "Paraguay",
		"PE": "Peru",
		"PH": "Philippines",
		"PN": "Pitcairn",
		"PL": "Poland",
		"PT": "Portugal",
		"PR": "Puerto Rico",
		"QA": "Qatar",
		"RE": "Reunion",
		"RO": "Romania",
		"RU": "Russian Federation",
		"RW": "Rwanda",
		"BL": "Saint Barthelemy",
		"SH": "Saint Helena",
		"KN": "Saint Kitts and Nevis",
		"LC": "Saint Lucia",
		"MF": "Saint Martin",
		"PM": "Saint Pierre and Miquelon",
		"VC": "Saint Vincent and the Grenadines",
		"WS": "Samoa",
		"SM": "San Marino",
		"ST": "Sao Tome and Principe",
		"SA": "Saudi Arabia",
		"SN": "Senegal",
		"RS": "Serbia",
		"CS": "Serbia and Montenegro",
		"SC": "Seychelles",
		"SL": "Sierra Leone",
		"SG": "Singapore",
		"SX": "Sint Maarten",
		"SK": "Slovakia",
		"SI": "Slovenia",
		"SB": "Solomon Islands",
		"SO": "Somalia",
		"ZA": "South Africa",
		"GS": "South Georgia and the South Sandwich Islands",
		"SS": "South Sudan",
		"ES": "Spain",
		"LK": "Sri Lanka",
		"SD": "Sudan",
		"SR": "Suriname",
		"SJ": "Svalbard and Jan Mayen",
		"SZ": "Swaziland",
		"SE": "Sweden",
		"CH": "Switzerland",
		"SY": "Syrian Arab Republic",
		"TW": "Taiwan, Province of China",
		"TJ": "Tajikistan",
		"TZ": "Tanzania, United Republic of",
		"TH": "Thailand",
		"TL": "Timor-Leste",
		"TG": "Togo",
		"TK": "Tokelau",
		"TO": "Tonga",
		"TT": "Trinidad and Tobago",
		"TN": "Tunisia",
		"TR": "Turkey",
		"TM": "Turkmenistan",
		"TC": "Turks and Caicos Islands",
		"TV": "Tuvalu",
		"UG": "Uganda",
		"UA": "Ukraine",
		"AE": "United Arab Emirates",
		"GB": "United Kingdom",
		"US": "United States",
		"UM": "United States Minor Outlying Islands",
		"UY": "Uruguay",
		"UZ": "Uzbekistan",
		"VU": "Vanuatu",
		"VE": "Venezuela",
		"VN": "Viet Nam",
		"VG": "Virgin Islands, British",
		"VI": "Virgin Islands, U.s.",
		"WF": "Wallis and Futuna",
		"EH": "Western Sahara",
		"YE": "Yemen",
		"ZM": "Zambia",
		"ZW": "Zimbabwe"
	};
</script>
