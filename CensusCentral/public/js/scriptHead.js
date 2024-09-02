document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.container');
    const forms = document.querySelectorAll('.form-section');
    const nextButtons = document.querySelectorAll('.nextBtn');
    const backButtons = document.querySelectorAll('.backBtn');
    const sexField = document.querySelector('select[name="sex"]'); // Select the sex field
    const maidenNameField = document.querySelector('input[name="maidenName"]'); // Select the maiden name field
    const communityGroupField = document.querySelector('select[name="communityGroup"]'); // Select the community group field
    const disabilityField = document.querySelector('input[name="disability"]'); // Select the disability field
    const genderField = document.querySelector('input[name="gender"]');


    let currentFormIndex = 0;

    // Function to adjust container height based on the visible form section
    function adjustContainerHeight() {
        const activeForm = forms[currentFormIndex];
        const activeFormHeight = activeForm.scrollHeight;
        container.style.height = `${activeFormHeight + 200}px`; // Add some padding to prevent overflow
    }

    // Function to show the current form and hide others
    function updateFormVisibility() {
        forms.forEach((form, index) => {
            if (index === currentFormIndex) {
                form.classList.add('active');
                form.classList.remove('prev');
            } else if (index < currentFormIndex) {
                form.classList.remove('active');
                form.classList.add('prev');
            } else {
                form.classList.remove('active');
                form.classList.remove('prev');
            }
        });
        adjustContainerHeight(); // Adjust the container height after visibility update
    }

    // Function to validate required fields in the current form
    function validateFormFields() {
        const currentForm = forms[currentFormIndex];
        const fields = currentForm.querySelectorAll('input[required], select[required]');
        let allFilled = true;

        fields.forEach(field => {
            if (!field.value) {
                allFilled = false;
                field.style.borderColor = 'red'; // Highlight empty fields
            } else {
                field.style.borderColor = ''; // Reset border color if filled
            }
        });

        return allFilled;
    }

    // Combined function to toggle fields based on the selected values
    function updateFieldStates() {
        // Toggle maiden name field based on sex
        if (sexField.value === 'Female') {
            maidenNameField.disabled = false; // Enable the maiden name field
        } else {
            maidenNameField.disabled = true; // Disable the maiden name field
            maidenNameField.value = ''; // Clear the value when disabled
        }

        // Toggle disability field based on community group
        if (communityGroupField.value === 'PWD') {
            disabilityField.disabled = false; // Enable the disability field
            genderField.disabled = true;
            genderField.value = '';
        } 
        else if(communityGroupField.value === 'LGBTQIA+'){

                genderField.disabled = false;
                disabilityField.disabled = true; // Disable the disability field
                disabilityField.value = ''; 

        }else {
            disabilityField.disabled = true; // Disable the disability field
            disabilityField.value = ''; // Clear the value when disabled
            genderField.disabled = true;
            genderField.value = '';
        }
    }

    // Add event listeners for changes in the sex and community group fields
    sexField.addEventListener('change', updateFieldStates);
    communityGroupField.addEventListener('change', updateFieldStates);



    

// Initialize the auto-fill function on DOMContentLoaded
document.addEventListener('DOMContentLoaded', autoFillAge);


    // Event listener for all Next buttons
    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (validateFormFields()) {
                if (currentFormIndex < forms.length - 1) {
                    currentFormIndex++;
                    updateFormVisibility();
                }
            } else {
                alert('Please fill out all required fields.');
            }
        });
    });

    // Event listener for all Back buttons
    backButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentFormIndex > 0) {
                currentFormIndex--;
                updateFormVisibility();
            }
        });
    });

    // Adjust container height when a member is added
    container.addEventListener('DOMNodeInserted', function() {
        adjustContainerHeight();
    });

    // Initial visibility update
    updateFormVisibility();

    // Initial call to set the maiden name and disability field states based on initial values
    updateFieldStates();
});


// Function to calculate age from birthdate
function calculateAge(birthdate) {
    const today = new Date();
    const birthDate = new Date(birthdate);
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDifference = today.getMonth() - birthDate.getMonth();

    // Check if the birthday has occurred this year
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age;
}

// Function to handle input change and auto-fill age
function autoFillAge() {
    const birthdateField = document.querySelector('input[name="dateOfBirth"]'); // Select the birthdate input
    const ageField = document.querySelector('input[name="age"]'); // Select the age input

    birthdateField.addEventListener('change', function() {
        const birthdate = birthdateField.value;
        if (birthdate) {
            const age = calculateAge(birthdate);
            ageField.value = age;
        } else {
            ageField.value = ''; // Clear age if no birthdate is provided
        }
    });
}

document.addEventListener('DOMContentLoaded', autoFillAge);
