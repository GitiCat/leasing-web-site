var form,
    output;

function addEvent(elem, type, handler) {
    if(elem.addEventListener) {
        elem.addEventListener(type, handler, false);
    } else {
        elem.attachEvent('on' + type, handler);
    }

    return false;
}

function getXhrObject() {
    if(typeof XMLHttpRequest === 'undefined') {
        XMLHttpRequest = function() {
            try {
                return new window.ActiveXObject("Microsoft.XMLHTTP");
            } catch(e) {}
        }
    }
    return new XMLHttpRequest();
}

function sendAjaxRequire(e) {
    var evt = e || window.event;

    if(evt.preventDefault)
        evt.preventDefault();
    else
        evt.returnValue = false;

    var xhr = getXhrObject();
    if(xhr) {
        var elements = form.elements,
            url = form.action,
            params = [],
            elementName,
            elementType;

        if(validationForm(elements) == false)
            return false;

        for(var i = 0; i < elements.length; i++) {
            elementName = elements[i].name;
            elementType = elements[i].type;

            if(elementName) {
                if((elementType == 'checkbox' || elementType == 'radio') && !elements[i].cheched)
                    continue;

                params.push(elements[i].name + "=" + elements[i].value);
            }
        }

        xhr.open(
            'POST',
            url,
            true
        );

        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4) {
                if(xhr.status == 200) {
                    
                }
            }
        };
        
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(params.join("&"));
    }

    return false;
}

function validationForm(elements) {
    var isValid = true;

    for(var i = 0; i < elements.length; i++) {
        if(elements[i].type == 'submit')
            continue;
        
        if(elements[i].required) {
            if(elements[i].value === '') {
                new Promise(resolve => {
                    var parent = (elements[i].parentNode).parentNode;
                    var error = parent.querySelector('.error');
                    
                    error.classList.add('show');

                    setTimeout(() => {
                        error.classList.remove('show');
                    }, 3000)

                    isValid = false;

                    return resolve;
                });
            } 
            else {
                if(elements[i].name == 'email') {
                    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                    if(reg.test(elements[i].value) == false) {
                        new Promise(resolve => {
                            var parent = (elements[i].parentNode).parentNode;
                            var emailValid = parent.querySelector('.valid');

                            emailValid.classList.add('show');

                            setTimeout(() => {
                                emailValid.classList.remove('show');
                            }, 3000);

                            isValid = false;

                            return resolve;
                        })
                    }
                }
            }
        }
    }
    return isValid;
}

var form = document.getElementById("feedback");
addEvent(form, 'submit', sendAjaxRequire);