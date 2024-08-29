// script.js

document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.container');
    const forms = document.querySelectorAll('.form-section');
    const nextButtons = document.querySelectorAll('.nextBtn');
    const backButtons = document.querySelectorAll('.backBtn');
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

    // Initial visibility update
    updateFormVisibility();

    // Event listener for all Next buttons
    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentFormIndex < forms.length - 1) {
                currentFormIndex++;
                updateFormVisibility();
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

    // Initial container height adjustment
    adjustContainerHeight();
});




