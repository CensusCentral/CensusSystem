<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseHold Number</title>
    <link rel="stylesheet" href="css/FormNumberHold.css">
</head>
<body>
    <div class="container">
        <div class="title">Household Number</div>
        <form id="householdForm" action="#">


            <div class="houseMemberDetails">


              <div class="input-box">
                    <span class="details">Survey Form No.</span>
                    <label id="formNo">Form No. will be displayed here</label>
                </div>


                <div class="input-box">
                    <span class="details">Date</span>
                    <input type="date" id="date" placeholder="Choose Date" required>   
                </div>

                

                <div class="input-box">
                    <label for="barangay" class="details">Barangay</label>
                    <select id="barangay" required>
                        <option value="" disabled selected>Select Barangay</option>
                        <option value="Barangay 1">Barangay 1</option>
                        <option value="Barangay 2">Barangay 2</option>
                        <option value="Barangay 3">Barangay 3</option>
                       
                    </select>
                </div>

                <div class="input-box">
                    <label for="sitio_purok" class="details">Sitio / Purok</label>
                    <select id="sitio_purok" required>
                        <option value="" disabled selected>Select Sitio/Purok</option>
                        <option value="Sitio 1">Sitio 1</option>
                        <option value="Sitio 2">Sitio 2</option>
                        <option value="Sitio 3">Sitio 3</option>
                        <!-- Add more Sitios/Puroks as needed -->
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Interviewer</span>
                    <input type="text" id="interviewer" placeholder="Enter Interviewer Name" required>   
                </div>
            </div>
            
            <div class="classificationOfArea">
                <input type="radio" name="COF" id="dot-1" value="Danger Zone" required>
                <input type="radio" name="COF" id="dot-2" value="Waterways" required>
                <span class="classificationOfArea">Classification of Area</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="COF">Danger Zone</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="COF">Waterways</span>
                    </label>
                </div>
            </div>
            <div class="button-group">
                <div class="button">
                    <input type="button" value="Cancel">
                </div>
                <div class="button">
                    <input type="button" value="Confirm" id="confirmButton">
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById("confirmButton").addEventListener("click", function() {
            var date = document.getElementById("date").value;
            var formNo = document.getElementById("formNo").value;
            var barangay = document.getElementById("barangay").value;
            var sitioPurok = document.getElementById("sitio_purok").value;
            var interviewer = document.getElementById("interviewer").value;
            var cof = document.querySelector('input[name="COF"]:checked');

            if (date && formNo && barangay && sitioPurok && interviewer && cof) {
                window.location.href = "{{url('FormA')}}";
            } else {
                alert("Please fill all the fields.");
            }
        });
    </script>
</body>
</html>
