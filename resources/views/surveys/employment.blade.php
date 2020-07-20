@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.surveys.svynavbar')

@section('content')
<!-- Add Logout Message and Survey Instructions Window -->

<body class="bg-white font-family-karla">

    <!-- component -->
    <div class="bg-white min-h-screen pt-2 my-2">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <form class="mt-6 pt-4">
                    <h2 class="text-2xl text-gray-900">Employment Information:</h2>
                    <div class="flex items-center justify-between mt-4">
                        <div class='w-full md:w-1/2  mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                for='grid-text-1'>What is your occupation?</label>
                            <input
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                id='grid-text-1' type='text' placeholder='Enter occupation' required>
                        </div>
                    </div>
                    <div class='w-full md:w-full mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Are you a
                            resident employee
                            or rotational worker?</label>
                        <div class="text-sm text-gray-700">
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="employment_type"
                                    value="resident">
                                <span class="ml-2">Resident</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="employment_type" value="rotational">
                                <span class="ml-2">Rotational</span>
                            </label>
                        </div>
                    </div>
                    <div class='w-full md:w-full mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Which
                            countries have you worked in?</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <select
                                class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded"
                                class="form-multiselect block">
                                <option value="">-- select --</option>
                                <option value="AFG">Afghanistan</option>
                                <option value="ALA">Åland Islands</option>
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
                                <option value="BOL">Bolivia, Plurinational State of</option>
                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
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
                                <option value="TCD">Chad</option>
                                <option value="CHL">Chile</option>
                                <option value="CHN">China</option>
                                <option value="CXR">Christmas Island</option>
                                <option value="CCK">Cocos (Keeling) Islands</option>
                                <option value="COL">Colombia</option>
                                <option value="COM">Comoros</option>
                                <option value="COG">Congo</option>
                                <option value="COD">Congo, the Democratic Republic of the</option>
                                <option value="COK">Cook Islands</option>
                                <option value="CRI">Costa Rica</option>
                                <option value="CIV">Côte d'Ivoire</option>
                                <option value="HRV">Croatia</option>
                                <option value="CUB">Cuba</option>
                                <option value="CUW">Curaçao</option>
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
                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                <option value="FRO">Faroe Islands</option>
                                <option value="FJI">Fiji</option>
                                <option value="FIN">Finland</option>
                                <option value="FRA">France</option>
                                <option value="GUF">French Guiana</option>
                                <option value="PYF">French Polynesia</option>
                                <option value="ATF">French Southern Territories</option>
                                <option value="GAB">Gabon</option>
                                <option value="GMB">Gambia</option>
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
                                <option value="GGY">Guernsey</option>
                                <option value="GIN">Guinea</option>
                                <option value="GNB">Guinea-Bissau</option>
                                <option value="GUY">Guyana</option>
                                <option value="HTI">Haiti</option>
                                <option value="HMD">Heard Island and McDonald Islands</option>
                                <option value="VAT">Holy See (Vatican City State)</option>
                                <option value="HND">Honduras</option>
                                <option value="HKG">Hong Kong</option>
                                <option value="HUN">Hungary</option>
                                <option value="ISL">Iceland</option>
                                <option value="IND">India</option>
                                <option value="IDN">Indonesia</option>
                                <option value="IRN">Iran, Islamic Republic of</option>
                                <option value="IRQ">Iraq</option>
                                <option value="IRL">Ireland</option>
                                <option value="IMN">Isle of Man</option>
                                <option value="ISR">Israel</option>
                                <option value="ITA">Italy</option>
                                <option value="JAM">Jamaica</option>
                                <option value="JPN">Japan</option>
                                <option value="JEY">Jersey</option>
                                <option value="JOR">Jordan</option>
                                <option value="KAZ">Kazakhstan</option>
                                <option value="KEN">Kenya</option>
                                <option value="KIR">Kiribati</option>
                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                <option value="KOR">Korea, Republic of</option>
                                <option value="KWT">Kuwait</option>
                                <option value="KGZ">Kyrgyzstan</option>
                                <option value="LAO">Lao People's Democratic Republic</option>
                                <option value="LVA">Latvia</option>
                                <option value="LBN">Lebanon</option>
                                <option value="LSO">Lesotho</option>
                                <option value="LBR">Liberia</option>
                                <option value="LBY">Libya</option>
                                <option value="LIE">Liechtenstein</option>
                                <option value="LTU">Lithuania</option>
                                <option value="LUX">Luxembourg</option>
                                <option value="MAC">Macao</option>
                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
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
                                <option value="FSM">Micronesia, Federated States of</option>
                                <option value="MDA">Moldova, Republic of</option>
                                <option value="MCO">Monaco</option>
                                <option value="MNG">Mongolia</option>
                                <option value="MNE">Montenegro</option>
                                <option value="MSR">Montserrat</option>
                                <option value="MAR">Morocco</option>
                                <option value="MOZ">Mozambique</option>
                                <option value="MMR">Myanmar</option>
                                <option value="NAM">Namibia</option>
                                <option value="NRU">Nauru</option>
                                <option value="NPL">Nepal</option>
                                <option value="NLD">Netherlands</option>
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
                                <option value="PSE">Palestinian Territory, Occupied</option>
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
                                <option value="REU">Réunion</option>
                                <option value="ROU">Romania</option>
                                <option value="RUS">Russian Federation</option>
                                <option value="RWA">Rwanda</option>
                                <option value="BLM">Saint Barthélemy</option>
                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KNA">Saint Kitts and Nevis</option>
                                <option value="LCA">Saint Lucia</option>
                                <option value="MAF">Saint Martin (French part)</option>
                                <option value="SPM">Saint Pierre and Miquelon</option>
                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                <option value="WSM">Samoa</option>
                                <option value="SMR">San Marino</option>
                                <option value="STP">Sao Tome and Principe</option>
                                <option value="SAU">Saudi Arabia</option>
                                <option value="SEN">Senegal</option>
                                <option value="SRB">Serbia</option>
                                <option value="SYC">Seychelles</option>
                                <option value="SLE">Sierra Leone</option>
                                <option value="SGP">Singapore</option>
                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                <option value="SVK">Slovakia</option>
                                <option value="SVN">Slovenia</option>
                                <option value="SLB">Solomon Islands</option>
                                <option value="SOM">Somalia</option>
                                <option value="ZAF">South Africa</option>
                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                <option value="SSD">South Sudan</option>
                                <option value="ESP">Spain</option>
                                <option value="LKA">Sri Lanka</option>
                                <option value="SDN">Sudan</option>
                                <option value="SUR">Suriname</option>
                                <option value="SJM">Svalbard and Jan Mayen</option>
                                <option value="SWZ">Swaziland</option>
                                <option value="SWE">Sweden</option>
                                <option value="CHE">Switzerland</option>
                                <option value="SYR">Syrian Arab Republic</option>
                                <option value="TWN">Taiwan, Province of China</option>
                                <option value="TJK">Tajikistan</option>
                                <option value="TZA">Tanzania, United Republic of</option>
                                <option value="THA">Thailand</option>
                                <option value="TLS">Timor-Leste</option>
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
                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                <option value="VNM">Viet Nam</option>
                                <option value="VGB">Virgin Islands, British</option>
                                <option value="VIR">Virgin Islands, U.S.</option>
                                <option value="WLF">Wallis and Futuna</option>
                                <option value="ESH">Western Sahara</option>
                                <option value="YEM">Yemen</option>
                                <option value="ZMB">Zambia</option>
                                <option value="ZWE">Zimbabwe</option>
                            </select>
                            <div
                                class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>



                    <div class="personal w-full pt-4">
                        <div class="flex justify-end">
                            <button
                                class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3"
                                type="submit"><a href="family">Continue</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<!-- 

<div class='w-full md:w-full mb-6'>
    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>DropDown</label>
    <div class="flex-shrink w-full inline-block relative">
        <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">

        </select>
        <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</div> 

Fill In
                        <div class='w-full md:w-full mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                for='grid-text-1'>email address</label>
                            <input
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                id='grid-text-1' type='text' placeholder='Enter email' required>
                        </div>




    <hr class="bg-gray-300 my-12">
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Family Information</h2>
    <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
        <ul>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="married">Are you Married or in a domestic partnership?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="married" value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="married" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="spouse_nationality">What is his / her nationality</label>
                    <div class="w-1/3">
                        <select name="spouse_nationality" class="form-select block w-full focus:bg-white"
                            id="spouse_nationality">
                            <option value="">-- select one --</option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="antiguans">Antiguans</option>
                            <option value="argentinean">Argentinean</option>
                            <option value="armenian">Armenian</option>
                            <option value="australian">Australian</option>
                            <option value="austrian">Austrian</option>
                            <option value="azerbaijani">Azerbaijani</option>
                            <option value="bahamian">Bahamian</option>
                            <option value="bahraini">Bahraini</option>
                            <option value="bangladeshi">Bangladeshi</option>
                            <option value="barbadian">Barbadian</option>
                            <option value="barbudans">Barbudans</option>
                            <option value="batswana">Batswana</option>
                            <option value="belarusian">Belarusian</option>
                            <option value="belgian">Belgian</option>
                            <option value="belizean">Belizean</option>
                            <option value="beninese">Beninese</option>
                            <option value="bhutanese">Bhutanese</option>
                            <option value="bolivian">Bolivian</option>
                            <option value="bosnian">Bosnian</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="british">British</option>
                            <option value="bruneian">Bruneian</option>
                            <option value="bulgarian">Bulgarian</option>
                            <option value="burkinabe">Burkinabe</option>
                            <option value="burmese">Burmese</option>
                            <option value="burundian">Burundian</option>
                            <option value="cambodian">Cambodian</option>
                            <option value="cameroonian">Cameroonian</option>
                            <option value="canadian">Canadian</option>
                            <option value="cape verdean">Cape Verdean</option>
                            <option value="central african">Central African</option>
                            <option value="chadian">Chadian</option>
                            <option value="chilean">Chilean</option>
                            <option value="chinese">Chinese</option>
                            <option value="colombian">Colombian</option>
                            <option value="comoran">Comoran</option>
                            <option value="congolese">Congolese</option>
                            <option value="costa rican">Costa Rican</option>
                            <option value="croatian">Croatian</option>
                            <option value="cuban">Cuban</option>
                            <option value="cypriot">Cypriot</option>
                            <option value="czech">Czech</option>
                            <option value="danish">Danish</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican">Dominican</option>
                            <option value="dutch">Dutch</option>
                            <option value="east timorese">East Timorese</option>
                            <option value="ecuadorean">Ecuadorean</option>
                            <option value="egyptian">Egyptian</option>
                            <option value="emirian">Emirian</option>
                            <option value="equatorial guinean">Equatorial Guinean</option>
                            <option value="eritrean">Eritrean</option>
                            <option value="estonian">Estonian</option>
                            <option value="ethiopian">Ethiopian</option>
                            <option value="fijian">Fijian</option>
                            <option value="filipino">Filipino</option>
                            <option value="finnish">Finnish</option>
                            <option value="french">French</option>
                            <option value="gabonese">Gabonese</option>
                            <option value="gambian">Gambian</option>
                            <option value="georgian">Georgian</option>
                            <option value="german">German</option>
                            <option value="ghanaian">Ghanaian</option>
                            <option value="greek">Greek</option>
                            <option value="grenadian">Grenadian</option>
                            <option value="guatemalan">Guatemalan</option>
                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                            <option value="guinean">Guinean</option>
                            <option value="guyanese">Guyanese</option>
                            <option value="haitian">Haitian</option>
                            <option value="herzegovinian">Herzegovinian</option>
                            <option value="honduran">Honduran</option>
                            <option value="hungarian">Hungarian</option>
                            <option value="icelander">Icelander</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="ivorian">Ivorian</option>
                            <option value="jamaican">Jamaican</option>
                            <option value="japanese">Japanese</option>
                            <option value="jordanian">Jordanian</option>
                            <option value="kazakhstani">Kazakhstani</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                            <option value="kuwaiti">Kuwaiti</option>
                            <option value="kyrgyz">Kyrgyz</option>
                            <option value="laotian">Laotian</option>
                            <option value="latvian">Latvian</option>
                            <option value="lebanese">Lebanese</option>
                            <option value="liberian">Liberian</option>
                            <option value="libyan">Libyan</option>
                            <option value="liechtensteiner">Liechtensteiner</option>
                            <option value="lithuanian">Lithuanian</option>
                            <option value="luxembourger">Luxembourger</option>
                            <option value="macedonian">Macedonian</option>
                            <option value="malagasy">Malagasy</option>
                            <option value="malawian">Malawian</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="maldivan">Maldivan</option>
                            <option value="malian">Malian</option>
                            <option value="maltese">Maltese</option>
                            <option value="marshallese">Marshallese</option>
                            <option value="mauritanian">Mauritanian</option>
                            <option value="mauritian">Mauritian</option>
                            <option value="mexican">Mexican</option>
                            <option value="micronesian">Micronesian</option>
                            <option value="moldovan">Moldovan</option>
                            <option value="monacan">Monacan</option>
                            <option value="mongolian">Mongolian</option>
                            <option value="moroccan">Moroccan</option>
                            <option value="mosotho">Mosotho</option>
                            <option value="motswana">Motswana</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="namibian">Namibian</option>
                            <option value="nauruan">Nauruan</option>
                            <option value="nepalese">Nepalese</option>
                            <option value="new zealander">New Zealander</option>
                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                            <option value="nicaraguan">Nicaraguan</option>
                            <option value="nigerien">Nigerien</option>
                            <option value="north korean">North Korean</option>
                            <option value="northern irish">Northern Irish</option>
                            <option value="norwegian">Norwegian</option>
                            <option value="omani">Omani</option>
                            <option value="pakistani">Pakistani</option>
                            <option value="palauan">Palauan</option>
                            <option value="panamanian">Panamanian</option>
                            <option value="papua new guinean">Papua New Guinean</option>
                            <option value="paraguayan">Paraguayan</option>
                            <option value="peruvian">Peruvian</option>
                            <option value="polish">Polish</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="qatari">Qatari</option>
                            <option value="romanian">Romanian</option>
                            <option value="russian">Russian</option>
                            <option value="rwandan">Rwandan</option>
                            <option value="saint lucian">Saint Lucian</option>
                            <option value="salvadoran">Salvadoran</option>
                            <option value="samoan">Samoan</option>
                            <option value="san marinese">San Marinese</option>
                            <option value="sao tomean">Sao Tomean</option>
                            <option value="saudi">Saudi</option>
                            <option value="scottish">Scottish</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="serbian">Serbian</option>
                            <option value="seychellois">Seychellois</option>
                            <option value="sierra leonean">Sierra Leonean</option>
                            <option value="singaporean">Singaporean</option>
                            <option value="slovakian">Slovakian</option>
                            <option value="slovenian">Slovenian</option>
                            <option value="solomon islander">Solomon Islander</option>
                            <option value="somali">Somali</option>
                            <option value="south african">South African</option>
                            <option value="south korean">South Korean</option>
                            <option value="spanish">Spanish</option>
                            <option value="sri lankan">Sri Lankan</option>
                            <option value="sudanese">Sudanese</option>
                            <option value="surinamer">Surinamer</option>
                            <option value="swazi">Swazi</option>
                            <option value="swedish">Swedish</option>
                            <option value="swiss">Swiss</option>
                            <option value="syrian">Syrian</option>
                            <option value="taiwanese">Taiwanese</option>
                            <option value="tajik">Tajik</option>
                            <option value="tanzanian">Tanzanian</option>
                            <option value="thai">Thai</option>
                            <option value="togolese">Togolese</option>
                            <option value="tongan">Tongan</option>
                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                            <option value="tunisian">Tunisian</option>
                            <option value="turkish">Turkish</option>
                            <option value="tuvaluan">Tuvaluan</option>
                            <option value="ugandan">Ugandan</option>
                            <option value="ukrainian">Ukrainian</option>
                            <option value="uruguayan">Uruguayan</option>
                            <option value="uzbekistani">Uzbekistani</option>
                            <option value="venezuelan">Venezuelan</option>
                            <option value="vietnamese">Vietnamese</option>
                            <option value="welsh">Welsh</option>
                            <option value="yemenite">Yemenite</option>
                            <option value="zambian">Zambian</option>
                            <option value="zimbabwean">Zimbabwean</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="spouse_languages_speak">What languages does your spouse / partner
                        speak?</label>
                    <div class="w-1/3">
                        <select name="spouse_languages_speak" class="form-select block w-full focus:bg-white"
                            class="form-multiselect block" multiple id="spouse_languages_speak">
                            <option value="">-- select one --</option>
                            <option value="Afrikaans">Afrikaans</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Basque">Basque</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Catalan">Catalan</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Dutch">Dutch</option>
                            <option value="English">English</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Greek">Greek</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Hebrew">Hebrew</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelandic">Icelandic</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Irish">Irish</option>
                            <option value="Italian">Italian</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Javanese">Javanese</option>
                            <option value="Korean">Korean</option>
                            <option value="Latin">Latin</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malay">Malay</option>
                            <option value="Malayalam">Malayalam</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Maori">Maori</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Nepali">Nepali</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Persian">Persian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Quechua">Quechua</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Samoan">Samoan</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Slovak">Slovak</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Swahili">Swahili</option>
                            <option value="Swedish ">Swedish </option>
                            <option value="Tamil">Tamil</option>
                            <option value="Tatar">Tatar</option>
                            <option value="Telugu">Telugu</option>
                            <option value="Thai">Thai</option>
                            <option value="Tibetan">Tibetan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Ukrainian">Ukrainian</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="spouse_languages_read">What languages does your spouse / partner read
                        /
                        write?</label>
                    <div class="w-1/3">
                        <select name="spouse_languages_read" class="form-select block w-full focus:bg-white"
                            class="form-multiselect block" multiple id="spouse_languages_read">
                            <option value="">-- select one --</option>
                            <option value="Afrikaans">Afrikaans</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Basque">Basque</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Catalan">Catalan</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Dutch">Dutch</option>
                            <option value="English">English</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Greek">Greek</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Hebrew">Hebrew</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelandic">Icelandic</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Irish">Irish</option>
                            <option value="Italian">Italian</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Javanese">Javanese</option>
                            <option value="Korean">Korean</option>
                            <option value="Latin">Latin</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malay">Malay</option>
                            <option value="Malayalam">Malayalam</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Maori">Maori</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Nepali">Nepali</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Persian">Persian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Quechua">Quechua</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Samoan">Samoan</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Slovak">Slovak</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Swahili">Swahili</option>
                            <option value="Swedish ">Swedish </option>
                            <option value="Tamil">Tamil</option>
                            <option value="Tatar">Tatar</option>
                            <option value="Telugu">Telugu</option>
                            <option value="Thai">Thai</option>
                            <option value="Tibetan">Tibetan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Ukrainian">Ukrainian</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="spouse_work">Is your spouse employed?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="spouse_work" value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="spouse_work" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children">Do you have children?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="children" value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="children" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children_birth_place">Where were your children born?</label>
                    <div class="w-1/3">
                        <select name="children_birth_place" class="form-select block w-full focus:bg-white"
                            id="children_birth_place">
                            <option value="">-- select one --</option>
                            <option value="AFG">Afghanistan</option>
                            <option value="ALA">Åland Islands</option>
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
                            <option value="BOL">Bolivia, Plurinational State of</option>
                            <option value="BES">Bonaire, Sint Eustatius and Saba</option>
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
                            <option value="TCD">Chad</option>
                            <option value="CHL">Chile</option>
                            <option value="CHN">China</option>
                            <option value="CXR">Christmas Island</option>
                            <option value="CCK">Cocos (Keeling) Islands</option>
                            <option value="COL">Colombia</option>
                            <option value="COM">Comoros</option>
                            <option value="COG">Congo</option>
                            <option value="COD">Congo, the Democratic Republic of the</option>
                            <option value="COK">Cook Islands</option>
                            <option value="CRI">Costa Rica</option>
                            <option value="CIV">Côte d'Ivoire</option>
                            <option value="HRV">Croatia</option>
                            <option value="CUB">Cuba</option>
                            <option value="CUW">Curaçao</option>
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
                            <option value="FLK">Falkland Islands (Malvinas)</option>
                            <option value="FRO">Faroe Islands</option>
                            <option value="FJI">Fiji</option>
                            <option value="FIN">Finland</option>
                            <option value="FRA">France</option>
                            <option value="GUF">French Guiana</option>
                            <option value="PYF">French Polynesia</option>
                            <option value="ATF">French Southern Territories</option>
                            <option value="GAB">Gabon</option>
                            <option value="GMB">Gambia</option>
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
                            <option value="GGY">Guernsey</option>
                            <option value="GIN">Guinea</option>
                            <option value="GNB">Guinea-Bissau</option>
                            <option value="GUY">Guyana</option>
                            <option value="HTI">Haiti</option>
                            <option value="HMD">Heard Island and McDonald Islands</option>
                            <option value="VAT">Holy See (Vatican City State)</option>
                            <option value="HND">Honduras</option>
                            <option value="HKG">Hong Kong</option>
                            <option value="HUN">Hungary</option>
                            <option value="ISL">Iceland</option>
                            <option value="IND">India</option>
                            <option value="IDN">Indonesia</option>
                            <option value="IRN">Iran, Islamic Republic of</option>
                            <option value="IRQ">Iraq</option>
                            <option value="IRL">Ireland</option>
                            <option value="IMN">Isle of Man</option>
                            <option value="ISR">Israel</option>
                            <option value="ITA">Italy</option>
                            <option value="JAM">Jamaica</option>
                            <option value="JPN">Japan</option>
                            <option value="JEY">Jersey</option>
                            <option value="JOR">Jordan</option>
                            <option value="KAZ">Kazakhstan</option>
                            <option value="KEN">Kenya</option>
                            <option value="KIR">Kiribati</option>
                            <option value="PRK">Korea, Democratic People's Republic of</option>
                            <option value="KOR">Korea, Republic of</option>
                            <option value="KWT">Kuwait</option>
                            <option value="KGZ">Kyrgyzstan</option>
                            <option value="LAO">Lao People's Democratic Republic</option>
                            <option value="LVA">Latvia</option>
                            <option value="LBN">Lebanon</option>
                            <option value="LSO">Lesotho</option>
                            <option value="LBR">Liberia</option>
                            <option value="LBY">Libya</option>
                            <option value="LIE">Liechtenstein</option>
                            <option value="LTU">Lithuania</option>
                            <option value="LUX">Luxembourg</option>
                            <option value="MAC">Macao</option>
                            <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
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
                            <option value="FSM">Micronesia, Federated States of</option>
                            <option value="MDA">Moldova, Republic of</option>
                            <option value="MCO">Monaco</option>
                            <option value="MNG">Mongolia</option>
                            <option value="MNE">Montenegro</option>
                            <option value="MSR">Montserrat</option>
                            <option value="MAR">Morocco</option>
                            <option value="MOZ">Mozambique</option>
                            <option value="MMR">Myanmar</option>
                            <option value="NAM">Namibia</option>
                            <option value="NRU">Nauru</option>
                            <option value="NPL">Nepal</option>
                            <option value="NLD">Netherlands</option>
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
                            <option value="PSE">Palestinian Territory, Occupied</option>
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
                            <option value="REU">Réunion</option>
                            <option value="ROU">Romania</option>
                            <option value="RUS">Russian Federation</option>
                            <option value="RWA">Rwanda</option>
                            <option value="BLM">Saint Barthélemy</option>
                            <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KNA">Saint Kitts and Nevis</option>
                            <option value="LCA">Saint Lucia</option>
                            <option value="MAF">Saint Martin (French part)</option>
                            <option value="SPM">Saint Pierre and Miquelon</option>
                            <option value="VCT">Saint Vincent and the Grenadines</option>
                            <option value="WSM">Samoa</option>
                            <option value="SMR">San Marino</option>
                            <option value="STP">Sao Tome and Principe</option>
                            <option value="SAU">Saudi Arabia</option>
                            <option value="SEN">Senegal</option>
                            <option value="SRB">Serbia</option>
                            <option value="SYC">Seychelles</option>
                            <option value="SLE">Sierra Leone</option>
                            <option value="SGP">Singapore</option>
                            <option value="SXM">Sint Maarten (Dutch part)</option>
                            <option value="SVK">Slovakia</option>
                            <option value="SVN">Slovenia</option>
                            <option value="SLB">Solomon Islands</option>
                            <option value="SOM">Somalia</option>
                            <option value="ZAF">South Africa</option>
                            <option value="SGS">South Georgia and the South Sandwich Islands</option>
                            <option value="SSD">South Sudan</option>
                            <option value="ESP">Spain</option>
                            <option value="LKA">Sri Lanka</option>
                            <option value="SDN">Sudan</option>
                            <option value="SUR">Suriname</option>
                            <option value="SJM">Svalbard and Jan Mayen</option>
                            <option value="SWZ">Swaziland</option>
                            <option value="SWE">Sweden</option>
                            <option value="CHE">Switzerland</option>
                            <option value="SYR">Syrian Arab Republic</option>
                            <option value="TWN">Taiwan, Province of China</option>
                            <option value="TJK">Tajikistan</option>
                            <option value="TZA">Tanzania, United Republic of</option>
                            <option value="THA">Thailand</option>
                            <option value="TLS">Timor-Leste</option>
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
                            <option value="VEN">Venezuela, Bolivarian Republic of</option>
                            <option value="VNM">Viet Nam</option>
                            <option value="VGB">Virgin Islands, British</option>
                            <option value="VIR">Virgin Islands, U.S.</option>
                            <option value="WLF">Wallis and Futuna</option>
                            <option value="ESH">Western Sahara</option>
                            <option value="YEM">Yemen</option>
                            <option value="ZMB">Zambia</option>
                            <option value="ZWE">Zimbabwe</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children_residence">Do your children live with you?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="children_residence"
                                value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="children_residence" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children_schools">Do your children attend public or private
                        schools?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="children_schools"
                                value="yes">
                            <span class="ml-2">Public</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="children_schools" value="No">
                            <span class="ml-2">Private</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children_languages_speak">What languages do your children
                        speak?</label>
                    <div class="w-1/3">
                        <select name="children_languages_speak" class="form-select block w-full focus:bg-white"
                            class="form-multiselect block" multiple id="children_languages_speak">
                            <option value="">-- select one --</option>
                            <option value="Afrikaans">Afrikaans</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Basque">Basque</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Catalan">Catalan</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Dutch">Dutch</option>
                            <option value="English">English</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Greek">Greek</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Hebrew">Hebrew</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelandic">Icelandic</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Irish">Irish</option>
                            <option value="Italian">Italian</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Javanese">Javanese</option>
                            <option value="Korean">Korean</option>
                            <option value="Latin">Latin</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malay">Malay</option>
                            <option value="Malayalam">Malayalam</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Maori">Maori</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Nepali">Nepali</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Persian">Persian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Quechua">Quechua</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Samoan">Samoan</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Slovak">Slovak</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Swahili">Swahili</option>
                            <option value="Swedish ">Swedish </option>
                            <option value="Tamil">Tamil</option>
                            <option value="Tatar">Tatar</option>
                            <option value="Telugu">Telugu</option>
                            <option value="Thai">Thai</option>
                            <option value="Tibetan">Tibetan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Ukrainian">Ukrainian</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children_languages_read">What languages do your children read /
                        write?</label>
                    <div class="w-1/3">
                        <select name="children_languages_read" class="form-select block w-full focus:bg-white"
                            class="form-multiselect block" multiple id="children_languages_read">
                            <option value="">-- select one --</option>
                            <option value="Afrikaans">Afrikaans</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Basque">Basque</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Catalan">Catalan</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Dutch">Dutch</option>
                            <option value="English">English</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Greek">Greek</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Hebrew">Hebrew</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelandic">Icelandic</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Irish">Irish</option>
                            <option value="Italian">Italian</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Javanese">Javanese</option>
                            <option value="Korean">Korean</option>
                            <option value="Latin">Latin</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malay">Malay</option>
                            <option value="Malayalam">Malayalam</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Maori">Maori</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Nepali">Nepali</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Persian">Persian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Quechua">Quechua</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Samoan">Samoan</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Slovak">Slovak</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Swahili">Swahili</option>
                            <option value="Swedish ">Swedish </option>
                            <option value="Tamil">Tamil</option>
                            <option value="Tatar">Tatar</option>
                            <option value="Telugu">Telugu</option>
                            <option value="Thai">Thai</option>
                            <option value="Tibetan">Tibetan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Ukrainian">Ukrainian</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="children_activities">Are your children involved in any
                        extracurricular activities?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="children_activities"
                                value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="children_activities" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <hr class="bg-gray-300 my-12">
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Education Information</h2>
    <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
        <ul>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="education">What is your highest level of eduation?</label>
                    <div class="w-1/3">
                        <select name="education" class="form-select block w-full focus:bg-white" id="education">
                            <option value="">-- select one --</option>
                            <option value="high_school">High School</option>
                            <option value="trade_school">Trade School</option>
                            <option value="university_bachelor">University Bachelor Degree</option>
                            <option value="university_master">University Master Degree</option>
                            <option value="university_doctoral">University Doctoral Degree</option>
                        </select>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <hr class="bg-gray-300 my-12">
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Expatriate Experience</h2>
    <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
        <ul>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="house_ownership">Do you own or rent your house?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="house_ownership"
                                value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="house_ownership" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="expat_community_activities">Are you involved in community activities
                        in
                        your country of residence?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="expat_community_activities"
                                value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="expat_community_activities" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="spouse_community_activities">Is your spouse / partner involved in
                        community activities in
                        your country of residence?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600"
                                name="spouse_community_activities" value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="spouse_community_activities" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="home_visit">How often do you visit your home country?</label>
                    <div class="w-1/3">
                        <select name="home_visit" class="form-select block w-full focus:bg-white" id="home_visit">
                            <option value="">-- select one --</option>
                            <option value="often">
                                Often</option>
                            <option value="rarely">
                                Rarely</option>
                            <option value="never">
                                Never</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="monthly_expenses">What are your average monthly expenses?</label>
                    <div class="w-1/3">
                        <select name="monthly_expenses" class="form-select block w-full focus:bg-white"
                            id="monthly_expenses">
                            <option value="">-- select one --</option>
                            <option value="less_1000">
                                Less than 1,000 USD</option>
                            <option value="1000_2000">
                                1,000 - 2,000 USD</option>
                            <option value="1000_2000">
                                2,001 - 3,000 USD</option>
                            <option value="1000_2000">
                                Greater than 3,000 USD</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="house_size">What is the size of your house in square meters?</label>
                    <div class="w-1/3">
                        <select name="monthly_expenses" class="form-select block w-full focus:bg-white"
                            id="monthly_expenses">
                            <option value="">-- select one --</option>
                            <option value="less_than_50">
                                Less than 50 sqm</option>
                            <option value="50_100">
                                50 - 100 sqm</option>
                            <option value="101_150">
                                101 - 150 sqm</option>
                            <option value="greater_than_150">
                                Greater than 150 sqm</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="resident_business">Are you involved in any for profit business in
                        your country of residence?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="resident_business"
                                value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="resident_business" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="resident_business_ownership">Do you own the business outright, or are
                        you in a
                        partnership with a local?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600"
                                name="resident_business_ownership" value="yes">
                            <span class="ml-2">100% Ownership</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="resident_business_ownership" value="No">
                            <span class="ml-2">Partnership</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="expat_hobbies">What are your hobbies?</label>
                    <input class="svyinput" type="text" name="expat_hobbies" id="expat_hobbies">
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="spouse_hobbies">What are your spouse’s / partner’s hobbies?</label>
                    <input class="svyinput" type="text" name="spouse_hobbies" id="spouse_hobbies">
                </div>
            </li>

            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="difficult_return_home">What do you see as the most difficult
                        obstacle/s to returning to your home country?</label>
                    <input class="svyinput" type="text" name="difficult_return_home" id="difficult_return_home">
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="difficult_stay_residence">What do you see as the most difficult
                        obstacle/s to remaining in your country of residence?</label>
                    <input class="svyinput" type="text" name="difficult_stay_residence"
                        id="difficult_stay_residence">
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="relocation_industry">Given the choice would you:</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="relocation_industry"
                                value="yes">
                            <span class="ml-2">Remain in your country of residence in a new industry</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="relocation_industry" value="No">
                            <span class="ml-2">Return to your country of citizenship in the oil industry</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="return_home_city_state">If you moved to your home country, would you
                        return to your home city and state?</label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="return_home_city_state"
                                value="yes">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="return_home_city_state" value="No">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="industry_perception_home">How do you think you would be perceived
                        if you
                        changed industries in your home country? </label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="industry_perception_home"
                                value="yes">
                            <span class="ml-2">Better</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="industry_perception_home" value="No">
                            <span class="ml-2">Worse</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="industry_perception_home" value="No">
                            <span class="ml-2">Equal</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex flex-col mb-2">
                    <label class="svylab" for="industry_perception_resident">How do you think you would be perceived
                        if you
                        changed industries in your country of residence? </label>
                    <div class="text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600"
                                name="industry_perception_resident" value="yes">
                            <span class="ml-2">Better</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="industry_perception_resident" value="No">
                            <span class="ml-2">Worse</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="industry_perception_resident" value="No">
                            <span class="ml-2">Equal</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="mt-4 md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="svylab" for="relocation_industry">
                            Is there anything else you would like to add regarding your expatriate experience?
                        </label>
                    </div>
            </li>
            <li>
                <div class="md:w-2/3">
                    <textarea class="form-textarea block w-full focus:bg-white" id="my-textarea" value=""
                        rows="8"></textarea>
                    <p class="py-2 text-sm text-gray-600">Feel free to write whatever you like.</p>
                </div>
            </li>
        </ul>
    </div>

    <hr class="bg-gray-300 my-12">
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Thank You</h2>
    <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
        <blockquote class="flex flex-col mb-2">Thank you for taking the time to
            complete this survey. Your responses will be kept confidential.</blockquote>
        <button class="btn mt-4">Submit Survey</button>
    </div>
    <hr class="bg-gray-300 my-12">
</section> --}} -->
