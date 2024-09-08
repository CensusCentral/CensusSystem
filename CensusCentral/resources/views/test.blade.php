<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1>Survey Form</h1>
        <form action="{{ route('Isfhead.store') }}" method="POST">
            @csrf
            <!-- Survey Form Section -->
            <h3>Survey Form</h3>
            <div class="form-group">
                <label for="surveyDate">Survey Date:</label>
                <input type="date" class="form-control @error('surveyDate') is-invalid @enderror" id="surveyDate" name="surveyDate" value="{{ old('surveyDate') }}" required>
                @error('surveyDate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="barangay">Barangay:</label>
                <input type="text" class="form-control @error('barangay') is-invalid @enderror" id="barangay" name="barangay" value="{{ old('barangay') }}" required>
                @error('barangay')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sitioPurok">Sitio/Purok:</label>
                <input type="text" class="form-control @error('sitioPurok') is-invalid @enderror" id="sitioPurok" name="sitioPurok" value="{{ old('sitioPurok') }}">
                @error('sitioPurok')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="interviewerName">Interviewer Name:</label>
                <input type="text" class="form-control @error('interviewerName') is-invalid @enderror" id="interviewerName" name="interviewerName" value="{{ old('interviewerName') }}" required>
                @error('interviewerName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="areaClassification">Area Classification:</label>
                <input type="text" class="form-control @error('areaClassification') is-invalid @enderror" id="areaClassification" name="areaClassification" value="{{ old('areaClassification') }}" required>
                @error('areaClassification')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- ISF Heads Section -->
            <h3>ISF Heads</h3>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" value="{{ old('lastName') }}" required>
                @error('lastName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
                @error('firstName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="middleName">Middle Name:</label>
                <input type="text" class="form-control @error('middleName') is-invalid @enderror" id="middleName" name="middleName" value="{{ old('middleName') }}">
                @error('middleName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="maidenName">Maiden Name:</label>
                <input type="text" class="form-control @error('maidenName') is-invalid @enderror" id="maidenName" name="maidenName" value="{{ old('maidenName') }}">
                @error('maidenName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="dateOfBirth">Date of Birth:</label>
                <input type="date" class="form-control @error('dateOfBirth') is-invalid @enderror" id="dateOfBirth" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required>
                @error('dateOfBirth')                       
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" required>
                @error('age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <select id="sex" name="sex" class="form-control @error('sex') is-invalid @enderror" required>
                    <option value="" disabled selected>Select Sex</option>
                    <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('sex')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="civilStatus">Civil Status:</label>
                <input type="text" class="form-control @error('civilStatus') is-invalid @enderror" id="civilStatus" name="civilStatus" value="{{ old('civilStatus') }}" required>
                @error('civilStatus')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control @error('occupation') is-invalid @enderror" id="occupation" name="occupation" value="{{ old('occupation') }}">
                @error('occupation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="workplace">Workplace:</label>
                <input type="text" class="form-control @error('workplace') is-invalid @enderror" id="workplace" name="workplace" value="{{ old('workplace') }}">
                @error('workplace')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="communityGroup">Community Group:</label>
                <input type="text" class="form-control @error('communityGroup') is-invalid @enderror" id="communityGroup" name="communityGroup" value="{{ old('communityGroup') }}">
                @error('communityGroup')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender') }}">
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="disability">Disability:</label>
                <input type="text" class="form-control @error('disability') is-invalid @enderror" id="disability" name="disability" value="{{ old('disability') }}">
                @error('disability')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseLname">Spouse Last Name:</label>
                <input type="text" class="form-control @error('spouseLname') is-invalid @enderror" id="spouseLname" name="spouseLname" value="{{ old('spouseLname') }}">
                @error('spouseLname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseFname">Spouse First Name:</label>
                <input type="text" class="form-control @error('spouseFname') is-invalid @enderror" id="spouseFname" name="spouseFname" value="{{ old('spouseFname') }}">
                @error('spouseFname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseMname">Spouse Middle Name:</label>
                <input type="text" class="form-control @error('spouseMname') is-invalid @enderror" id="spouseMname" name="spouseMname" value="{{ old('spouseMname') }}">
                @error('spouseMname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseMaidenName">Spouse Maiden Name:</label>
                <input type="text" class="form-control @error('spouseMaidenName') is-invalid @enderror" id="spouseMaidenName" name="spouseMaidenName" value="{{ old('spouseMaidenName') }}">
                @error('spouseMaidenName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseDOB">Spouse Date of Birth:</label>
                <input type="date" class="form-control @error('spouseDOB') is-invalid @enderror" id="spouseDOB" name="spouseDOB" value="{{ old('spouseDOB') }}">
                @error('spouseDOB')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseAge">Spouse Age:</label>
                <input type="number" class="form-control @error('spouseAge') is-invalid @enderror" id="spouseAge" name="spouseAge" value="{{ old('spouseAge') }}">
                @error('spouseAge')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseSex">Spouse Sex:</label>
                <select id="spouseSex" name="spouseSex" class="form-control @error('spouseSex') is-invalid @enderror">
                    <option value="" disabled selected>Select Sex</option>
                    <option value="Male" {{ old('spouseSex') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('spouseSex') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('spouseSex')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spouseCommunityGroup">Spouse Community Group:</label>
                <input type="text" class="form-control @error('spouseCommunityGroup') is-invalid @enderror" id="spouseCommunityGroup" name="spouseCommunityGroup" value="{{ old('spouseCommunityGroup') }}">
                @error('spouseCommunityGroup')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="MedicalHistory">Medical History:</label>
                <input type="text" class="form-control @error('MedicalHistory') is-invalid @enderror" id="MedicalHistory" name="MedicalHistory" value="{{ old('MedicalHistory') }}">
                @error('MedicalHistory')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="HouseholdClass">Household Class:</label>
                <input type="text" class="form-control @error('HouseholdClass') is-invalid @enderror" id="HouseholdClass" name="HouseholdClass" value="{{ old('HouseholdClass') }}">
                @error('HouseholdClass')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="householdSize">Household Size:</label>
                <input type="number" class="form-control @error('householdSize') is-invalid @enderror" id="householdSize" name="householdSize" value="{{ old('householdSize') }}">
                @error('householdSize')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="yearResidency">Year of Residency:</label>
                <input type="number" class="form-control @error('yearResidency') is-invalid @enderror" id="yearResidency" name="yearResidency" value="{{ old('yearResidency') }}">
                @error('yearResidency')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="doubleHousehold">Double Household:</label>
                <input type="text" class="form-control @error('doubleHousehold') is-invalid @enderror" id="doubleHousehold" name="doubleHousehold" value="{{ old('doubleHousehold') }}">
                @error('doubleHousehold')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="indigenousOrNot">Indigenous or Not:</label>
                <input type="text" class="form-control @error('indigenousOrNot') is-invalid @enderror" id="indigenousOrNot" name="indigenousOrNot" value="{{ old('indigenousOrNot') }}">
                @error('indigenousOrNot')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="placeOrigin">Place of Origin:</label>
                <input type="text" class="form-control @error('placeOrigin') is-invalid @enderror" id="placeOrigin" name="placeOrigin" value="{{ old('placeOrigin') }}">
                @error('placeOrigin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="reasonEstablishing">Reason for Establishing:</label>
                <input type="text" class="form-control @error('reasonEstablishing') is-invalid @enderror" id="reasonEstablishing" name="reasonEstablishing" value="{{ old('reasonEstablishing') }}">
                @error('reasonEstablishing')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tenurialStatus">Tenurial Status:</label>
                <input type="text" class="form-control @error('tenurialStatus') is-invalid @enderror" id="tenurialStatus" name="tenurialStatus" value="{{ old('tenurialStatus') }}">
                @error('tenurialStatus')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="governmentResettelment">Government Resettlement:</label>
                <input type="text" class="form-control @error('governmentResettelment') is-invalid @enderror" id="governmentResettelment" name="governmentResettelment" value="{{ old('governmentResettelment') }}">
                @error('governmentResettelment')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="whichProgram">Which Program:</label>
                <input type="text" class="form-control @error('whichProgram') is-invalid @enderror" id="whichProgram" name="whichProgram" value="{{ old('whichProgram') }}">
                @error('whichProgram')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
