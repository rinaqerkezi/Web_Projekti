document.addEventListener("DOMContentLoaded",
function(ngjarja) {
    const BtnLogIn = document.getElementById('login-btn');
   
    const validate = (ngjarja) => {
    ngjarja.preventDefault();
    const username = document.getElementById('userid');
    const password = document.getElementById('passwordid');
    
    if (username.value === "") {
    alert("Ju lutem shtoni perdoruesin.");
    username.focus();
    return false;
    }
    if (password.value === "") {
    alert("Ju lutem shtoni Fjalkalimin.");
    password.focus();
    return false;
    }
    BtnSubmit.addEventListener('click', validate);
}
}
