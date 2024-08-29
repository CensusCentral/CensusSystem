// script.js

document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.form-section');
    const nextButtons = document.querySelectorAll('.nextBtn');
    const backButtons = document.querySelectorAll('.backBtn');
    let currentFormIndex = 0;

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
});

let memberIndex = 1;

function addMember() {
    const container = document.getElementById('members-container');
    const newMember = document.querySelector('.details.member').cloneNode(true);
    
    newMember.setAttribute('data-index', memberIndex);
    
    newMember.querySelectorAll('input, select').forEach(input => {
        const name = input.getAttribute('name');
        input.setAttribute('name', name.replace(/\[\d+\]/, `[${memberIndex}]`));
    });
    
    container.appendChild(newMember);
    memberIndex++;
}
