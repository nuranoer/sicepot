<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="HTML/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="HTML/style.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="HTML/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Formulir Pemohon</title>

<style>
.file-caption.icon-visible .file-caption-name {
	font-family: 'Lato', sans-serif;
	color: #666;
}

.form-widget { position: relative; }

#checkout-same-as-billing {
	position: absolute;
	top: 10px;
	left: auto;
	right: 0;
	z-index: 5;
}
</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="/auth/formulir" class="standard-logo" data-dark-logo="HTML/images/pemohon/logoimigrasi.png"><img src="HTML/images/pemohon/logoimigrasi.png" alt="Imigrasi"></a>

						</div><!-- #logo end -->

						<div class="header-misc">


						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100">
								<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
								<path d="m 30,50 h 40"></path>
								<path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
							</svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="/dashboard">
										<div>Home</div>
									</a>

								<li class="menu-item mega-menu mega-menu-small">
									<a class="menu-link" href="#">
										<div>About</div>
									</a>
								</li>
								<li class="menu-item mega-menu mega-menu-small">
									<a class="menu-link" href="/auth/formulir">
										<div>Formulir</div>
									</a>
								</li>

							</ul>
							</li>
							</ul>
						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Formulir &amp; Shipping</h1>
				<span>Forms Widget</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Widgets</a></li>
					<li class="breadcrumb-item active" aria-current="page">Billing &amp; Shipping Form</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<label for="" id="checkout-same-as-billing">
							<input type="checkbox" class="me-2" value="1" checked>
							Same as Billing
						</label>

						<form class="row" id="checkout-form" action="include/form.php" method="post" enctype="multipart/form-data">
							<div class="form-process">
								<div class="css3-spinner">
									<div class="css3-spinner-scaler"></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row checkout-form-billing">
									<div class="col-12">
										<h3>Billing Information</h3>
									</div>
									<div class="col-12 form-group">
										<label>Name:</label>
										<input type="text" name="checkout-form-billing-name" id="checkout-form-billing-name" class="form-control required" value="" placeholder="John Doe">
									</div>
									<div class="col-12 form-group">
										<label>Email:</label>
										<input type="email" name="checkout-form-billing-email" id="checkout-form-billing-email" class="form-control required" value="" placeholder="user@company.com">
									</div>
									<div class="col-6 form-group">
										<label>Company Name:</label><br>
										<input type="text" name="checkout-form-billing-company" id="checkout-form-billing-company" class="form-control" value="" placeholder="Company Inc.">
									</div>
									<div class="col-6 form-group">
										<label>Country:</label>
										<select class="form-select required" name="checkout-form-billing-country" id="checkout-form-billing-country">
											<option value="AX">&#197;land Islands</option>
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
											<option value="GB" selected='selected'>United Kingdom (UK)</option>
											<option value="US">United States (US)</option>
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
									</div>
									<div class="col-12 form-group">
										<label>Street Address:</label>
										<input type="text" name="checkout-form-billing-street" id="checkout-form-billing-street" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Apartment, Suite, Unit etc:</label>
										<input type="text" name="checkout-form-billing-apartment" id="checkout-form-billing-apartment" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>City:</label>
										<input type="text" name="checkout-form-billing-city" id="checkout-form-billing-city" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Post Code:</label>
										<input type="text" name="checkout-form-billing-post-code" id="checkout-form-billing-post-code" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Phone:</label><br>
										<input type="text" name="checkout-form-billing-phone" id="checkout-form-billing-phone" class="form-control required" value="" placeholder="02-232-2424">
									</div>
								</div>
							</div>
							<div class="col-lg-6 mt-5 mt-lg-0">
								<div class="row checkout-form-shipping">
									<div class="col-12">
										<h3>Shipping Information</h3>
									</div>
									<div class="col-12 form-group">
										<label>Name:</label>
										<input type="text" name="checkout-form-shipping-name" id="checkout-form-shipping-name" class="form-control required" value="" placeholder="John Doe">
									</div>
									<div class="col-6 form-group">
										<label>Company Name:</label><br>
										<input type="text" name="checkout-form-shipping-company" id="checkout-form-shipping-company" class="form-control" value="" placeholder="Company Inc.">
									</div>
									<div class="col-6 form-group">
										<label>Country:</label>
										<select class="form-select required" name="checkout-form-shipping-country" id="checkout-form-shipping-country">
											<option value="AX">&#197;land Islands</option>
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
											<option value="GB" selected='selected'>United Kingdom (UK)</option>
											<option value="US">United States (US)</option>
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
									</div>
									<div class="col-12 form-group">
										<label>Street Address:</label>
										<input type="text" name="checkout-form-shipping-street" id="checkout-form-shipping-street" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Apartment, Suite, Unit etc:</label>
										<input type="text" name="checkout-form-shipping-apartment" id="checkout-form-shipping-apartment" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>City:</label>
										<input type="text" name="checkout-form-shipping-city" id="checkout-form-shipping-city" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Post Code:</label>
										<input type="text" name="checkout-form-shipping-post-code" id="checkout-form-shipping-post-code" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Phone:</label><br>
										<input type="text" name="checkout-form-shipping-phone" id="checkout-form-shipping-phone" class="form-control required" value="" placeholder="02-232-2424">
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-none">
									<input type="text" id="checkout-form-botcheck" name="checkout-form-botcheck" value="" />
								</div>
								<div class="form-group center">
									<button type="submit" name="checkout-form-submit" class="btn btn-lg btn-secondary">Checkout</button>
								</div>
								<input type="hidden" name="prefix" value="checkout-form-">
							</div>
						</form>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget clearfix">

										<img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links clearfix">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
											<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
											<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget clearfix">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="icon-email2"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; Kantor Imigrasi Kelas II Non TPI Kediri<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="HTML/js/jquery.js"></script>
	<script src="HTML/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="HTML/js/functions.js"></script>

	<script>
		var checkboxSame = $('#checkout-same-as-billing input[type=checkbox]');

		function sameAsBilling() {
			if( checkboxSame.is(':checked') ) {
				jQuery('.checkout-form-shipping').find(':input').prop('disabled', true);
			} else {
				jQuery('.checkout-form-shipping').find(':input').prop('disabled', false);
			}
		}

		jQuery(document).ready( function(){
			sameAsBilling();

			checkboxSame.on('change', function(){
				sameAsBilling();
			});

			jQuery('.checkout-form-billing').find(':input').on('change', function(){
				var billing		= $(this).attr('id'),
					billingVal	= $(this).val(),
					shipping	= billing.replace('billing', 'shipping'),
					shippingEl	= $('#' + shipping);

					if( shippingEl.length > 0 ) {
						shippingEl.val( billingVal );
					}
			});
		});
	</script>

</body>
</html>