var forms = document.forms;

for(var i = 0; i < forms.length; i++) {
    forms[i].addEventListener("submit", window.submit);
}

function submit(e) {
    var elements = e.target.elements;
    var data = {};

    for(var i = 0; i < elements.length; i++) {
        if(elements[i].type !== "submit") {
            data[elements[i].id] = elements[i].value;
        }
    }

    var xhr = new XMLHttpRequest();

    xhr.open(
        e.target.method,
        e.target.action,
        true
    );
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        console.log(xhr.status);
        console.log(xhr.statusText);
    }

    xhr.send(data);

    e.preventDefault();
}