<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
error_reporting(0);
include("config.php");
session_start();

if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == '1') {
	
	$custommer_id=$_SESSION['customer_id']; 

?>

<?php include("includes/links.php"); ?>

<body>
    <div class="page-wraper">
        <!-- <div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div> -->

        <?php include("includes/header.php"); ?>


        <div class="page-content">
            <!--banner-->
            <div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Checkout</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                                <li class="breadcrumb-item">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <script>
            window.addEventListener('DOMContentLoaded', function() {
                var collapseOne = document.getElementById('collapseOne');
                var accordionButton = document.querySelector('.accordion-button');

                if (collapseOne && accordionButton) {
                    collapseOne.classList.add('show');
                    accordionButton.setAttribute('aria-expanded', 'true');
                }
            });
            </script>

            <!-- inner page banner End-->
            <div class="content-inner-1">
                <div class="container">
                    <div class="row shop-checkout">
                        <div class="col-xl-8">
                            <h4 class="title m-b15">Shipping details</h4>
                            <div class="accordion dz-accordion accordion-sm" id="accordionFaq">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Delivery Address &nbsp; <span class="text-primary">
                                            </span>
                                            <span class="toggle-close"></span>
                                        </a>

                                    </h2>
                                    <style>
                                    ._2XilLp {
                                        text-transform: uppercase;
                                        font-size: 11px;
                                        color: #878787;
                                        vertical-align: middle;
                                        padding: 4px 7px;
                                        border-radius: 2px;
                                        background-color: #f0f0f0;
                                        font-weight: 500;
                                    }

                                    .textcol {
                                        font-weight: bold;
                                        text-transform: uppercase;
                                    }

                                    ._2KpZ6lRLM7ES_3AWRsL {

                                        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);
                                        border: none;
                                        color: #fff;
                                        padding: 5px 23px;
                                        margin-top: 2px;
                                        margin-left: 30px;
                                    }
                                    </style>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFaq">





                                        <?php
                                        $sql = "SELECT * FROM `customers_address` WHERE customer_id = '$custommer_id'";
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                if ($row["dzhomeorwork"] == 1) {
                                                    $homeOrWork = "Home";
                                                } elseif ($row["dzhomeorwork"] == 2) {
                                                    $homeOrWork = "Work";
                                                } else {
                                                    $homeOrWork = "Unknown";
                                                }
                                        ?>
                                        <div class="col-md-12 mt-2 mx-2">
                                            <div class="container">
                                                <p>
                                                    <input type="radio" name="address_id"
                                                        value="<?php echo $row["id"]; ?>"
                                                        class="form-check-input radio-class" id="address_or">
                                                    <span class="textcol"><?php echo $row["AdName"]; ?></span>
                                                    <span class="_2XilLp"><?php echo $homeOrWork; ?></span>
                                                    <span class="textcol"><?php echo $row["dzPhone"]; ?></span>
                                                </p>
                                                <span class=""
                                                    style="margin-left:29px;"><?php echo $row["dzAddress"] . ", " . $row["dzLandmark"] . ", " . $row["dzLocality"] . ", " . $row["dzdistrict"] . ", " . $row["dzstate"]; ?></span>
                                                <span class="textcol"><?php echo $row["dzPincode"]; ?></span>
                                                <br>

                                            </div>

                                        </div>
                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>

                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
                                        </script>
                                        <script>
                                        $(document).ready(function() {
                                            $('.checkbox-class').click(function() {
                                                $('.checkbox-class').not(this).prop('checked', false);
                                            });

                                            $('.delete-btn').click(function() {
                                                var addressId = $(this).data('address-id');
                                                if (confirm(
                                                        "Are you sure you want to delete this address?"
                                                    )) {
                                                    $.ajax({
                                                        url: 'formdata.php',
                                                        type: 'POST',
                                                        data: {
                                                            addressId: addressId
                                                        },
                                                        success: function(response) {
                                                            location.reload();
                                                            console.log(response);
                                                        },
                                                        error: function(xhr, status, error) {
                                                            // Handle error
                                                            console.error(xhr.responseText);
                                                        }
                                                    });
                                                }
                                            });
                                        });
                                        </script>











                                        <div class="accordion-body">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Add A New Address
                                                        <span class="toggle-close"></span>
                                                    </button>

                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <form id="myForm" class="row" method="post">
                                                            <div class="col-md-6">
                                                                <div class="form-group m-b25">

                                                                    <input type="text" name="AdName" placeholder="Name"
                                                                        required="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group m-b25">

                                                                    <input type="text" name="dzPhone"
                                                                        placeholder="10-digit mobile number" required=""
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group m-b25">

                                                                    <input type="text" name="dzPincode"
                                                                        placeholder="Pincode" required=""
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group m-b25">

                                                                    <input type="text" name="dzLocality"
                                                                        placeholder="Locality" required=""
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b25">
                                                                <select class="form-select" name="dzstate"
                                                                    id="inputState">
                                                                    <option value="SelectState">Select State
                                                                    </option>
                                                                    <option value="Andra Pradesh">Andra Pradesh
                                                                    </option>
                                                                    <option value="Arunachal Pradesh">Arunachal
                                                                        Pradesh</option>
                                                                    <option value="Assam">Assam</option>
                                                                    <option value="Bihar">Bihar</option>
                                                                    <option value="Chhattisgarh">Chhattisgarh
                                                                    </option>
                                                                    <option value="Goa">Goa</option>
                                                                    <option value="Gujarat">Gujarat</option>
                                                                    <option value="Haryana">Haryana</option>
                                                                    <option value="Himachal Pradesh">Himachal
                                                                        Pradesh</option>
                                                                    <option value="Jammu and Kashmir">Jammu and
                                                                        Kashmir</option>
                                                                    <option value="Jharkhand">Jharkhand</option>
                                                                    <option value="Karnataka">Karnataka</option>
                                                                    <option value="Kerala">Kerala</option>
                                                                    <option value="Madya Pradesh">Madya Pradesh
                                                                    </option>
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
                                                                    <option value="Uttar Pradesh">Uttar Pradesh
                                                                    </option>
                                                                    <option value="West Bengal">West Bengal</option>
                                                                    <option disabled
                                                                        style="background-color:#aaa; color:#fff">
                                                                        UNION Territories</option>
                                                                    <option value="Andaman and Nicobar Islands">
                                                                        Andaman and Nicobar Islands</option>
                                                                    <option value="Chandigarh">Chandigarh</option>
                                                                    <option value="Dadar and Nagar Haveli">Dadar and
                                                                        Nagar Haveli</option>
                                                                    <option value="Daman and Diu">Daman and Diu
                                                                    </option>
                                                                    <option value="Delhi">Delhi</option>
                                                                    <option value="Lakshadeep">Lakshadeep</option>
                                                                    <option value="Pondicherry">Pondicherry</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 m-b25">
                                                                <select class="form-select" name="dzdistrict"
                                                                    id="inputDistrict">
                                                                    <option value="">-- select District -- </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12 m-b25">
                                                                <div class="form-group">

                                                                    <textarea id="comments"
                                                                        placeholder="Address (Area and Street)"
                                                                        class="form-control" name="dzAddress" cols="90"
                                                                        rows="5" required="required"></textarea>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group m-b25">

                                                                    <input type="text" name="dzLandmark"
                                                                        placeholder="Landmark (Optional)"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group m-b25">

                                                                    <input type="text" name="dzAltphone"
                                                                        placeholder="Alternate Phone (Optional)"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                            <label class="form-check-label mt-2 mb-2"
                                                                for="flexRadioDefault1">
                                                                Address type
                                                            </label>

                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="form-check-input radio" value="1"
                                                                        required="" type="radio" name="dzhomeorwork"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Home (All day
                                                                        delivery)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="form-check-input radio" value="2"
                                                                        type="radio" name="dzhomeorwork" required=""
                                                                        id="flexRadioDefault2">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault2">
                                                                        Work (Delivery
                                                                        between 10 AM - 5 PM)
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <input type="hidden" name="dzaddsave">
                                                            <button type="submit" id="dzaddsaved"
                                                                class="btn-secondary _2KpZ6l_1JDhFS_3AWRsL mt-2">Save
                                                                and
                                                                Deliver Here</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                ._2KpZ6l_1JDhFS_3AWRsL {

                                    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);
                                    border: none;
                                    color: #fff;
                                    padding: 15px;
                                }
                                </style>

                            </div>

                            <script>
                            $(document).ready(function() {
                                $('#myForm').submit(function(e) {
                                    e.preventDefault();


                                    var formData = $(this).serialize();
                                    $.ajax({
                                        type: 'POST',
                                        url: 'formdata.php',
                                        data: formData,
                                        success: function(response) {

                                            console.log(response);
                                            $("#myForm")[0].reset();

                                        },
                                        error: function(xhr, status, error) {
                                            console.error(xhr
                                                .responseText);

                                        }
                                    });
                                });
                            });
                            </script>

                            <script>
                            var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna",
                                "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram",
                                "West Godavari"
                            ];
                            var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang",
                                "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley",
                                "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap",
                                "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"
                            ];
                            var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo",
                                "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat",
                                "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)",
                                "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon",
                                "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur",
                                "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"
                            ];
                            var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur",
                                "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad",
                                "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura",
                                "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia",
                                "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi",
                                "Siwan", "Supaul", "Vaishali", "West Champaran"
                            ];
                            var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur",
                                "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa",
                                "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund",
                                "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
                                "Surguja"
                            ];
                            var Goa = ["North Goa", "South Goa"];
                            var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch",
                                "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka",
                                "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar",
                                "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar",
                                "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
                            ];
                            var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram",
                                "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh",
                                "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat",
                                "Yamunanagar"
                            ];
                            var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu",
                                "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"
                            ];
                            var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal",
                                "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch",
                                "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"
                            ];
                            var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum",
                                "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma",
                                "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj",
                                "Seraikela Kharsawan", "Simdega", "West Singhbhum"
                            ];
                            var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary",
                                "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru",
                                "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga",
                                "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur",
                                "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"
                            ];
                            var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam",
                                "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta",
                                "Thiruvananthapuram", "Thrissur", "Wayanad"
                            ];
                            var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat",
                                "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara",
                                "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda",
                                "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone",
                                "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen",
                                "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
                                "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi",
                                "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
                            ];
                            var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara",
                                "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon",
                                "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded",
                                "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad",
                                "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha",
                                "Washim", "Yavatmal"
                            ];
                            var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West",
                                "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati",
                                "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
                            ];
                            var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills",
                                "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills",
                                "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills",
                                "West Khasi Hills"
                            ];
                            var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha",
                                "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit",
                                "Saiha", "Serchhip"
                            ];
                            var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren",
                                "Phek", "Tuensang", "Wokha", "Zunheboto"
                            ];
                            var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack",
                                "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur",
                                "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha",
                                "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri",
                                "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"
                            ];
                            var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka",
                                "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana",
                                "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur",
                                "Shaheed Bhagat Singh Nagar", "Tarn Taran"
                            ];
                            var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara",
                                "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur",
                                "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar",
                                "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
                                "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"
                            ];
                            var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
                            var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul",
                                "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai",
                                "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai",
                                "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi",
                                "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai",
                                "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"
                            ];
                            var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon",
                                "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem",
                                "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool",
                                "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy",
                                "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural",
                                "Warangal Urban", "Yadadri Bhuvanagiri"
                            ];
                            var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura",
                                "Unakoti", "West Tripura"
                            ];
                            var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha",
                                "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda",
                                "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr",
                                "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad",
                                "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
                                "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur",
                                "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi",
                                "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri",
                                "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit",
                                "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar",
                                "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra",
                                "Sultanpur", "Unnao", "Varanasi"
                            ];
                            var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar",
                                "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar",
                                "Uttarkashi"
                            ];
                            var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur",
                                "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata",
                                "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman",
                                "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia",
                                "South 24 Parganas", "Uttar Dinajpur"
                            ];
                            var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
                            var Chandigarh = ["Chandigarh"];
                            var DadraHaveli = ["Dadra Nagar Haveli"];
                            var DamanDiu = ["Daman", "Diu"];
                            var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi",
                                "North West Delhi", "Shahdara", "South Delhi", "South East Delhi",
                                "South West Delhi", "West Delhi"
                            ];
                            var Lakshadweep = ["Lakshadweep"];
                            var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


                            $("#inputState").change(function() {
                                var StateSelected = $(this).val();
                                var optionsList;
                                var htmlString = "";

                                switch (StateSelected) {
                                    case "Andra Pradesh":
                                        optionsList = AndraPradesh;
                                        break;
                                    case "Arunachal Pradesh":
                                        optionsList = ArunachalPradesh;
                                        break;
                                    case "Assam":
                                        optionsList = Assam;
                                        break;
                                    case "Bihar":
                                        optionsList = Bihar;
                                        break;
                                    case "Chhattisgarh":
                                        optionsList = Chhattisgarh;
                                        break;
                                    case "Goa":
                                        optionsList = Goa;
                                        break;
                                    case "Gujarat":
                                        optionsList = Gujarat;
                                        break;
                                    case "Haryana":
                                        optionsList = Haryana;
                                        break;
                                    case "Himachal Pradesh":
                                        optionsList = HimachalPradesh;
                                        break;
                                    case "Jammu and Kashmir":
                                        optionsList = JammuKashmir;
                                        break;
                                    case "Jharkhand":
                                        optionsList = Jharkhand;
                                        break;
                                    case "Karnataka":
                                        optionsList = Karnataka;
                                        break;
                                    case "Kerala":
                                        optionsList = Kerala;
                                        break;
                                    case "Madya Pradesh":
                                        optionsList = MadhyaPradesh;
                                        break;
                                    case "Maharashtra":
                                        optionsList = Maharashtra;
                                        break;
                                    case "Manipur":
                                        optionsList = Manipur;
                                        break;
                                    case "Meghalaya":
                                        optionsList = Meghalaya;
                                        break;
                                    case "Mizoram":
                                        optionsList = Mizoram;
                                        break;
                                    case "Nagaland":
                                        optionsList = Nagaland;
                                        break;
                                    case "Orissa":
                                        optionsList = Orissa;
                                        break;
                                    case "Punjab":
                                        optionsList = Punjab;
                                        break;
                                    case "Rajasthan":
                                        optionsList = Rajasthan;
                                        break;
                                    case "Sikkim":
                                        optionsList = Sikkim;
                                        break;
                                    case "Tamil Nadu":
                                        optionsList = TamilNadu;
                                        break;
                                    case "Telangana":
                                        optionsList = Telangana;
                                        break;
                                    case "Tripura":
                                        optionsList = Tripura;
                                        break;
                                    case "Uttaranchal":
                                        optionsList = Uttaranchal;
                                        break;
                                    case "Uttar Pradesh":
                                        optionsList = UttarPradesh;
                                        break;
                                    case "West Bengal":
                                        optionsList = WestBengal;
                                        break;
                                    case "Andaman and Nicobar Islands":
                                        optionsList = AndamanNicobar;
                                        break;
                                    case "Chandigarh":
                                        optionsList = Chandigarh;
                                        break;
                                    case "Dadar and Nagar Haveli":
                                        optionsList = DadraHaveli;
                                        break;
                                    case "Daman and Diu":
                                        optionsList = DamanDiu;
                                        break;
                                    case "Delhi":
                                        optionsList = Delhi;
                                        break;
                                    case "Lakshadeep":
                                        optionsList = Lakshadeep;
                                        break;
                                    case "Pondicherry":
                                        optionsList = Pondicherry;
                                        break;
                                }


                                for (var i = 0; i < optionsList.length; i++) {
                                    htmlString = htmlString + "<option value='" + optionsList[i] + "'>" +
                                        optionsList[i] + "</option>";
                                }
                                $("#inputDistrict").html(htmlString);

                            });
                            </script>



                        </div>


                        <div class="col-xl-4 side-bar">
                            <h4 class="title m-b15">Your Order</h4>
                            <div class="order-detail sticky-top">
                                <?php
                                $sql = "SELECT shopcarts.id, products.product_name, shopcarts.quantity, products.product_quantity, products.product_master_image, product_discount_price 
                                        FROM shopcarts 
                                        JOIN `products` ON shopcarts.product_id = `products`.id
                                        WHERE shopcarts.customer_id = '$custommer_id'";
                                $result = $con->query($sql);

                                if ($result->num_rows > 0) {
                                    $cnt = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                <div class="cart-item style-1">

                                    <div class="dz-media">

                                        <img src="images/shop/product/<?php echo $row['product_master_image']; ?>"
                                            alt="/">

                                    </div>

                                    <div class="dz-content">
                                        <h6 class="title mb-0"><?php echo $row['product_name']; ?></h6>
                                        <span class="price"
                                            style="display:block;">Rs.<?php echo $row['product_discount_price']; ?> *
                                            <?php echo $row['quantity']; ?></span>
                                    </div>
                                </div>
                                <?php

                                $total +=$row['product_discount_price'] * $row['quantity'];

                                }}
                                    ?>
                                <!-- <div class="cart-item style-1">
                                    <div class="dz-media">
                                        <img src="images/shop/shop-cart/pic1.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title mb-0">Wooden Water<br> Bottles</h6>
                                        <span class="price">$40.00</span>
                                    </div>
                                </div>
                                <div class="cart-item style-1 mb-0">
                                    <div class="dz-media">
                                        <img src="images/shop/shop-cart/pic2.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title mb-0">Wooden Cup</h6>
                                        <span class="price">$36.00</span>
                                    </div>
                                </div> -->
                                <table>
                                    <tbody>
                                        <tr class="subtotal">
                                            <td>Subtotal</td>
                                            <td class="price">Rs.<?php echo $total ?></td>
                                        </tr>
                                        <!-- <tr class="title">
                                            <td>
                                                <h6 class="title font-weight-500">Shipping</h6>
                                            </td>
                                            <td></td>
                                        </tr> -->
                                        <!-- <tr class="shipping">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input radio" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Free shipping
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input radio" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Flat Rate:
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="price">25.75</td>
                                        </tr> -->
                                        <tr class="total">
                                            <td>Total</td>
                                            <input type="hidden" id="amt" value="<?php echo $total ?>">
                                            <td class="price">Rs.<?php echo $total ?></td>

                                        </tr>
                                    </tbody>
                                </table>

                                <div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
                                    <!-- <div class="accordion-item">
                                        <div class="accordion-header" id="heading1">
                                            <div class="accordion-button collapsed custom-control custom-checkbox"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation"
                                                aria-expanded="true" aria-controls="collapse1">
                                                <input class="form-check-input radio" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Direct bank transfer
                                                </label>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
                                            <div class="accordion-body">
                                                <p class="m-b0">Make your payment directly into our bank account. Please
                                                    use your Order ID as the payment reference. Your order will not be
                                                    shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox d-flex m-b15">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_3">
                                            <label class="form-check-label" for="basic_checkbox_3">I have read and agree
                                                to
                                                the website terms and conditions </label>
                                        </div>
                                        <center><span id="error_message" style="color:red;"></span></center>

                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading2">
                                            <div class="accordion-button collapsed custom-control custom-checkbox"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation"
                                                aria-expanded="true" aria-controls="collapse2">
                                                <input class="form-check-input radio" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Cash on delivery
                                                </label>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="accordion-collapse collapse"
                                            aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
                                            <div class="accordion-body">
                                                <p class="m-b0">Make your payment directly into our bank account. Please
                                                    use your Order ID as the payment reference. Your order will not be
                                                    shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading3">
                                            <div class="accordion-button collapsed custom-control custom-checkbox"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation"
                                                aria-expanded="true" aria-controls="collapse3">
                                                <input class="form-check-input radio" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Online Payment
                                                </label>

                                            </div>
                                        </div>
                                        <div id="collapse3" class="accordion-collapse collapse"
                                            aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
                                            <div class="accordion-body">
                                                <input type="button" name="btn" id="btn" class="btn btn-secondary w-100"
                                                    value="Pay Now" onclick="pay_now()" />
                                                <p class="m-b0">Make your payment directly into our bank account. Please
                                                    use your Order ID as the payment reference. Your order will not be
                                                    shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text">Your personal data will be used to process your order, support your
                                    experience throughout this website, and for other purposes described in our <a
                                        href="javascript:void(0);">privacy policy.</a></p>


                                <!-- <a  href="#" class="btn btn-secondary w-100" onclick="pay_now()">PLACE ORDER</a> -->
                                <!-- <input type="button" name="btn" id="btn" class="btn btn-secondary w-100" value="Pay Now" onclick="pay_now()"/> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

            <script>
            function pay_now() {

                
                var amt = jQuery('#amt').val();
                var address = jQuery('.radio-class:checked').val();
                var check = jQuery('#basic_checkbox_3').is(":checked");
                if (address) {
                    if (check) {
                        jQuery.ajax({
                            type: 'post',
                            url: 'testsubmit.php',
                            data: "amt=" + amt + "&name=" + name+ "&address=" + address,
                            success: function(result) {
                                var options = {
                                    "key": "rzp_test_ZTtkA4TeL2VGdK",
                                    "amount": amt * 100,
                                    "currency": "INR",
                                    "name": "Mooncart",
                                    "description": "Test Transaction",
                                    "image": "images/logo.svg",
                                    "handler": function(response) {
                                        jQuery.ajax({
                                            type: 'post',
                                            url: 'testsubmit.php',
                                            data: "payment_id=" + response
                                                .razorpay_payment_id,
                                            success: function(result) {
                                                window.location.href = "index.php";
                                            }
                                        });
                                    }
                                };
                                var rzp1 = new Razorpay(options);
                                rzp1.open();
                            }
                        });
                    } else {
                        $('#error_message').text("Please Accept Terms and Conditions");
                    }
                } else {
                    $('#error_message').text("Please Select Address");
                }
            }
            </script>

            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <!-- Icon Box Start -->
            <section class="content-inner py-0">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2 bg-light">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/password-check.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Filter & Discover</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">01</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/cart.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Add to cart</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">02</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2 bg-light">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/discovery.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Fast Shipping</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">03</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/box-tick.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Enjoy The Product</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">04</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Icon Box End -->

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>



        <?php include("includes/footer.php"); ?>

        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>

    </div>
    <?php include("includes/script.php"); ?>
</body>

</html>


<?php
} else {
    
    header("Location: shop-my-account.php?msg=Please login first");
    exit;
}

?>