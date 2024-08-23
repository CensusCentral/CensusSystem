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

        <form action="#">
            <div class="form first active">

                <div class="head-details">

                    <span class="title">Household Head</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last name" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter Middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Maiden Name</label>
                            <input type="text" placeholder="Enter Maiden name" >
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label for="sex" class="details">Sex</label>
                            <select id="sex" required>
                                <option value="" disabled selected>Select Sex</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="civil" class="details">Civil Status</label>
                            <select id="civil" required>
                                <option value="" disabled selected>Select Civil Status</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Widower</option>
                                <option value="4">Separated</option>
                                <option value="5">Common-Law Partner</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter Occupation" required>
                        </div>              

                        <div class="input-field">
                            <label>Place of Work</label>
                            <input type="text" placeholder="Enter Place of Work">
                        </div>

                        <div class="input-field">
                            <label>Present Address</label>
                            <input type="text" placeholder="Enter Address" required>
                        </div>

                        <div class="input-field">
                            <label for="member" class="details">Member of vunerable community group</label>
                            <select id="member">
                                <option value="" disabled selected>Select Group</option>
                                <option value="1">PWD</option>
                                <option value="2">Senior Citizen</option>
                                <option value="3">Solo parent</option>
                                <option value="4">LGTBQI</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>If a PWD, specify disability</label>
                            <input type="text" placeholder="Enter disability">
                        </div>

                        <div class="input-field">
                            <label>If Member of LGBTQI, Gender Identification</label>
                            <input type="text" placeholder="Enter Identification">
                        </div>  
                    </div>
                </div>

                <div class="details spouse">
                    <span class="title">Spouse Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last name" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter Middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Maiden Name</label>
                            <input type="text" placeholder="Enter Maiden name" >
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label for="sex" class="details">Sex</label>
                            <select id="sex" required>
                                <option value="" disabled selected>Select Sex</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons">
                         <button type="button" class="backBtnToFormNumber" onclick="goBackToFormNumber()">
                              <span class="btnText">Back</span>
                              <i class="uil uil-navigator"></i>
                         </button>
                    <button type="button" class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                     </div>

                <script>
                    function goBackToFormNumber() {
                        window.location.href = '{{url('FormNumber')}}'; // Redirect to FormNumber.html
                    }
                </script>
                </div>
            </div>

            <div class="form second">
                <div class="details medical">
                    <span class="title">Medical History</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Medical History</label>
                            <input type="text" placeholder="Enter Sickness">
                        </div>

                        <div class="input-field">
                            <label>If Allergy Please Specify</label>
                            <input type="text" placeholder="Enter Allergy">
                        </div>
                    </div>
                </div>

                <div class="details house">
                    <span class="title">Classification of Surveyed Household</span>

                    <div class="fields">

                        <div class="input-field">
                            <label for="ownertype" class="details">Owner Type</label>
                            <select id="ownertype" required>
                                <option value="" disabled selected>Select type</option>
                                <option value="1">Owner</option>
                                <option value="2">Co-Owner</option>
                                <option value="3">Renter</option>
                                <option value="4">Sharer/RFO</option>
                                <option value="5">Caretaker</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>HouseHold Size</label>
                            <input type="number" placeholder="Enter Size" required>
                        </div>

                        <div class="input-field">
                            <label>Year of Residency</label>
                            <input type="number" placeholder="Enter Years of Residency" required>
                        </div>

                        <div class="input-field">
                            <label for="double" class="details">Doubled-up HouseHold?</label>
                            <select id="double" required>
                                <option value="" disabled selected>Select type</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>If part of Indigenous Group</label>
                            <input type="text" placeholder="Enter Group">
                        </div>

                        <div class="input-field">
                            <label for="ethnicity" class="details">If Non-Indigenous</label>
                            <select id="ethnicity" required>
                                <option value="" disabled selected>Select place of origin</option>
                                <option value="1">Outside LGU but within Metro Manila</option>
                                <option value="2">Luzon</option>
                                <option value="3">Visayas</option>
                                <option value="4">Mindanao</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Others if not from outside LGU or part of Indigenous group</label>
                            <input type="text" placeholder="Enter Place">
                        </div>

                        <div class="input-field">
                            <label>Reason for Establishing residence in the area</label>
                            <input type="text" placeholder="Enter Reason" required>
                        </div>

                        <div class="input-field">
                            <label for="currentStatus" class="details">Reason for Establishing residence in the area</label>
                            <select id="currentStatus" required>
                                <option value="" disabled selected>Select Reactions</option>
                                <option value="1">Economic</option>
                                <option value="2">Social</option>
                                <option value="3">Others</option>
                                <option value="4">Don't know</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="currentStatus" class="details">Current Tenurial Status(Land)</label>
                            <select id="currentStatus" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="1">Owner</option>
                                <option value="2">Renter/Lease Contract</option>
                                <option value="3">Informal Settler</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="recipient" class="details">Recipient of Any Government Resettlement Program?</label>
                            <select id="recipient" required>
                                <option value="" disabled selected>Select type</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>If yes, Which program?</label>
                            <input type="text" placeholder="Enter Program">
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

            <div class="form third">
                <header>HOUSING/COMMUNITY CONDITION/STRUCTURE DESCRIPTION</header>

                <div class="details med">
                    <span class="title">Household Info</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Age of Structure</label>
                            <input type="number" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label for="housetype" class="details">Type of Structure</label>
                            <select id="housetype" required>
                                <option value="" disabled selected>Select Type</option>
                                <option value="1">Single-Detached</option>
                                <option value="2">Duplex</option>
                                <option value="3">Commercial/Industrial</option>
                                <option value="4">Apartment/Condo/Townhouse/Row House</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>If Other type of Structure, specify</label>
                            <input type="text" placeholder="Enter Age">
                        </div>

                        <div class="input-field">
                            <label for="housetype" class="details">Use of Structure</label>
                            <select id="housetype" required>
                                <option value="" disabled selected>Select Type</option>
                                <option value="1">Residential</option>
                                <option value="2">Residential-Commercial</option>
                                <option value="3">Residential-Institutional</option>
                                <option value="4">Residential-Industrial</option>
                                <option value="5">Commercial</option>
                                <option value="6">Institutional</option>
                                <option value="7">Industrial</option>
                                <option value="8">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="housetype" class="details">Type of House/Structure</label>
                            <select id="housetype" required>
                                <option value="" disabled selected>Select Type</option>
                                <option value="1">Type I - Salvaged (plastic, tin, cardboard)</option>
                                <option value="2">Type II - Light (nipa, cogon, bamboo, light wood)</option>
                                <option value="3">Type III - Semi-concrete</option>
                                <option value="4">Type IV - Concrete</option>
                                <option value="5">Type V - Mixed materials</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="numberstorey" class="details">Number of Storey</label>
                            <select id="numberstorey" required>
                                <option value="" disabled selected>Select Type</option>
                                <option value="1">1 Story</option>
                                <option value="2">2 Story</option>
                                <option value="3">3 Story</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Est/Flr area(sq mtrs)</label>
                            <input type="text" placeholder="Enter Est Floor Area" required>
                        </div>

                        <div class="input-field">
                            <label for="toilet" class="details">Type of toilet facility that household use</label>
                            <select id="toilet" required>
                                <option value="" disabled selected>Select Type</option>
                                <option value="1">1 Water-sealed(flush or pour/flush) connected to sewerage system</option>
                                <option value="2">2 Water-sealed(flush or pour/flush) connected to septic tank</option>
                                <option value="3">3 Water-sealed(flush or pour/flush) connected to pit</option>
                                <option value="4">4 Water-sealed(flush or pour/flush) connected to drainage</option>
                                <option value="5">5 Non-water-sealed(ventilated improved pit, sanitary pit privy)</option>
                                <option value="6">6 Non-water-sealed(open pit privy, overhang)</option>
                                <option value="7">7 Shared toilet</option>
                                <option value="8">8 Public toilet</option>
                                <option value="9">9 No toilet (wrap and throw, arinola, closed pit, bush, lake, creek, river)</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="water" class="details">Primary Source(s) of Water for domestic use:</label>
                            <select id="water" required>
                                <option value="" disabled selected>Select Water Source</option>
                                <option value="1">Piped connection</option>
                                <option value="2">Public/Street faucet</option>
                                <option value="3">Deep or shallow well</option>
                                <option value="4">Spring/River/Pond/Stream</option>
                                <option value="5">Rain</option>
                                <option value="6">Water vendors(e.g. bottled water, container, peddlers)</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Others, Specify</label>
                            <input type="text" placeholder="Enter Water Source" required>
                        </div>

                        <div class="input-field">
                            <label for="garbage" class="details">Garbage Disposal/Management</label>
                            <select id="garbage" required>
                                <option value="" disabled selected>Select Type</option>
                                <option value="1">Collected by LGU but no separation of garbage/solid waste at the household</option>
                                <option value="2">Collected by LGU/solid waste segregated between biodegrable and non-biodegradable</option>
                                <option value="3">Composting</option>
                                <option value="4">Recycle and re-use as part of a livelihood/business activity</option>
                                <option value="5">Burning</option>
                                <option value="6">Throw it in the river/anywhere</option>

                            </select>
                        </div>     

                        <div class="input-field">
                            <label for="electric" class="details">Electricity/Lightning Facilities</label>
                            <select id="electric" required>
                                <option value="" disabled selected>Select type</option>
                                <option value="1">Connected to MERALCO</option>
                                <option value="2">Sub-connect to a neighbor</option>
                                <option value="3">Not connected/instead user kerosene lamp</option>
                                <option value="4">LPG lamp</option>

                            </select>
                        </div>       

                        <div class="input-field">
                            <label for="mode" class="details">Mode of House/Structure Acquisition</label>
                            <select id="mode" required>
                                <option value="" disabled selected>Select Mode of House</option>
                                <option value="1">Sold rights</option>
                                <option value="2">Transfer of Rights</option>
                                <option value="3">Constructed</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="member" class="details">Relationship with the Lot Owner</label>
                            <select id="member" required>
                                <option value="" disabled selected>Select Relationship</option>
                                <option value="Sitio 1">Lot Owner</option>
                                <option value="Sitio 2">Child</option>
                                <option value="Sitio 3">Parent</option>
                                <option value="Sitio 3">Relative</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="member" class="details">Type of Structure</label>
                            <select id="member" required>
                                <option value="" disabled selected>Select Sitio/Purok</option>
                                <option value="Sitio 1">Residential</option>
                                <option value="Sitio 2">Commercial</option>
                                <option value="Sitio 3">Appartment</option>
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

            <div class="form fourth">
                <header>GENERAL INFORMATION ON THE HOUSEHOLD</header>

                <div class="details member">

                    <span class="title">Name of Household Member</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last name" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter Middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Maiden Name</label>
                            <input type="text" placeholder="Enter Maiden name" >
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label for="sex" class="details">Sex</label>
                            <select id="sex" required>
                                <option value="" disabled selected>Choose Sex</option>
                                <option value="Sitio 1">Male</option>
                                <option value="Sitio 2">Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="civil" class="details">Civil Status</label>
                            <select id="civil" required>
                                <option value="" disabled selected>Select Civil Status</option>
                                <option value="Sitio 1">Single</option>
                                <option value="Sitio 2">Married</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter Occupation" required>
                        </div>  

                        <div class="input-field">
                            <label>Relation to Household head</label>
                            <input type="text" placeholder="Enter relation" required>
                        </div>  

                        <div class="input-field">
                            <label>Place of Work</label>
                            <input type="text" placeholder="Enter Place of Work">
                        </div>

                        <div class="input-field">
                            <label for="member" class="details">Member of vunerable community group</label>
                            <select id="member">
                                <option value="" disabled selected>Select Group</option>
                                <option value="1">PWD</option>
                                <option value="2">Senior Citizen</option>
                                <option value="3">Solo parent</option>
                                <option value="4">LGTBQI</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>If a PWD, specify disability</label>
                            <input type="text" placeholder="Enter disability">
                        </div>

                        <div class="input-field">
                            <label>If Member of LGBTQI, Gender Identification</label>
                            <input type="text" placeholder="Enter Identification">
                        </div>                   
                    </div>
                </div>

                <div class="details education">
                    <span class="title">Educational Background</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Elementary School</label>
                            <input type="text" placeholder="Enter Elem School">
                        </div>

                        <div class="input-field">
                            <label>Date Graduated</label>
                            <input type="date" placeholder="Enter Date">
                        </div>

                        <div class="input-field">
                            <label>Secondary School</label>
                            <input type="text" placeholder="Enter School">
                        </div>

                        <div class="input-field">
                            <label>Place of Work</label>
                            <input type="date" placeholder="Enter Date">
                        </div>

                      
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

                    <button type="button" class="addBtn">
                        <span class="btnText">+</span>
                    </button>
                </div>
            </div>  

            <div class="form fifth">
                <header>INFORMATION ON EMPLOYABLE/EMPLOYED HOUSEHOLD MEMBERS (FOR 16-65 YEARS OLD)</header>

                <div class="details member">

                    <span class="title">Name of Household Member</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last name" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter Middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Maiden Name</label>
                            <input type="text" placeholder="Enter Maiden name" >
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Enter Age" required>
                        </div>

                        <div class="input-field">
                            <label for="sex" class="details">Sex</label>
                            <select id="sex" required>
                                <option value="" disabled selected>Choose Sex</option>
                                <option value="Sitio 1">Male</option>
                                <option value="Sitio 2">Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="civil" class="details">Civil Status</label>
                            <select id="civil" required>
                                <option value="" disabled selected>Select Civil Status</option>
                                <option value="Sitio 1">Single</option>
                                <option value="Sitio 2">Married</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter Occupation" required>
                        </div>  

                        <div class="input-field">
                            <label>Relation to Household head</label>
                            <input type="text" placeholder="Enter relation" required>
                        </div>  

                        <div class="input-field">
                            <label>Place of Work</label>
                            <input type="text" placeholder="Enter Place of Work">
                        </div>

                        <div class="input-field">
                            <label for="member" class="details">Member of vunerable community group</label>
                            <select id="member">
                                <option value="" disabled selected>Select Group</option>
                                <option value="1">PWD</option>
                                <option value="2">Senior Citizen</option>
                                <option value="3">Solo parent</option>
                                <option value="4">LGTBQI</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>If a PWD, specify disability</label>
                            <input type="text" placeholder="Enter disability">
                        </div>

                        <div class="input-field">
                            <label>If Member of LGBTQI, Gender Identification</label>
                            <input type="text" placeholder="Enter Identification">
                        </div>  
                        
                        <div class="input-field">
                            <label>Estimated Monthly Income</label>
                            <input type="text" placeholder="Enter Estimated Income">
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <div class="backBtn">
                        <i class="uil uil-navigator"></i>
                        <span class="btnText">Back</span>
                    </div>

                    <button type="button" class="addBtn">
                        <span class="btnText">+</span>
                    </button>

                    <button type="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>  

        </form>
    </div>


    <script src = "js/scriptHead.js"></script>
</body>
</html>