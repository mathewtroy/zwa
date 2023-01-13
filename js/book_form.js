// Booking check js


const book_form = document.getElementById('book_form');
const name_b = document.getElementById('name_b');
const email_b = document.getElementById('email_b');
const phone = document.getElementById('phone');
const address = document.getElementById('address');
const location1 = document.getElementById('location');
const guests = document.getElementById('guests');
const days = document.getElementById('days');


// Delete special chars
name_b.onkeyup = function() {
    name_b.value = name_b.value.replace(/[-)&*+<=>!@,:;('/{}|]/g, '');
}

email_b.onkeyup = function() {
    email_b.value = email_b.value.replace(/[&*<>']/g, '');
}

phone.onkeyup = function() {
    phone.value = phone.value.replace(/[-)&*+<=>!@,:;('/{}|]/g, '');
}

address.onkeyup = function() {
    address.value = address.value.replace(/[&*+<=>!@'{}|]/g, '');
}

location1.onkeyup = function() {
    location1.value = location1.value.replace(/[&*+<=>!@'{}|]/g, '');
}

guests.onkeyup = function() {
    guests.value = guests.value.replace(/[-)&*+<=>!@,:;('/{}|]/g, '');
}

days.onkeyup = function() {
    days.value = days.value.replace(/[-)&*+<=>!@,:;('/{}|]/g, '');
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


const isValidBookEmail = email_b => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email_b).toLowerCase());
    /** Converts all the alphabetic characters in a string to lowercase. */

}

book_form.addEventListener('submit', (e)=> {

    if(!validateBookingInputs()){
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

function validateBookingInputs() {
    const nameBookValue = name_b.value.trim();
    const emailBookValue = email_b.value.trim();
    const phoneValue = phone.value.trim();
    const addressValue = address.value.trim();
    const location1Value = location1.value.trim();
    const guestsValue = guests.value.trim();
    const daysValue = days.value.trim();
    var pattern = /^[a-zA-Z0-9_ ]*$/;
    var alphabet = /^[a-zA-Z]*$/;

/*-----------------------------------------------------------------------------*/ 
    // Check name

    if(nameBookValue === '') {
        setError(name_b, 'Firstname is required! JS ');
        return false;

    } else if (nameBookValue.length < 2 ) {
        setError(name_b, 'Firstname must be at least 2 characters! JS ');
        return false; 

    } else if (nameBookValue.length >= 20 ) {
        setError(name_b, 'Firstname must be no more than 20 characters! JS ');
        return false; 

    } else if (!name_b.value.match(alphabet)) {  
        setError(name_b, 'Firstname must contain only Latin alphabets! JS ');
        return false;


    } else {
        setSuccess(name_b);
    }

/*-----------------------------------------------------------------------------*/     
    // Check email

    if(emailBookValue === '') {
        setError(email_b, 'Email is required! JS ');
        return false;

    } else if (emailBookValue.length > 40 ) {
        setError(email_b, 'Email must be no more than 40 characters! JS ');
        return false; 

    } else if (!isValidBookEmail(emailBookValue)) {
        setError(email_b, 'Provide a valid email address! JS ');
        return false;

    } else {
        setSuccess(email_b);
    }


/*-----------------------------------------------------------------------------*/
    //  Check phone

    if (phoneValue < 700000000){
        setError(phone, 'Phone must start from digit 7 and contain 9 characters! JS ');
        return false; 

    } else if (phoneValue > 800000000) {
        setError(address, 'Phone must start from digit 7 and contain 9 characters! JS ');
        return false;

    } else {
        setSuccess(phone);
    }


/*-----------------------------------------------------------------------------*/ 
    //  Check Address
    if(addressValue === '') {
        setError(address, 'Address is required! JS ');
        return false;

    } else if (addressValue.length <= 4 ) {
        setError(address, 'Address must be at least 4 characters! JS ');
        return false;    
    } else if (addressValue.length > 30 ) {
        setError(address, 'Address must be no more than 30 characters! JS ');
        return false;

    } else if (!address.value.match(pattern)) {
        setError(address, 'Address must contain only Latin alphabets and numbers!! JS  JS ');
        return false;


    } else {
        setSuccess(address);
    }

/*-----------------------------------------------------------------------------*/ 
    //  Check location1
    if(location1Value === '') {
        setError(location1, 'location is required! JS ');
        return false;

    } else if (location1Value.length <= 4 ) {
        setError(location1, 'location must be at least 4 characters! JS ');
        return false;    
    } else if (location1Value.length > 20 ) {
        setError(location1, 'location must be no more than 20 characters! JS ');
        return false;

    } else if (!location1.value.match(alphabet)) {
        setError(location1, 'location must contain only Latin alphabets and numbers! JS ');
        return false;


    } else {
        setSuccess(location1);
    }

/*-----------------------------------------------------------------------------*/ 
    //  Check guests
    if(guestsValue === '') {
        setError(guests, 'Guests is required! JS ');
        return false;

    } else if (guestsValue < 0 ) {
        setError(guests, 'Guests must start from 1 person! JS ');
        return false; 

    } else if (guestsValue > 10 ) {
        setError(guests, 'Guests must end to 10 persons! JS ');
        return false; 
     
    } else {
        setSuccess(guests);
    }

/*-----------------------------------------------------------------------------*/ 
    //  Check days
    if(daysValue === '') {
        setError(days, 'Field with days is required! JS ');
        return false;

    } else if (daysValue < 0 ) {
        setError(days, 'Must start from 1 day! JS ');
        return false; 

    } else if (daysValue > 15 ) {
        setError(days, 'Must end to 14 days! JS ');
        return false; 
     
    } else {
        setSuccess(days);
    }

return true;
};