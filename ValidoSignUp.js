

document.addEventListener("DOMContentLoaded", function () {
  const signupForm = document.getElementById('signupForm');

  const validateForm = (event) => {
    event.preventDefault();

    // Reset all error messages before validating
    resetErrorMessages();

    let emriRegex = /^[A-Z][a-z]{2,8}$/;
    let mbiemriRegex = /^[a-zA-Z]{2,}(?:\s[a-zA-Z]{1,}'?-?[a-zA-Z]{2,})?$/;
    let emailRegex = /[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
    let phoneNumberRegex = /^\d{3}-\d{3}-\d{3}$/;

    let emriInput = document.getElementById('emri');
    let emriError = document.getElementById('emriError');
    let mbiemriInput = document.getElementById('mbiemri');
    let mbiemriError = document.getElementById('mbiemriError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let passwordInput = document.getElementById('passwordi');
    let passwordError = document.getElementById('passwordError');
    let confirmPassInput = document.getElementById('confirm');
    let confirmPassError = document.getElementById('confirmPassError');
    let genderSelect = document.getElementById('gender');
    let genderError = document.getElementById('genderError');
    let phoneNumberInput = document.getElementById('phoneNumber');
    let phoneNumberError = document.getElementById('phoneNumberError');

    // Validate First Name
   // Validate First Name
if (emriInput.value.trim() === "") {
displayError(emriError, 'Please enter your first name.');
emriInput.focus();
return false;
}

if (!emriRegex.test(emriInput.value)) {
displayError(emriError, 'Invalid first name format.');
emriInput.focus();
return false;
}


    // Validate Last Name
    if (mbiemriInput.value.trim() === "") {
        displayError(mbiemriError, 'Please enter your first name.');
        mbiemriInput.focus();
        return false;
      }
    if (!mbiemriRegex.test(mbiemriInput.value)) {
      displayError(mbiemriError, 'Invalid last name format.');
      mbiemriInput.focus();
      return false;
    }

    // Validate Email
    if (emailInput.value.trim() === "") {
        displayError(emailError, 'Please enter your email.');
        emailInput.focus();
        return false;
      }
    if (!emailRegex.test(emailInput.value)) {
      displayError(emailError, 'Invalid email format.');
      emailInput.focus();
      return false;
    }

    // Validate Password
    // Validate Password
if (passwordInput.value.trim() === "") {
displayError(passwordError, 'Please enter your password.');
passwordInput.focus();
return false;
}
if (!passwordRegex.test(passwordInput.value)) {
displayError(passwordError, 'Invalid password format.');
passwordInput.focus();  // <-- Correct focus here
return false;
}


    // Confirm Password
    if (passwordInput.value !== confirmPassInput.value) {
      displayError(confirmPassError, 'Passwords do not match.');
      confirmPassInput.focus();
      return false;
    }

    // Validate Phone Number
    if (!phoneNumberRegex.test(phoneNumberInput.value)) {
      displayError(phoneNumberError, 'Invalid phone number format.');
      phoneNumberInput.focus();
      return false;
    }

    // Validate Gender
    if (genderSelect.value === '') {
      displayError(genderError, 'Please select a gender.');
      genderSelect.focus();
      return false;
    }

    // If all validations pass, form is submitted successfully
    alert('Form submitted successfully!');
  };

  const resetErrorMessages = () => {
    // Reset error messages for all fields
    document.getElementById('emriError').innerText = '';
    document.getElementById('mbiemriError').innerText = '';
    document.getElementById('emailError').innerText = '';
    document.getElementById('passwordError').innerText = '';
    document.getElementById('confirmPassError').innerText = '';
    document.getElementById('genderError').innerText = '';
    document.getElementById('phoneNumberError').innerText = '';
  };

  const displayError = (element, message) => {
    // Display error message for the given element
    element.innerText = message;
  };
 
  signupForm.addEventListener('submit', validateForm);
});