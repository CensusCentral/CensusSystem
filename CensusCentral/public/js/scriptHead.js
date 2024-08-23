const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");const forms = document.querySelectorAll(".form"),
        nextBtns = document.querySelectorAll(".nextBtn"),
        backBtns = document.querySelectorAll(".backBtn"),
        submitBtn = document.querySelector(".submitBtn");
  
  let currentFormIndex = 0;
  
  // Function to show the current form and hide others
  function updateFormVisibility() {
      forms.forEach((form, index) => {
          if (index === currentFormIndex) {
              form.style.opacity = '1';
              form.style.pointerEvents = 'auto';
              form.style.transform = 'translateX(0%)';
          } else if (index < currentFormIndex) {
              form.style.opacity = '0';
              form.style.pointerEvents = 'none';
              form.style.transform = 'translateX(-100%)';
          } else {
              form.style.opacity = '0';
              form.style.pointerEvents = 'none';
              form.style.transform = 'translateX(100%)';
          }
      });
  }
  
  // Event listeners for "Next" buttons
  nextBtns.forEach((nextBtn, index) => {
      nextBtn.addEventListener("click", () => {
          const inputs = forms[currentFormIndex].querySelectorAll("input");
          let allFilled = true;
          inputs.forEach(input => {
              if (input.value === "") {
                  allFilled = false;
              }
          });
  
          if (allFilled) {
              if (currentFormIndex < forms.length - 1) {
                  currentFormIndex++;
                  updateFormVisibility();
              }
          } else {
              alert("Please fill in all the inputs");
          }
      });
  });
  
  // Event listeners for "Back" buttons
  backBtns.forEach((backBtn, index) => {
      backBtn.addEventListener("click", () => {
          if (currentFormIndex > 0) {
              currentFormIndex--;
              updateFormVisibility();
          }
      });
  });
  
  // Initialize the visibility
  updateFormVisibility();
  

nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
            alert("Input is empty")
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));

