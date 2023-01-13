//  Search country check JS


const search_form = document.getElementById('search_form');
const country = document.getElementById('search_country');


// Delete special chars

country.onkeyup = function() {
    country.value = country.value.replace(/[&*<>']/g, '');
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



search_form.addEventListener('submit', (e)=> {

    if(!validateCountryInputs()){
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

function validateCountryInputs() {

   const countryValue = country.value.trim();
   var alphabets = /^[a-zA-Z]*$/;
   

    if(countryValue === '') {
        setError(country, 'Searching element is required! JS ');
        return false;

    
    } else if (countryValue.length > 10 ) {
        setError(country, 'Searching element must be no more than 10 characters! JS ');
        return false;

    } else if (!country.value.match(alphabets)) {
        setError(country, 'Searching element must contain only Latin alphabets! JS ');
        return false;


    } else {
        setSuccess(country);
    }

    return true;
    };
