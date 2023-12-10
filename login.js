document.addEventListener("DOMContentLoaded", function () {
    const BtnLogIn = document.getElementById('login-btn');

    const validate = (event) => {
        event.preventDefault();

        const username = document.getElementById('username');
        const password = document.getElementById('password');

        if (username.value === "") {
            alert("Ju lutem shtoni perdoruesin.");
            username.focus();
            return false;
        }

        if (!usernameValid(username.value)) {
            alert("Username is invalid. It should start with a lowercase letter and can only contain lowercase letters and numbers (up to 20 characters).");
            username.focus();
            return false;
        }

        if (password.value === "") {
            alert("Ju lutem shtoni Fjalkalimin.");
            password.focus();
            return false;
        }

        if (!passwordValid(password.value)) {
            alert("Password is invalid. It should start with a lowercase letter and can only contain lowercase letters and numbers (at least 8 characters).");
            password.focus();
            return false;
        }

        
    };

    const usernameValid = (username) => {
        const usernameRegex = /^[a-z][a-z0-9]{0,19}$/;
        return usernameRegex.test(username.toLowerCase());
    };

    const passwordValid = (password) => {
        const passwordRegex = /^(?=[a-z])[a-z0-9]{8,}$/;
        return passwordRegex.test(password.toLowerCase());
    };

    BtnLogIn.addEventListener('click', validate);
});
