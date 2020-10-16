<!DOCTYPE html>
<html>
<head>
	<title>check out order</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/checkout.css">
	
	
	<script>
		function validateForm() {
		  var x = document.forms["myForm"]["firstname"].value;
		  var y = document.forms["myForm"]["lastname"].value;
		  var z = document.forms["myForm"]["Shipaddress"].value;
		  var a = document.forms["myForm"]["cityname"].value;
		  var b = document.forms["myForm"]["Phoneno"].value;
		  var c = document.forms["myForm"]["country"].value;
		  if (x == "") {
			alert("Name must be filled out");
			return false;
		  }
		  else if (y==""){
			  alert("Last Name must be filled out");
			return false;
		  }
		  else if (z==""){
			  alert("Address must be filled out");
			return false;
		  }
		  else if (b==""){
			  alert("Phone number must be filled out");
			return false;
		  }
		  else if (c==""){
			  alert("country number must be filled out");
			return false;
		  }
		  else 
			  alert("your form successfuly registered");
			  return true;
		}
	</script>
</head>

<body>
<div id="container">

	<h1> Checkout Order</h1>
	<div id="form-main">
		
				 
			<div class="col">
				<div class="checkoutimg">
					<img src="images/checkout1.jpg" alt="book img" width="500" height="600">
				</div>
			</div>
				
			
			<div class="col">
			
				<div class="card">
					<h2>Shipping Details</h2>
					<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="firstname" placeholder="Your name..">

						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lastname" placeholder="Your last name..">
						
						<label for="address">Shipping Address</label>
						<input type="text" id="address" name="Shipaddress" placeholder="Your Address..">
						
						<label for="city">City</label>
						<input type="text" id="city" name="cityname" placeholder="Your city name..">
						
						<label for="no">Phone No</label>
						<input type="text" id="no" name="Phoneno" placeholder="Your Phone no..">

						<label for="country">Country</label>
						<select id="country" name="country">
						 
							<option value="">Select a country</option>
							<option value="AFG">Afghanistan</option>
							<option value="ALA">Aland Islands</option>
							<option value="ALB">Albania</option>
							<option value="DZA">Algeria</option>
							<option value="ASM">American Samoa</option>
							<option value="AND">Andorra</option>
							<option value="AGO">Angola</option>
							<option value="AIA">Anguilla</option>
							<option value="ATA">Antarctica</option>
							<option value="ATG">Antigua and Barbuda</option>
							<option value="ARG">Argentina</option>
							<option value="ARM">Armenia</option>
							<option value="ABW">Aruba</option>
							<option value="AUS">Australia</option>
							<option value="AUT">Austria</option>
							<option value="AZE">Azerbaijan</option>
							<option value="BHS">Bahamas</option>
							<option value="BHR">Bahrain</option>
							<option value="BGD">Bangladesh</option>
							<option value="BRB">Barbados</option>
							<option value="BLR">Belarus</option>
							<option value="BEL">Belgium</option>
							<option value="BLZ">Belize</option>
							<option value="BEN">Benin</option>
							<option value="BMU">Bermuda</option>
							<option value="BTN">Bhutan</option>
							<option value="BOL">Bolivia</option>
							<option value="BIH">Bosnia and Herzegovina</option>
							<option value="BWA">Botswana</option>
							<option value="BVT">Bouvet Island</option>
							<option value="BRA">Brazil</option>
							<option value="IOT">British Indian Ocean Territory</option>
							<option value="BRN">Brunei Darussalam</option>
							<option value="BGR">Bulgaria</option>
							<option value="BFA">Burkina Faso</option>
							<option value="BDI">Burundi</option>
							<option value="KHM">Cambodia</option>
							<option value="CMR">Cameroon</option>
							<option value="CAN">Canada</option>
							<option value="CPV">Cape Verde</option>
							<option value="CYM">Cayman Islands</option>
							<option value="CAF">Central African Republic</option>
							<option value="TCD">Chad (T'Chad)</option>
							<option value="CHL">Chile</option>
							<option value="CHN">China</option>
							<option value="CXR">Christmas Island</option>
							<option value="CCK">Cocos (Keeling) Islands</option>
							<option value="COL">Colombia</option>
							<option value="COM">Comoros</option>
							<option value="COG">Congo, Republic Of</option>
							<option value="COD">Congo, The Democratic Republic of the (formerly Zaire)</option>
							<option value="COK">Cook Islands</option>
							<option value="CRI">Costa Rica</option>
							<option value="CIV">Cote D'Ivoire (Ivory Coast)</option>
							<option value="HRV">Croatia</option>
							<option value="CUB">Cuba</option>
							<option value="CYP">Cyprus</option>
							<option value="CZE">Czech Republic</option>
							<option value="DNK">Denmark</option>
							<option value="DJI">Djibouti</option>
							<option value="DMA">Dominica</option>
							<option value="DOM">Dominican Republic</option>
							<option value="ECU">Ecuador</option>
							<option value="EGY">Egypt</option>
							<option value="SLV">El Salvador</option>
							<option value="GNQ">Equatorial Guinea</option>
							<option value="ERI">Eritrea</option>
							<option value="EST">Estonia</option>
							<option value="ETH">Ethiopia</option>
							<option value="FRO">Faeroe Islands</option>
							<option value="FLK">Falkland Islands</option>
							<option value="FJI">Fiji</option>
							<option value="FIN">Finland</option>
							<option value="FRA">France</option>
							<option value="GUF">French Guiana</option>
							<option value="PYF">French Polynesia</option>
							<option value="ATF">French Southern Territories</option>
							<option value="GAB">Gabon</option>
							<option value="GMB">Gambia, The</option>
							<option value="GEO">Georgia</option>
							<option value="DEU">Germany</option>
							<option value="GHA">Ghana</option>
							<option value="GIB">Gibraltar</option>
							<option value="GRC">Greece</option>
							<option value="GRL">Greenland</option>
							<option value="GRD">Grenada</option>
							<option value="GLP">Guadeloupe</option>
							<option value="GUM">Guam</option>
							<option value="GTM">Guatemala</option>
							<option value="GIN">Guinea</option>
							<option value="GNB">Guinea-bissau</option>
							<option value="GUY">Guyana</option>
							<option value="HTI">Haiti</option>
							<option value="HMD">Heard Island and Mcdonald Islands</option>
							<option value="HND">Honduras</option>
							<option value="HKG">Hong Kong (Special Administrative Region of China)</option>
							<option value="HUN">Hungary</option>
							<option value="ISL">Iceland</option>
							<option value="IND">India</option>
							<option value="IDN">Indonesia</option>
							<option value="IRN">Iran (Islamic Republic of Iran)</option>
							<option value="IRQ">Iraq</option>
							<option value="IRL">Ireland</option>
							<option value="ISR">Israel</option>
							<option value="ITA">Italy</option>
							<option value="JAM">Jamaica</option>
							<option value="JPN">Japan</option>
							<option value="JOR">Jordan (Hashemite Kingdom of Jordan)</option>
							<option value="KAZ">Kazakhstan</option>
							<option value="KEN">Kenya</option>
							<option value="KIR">Kiribati</option>
							<option value="PRK">Korea (Democratic Peoples Republic pf [North] Korea)</option>
							<option value="KOR">Korea (Republic of [South] Korea)</option>
							<option value="KWT">Kuwait</option>
							<option value="KGZ">Kyrgyzstan</option>
							<option value="LAO">Lao People's Democratic Republic</option>
							<option value="LVA">Latvia</option>
							<option value="LBN">Lebanon</option>
							<option value="LSO">Lesotho</option>
							<option value="LBR">Liberia</option>
							<option value="LBY">Libya (Libyan Arab Jamahirya)</option>
							<option value="LIE">Liechtenstein (Furstentum Liechtenstein)</option>
							<option value="LTU">Lithuania</option>
							<option value="LUX">Luxembourg</option>
							<option value="MAC">Macao (Special Administrative Region of China)</option>
							<option value="MKD">Macedonia (Former Yugoslav Republic of Macedonia)</option>
							<option value="MDG">Madagascar</option>
							<option value="MWI">Malawi</option>
							<option value="MYS">Malaysia</option>
							<option value="MDV">Maldives</option>
							<option value="MLI">Mali</option>
							<option value="MLT">Malta</option>
							<option value="MHL">Marshall Islands</option>
							<option value="MTQ">Martinique</option>
							<option value="MRT">Mauritania</option>
							<option value="MUS">Mauritius</option>
							<option value="MYT">Mayotte</option>
							<option value="MEX">Mexico</option>
							<option value="FSM">Micronesia</option>
							<option value="MDA">Moldova</option>
							<option value="MCO">Monaco</option>
							<option value="MNG">Mongolia</option>
							<option value="MSR">Montserrat</option>
							<option value="MAR">Morocco</option>
							<option value="MOZ">Mozambique</option>
							<option value="MMR">Myanmar</option>
							<option value="NAM">Namibia</option>
							<option value="NRU">Nauru</option>
							<option value="NPL">Nepal</option>
							<option value="NLD">Netherlands</option>
							<option value="ANT">Netherlands Antilles</option>
							<option value="NCL">New Caledonia</option>
							<option value="NZL">New Zealand</option>
							<option value="NIC">Nicaragua</option>
							<option value="NER">Niger</option>
							<option value="NGA">Nigeria</option>
							<option value="NIU">Niue</option>
							<option value="NFK">Norfolk Island</option>
							<option value="MNP">Northern Mariana Islands</option>
							<option value="NOR">Norway</option>
							<option value="OMN">Oman</option>
							<option value="PAK">Pakistan</option>
							<option value="PLW">Palau</option>
							<option value="PSE">Palestinian Territories</option>
							<option value="PAN">Panama</option>
							<option value="PNG">Papua New Guinea</option>
							<option value="PRY">Paraguay</option>
							<option value="PER">Peru</option>
							<option value="PHL">Philippines</option>
							<option value="PCN">Pitcairn</option>
							<option value="POL">Poland</option>
							<option value="PRT">Portugal</option>
							<option value="PRI">Puerto Rico</option>
							<option value="QAT">Qatar</option>
							<option value="REU">Reunion</option>
							<option value="ROU">Romania</option>
							<option value="RUS">Russian Federation</option>
							<option value="RWA">Rwanda</option>
							<option value="SHN">Saint Helena</option>
							<option value="KNA">Saint Kitts and Nevis</option>
							<option value="LCA">Saint Lucia</option>
							<option value="SPM">Saint Pierre and Miquelon</option>
							<option value="VCT">Saint Vincent and the Grenadines</option>
							<option value="WSM">Samoa (formerly Western Samoa)</option>
							<option value="SMR">San Marino (Republic of)</option>
							<option value="STP">Sao Tome and Principe</option>
							<option value="SAU">Saudi Arabia</option>
							<option value="SEN">Senegal</option>
							<option value="SCG">Serbia and Montenegro (formerly Yugoslavia)</option>
							<option value="SYC">Seychelles</option>
							<option value="SLE">Sierra Leone</option>
							<option value="SGP">Singapore</option>
							<option value="SVK">Slovakia</option>
							<option value="SVN">Slovenia</option>
							<option value="SLB">Solomon Islands</option>
							<option value="SOM">Somalia</option>
							<option value="ZAF">South Africa</option>
							<option value="SGS">South Georgia and the South Sandwich Islands</option>
							<option value="ESP">Spain</option>
							<option value="LKA">Sri Lanka</option>
							<option value="SDN">Sudan</option>
							<option value="SUR">Suriname</option>
							<option value="SJM">Svalbard and Jan Mayen</option>
							<option value="SWZ">Swaziland</option>
							<option value="SWE">Sweden</option>
							<option value="CHE">Switzerland</option>
							<option value="SYR">Syrian Arab Republic</option>
							<option value="TWN">Taiwan</option>
							<option value="TJK">Tajikistan</option>
							<option value="TZA">Tanzania</option>
							<option value="THA">Thailand</option>
							<option value="TLS">Timor-Leste (formerly East Timor)</option>
							<option value="TGO">Togo</option>
							<option value="TKL">Tokelau</option>
							<option value="TON">Tonga</option>
							<option value="TTO">Trinidad and Tobago</option>
							<option value="TUN">Tunisia</option>
							<option value="TUR">Turkey</option>
							<option value="TKM">Turkmenistan</option>
							<option value="TCA">Turks and Caicos Islands</option>
							<option value="TUV">Tuvalu</option>
							<option value="UGA">Uganda</option>
							<option value="UKR">Ukraine</option>
							<option value="ARE">United Arab Emirates</option>
							<option value="GBR">United Kingdom</option>
							<option value="USA">United States</option>
							<option value="UMI">United States Minor Outlying Islands</option>
							<option value="URY">Uruguay</option>
							<option value="UZB">Uzbekistan</option>
							<option value="VUT">Vanuatu</option>
							<option value="VAT">Vatican City</option>
							<option value="VEN">Venezuela</option>
							<option value="VNM">Viet Nam</option>
							<option value="VGB">Virgin Islands, British</option>
							<option value="VIR">Virgin Islands, U.S.</option>
							<option value="WLF">Wallis and Futuna</option>
							<option value="ESH">Western Sahara</option>
							<option value="YEM">Yemen</option>
							<option value="ZMB">Zambia</option>
							<option value="ZWE">Zimbabwe</option>
							<option value="GGY">Guernsey</option>
							<option value="CIV">Ivory Coast Rep</option>
						</select>
						
						<a href="index.php">
						<input type="submit" value="Submit">
						</a>
					</form>
				
				</div>
			</div>
		
	
	</div>
</div>
</body>

</html>