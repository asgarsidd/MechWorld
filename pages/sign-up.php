<!--MechWorld Project-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>SignUp Page</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <script src="../assets/js/plugins/dropdown-list.js"></script>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0" id="error">Fill The Form Carefully</p>
                </div>
                <div class="card-body">
                  <form role="form" name="form" action="sign-up.php" method="post">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" onclick="userNameError();">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Mobile No.</label>
                      <input type="text" name="phone" class="form-control" onclick="userEmailError();">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <!--- India states -->
                      <select id="country" name="country" class="form-control" onclick="userPhoneError();">
                        <option value=" ">--Select Country--</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <!--- India states -->
                      <select class="form-control" name="state">
                        <option value=" ">--Select State--</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <select class="form-control" name="city">
                          <!-- Bihar-->
                          <option value="">--Select City--</option>
                          <option value="Amarpur">Amarpur</option>
                          <option value="Araria">Araria</option>
                          <option value="Arrah">Arrah</option>
                          <option value="Arwal">Arwal</option>
                          <option value="Asarganj">Asarganj</option>
                          <option value="Aurangabad">Aurangabad</option>
                          <option value="Bagaha">Bagaha</option>
                          <option value="Bahadurganj">Bahadurganj</option>
                          <option value="Bairagnia">Bairagnia</option>
                          <option value="Baisi">Baisi</option>
                          <option value="Bakhtiyarpur">Bakhtiyarpur</option>
                          <option value="Bangaon">Bangaon</option>
                          <option value="Banka">Banka</option>
                          <option value="Banmankhi">Banmankhi</option>
                          <option value="Bar Bigha">Bar Bigha</option>
                          <option value="Barauli">Barauli</option>
                          <option value="Barh">Barh</option>
                          <option value="Barhiya">Barhiya</option>
                          <option value="Bariarpur">Bariarpur</option>
                          <option value="Baruni">Baruni</option>
                          <option value="Begusarai">Begusarai</option>
                          <option value="Belsand">Belsand</option>
                          <option value="Bettiah">Bettiah</option>
                          <option value="Bhabhua">Bhabhua</option>
                          <option value="Bhagalpur">Bhagalpur</option>
                          <option value="Bhagirathpur">Bhagirathpur</option>
                          <option value="Bhawanipur">Bhawanipur</option>
                          <option value="Bhojpur">Bhojpur</option>
                          <option value="Bihar Sharif">Bihar Sharif</option>
                          <option value="Bihariganj">Bihariganj</option>
                          <option value="Bikramganj">Bikramganj</option>
                          <option value="Birpur">Birpur</option>
                          <option value="Buddh Gaya">Buddh Gaya</option>
                          <option value="Buxar">Buxar</option>
                          <option value="Chakia">Chakia</option>
                          <option value="Chapra">Chapra</option>
                          <option value="Chhatapur">Chhatapur</option>
                          <option value="Colgong">Colgong</option>
                          <option value="Dalsingh Sarai">Dalsingh Sarai</option>
                          <option value="Darbhanga">Darbhanga</option>
                          <option value="Daudnagar">Daudnagar</option>
                          <option value="Dehri">Dehri</option>
                          <option value="Dhaka">Dhaka</option>
                          <option value="Dighwara">Dighwara</option>
                          <option value="Dinapore">Dinapore</option>
                          <option value="Dumra">Dumra</option>
                          <option value="Dumraon">Dumraon</option>
                          <option value="Fatwa">Fatwa</option>
                          <option value="Forbesganj">Forbesganj</option>
                          <option value="Gaya">Gaya</option>
                          <option value="Ghoga">Ghoga</option>
                          <option value="Gopalganj">Gopalganj</option>
                          <option value="Hajipur">Hajipur</option>
                          <option value="Hilsa">Hilsa</option>
                          <option value="Hisua">Hisua</option>
                          <option value="Islampur">Islampur</option>
                          <option value="Jagdispur">Jagdispur</option>
                          <option value="Jahanabad">Jahanabad</option>
                          <option value="Jamalpur">Jamalpur</option>
                          <option value="Jamui">Jamui</option>
                          <option value="Jaynagar">Jaynagar</option>
                          <option value="Jehanabad">Jehanabad</option>
                          <option value="Jha-Jha">Jha-Jha</option>
                          <option value="Jhanjharpur">Jhanjharpur</option>
                          <option value="Jogbani">Jogbani</option>
                          <option value="Kaimur District">Kaimur District</option>
                          <option value="Kasba">Kasba</option>
                          <option value="Katihar">Katihar</option>
                          <option value="Khagaria">Khagaria</option>
                          <option value="Khagaul">Khagaul</option>
                          <option value="Kharagpur">Kharagpur</option>
                          <option value="Khusropur">Khusropur</option>
                          <option value="Kishanganj">Kishanganj</option>
                          <option value="Koath">Koath</option>
                          <option value="Koelwar">Koelwar</option>
                          <option value="Lakhisarai">Lakhisarai</option>
                          <option value="Lalganj">Lalganj</option>
                          <option value="Luckeesarai">Luckeesarai</option>
                          <option value="Madhepura">Madhepura</option>
                          <option value="Madhipura">Madhipura</option>
                          <option value="Madhubani">Madhubani</option>
                          <option value="Maharajgani">Maharajgani</option>
                          <option value="Mairwa">Mairwa</option>
                          <option value="Maner">Maner</option>
                          <option value="Manihari">Manihari</option>
                          <option value="Marhaura">Marhaura</option>
                          <option value="Masaurhi Buzurg">Masaurhi Buzurg</option>
                          <option value="Mohiuddinnagar">Mohiuddinnagar</option>
                          <option value="Mokameh">Mokameh</option>
                          <option value="Monghyr">Monghyr</option>
                          <option value="Mothihari">Mothihari</option>
                          <option value="Munger">Munger</option>
                          <option value="Murliganj">Murliganj</option>
                          <option value="Muzaffarpur">Muzaffarpur</option>
                          <option value="Nabinagar">Nabinagar</option>
                          <option value="Nalanda">Nalanda</option>
                          <option value="Nasriganj">Nasriganj</option>
                          <option value="Naugachhia">Naugachhia</option>
                          <option value="Nawada">Nawada</option>
                          <option value="Nirmali">Nirmali</option>
                          <option value="Pashchim Champaran">Pashchim Champaran</option>
                          <option value="Patna">Patna</option>
                          <option value="Piro">Piro</option>
                          <option value="Pupri">Pupri</option>
                          <option value="Purba Champaran">Purba Champaran</option>
                          <option value="Purnia">Purnia</option>
                          <option value="Rafiganj">Rafiganj</option>
                          <option value="Raghunathpur">Raghunathpur</option>
                          <option value="Rajgir">Rajgir</option>
                          <option value="Ramnagar">Ramnagar</option>
                          <option value="Raxaul">Raxaul</option>
                          <option value="Revelganj">Revelganj</option>
                          <option value="Rohtas">Rohtas</option>
                          <option value="Rusera">Rusera</option>
                          <option value="Sagauli">Sagauli</option>
                          <option value="Saharsa">Saharsa</option>
                          <option value="Samastipur">Samastipur</option>
                          <option value="Saran">Saran</option>
                          <option value="Shahbazpur">Shahbazpur</option>
                          <option value="Shahpur">Shahpur</option>
                          <option value="Sheikhpura">Sheikhpura</option>
                          <option value="Sheohar">Sheohar</option>
                          <option value="Sherghati">Sherghati</option>
                          <option value="Silao">Silao</option>
                          <option value="Sitamarhi">Sitamarhi</option>
                          <option value="Siwan">Siwan</option>
                          <option value="Supaul">Supaul</option>
                          <option value="Teghra">Teghra</option>
                          <option value="Tekari">Tekari</option>
                          <option value="Thakurganj">Thakurganj</option>
                          <option value="Vaishali">Vaishali</option>
                          <option value="Waris Aliganj">Waris Aliganj</option>
                      </select>
                    </div>
                     <div class="input-group input-group-outline mb-3">
                      <select class="form-control" name="qualification">
                          <!-- Bihar-->
                          <option value="">--Select Qulification--</option>
                          <option value="B. Tech">B. Tech</option>
                          <option value="M. Tech">M. Tech</option>
                          <option value="BCA">BCA</option>
                          <option value="MCA">MCA</option>
                          <option value="BE">BE</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <select class="form-control" id="exprience" name="exprience" >
                          <!-- Bihar-->
                          <option value="">--Expereance--</option>
                          <option value="6 Month">6 Month</option>
                          <option value="1 year">1 year</option>
                          <option value="2 year">2 year</option>
                          <option value="3 Year">3 Year</option>
                          <option value="4 Year">4 Year</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="submit" value="Sign Up" onclick="checkPassword();" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    function userNameError(){
      var n=document.form.name.value.length;
      if(n==0){
        document.getElementById("error").innerHTML="Name Can't be Empty";
        document.getElementById("error").style.color="red";
        document.form.name.focus();
      }
      else
        document.getElementById("error").innerHTML="";
    }
    function userEmailError(){
      var n=document.form.email.value.length;
      if(n==0){
        document.getElementById("error").innerHTML="Email Can't be Empty";
        document.getElementById("error").style.color="red";
        document.form.email.focus();
      }
      else
        document.getElementById("error").innerHTML="";
    }
     function userPhoneError(){
      var n=document.form.phone.value.length;
      if(n==0){
        document.getElementById("error").innerHTML="Mobile Number Can't be Empty";
        document.getElementById("error").style.color="red";
        document.form.phone.focus();
      }
      else
        document.getElementById("error").innerHTML="";
    }
    function checkPassword(){
      var pwd=document.form.password.value;
      var cpwd=document.form.confirmpassword.value;
      if(pwd==cpwd){
        alert("Password And Confirm Password are Not Same!")
      }
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>

  <?php
    if (isset($_POST['submit'])) {
      // code...
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $country=$_POST['country'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $qualification=$_POST['qualification'];
      $exprience=$_POST['exprience'];
      $password=$_POST['password'];
      $cpassword=$_POST['confirmpassword'];

      $con=mysqli_connect("localhost","root","","mechworld");
      if(!$con)
        die("Server connected");
      $insert_data = "INSERT INTO admin (Name, Email_Id, Password, Mobile_No, Country, State, City, Qualification, Experience)
      VALUES ('$name', '$email', '$password', '$phone', '$country', '$state', '$city', '$qualification', '$exprience')";
      $res=mysqli_query($con,$insert_data);
      if($res){
        echo "data stored successfully";
        echo $phone;
      }
      else
        echo "data not store";
    }
  ?>