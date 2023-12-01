document.addEventListener("DOMContentLoaded"),
function(ngjarja) {
    const BtnSubmit = document.getElementById('login-btn');

    const validate = (ngjarja) => {
    ngjarja.preventDefault();
    const perdoruesi = document.getElementById('userid');
    const fjalkalimi = document.getElementById('pass');
    const emrin = document.getElementById('emri');
    const emailin = document.getElementById('adresaEmailit');
    if (perdoruesi.value === "") {
    alert("Ju lutem shtoni perdoruesin.");
    perdoruesi.focus();
    return false;
    }
    if (fjalkalimi.value === "") {
    alert("Ju lutem shtoni Fjalkalimin.");
    fjalkalimi.focus();
    return false;
    }
    if (emrin.value === "") {
    alert("Ju lutem shtoni emrin e Plote.");
    emrin.focus();
    return false;
    }
    if (emailin.value === "") {
    alert("Ju lutem shtoni email'in.");
    emailin.focus();
    return false;
    }

    if (!emailValid(emailin.value)) {
        alert("Ju lutem te shtoni email'in valid.");
        emailin.focus();
        return false;
        }
        return true; // mund te dergohet te serveri
        const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-
        .])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
        }
        BtnSubmit.addEventListener('click', validate);
        }
        );
    