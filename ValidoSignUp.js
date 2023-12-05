document.addEventListener("DOMContentLoaded",
function(ngjarja) {
const BtnSubmit = document.getElementById('submit');

const validate = (ngjarja) => {
ngjarja.preventDefault();


const emrin = document.getElementById('emri');
const mbiemrin = document.getElementById('mbiemri');
const emailin = document.getElementById('email');
const fjalkalimi = document.getElementById('passwordi');
const confirm = document.getElementById('confirm');
if (emri.value === "") {
alert("Ju lutem shtoni emrin.");
emri.focus();
return false;
}
if (mbiemri.value === "") {
    alert("Ju lutem shtoni emrin.");
    mbiemri.focus();
    return false;
    }


if (emailin.value === "") {
alert("Ju lutem shtoni emailin.");
emailin.focus();
return false;
}
if (fjalkalimi.value === "") {
    alert("Ju lutem shtoni Fjalkalimin.");
    fjalkalimi.focus();
    return false;
    }
    if (confirm.value === "") {
        alert("Ju lutem shtoni Konfirmimin.");
        confirm.focus();
        return false;
        }


    }

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
    });
    


    
    
