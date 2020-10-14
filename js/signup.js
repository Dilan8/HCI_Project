/*****RESET FORM******/
function myFunction() {
    document.getElementById("signupForm").reset();
}

/*==FORM VALIDATION===*/
var validations = {
    required: function(value) {
        return value !== '';
    },
    phone: function(value) {
        return value.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im);
    },
    email: function(value) {
        return value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    }
}

function validate() {
    var signupForm = document.getElementById('signupForm'),
        inputsArr = signupForm.querySelectorAll('input'),
        errorMessage = document.querySelector(".ui.error.message"),
        successMessage = document.querySelector(".ui.success.message");

    signupForm.addEventListener('submit', function(e) {
        var i = 0;
        while (i < inputsArr.length) {
            var attr = inputsArr[i].getAttribute('data-validation'),
                rules = attr ? attr.split(' ') : '',
                parent = inputsArr[i].closest(".form-group"),
                j = 0;
            while (j < rules.length) {
                if (!validations[rules[j]](inputsArr[i].value)) {
                    e.preventDefault();

                    errorMessage.className = "ui error message";
                    errorMessage.innerHTML = "Invalid rule '" + rules[j] + "' for input '" + inputsArr[i].name + "'";
                    parent.className = "form-group";
                    return false;
                }
                errorMessage.className = "ui error message hidden";
                parent.className = "form-group";
                j++;
            }
            i++;
        }
        e.preventDefault();
        successMessage.className = "ui success message";
        signupForm.outerHTML = "";
        delete form;
    }, false)
}
validate();