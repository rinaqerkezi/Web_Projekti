document.addEventListener("DOMContentLoaded", function (event) {
  const signupForm = document.getElementById('signupForm');

  const validateForm = (event) => {
    event.preventDefault();

    let emriRegex = /^[A-Z][a-z]{2,8}$/;
    let emailRegex = /[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
    let mbiemriRegex = /^[a-zA-Z]{2,}(?:\s[a-zA-Z]{1,}'?-?[a-zA-Z]{2,})?$/;
    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
    let phoneNumberRegex = /^\d{3}-\d{3}-\d{3}$/;

    let emriInput = document.getElementById('emri');
    let emriError = document.getElementById('emriError');
    let mbiemriInput = document.getElementById('mbiemri');
    let mbiemriError = document.getElementById('mbiemriError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('EmailError');
    let passwordInput = document.getElementById('passwordi');
    let passwordError = document.getElementById('PasswordError');
    let confPasswordInput = document.getElementById('confirm');
    let confPasswordError = document.getElementById('ConfirmPassError');
    let phoneNumberInput = document.getElementById('phoneNumber');
    let phoneNumberError = document.getElementById('PhoneNumberError');
    let genderSelect = document.getElementById('gender');
    let genderError = document.getElementById('GenderError');

    emriError.innerText = '';
    mbiemriError.innerText = '';
    emailError.innerText = '';
    passwordError.innerText = '';
    confPasswordError.innerText = '';
    phoneNumberError.innerText = '';
    genderError.innerText = '';

    let isValid = true;

    if (emriInput.value === "") {
      alert("Ju lutem shtoni perdoruesin.");
      emriInput.focus();
      return false;
    }

    if (!emriRegex.test(emriInput.value)) {
      emriError.innerText = 'Invalid name';
      isValid = false;
    }

    if (!mbiemriRegex.test(mbiemriInput.value)) {
      mbiemriError.innerText = 'Invalid last name';
      isValid = false;
    }

    if (!emailRegex.test(emailInput.value)) {
      emailError.innerText = 'Invalid email';
      isValid = false;
    }

    if (!passwordRegex.test(passwordInput.value)) {
      passwordError.innerText = 'Invalid password';
      isValid = false;
    }

    if (passwordInput.value !== confPasswordInput.value) {
      confPasswordError.innerText = 'Passwords do not match';
      isValid = false;
    }

    if (!phoneNumberRegex.test(phoneNumberInput.value)) {
      phoneNumberError.innerText = 'Invalid phone number';
      isValid = false;
    }

    if (genderSelect.value === '') {
      genderError.innerText = 'Please select a gender';
      isValid = false;
    }

    if (isValid) {
      alert('Form submitted successfully!');
      
    }
  };

  signupForm.addEventListener('submit', validateForm);
});
