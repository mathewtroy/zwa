// Register check js


const form = document.getElementById('form');
const login = document.getElementById('login');
const firstname = document.getElementById('firstname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');

// Delete special chars

login.onkeyup = function() {
    login.value = login.value.replace(/[-)&*+<=>!@,:;('/{}|]/g, '');
}

firstname.onkeyup = function() {
    firstname.value = firstname.value.replace(/[-)&*+<=>!@,:;('/{}|]/g, '');
}

email.onkeyup = function() {
    email.value = email.value.replace(/[&*<>']/g, '');
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

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
    /** Converts all the alphabetic characters in a string to lowercase. */

}


form.addEventListener('submit', (e)=> {
   
    if(!validateInputs()){
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

function validateInputs() {
    const loginValue = login.value.trim();
    const firstnameValue = firstname.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const cpasswordValue = cpassword.value.trim();
    var pattern = /^[a-z0-9]*$/;
    var alphabet = /^[a-zA-Z]*$/;


/*-----------------------------------------------------------------------------*/ 
    // Check login

    if(loginValue === '') {
        setError(login, 'Login is required! JS ');
        return false;

    } else if (loginValue.length < 4 ) { 
        setError(login, 'Login must be at least 4 characters! JS ');
        return false;    
    } else if (loginValue.length >= 20 ) {
        setError(login, 'Login must be no more than 20 characters! JS ');
        return false;

    } else if (!login.value.match(pattern)) {
        setError(login, 'Login must contain only Lowercase Latin alphabets and numbers! JS ');
        return false;


    } else {
        setSuccess(login);
    }


/*-----------------------------------------------------------------------------*/ 
    // Check name

    if(firstnameValue === '') {
        setError(firstname, 'Firstname is required! JS ');
        return false;

    } else if (firstnameValue.length < 2 ) {
        setError(firstname, 'Firstname must be at least 2 characters! JS ');
        return false; 

    } else if (firstnameValue.length >= 20 ) {
        setError(firstname, 'Firstname must be no more than 20 characters! JS ');
        return false; 

    } else if (!firstname.value.match(alphabet)) {  
        setError(firstname, 'Firstname must contain only Latin alphabets! JS ');
        return false;

  
    } else {
        setSuccess(firstname);
    }


/*-----------------------------------------------------------------------------*/ 
    // Check email

    if(emailValue === '') {
        setError(email, 'Email is required! JS ');
        return false;

    } else if (emailValue.length > 40 ) {
        setError(email, 'Email must be no more than 40 characters! JS ');
        return false; 

    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address! JS ');
        return false;

    } else {
        setSuccess(email);
    }


/*-----------------------------------------------------------------------------*/ 
    // Check password

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


/*-----------------------------------------------------------------------------*/ 
    // Check second password

    if(cpasswordValue === '') {
        setError(cpassword, 'Please confirm your password! JS ');
        return false;
    } else if (cpasswordValue !== passwordValue) {
        setError(cpassword, "Passwords is not match! JS ");
        return false;
    } else {
        setSuccess(cpassword);
    }

    return true;
    };