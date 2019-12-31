<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Parag Chemical | For cleaner environment</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>

	<div class="site-content">
		<div class="hero" data-bg-image="images/header-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1 class="hero-title"><strong>PARAG CHEMICALS<SUP>&TRADE;</SUP></strong></h1>
						<small class="hero-subtitle">For clear environment contact us for all kind of cleaners.</small>

						<img src="images/bottle.png" alt="" class="bottle">

						<div class="product-features">
							<h2>Our product list :</h2>
							<ul class="check-list">
								<li>WASH ROOMS </li>
								<li>FLOOR CARE</li>
								<li>KITCHEN CARE</li>
								<li>HOUSE KEEOING</li>
								<li>PERSONAL HYGIENE </li>
							</ul>
						</div>

						<div class="ribbon">For any <strong>querry</strong> about our product</div>
					</div>
					<div class="col-md-4">
						<div class="request-form">
							<form action="action.php" method="post">
								<h2 class="form-title">Feel free to contact us</h2>
								<p>Any querry realated to our products feel free to ask.</p>

								<div class="control">
									<input type="text" name="name" placeholder="Your name...">
									<i class="fa fa-user"></i>
								</div>
								<div class="control">
									<input type="text" name="email" placeholder="Email address...">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="control">
									<input type="text" name="phone" placeholder="Phone number...">
									<i class="fa fa-phone"></i>
								</div>
								<div class="control">
									<input type="text" name="address" placeholder="Street...">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="columned">
									<div class="control">
										<input type="text" name="city" placeholder="City...">
										<i class="fa fa-map-marker"></i>
									</div>
									<div class="control">
										<input type="text" name="zipcode" placeholder="Zip code">
									</div>
								</div>
								<div class="select control">
									<select name="country" id="">
										<option>Select Country</option>
										<!-- country -->
										<?php
										$countries =
											array(
												"AF" => "Afghanistan",
												"AL" => "Albania",
												"DZ" => "Algeria",
												"AS" => "American Samoa",
												"AD" => "Andorra",
												"AO" => "Angola",
												"AI" => "Anguilla",
												"AQ" => "Antarctica",
												"AG" => "Antigua and Barbuda",
												"AR" => "Argentina",
												"AM" => "Armenia",
												"AW" => "Aruba",
												"AU" => "Australia",
												"AT" => "Austria",
												"AZ" => "Azerbaijan",
												"BS" => "Bahamas",
												"BH" => "Bahrain",
												"BD" => "Bangladesh",
												"BB" => "Barbados",
												"BY" => "Belarus",
												"BE" => "Belgium",
												"BZ" => "Belize",
												"BJ" => "Benin",
												"BM" => "Bermuda",
												"BT" => "Bhutan",
												"BO" => "Bolivia",
												"BA" => "Bosnia and Herzegovina",
												"BW" => "Botswana",
												"BV" => "Bouvet Island",
												"BR" => "Brazil",
												"IO" => "British Indian Ocean Territory",
												"BN" => "Brunei Darussalam",
												"BG" => "Bulgaria",
												"BF" => "Burkina Faso",
												"BI" => "Burundi",
												"KH" => "Cambodia",
												"CM" => "Cameroon",
												"CA" => "Canada",
												"CV" => "Cape Verde",
												"KY" => "Cayman Islands",
												"CF" => "Central African Republic",
												"TD" => "Chad",
												"CL" => "Chile",
												"CN" => "China",
												"CX" => "Christmas Island",
												"CC" => "Cocos (Keeling) Islands",
												"CO" => "Colombia",
												"KM" => "Comoros",
												"CG" => "Congo",
												"CD" => "Congo, the Democratic Republic of the",
												"CK" => "Cook Islands",
												"CR" => "Costa Rica",
												"CI" => "Cote D'Ivoire",
												"HR" => "Croatia",
												"CU" => "Cuba",
												"CY" => "Cyprus",
												"CZ" => "Czech Republic",
												"DK" => "Denmark",
												"DJ" => "Djibouti",
												"DM" => "Dominica",
												"DO" => "Dominican Republic",
												"EC" => "Ecuador",
												"EG" => "Egypt",
												"SV" => "El Salvador",
												"GQ" => "Equatorial Guinea",
												"ER" => "Eritrea",
												"EE" => "Estonia",
												"ET" => "Ethiopia",
												"FK" => "Falkland Islands (Malvinas)",
												"FO" => "Faroe Islands",
												"FJ" => "Fiji",
												"FI" => "Finland",
												"FR" => "France",
												"GF" => "French Guiana",
												"PF" => "French Polynesia",
												"TF" => "French Southern Territories",
												"GA" => "Gabon",
												"GM" => "Gambia",
												"GE" => "Georgia",
												"DE" => "Germany",
												"GH" => "Ghana",
												"GI" => "Gibraltar",
												"GR" => "Greece",
												"GL" => "Greenland",
												"GD" => "Grenada",
												"GP" => "Guadeloupe",
												"GU" => "Guam",
												"GT" => "Guatemala",
												"GN" => "Guinea",
												"GW" => "Guinea-Bissau",
												"GY" => "Guyana",
												"HT" => "Haiti",
												"HM" => "Heard Island and Mcdonald Islands",
												"VA" => "Holy See (Vatican City State)",
												"HN" => "Honduras",
												"HK" => "Hong Kong",
												"HU" => "Hungary",
												"IS" => "Iceland",
												"IN" => "India",
												"ID" => "Indonesia",
												"IR" => "Iran, Islamic Republic of",
												"IQ" => "Iraq",
												"IE" => "Ireland",
												"IL" => "Israel",
												"IT" => "Italy",
												"JM" => "Jamaica",
												"JP" => "Japan",
												"JO" => "Jordan",
												"KZ" => "Kazakhstan",
												"KE" => "Kenya",
												"KI" => "Kiribati",
												"KP" => "Korea, Democratic People's Republic of",
												"KR" => "Korea, Republic of",
												"KW" => "Kuwait",
												"KG" => "Kyrgyzstan",
												"LA" => "Lao People's Democratic Republic",
												"LV" => "Latvia",
												"LB" => "Lebanon",
												"LS" => "Lesotho",
												"LR" => "Liberia",
												"LY" => "Libyan Arab Jamahiriya",
												"LI" => "Liechtenstein",
												"LT" => "Lithuania",
												"LU" => "Luxembourg",
												"MO" => "Macao",
												"MK" => "Macedonia, the Former Yugoslav Republic of",
												"MG" => "Madagascar",
												"MW" => "Malawi",
												"MY" => "Malaysia",
												"MV" => "Maldives",
												"ML" => "Mali",
												"MT" => "Malta",
												"MH" => "Marshall Islands",
												"MQ" => "Martinique",
												"MR" => "Mauritania",
												"MU" => "Mauritius",
												"YT" => "Mayotte",
												"MX" => "Mexico",
												"FM" => "Micronesia, Federated States of",
												"MD" => "Moldova, Republic of",
												"MC" => "Monaco",
												"MN" => "Mongolia",
												"MS" => "Montserrat",
												"MA" => "Morocco",
												"MZ" => "Mozambique",
												"MM" => "Myanmar",
												"NA" => "Namibia",
												"NR" => "Nauru",
												"NP" => "Nepal",
												"NL" => "Netherlands",
												"AN" => "Netherlands Antilles",
												"NC" => "New Caledonia",
												"NZ" => "New Zealand",
												"NI" => "Nicaragua",
												"NE" => "Niger",
												"NG" => "Nigeria",
												"NU" => "Niue",
												"NF" => "Norfolk Island",
												"MP" => "Northern Mariana Islands",
												"NO" => "Norway",
												"OM" => "Oman",
												"PK" => "Pakistan",
												"PW" => "Palau",
												"PS" => "Palestinian Territory, Occupied",
												"PA" => "Panama",
												"PG" => "Papua New Guinea",
												"PY" => "Paraguay",
												"PE" => "Peru",
												"PH" => "Philippines",
												"PN" => "Pitcairn",
												"PL" => "Poland",
												"PT" => "Portugal",
												"PR" => "Puerto Rico",
												"QA" => "Qatar",
												"RE" => "Reunion",
												"RO" => "Romania",
												"RU" => "Russian Federation",
												"RW" => "Rwanda",
												"SH" => "Saint Helena",
												"KN" => "Saint Kitts and Nevis",
												"LC" => "Saint Lucia",
												"PM" => "Saint Pierre and Miquelon",
												"VC" => "Saint Vincent and the Grenadines",
												"WS" => "Samoa",
												"SM" => "San Marino",
												"ST" => "Sao Tome and Principe",
												"SA" => "Saudi Arabia",
												"SN" => "Senegal",
												"CS" => "Serbia and Montenegro",
												"SC" => "Seychelles",
												"SL" => "Sierra Leone",
												"SG" => "Singapore",
												"SK" => "Slovakia",
												"SI" => "Slovenia",
												"SB" => "Solomon Islands",
												"SO" => "Somalia",
												"ZA" => "South Africa",
												"GS" => "South Georgia and the South Sandwich Islands",
												"ES" => "Spain",
												"LK" => "Sri Lanka",
												"SD" => "Sudan",
												"SR" => "Suriname",
												"SJ" => "Svalbard and Jan Mayen",
												"SZ" => "Swaziland",
												"SE" => "Sweden",
												"CH" => "Switzerland",
												"SY" => "Syrian Arab Republic",
												"TW" => "Taiwan, Province of China",
												"TJ" => "Tajikistan",
												"TZ" => "Tanzania, United Republic of",
												"TH" => "Thailand",
												"TL" => "Timor-Leste",
												"TG" => "Togo",
												"TK" => "Tokelau",
												"TO" => "Tonga",
												"TT" => "Trinidad and Tobago",
												"TN" => "Tunisia",
												"TR" => "Turkey",
												"TM" => "Turkmenistan",
												"TC" => "Turks and Caicos Islands",
												"TV" => "Tuvalu",
												"UG" => "Uganda",
												"UA" => "Ukraine",
												"AE" => "United Arab Emirates",
												"GB" => "United Kingdom",
												"US" => "United States",
												"UM" => "United States Minor Outlying Islands",
												"UY" => "Uruguay",
												"UZ" => "Uzbekistan",
												"VU" => "Vanuatu",
												"VE" => "Venezuela",
												"VN" => "Viet Nam",
												"VG" => "Virgin Islands, British",
												"VI" => "Virgin Islands, U.s.",
												"WF" => "Wallis and Futuna",
												"EH" => "Western Sahara",
												"YE" => "Yemen",
												"ZM" => "Zambia",
												"ZW" => "Zimbabwe"
											);
										foreach ($countries as $x => $val) {
										?>
											<option><?php echo "$x | $val<br>"; ?></option>
										<?php } ?>
										<!-- .country -->

									</select>
									<i class="fa fa-globe"></i>
								</div>

								<input type="submit" value="Insert query">
							</form>
						</div>

						<img src="images/security-logos.png" alt="pngs" class="security-logos">
					</div>
				</div>
			</div>
		</div> <!-- .hero -->

		<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-1.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG LIQUID SOAP & HAND WASH (Ready to use)</h2>
							<p>USAGE : Parag Liquid Soap lathers smoothly on hands. Claense,moistrises and leaves hand’s skin fresh with it’s fragrance. Take a drop of Parag Gentle Liquid soap on wet hands.<br>DIRECTION OF USE :Work up rich lather and rinse.<br>PACKINGS :200ml., 1 Ltr., 5 Ltr. & 20 Ltr.</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-2.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG MILKY PERFUMED CLEANER (Concentrated)</h2>
							<p>USAGES : Most sitable for Residences, Hotels, Schools-Collages, Offices & Pleasing atmosphere can be maintained in bathroom, rinary & w/c.<br> DIRECTION OF USE : For economical use add one part of Parag Milky. Perfumed Cleaner with 400 parts of water. For excellent results add only100 parts of water. Stir this solutions well before use. Keep this pack tightlyclosed after use. For external use only. Keep out of reach of children.
							</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-3.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG FLOOR CLEANER (Concentrated)</h2>
							<p>USAGES : Parag Floor Cleaner is safe on all kinds of surfaces. Its highpower formula cleans and removes germs from floors effortlessly. So whenever you need to clean floors. Uses Parag floor cleaner the 3-in-1 cleanerthat cleans, freshens and removes germs.<br>DIRECTION OF USE : For general cleaning, pour 2 Capfuls of Floor Clin floor cleaner with 5L. water in a bucket and mop floor. For stubborn stains use ParagFloor Cleaner undiluted.<br>PACKINGS : 500ml., 5 Ltr. & 20 Ltr.</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-2.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG Glass & Household Cleaner (Ready to use)</h2>
							<p>DIRECTION OF USE : Just spray and wipe, easy to use on all surfaces likeGlass, Metal, Plastic, Laminates, etc.<br>PACKINGS : 500ml., 1 Ltr., & 20 Ltr.</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-3.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG Dishwash Liquid (Concentrated)</h2>
							<p>USAGE : Parag Dishwash is ideal for stainless steel, crockery, cutlery, and non-stickcookware. Its extra power formula removes the toughest grease with ease.<br>DIRECTION OF USE : For tough grease, pour just one drop of Parag Dishwash on to a scrub sponge and apply on the utensil. For regular cleaning, dilute afew drops of Parag Dishwash in a bowl of water. Dip the scrub-sponge in thesolution and use. For reuse, just dampen the sponge and use when required.Washing cleaner Parag Dishwash leaves no scratches or residue on utensils.<br>PACKINGS : 500ml., 1 Ltr., 5 Ltr. & 20 Ltr.</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-2.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG CAR & AUTO WASH (Concentrated)</h2>
							<p>USAGE : Parag Car & Auto Wash is suitable for all automotive surface and paints. Suitable for vinyle tops, tires, wheel covers, chrome and rubber trim. Can be used on Scooters, Motorcycles, Rickshaws, Cars, Buses, Trucks andany metallic glossy finished surfaces. <br>DIRECTION OF USE : Mix 10 ml. Parag Car & Auto Wash into 4 litres of water in a bucket (use soft water if available). Using sponge or cloth, washcar thoroughly. Rinse thoroughly with clean cloth.<br>PACKINGS : 500ml., 5 Ltr. & 20 Ltr.</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-3.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG TOILET CLEANER (Concentrated)</h2>
							<p>USAGE : Hygienic Cleaning Formula that Removes Tough Stains, Germs & Deodorizes.<br>DIRECTION OF USE : Flush toilet. Remove cap, direct nozzle under toilet rim. Squeeze to apply under the rim around the sides and into water. Leave for atleast 20 minutes. Then brush lightly. Flush again. Use Parag Toilet Cleaner dailyfor clean & stain free toilet.<br>PACKINGS : 500ml., 5 Ltr. & 20 Lt</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-2.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG POLISH MULTI PURPOSE</h2>
							<p>USAGE : Car Shiner, Tyre Shiner, Dash Board Shiner.<br>DIRECTION OF USE : <br>PACKINGS : 500 gm.</p>
						</div>
					</div>
					<div class="row ingredient">
						<div class="col-md-4"><img src="images/flower-3.png" alt=""></div>
						<div class="col-md-8">
							<h2>PARAG MULTI PURPOSE POLISH CONCENTRATE</h2>
							<p>USAGE : Wood Shiner, Marble Shiner, Steel Shiner, Tile Shiner.<br>DIRECTION OF USE :<br>PACKINGS : 500 gm.</p>
						</div>
					</div>
					<!-- <div class="row ingredient">
							<div class="col-md-4"><img src="images/flower-2.png" alt=""></div>
							<div class="col-md-8">
								<h2>High quality ingredients</h2>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
							</div>
						</div> -->
				</div>
			</div>
			<div class="fullwidth-block" data-bg-color="#EEE">
				<div class="container">
					<h2 class="section-title">What people say</h2>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="testimonial">
								<img src="images/person-1.jpg" alt="" class="user-avatar">
								<p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								<cite>John Parias</cite>,<span class="title">Writer</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="testimonial">
								<img src="images/person-2.jpg" alt="" class="user-avatar">
								<p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								<cite>Sarah Dowson</cite>,<span class="title">Teacher</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="testimonial">
								<img src="images/person-3.jpg" alt="" class="user-avatar">
								<p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								<cite>Richard Marks</cite>,<span class="title">Athlete</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="testimonial">
								<img src="images/person-4.jpg" alt="" class="user-avatar">
								<p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								<cite>Susie Branson</cite>,<span class="title">Designer</span>
							</div>
						</div>
					</div> <!-- .row -->
				</div> <!-- .container -->
			</div>

			<div class="fullwidth-block cta" data-bg-image="images/footer-bg.jpg">
				<div class="container">
					<h2 class="cta-text">Looking for products <strong>don't know where to start</strong> contact us <br>and join the group of the clean environment.</h2>
					<a href="#" class="button brown">Contact us</a>
				</div>
			</div>
		</main> <!-- .main-content -->

		<footer class="site-footer">
			<div class="container">
				<p>copyright <?php echo date("Y"); ?> <a href="index.php"> Parag Chemicals<sup>&trade;</sup></a>. Designed and mentain by ODeveloper. All rights reserved.</p>

				<div class="social-links">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
				</div>
			</div>
		</footer> <!-- .site-footer -->
	</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>