// Comment check js


const commentForm = document.getElementById('commentForm');

const message = document.getElementById('message');

// Delete special chars

message.onkeyup = function() {
    message.value = message.value.replace(/[&*<>'}{]/g, '');
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

commentForm.addEventListener('submit', (e)=> {

    if(!validateCommentInputs()){
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

function validateCommentInputs() {

   const messageValue = message.value.trim();
   var com_pattern = /^[a-zA-Z0-9_ - , . :)(!?☺☻♥♦♣♠]*$/; 

    if(messageValue === '') {
        setError(message, 'Comment is required! JS ');
        return false;

    } else if (messageValue.length <= 4 ) {
        setError(message, 'Comment must be at least 5 characters! JS ');
        return false;

    } else if (messageValue.length >= 200 ) {
        setError(message, 'Comment must be no more than 200 characters! JS ');
        return false;

    } else if (!message.value.match(com_pattern)) {
        setError(sender, 
            'Comment must contain valid characters without special symbols! JS ');
        return false;
    }

    else {
        setSuccess(message);
    }

    
    return true;
    };
