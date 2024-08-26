// script.js

document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.form-section');
    const nextButton = document.getElementById('nextBtn');
    const backButton = document.getElementById('backBtn');
    let currentFormIndex = 0;

    // // Function to show the current form and hide others
    // function updateFormVisibility() {
    //     forms.forEach((form, index) => {
    //         if (index === currentFormIndex) {
    //             form.style.opacity = '1';
    //             form.style.pointerEvents = 'auto';
    //             form.style.transform = 'translateX(0%)';
    //         } else if (index < currentFormIndex) {
    //             form.style.opacity = '0';
    //             form.style.pointerEvents = 'none';
    //             form.style.transform = 'translateX(-100%)';
    //         } else {
    //             form.style.opacity = '0';
    //             form.style.pointerEvents = 'none';
    //             form.style.transform = 'translateX(100%)';
    //         }
    //     });
    // }

    // Initial visibility update
    updateFormVisibility();

    // Event listener for the Next button
    nextButton.addEventListener('click', () => {
        if (currentFormIndex < forms.length - 1) {
            currentFormIndex++;
            updateFormVisibility();
        }
    });

    // Event listener for the Back button
    backButton.addEventListener('click', () => {
        if (currentFormIndex > 0) {
            currentFormIndex--;
            updateFormVisibility();
        }
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
