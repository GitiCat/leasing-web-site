var form = document.querySelector("form");

form.onsubmit = (e) => {
    e.preventDefault();
    
    var elements = new Array();
    elements.push(new FormData(e.target));

    console.log(elements);
}