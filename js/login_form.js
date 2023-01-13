// Login check js

const login_form = document.getElementById('login_form');
const login = document.getElementById('login');
const password = document.getElementById('password');


// Ajax implementation

login.onkeyup = function() {
    showHint(login.value);
};

/**
 *
 * Get input string.
 *
 * Returns string with hint if the good input. 
 *   
 * @param {*} str The `str` is checked for the correct value in the database.
 * @return string, taken login from the database if such login exists
 * and `no suggestion` if no such login exists 
 * 
 */

function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "get_hint.php?q=" + str, true);
      xmlhttp.send();
    }
  }


/*-----------------------------------------------------------------------------*/ 

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


login_form.addEventListener('submit', (e)=> {

    if(!validateLoginInputs()){
        e.preventDefault();    //stop form from submitting
    }
});

/**
 * 
 * Get input string.
 *
 * Returns Boolean True if the correct input.
 * 
 * @param string The `string` is checked for the correct value.
 * @return bool `True` if the `string` on success,
 * and `False` if the `string` is not success. 
 */

function validateLoginInputs() {

   const loginValue = login.value.trim();
   const passwordValue = password.value.trim();
   var pattern = /^[a-z0-9]*$/;
 

   if(loginValue === '') {
       setError(login, 'Login is required! JS ');
       return false;

   } else if (loginValue.length < 4 ) {
       setError(login, 'Login must be at least 4 characters! JS ');
       return false;    
   } else if (loginValue.length > 20 ) {
       setError(login, 'Login must be no more than 20 characters! JS ');
       return false;

   } else if (!login.value.match(pattern)) {
       setError(login, 'Login must contain only Lowercase Latin alphabets and numbers! JS ');
       return false;


   } else {
       setSuccess(login);
   }


   if(passwordValue === '') {
       setError(password, 'Password is required! JS ');
       return false;

   } else if (passwordValue.length < 6 ) {
       setError(password, 'Password must be at least 6 characters! JS ');
       return false;

   } else if (passwordValue.length > 60 ) {
       setError(password, 'Password must be no more than 60 characters! JS ');
       return false;

   }
   else {
       setSuccess(password);
   }

   
   return true;
   };