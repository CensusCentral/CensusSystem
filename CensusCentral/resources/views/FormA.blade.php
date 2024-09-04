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

        <form id="form" method="post" action="{{route('Isfhead.store')}}" >
                
                     @csrf 

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
    
    
                    <!---SECOND FORM -->
    
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
                                    <select id="member" name="communityGroup" required>
                                        <option value="" disabled selected>Select Group</option>
                                        <option value="PWD">PWD</option>
                                        <option value="Senior Citizen">Senior Citizen</option>
                                        <option value="Solo Parent">Solo parent</option>
                                        <option value="LGBTQIA+">LGBTQIA+</option>
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
                                    <input type="text" placeholder="Enter Last name" name="spouseLname" >
                                </div>
    
                                <div class="input-field">
                                    <label>First Name</label>
                                    <input type="text" placeholder="Enter First name" name="spouseFname" >
                                </div>
    
                                <div class="input-field">
                                    <label>Middle Name</label>
                                    <input type="text" placeholder="Enter Middle name" name="spouseMname" >
                                </div>
    
                                <div class="input-field">
                                    <label>Maiden Name</label>
                                    <input type="text" placeholder="Enter Maiden name" name="spouseMaidenName" >
                                </div>
    
                                <div class="input-field">
                                    <label>Date of Birth</label>
                                    <input type="date" placeholder="Enter birth date" name="spouseDOB" >
                                </div>
    
                                <div class="input-field">
                                    <label>Age</label>
                                    <input type="number" placeholder="Enter Age" name="spouseAge" >
                                </div>
    
                                <div class="input-field">
                                    <label for="sex" class="details">Sex</label>
                                    <select id="sex" name="spouseSex" >
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
    
                                <button type="button" id="nextBtn" class="nextBtn">
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
                                    <label for="recipient" class="details">Recipient of Any Gov. Resettlement Program?</label>
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
            
                                <button type="button" id="nextBtn" class="nextBtn">
                                    <span class="btnText">Next</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                               
                            </div>
                            
                        </div>
                    </div>


                    <div class="form-section">
                        <header>HOUSING/COMMUNITY CONDITION/STRUCTURE DESCRIPTION</header>
        
                        <div class="details med">
                            <span class="title">Household Info</span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Age of Structure</label>
                                    <input type="number" placeholder="Enter Age" name="houseAge" required>
                                </div>
        
                                <div class="input-field">
                                    <label for="housetype" class="details">Type of Structure</label>
                                    <select id="housetype" name="typeOfStructure" required>
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="Single-Detached">Single-Detached</option>
                                        <option value="Duplex">Duplex</option>
                                        <option value="Commercial/Industrial">Commercial/Industrial</option>
                                        <option value="Apartment/Condo/Townhouse/Row House">Apartment/Condo/Townhouse/Row House</option>
                                        <option value="">Other</option>
                                    </select>
                                </div>
        
                                
        
                                <div class="input-field">
                                    <label for="housetype" class="details">Use of Structure</label>
                                    <select id="housetype" name="useOfStructure" required>
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Residential-Commercial">Residential-Commercial</option>
                                        <option value="Residential-Institutional">Residential-Institutional</option>
                                        <option value="Residential-Industrial">Residential-Industrial</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Institutional">Institutional</option>
                                        <option value="Industrial">Industrial</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="input-field">
                                    <label>Number of Floors</label>
                                    <input type="number" placeholder="Enter Structure" name="NoOfFloors" required>
                                </div>
        
                                <div class="input-field">
                                    <label for="housetype" class="details">Type of House/Structure</label>
                                    <select id="housetype" name="typeOfHouse" required>
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="Type I - Salvaged (plastic, tin, cardboard)">Type I - Salvaged (plastic, tin, cardboard)</option>
                                        <option value="Type II - Light (nipa, cogon, bamboo, light wood)">Type II - Light (nipa, cogon, bamboo, light wood)</option>
                                        <option value="Type III - Semi-concrete">Type III - Semi-concrete</option>
                                        <option value="Type IV - Concrete">Type IV - Concrete</option>
                                        <option value="Type V - Mixed materials">Type V - Mixed materials</option>
                                    </select>
                                </div>
        
                                
        
                                <div class="input-field">
                                    <label>Est/Flr area(sq mtrs)</label>
                                    <input type="number" placeholder="Enter Est Floor Area" name="EstimatedFloorArea" required>
                                </div>
        
                                <div class="input-field">
                                    <label for="toilet" class="details">Type of toilet facility that household use</label>
                                    <select id="toilet" name="toiletType" required>
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="1 Water-sealed(flush or pour/flush) connected to sewerage system">1 Water-sealed(flush or pour/flush) connected to sewerage system</option>
                                        <option value="2 Water-sealed(flush or pour/flush) connected to septic tank">2 Water-sealed(flush or pour/flush) connected to septic tank</option>
                                        <option value="3 Water-sealed(flush or pour/flush) connected to pit">3 Water-sealed(flush or pour/flush) connected to pit</option>
                                        <option value="4 Water-sealed(flush or pour/flush) connected to drainage">4 Water-sealed(flush or pour/flush) connected to drainage</option>
                                        <option value="5 Non-water-sealed(ventilated improved pit, sanitary pit privy)">5 Non-water-sealed(ventilated improved pit, sanitary pit privy)</option>
                                        <option value="6 Non-water-sealed(open pit privy, overhang)">6 Non-water-sealed(open pit privy, overhang)</option>
                                        <option value="7 Shared toilet">7 Shared toilet</option>
                                        <option value="8 Public toilet">8 Public toilet</option>
                                        <option value="9 No toilet (wrap and throw, arinola, closed pit, bush, lake, creek, river)">9 No toilet (wrap and throw, arinola, closed pit, bush, lake, creek, river)</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label for="water" class="details">Primary Source(s) of Water for domestic use:</label>
                                    <select id="water" name="waterSource" required>
                                        <option value="" disabled selected>Select Water Source</option>
                                        <option value="Piped connection">Piped connection</option>
                                        <option value="Public/Street faucet">Public/Street faucet</option>
                                        <option value="Deep or shallow well">Deep or shallow well</option>
                                        <option value="Spring/River/Pond/Stream">Spring/River/Pond/Stream</option>
                                        <option value="Rain">Rain</option>
                                        <option value="Water vendors(e.g. bottled water, container, peddlers)">Water vendors(e.g. bottled water, container, peddlers)</option>
                                    </select>
                                </div>
        
                               
        
                                <div class="input-field">
                                    <label for="garbage" class="details">Garbage Disposal/Management</label>
                                    <select id="garbage" name="garbageDisposal" required>
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="Collected by LGU but no separation of garbage/solid waste at the household">Collected by LGU but no separation of garbage/solid waste at the household</option>
                                        <option value="Collected by LGU/solid waste segregated between biodegrable and non-biodegradable">Collected by LGU/solid waste segregated between biodegrable and non-biodegradable</option>
                                        <option value="Composting">Composting</option>
                                        <option value="Recycle and re-use as part of a livelihood/business activity">Recycle and re-use as part of a livelihood/business activity</option>
                                        <option value="Burning">Burning</option>
                                        <option value="Throw it in the river/anywhere">Throw it in the river/anywhere</option>
        
                                    </select>
                                </div>     
        
                                <div class="input-field">
                                    <label for="electric" class="details">Electricity/Lightning Facilities</label>
                                    <select id="electric" name="electricitySource" required>
                                        <option value="" disabled selected>Select type</option>
                                        <option value="Connected to MERALC">Connected to MERALCO</option>
                                        <option value="Sub-connect to a neighbor">Sub-connect to a neighbor</option>
                                        <option value="Not connected/instead user kerosene lamp">Not connected/instead user kerosene lamp</option>
                                        <option value="LPG lamp">LPG lamp</option>
        
                                    </select>
                                </div>       
        
                                <div class="input-field">
                                    <label for="mode" class="details">Mode of House/Structure Acquisition</label>
                                    <select id="mode" name="modeOfHouse" required>
                                        <option value="" disabled selected>Select Mode of House</option>
                                        <option value="Sold rights">Sold rights</option>
                                        <option value="Transfer of Rights">Transfer of Rights</option>
                                        <option value="Constructed">Constructed</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label for="member" class="details">Relationship with the Lot Owner</label>
                                    <select id="member" name="relationToOwner" required>
                                        <option value="" disabled selected>Select Relationship</option>
                                        <option value="Lot Owner">Lot Owner</option>
                                        <option value="Child">Child</option>
                                        <option value="Parent">Parent</option>
                                        <option value="Relative">Relative</option>
                                    </select>
                                </div>
        
                               
                            </div>
        
                            <div class="buttons">
                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Back</span>
                                </div>
            
                                <button type="button" id="nextBtn" class="nextBtn">
                                    <span class="btnText">Next</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div>
                    </div>
        
                
                



                <!--SUPPOSED TO BE LAST--->

                <div class="form-section">
                    <div class="members-container">

                            
                        <textarea id="membersData" name="membersData" style="display:none;"></textarea>


                            <div class="btnText" id="openModal">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Add Member</span>
                            </div> 

                            <button type="submit"  >
                                <span class="btnText">Submit</span>
                            </button>

                            <div class="table-wrapper">
                                <div id="resultsTableContainer" style="display: none;">
                                    <h2>Household Member Details</h2>
                                    <table id="resultsTable">
                                        <thead>
                                            <tr>
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Birthdate</th>
                                                <th>Age</th>
                                                <th>Sex</th>
                                                <th>Relation to Head</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                           

                            <div class="buttons">

                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Back</span>
                                </div>  

                              
                                         
                            </div>
                    </div>
                </div>
                
                    
                
            
        </form>
    </div>

<!-- MODAL -->
<div id="householdModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="form-section-member">
            <header>INFORMATION OF HOUSEHOLD MEMBERS</header>
            <form id="householdForm">
                <div class="details member">
                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter Last name" name="memberlastName" required>
                    </div>
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter First name" name="memberfirstName" required>
                    </div>


                    <div class="input-field">
                        <label>Middle Name</label>
                        <input type="text" placeholder="Enter Middle name" name="memberMiddleName">
                    </div>

                    <div class="input-field">
                        <label>Maiden Name</label>
                        <input type="text" placeholder="Enter Maiden name" name="memberMaidenName">
                    </div>

                    <div class="input-field">
                        <label>Date of Birth</label>
                        <input type="date" placeholder="Enter birth date" name="memberDOB" required>
                    </div>
                    <div class="input-field">
                        <label>Age</label>
                        <input type="number" placeholder="Enter Age" name="memberAge" required>
                    </div>
                    <div class="input-field">
                        <label for="sex">Sex</label>
                        <select id="sex" name="memberSex" required>
                            <option value="" disabled selected>Choose Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Relation to Household head</label>
                        <input type="text" placeholder="Enter relation" name="memberRelationToHead" required>
                    </div>
                    <div class="input-field">
                        <label for="civil" class="details">Civil Status</label>
                        <select id="civil" name="memberCivilStatus" required>
                            <option value="" disabled selected>Select Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Occupation</label>
                        <input type="text" placeholder="Enter Occupation" name="memberOccupation">
                    </div>
                    <div class="input-field">
                        <label>Place of Work</label>
                        <input type="text" placeholder="Enter Place of Work" name="memberPlaceOfWork">
                    </div>
                    <div class="input-field">
                        <label for="member" class="details">Highest Educational Attainment</label>
                        <select id="member" name="memberEducAttaintment">
                            <option value="" disabled selected>Select Educational Attainment</option>
                            <option value="Elementary">Elementary</option>
                            <option value="Highschool">Highschool</option>
                            <option value="Undergrad">Undergrad</option>
                            <option value="College">College</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="member" class="details">Member of vulnerable community group</label>
                        <select id="member" name="memberOfCommunityGroup">
                            <option value="" disabled selected>Select Group</option>
                            <option value="PWD">PWD</option>
                            <option value="Senior Citizen">Senior Citizen</option>
                            <option value="Solo parent">Solo parent</option>
                            <option value="LGBTQI">LGBTQI</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>If a PWD, specify disability</label>
                        <input type="text" placeholder="Enter disability" name="memberAnyDisability">
                    </div>
                    <div class="input-field">
                        <label>If Member of LGBTQI, Gender Identification</label>
                        <input type="text" placeholder="Enter Identification" name="memberGenderIdentification">
                    </div>
                    <div class="input-field">
                        <label>Estimated Monthly Income</label>
                        <input type="text" placeholder="Enter Estimated Income" name="memberEstimatedIncome">
                    </div>
                </div>
                <div class="buttons">
                    <button type="button" id="closeModal">Close</button>
                    <button type="submit">Add Member</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <script src="js/modal.js"></script>
    <script src = "js/scriptHead.js"></script>
</body>
</html>