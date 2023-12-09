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
     const usernameValid = (username) => {
         const usernameRegex = /^[a-z0-9]{1,20}$/;
         return usernameRegex.test(username.toLowerCase());
         }
         


     
     
if (password.value === "") {
     alert("Ju lutem shtoni Fjalkalimin.");
  password.focus();
     return false;
     }
     const passwordValid = (password) => {
         const passwordRegex = /^(?=[a-z])[a-z0-9]{8,}$/;
         return passwordRegex.test(password.toLowerCase());
         }


 };


        

    
    BtnLogIn.addEventListener('click', validate);
    console.log("JavaScript is running!");
});

    
   
    
