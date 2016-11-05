var inputLoginFields;

$(document).ready(function(){
    hideForm();
    addListeners()

    inputLoginFields = $("#form-login input:not([type='button'])");
    Array.prototype.forEach.call(inputLoginFields, function(inputField) {
        inputField.onkeyup = function() {
            if(allFilled()) enableButton($("input[name='btn-login']"));
        }
    });
});

var hideForm = function() {
    $('#form-register').hide();
}

var addListeners = function() {
    var loginButton = $("input[name='btn-login']");
    var registerButton = $("input[name='btn-register']");

    registerButton.on('click', function() {
        if ($('#form-register')[0].style.display === 'none') {
            enableButton(loginButton);
            $('#form-login').hide();
            $('#form-register').show();
        } else {
            alert("Didn't have time to make the form any fancy. Sorry!\nHope you have filled the form :)")
        }
    });

    loginButton.on('click', function() {
        if ($('#form-login')[0].style.display === 'none') {
            disbaleButton(loginButton);
            $('#form-login').show();
            $('#form-register').hide();
        } else {
            alert('Now, you are supposed to be logged in, but the API is not connected...');
            alert('We suggest to try the Register function.');

            clearFields(inputLoginFields);
            disbaleButton(loginButton);
        };
    });
}

var enableButton = function(btn) {
    btn.attr('disabled', false);
}

var disbaleButton = function(btn) {
    btn.attr('disabled', true);
}

function allFilled() {
    var filled = true;
    Array.prototype.forEach.call(inputLoginFields, function(inputField) {
        if(inputField.value == '') filled = false;
    });
    return filled;
}

var clearFields = function(fields) {
    Array.prototype.forEach.call(fields, function(inputField) {
        inputField.value = ''
    });
}
