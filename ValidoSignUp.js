/*document.querySelector('form').addEventListener('submit', validateForm);*/

let emriRegex = /^[A-Z][a-z]{3,8}$/;
let emailRegex = /[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
let mbiemriRegex = /^[a-zA-Z]{2,}(?:\s[a-zA-Z]{1,}'?-?[a-zA-Z]{2,})?$/;
let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
let phoneNumberRegex = /^\d{3}-\d{3}-\d{3}$/;

function validateForm() {
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

    if (!emriRegex.test(emriInput.value)) {
        emriError.innerText = 'Invalid name';
        return;
    }

     if (!mbiemriRegex.test(mbiemriInput.value)) {
        mbiemriError.innerText = 'Invalid last name';
        return;
    }

     if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email';
        return;
    }

    if (!passwordRegex.test(passwordInput.value)) {
        passwordError.innerText = 'Invalid password';
        return;
    }

    if (passwordInput.value !== confPasswordInput.value) {
        confPasswordError.innerText = 'Passwords do not match';
        return;
    }
    if (!phoneNumberRegex.test(phoneNumberInput.value)) {
        phoneNumberError.innerText = 'Invalid phone number';
        return;
    }

    if (genderSelect.value === '') {
        genderError.innerText = 'Please select a gender';
        return;

    alert('Form submitted successfully!');
}
