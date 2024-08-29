<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Info</title>
    <link rel="stylesheet" href="css/FormAstyle.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">


        <header>INFORMATION ON THE HOUSEHOLD</header>

        <form method="post" action="{{route('Isfhead.store')}}">
         
                <!-- FIRST FORM --->
                <div class="form-section">
                    <div class="details">
                        <span class="title">Survey Form</span>
                        <span class="title">Household Head</span>


                    <!---asdasdasdasd-->
                        <div class="fields">
                            <!-- Survey Number (Survey ID) Display -->
                            <div class="input-field">
                                <label>Survey Number</label>
                                <label id="formNo">This is where the survey Id will be displayed</label>
                            </div>
                
                            <!-- Survey Date -->
                            <div class="input-field">
                                <label>Date</label>
                                <input type="date" placeholder="Select Date" name="surveyDate" required>
                            </div>
                
                            <!-- Barangay Selection -->
                            <div class="input-field">
                                <label for="barangay" class="details">Barangay</label>
                                <select id="barangay" name="barangay" required>
                                    <option value="" disabled selected>Select Barangay</option>
                                    <option value="Barangay 1">Barangay 1</option>
                                    <option value="Barangay 2">Barangay 2</option>
                                    <option value="Barangay 3">Barangay 3</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label for="sitioPurok" class="details">Sitio/Purok</label>
                                <select id="sitio_purok" name="sitioPurok" >
                                    <option value="" disabled selected>Select Sitio/Purok</option>
                                    <option value="1">Sitio 1</option>
                                    <option value="2">Sitio 2</option>
                                </select>
                            </div>
                
                            <!-- Interviewer Name -->
                            <div class="input-field">
                                <label>Interviewer Name</label>
                                <input type="text" placeholder="Enter Interviewer Name" name="interviewerName"required>
                            </div>
                
                            <!-- Area Classification -->
                            <div class="input-field">
                                <label for="areaClassification" class="details">Area Classification</label>
                                <select id="areaClassification" name="areaClassification" required>
                                    <option value="" disabled selected>Select Classification</option>
                                    <option value="1">Danger Zone</option>
                                    <option value="2">Waterways</option>
                                </select>
                            </div>
                        </div>
                
                        <!-- Next Button -->
                        <div class="buttons">
                            <button type="button" id="nextBtn" class="nextBtn">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-section">

                    <div class="head-details">

                        <span class="title">Household Head</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last name" name="lastName"required>
                            </div>

                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter First name" name="firstName" required>
                            </div>

                            <div class="input-field">
                                <label>Middle Name</label>
                                <input type="text" placeholder="Enter Middle name" name="middleName">
                            </div>

                            <div class="input-field">
                                <label>Maiden Name</label>
                                <input type="text" placeholder="Enter Maiden name" name="maidenName" disabled >
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" placeholder="Enter birth date" name="dateOfBirth" required>
                            </div>

                            <div class="input-field">
                                <label>Age</label>
                                <input type="number" placeholder="Enter Age" name="age" required>
                            </div>

                            <div class="input-field">
                                <label for="sex" class="details">Sex</label>
                                <select id="sex" name="sex" required>
                                    <option value="" disabled selected>Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label for="civil" class="details">Civil Status</label>
                                <select id="civil" name="civilStatus" required>
                                    <option value="" disabled selected>Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widower">Widower</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Common-Law Partner">Common-Law Partner</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" placeholder="Enter Occupation" name="occupation" required>
                            </div>              

                            <div class="input-field">
                                <label>Place of Work</label>
                                <input type="text" placeholder="Enter Place of Work" name="workplace" >
                            </div>

                            <div class="input-field">
                                <label>Present Address</label>
                                <input type="text" placeholder="Enter Address" name="address" required>
                            </div>

                            <div class="input-field">
                                <label for="member" class="details">Member of vunerable community group</label>
                                <select id="member" name="communityGroup">
                                    <option value="" disabled selected>Select Group</option>
                                    <option value="PWD">PWD</option>
                                    <option value="Senior Citizen">Senior Citizen</option>
                                    <option value="Solo Parent">Solo parent</option>
                                    <option value="LGBTQI">LGTBQI</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>If a PWD, specify disability</label>
                                <input type="text" placeholder="Enter disability" name="disability" disabled>
                            </div>

                            <div class="input-field">
                                <label>If Member of LGBTQI, Gender Identification</label>
                                <input type="text" placeholder="Enter Identification" name="gender" disabled>
                            </div>  
                        </div>

                        <div class="input-field">
                            
                        </div>
                    </div>

                    <div class="details spouse">
                        <span class="title">Partner Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last name" name="spouseLname" required>
                            </div>

                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter First name" name="spouseFname" required>
                            </div>

                            <div class="input-field">
                                <label>Middle Name</label>
                                <input type="text" placeholder="Enter Middle name" name="spouseMname" required>
                            </div>

                            <div class="input-field">
                                <label>Maiden Name</label>
                                <input type="text" placeholder="Enter Maiden name" name="spouseMaidenName" >
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" placeholder="Enter birth date" name="spouseDOB" required>
                            </div>

                            <div class="input-field">
                                <label>Age</label>
                                <input type="number" placeholder="Enter Age" name="spouseAge" required>
                            </div>

                            <div class="input-field">
                                <label for="sex" class="details">Sex</label>
                                <select id="sex" name="spouseSex" required>
                                    <option value="" disabled selected>Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="buttons">
                            <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Back</span>
                            </div>

                            <button class="nextBtn">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                    </div>

                    <!-- THIRD SECTION --->
                    <div class="form-section">
                        <div class="details medical">
                            <span class="title">Medical History</span>

                            <div class="fields">
                                <div class="input-field">
                                    <label>Medical History</label>
                                    <input type="text" placeholder="Enter Sickness/Allergy" name="MedicalHistory">
                                </div>

                               
                            </div>
                        </div>

                        <div class="details house">
                        <span class="title">Classification of Surveyed Household</span>

                        <div class="fields">

                            <div class="input-field">
                                <label for="ownertype" class="details">Owner Type</label>
                                <select id="ownertype" name="HouseholdClass" required>
                                    <option value="" disabled selected>Select type</option>
                                    <option value="Owner">Owner</option>
                                    <option value="Co-Owner">Co-Owner</option>
                                    <option value="Renter">Renter</option>
                                    <option value="Sharer/RFO">Sharer/RFO</option>
                                    <option value="Caretaker">Caretaker</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>HouseHold Size</label>
                                <input type="number" placeholder="Enter Size" name="householdSize" required>
                            </div>

                            <div class="input-field">
                                <label>Year of Residency</label>
                                <input type="number" placeholder="Enter Years of Residency" name="yearResidency" required>
                            </div>

                            <div class="input-field">
                                <label for="double" class="details">Doubled-up HouseHold?</label>
                                <select id="double" name="doubleHousehold" required>
                                    <option value="" disabled selected>Select type</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            
                            <div class="input-field">
                                <label>If part of Indigenous Group</label>
                                
                                <select name="indigenousOrNot" id="EthnicityChoice"required>
                                        <option value=""disabled selected>Did you come from an Indigenous Group</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No"></option>
                                </select>
                            </div>
                                    <!--
                                                                

                                    <div class="input-field">
                                                                    <label for="ethnicity" class="details">If Non-Indigenous</label>
                                                                    <select id="ethnicity" name="placeOrigin" required>
                                                                        <option value="" disabled selected>Select place of origin</option>
                                                                        <option value="1">Outside LGU but within Metro Manila</option>
                                                                        <option value="2">Luzon</option>
                                                                        <option value="3">Visayas</option>
                                                                        <option value="4">Mindanao</option>
                                                                    </select>
                                                                </div>

                                    -->
                           

                            <div class="input-field">
                                <label>Others if not from outside LGU or part of Indigenous group</label>
                                <input type="text" placeholder="Enter Place" name="placeOrigin">
                            </div>

                            

                            <div class="input-field">
                                <label for="currentStatus" class="details">Reason for Establishing residence in the area</label>
                                <select id="currentStatus" name="reasonEstablishing" required>
                                    <option value="" disabled selected>Select Reactions</option>
                                    <option value="Economic">Economic</option>
                                    <option value="Social">Social</option>
                                    <option value="Others">Others</option>
                                    <option value="Don't know">Don't know</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label for="currentStatus" class="details">Current Tenurial Status(Land)</label>
                                <select id="currentStatus" name="tenurialStatus" required>
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="Owner">Owner</option>
                                    <option value="Renter/Lease Contract">Renter/Lease Contract</option>
                                    <option value="Informal Settler">Informal Settler</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label for="recipient" class="details">Recipient of Any Government Resettlement Program?</label>
                                <select id="recipient" name="governmentResettelment" required>
                                    <option value="" disabled selected>Select type</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>If yes, Which program?</label>
                                <input type="text" placeholder="Enter Program" name="whichProgram" disabled>
                            </div>
                        </div>

                        <div class="buttons">
                            <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Back</span>
                            </div>
        
                            <button class="nextBtn">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>

                            <button type="submit"  >
                                <span class="btnText">Submit</span>
                            </button>   
                        </div>
                        
                </div>


                


            <!--ADDING MEMBERS SECTION-->

            <div class="form-section">
                    

                <!--End of FORM MEMBERS-->
            </div>



            

            
                
         
        </form>
    </div>
    <script src = "js/scriptHead.js"></script>
</body>
</html>