/*
* function to validate the username 
* inpt parameter to receive the username element
* textState parameter to receive the element that will include the validation msg
*/
function validateUsername(inpt, txtState) {
    let inptVal = inpt.val();
    // $ => match the last of string 
    let userPattern = "^[A-Za-z]+[A-Za-z0-9_\.]+$";
    if (inptVal.length < 5) {
        txtState.removeClass("d-none");
        txtState.html("username must be larger than 5 characters!!");
        return false;
    }
    else if (inptVal.search(userPattern) == -1) {
        txtState.removeClass("d-none");
        txtState.html("username not valid!!");
        return false;
    }
    else {
        txtState.addClass("d-none");
    }
    return true;
}
/*
* function to validate the password 
* inpt parameter to receive the password element
* textState parameter to receive the element that will include the validation msg
*/
function validatePassword(inpt, txtState) {
    let inptVal = inpt.val();
    if (inptVal.length < 5) {
        txtState.removeClass("d-none");
        txtState.html("password must be larger than 5 characters!!");
        return false;
    }
    else {
        txtState.addClass("d-none");
    }
    return true;
}
$(window).ready(function () {
    "use strict";
    /* Start Admin Form Login Validation */
    $(".submit-btn").click(function (e) {
        let user_valid = true;
        let pass_valid = true;
        e.preventDefault();
        user_valid = validateUsername($(".username"), $(".user-valid"));
        pass_valid = validatePassword($(".password"), $(".pass-valid"));
        if (user_valid && pass_valid) {
            $(".login-form").submit();
        }
    });
    /* End Admin Form Login Validation */
});
