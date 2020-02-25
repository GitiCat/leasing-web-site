document.addEventListener("DOMContentLoaded", () => {
    scrollToElement("to-down", "content");
    setCurrentTime();

    navScrollingToElement("link-company", "company");
    navScrollingToElement("link-objects", "objects");
    navScrollingToElement("link-conditions", "conditions");
    navScrollingToElement("link-contacts", "contacts");
});

window.addEventListener("scroll", () => {
    var nav = document.getElementById("nav");

    if(Number(window.scrollY) > 45) {
        if(!nav.classList.contains('scroll-nav')) {
            nav.classList.add("scroll-nav");
        }    
    } else {
        nav.classList.remove("scroll-nav");
    }
});

/**
 * Set current time to copyright
 */
function setCurrentTime() {
    var date = new Date();
    var year = date.getFullYear();

    var copy = document.getElementById("copy-date");
    copy.innerHTML = year;
}

/**
 * Scrolling to the specified item
 * @param {string} performed control element
 * @param {string} toElement to which element
 */
function scrollToElement(performed, toElement) {
    var perfObj = document.getElementById(performed);
    var toElemObj = document.getElementById(toElement);

    perfObj.addEventListener("click", (e) => {
        toElemObj.scrollIntoView({
            block: "start",
            behavior: "smooth"
        })
    });
}

function navScrollingToElement(link, to) {
    var element = document.getElementById(link);
    var block = document.getElementById(to);

    element.addEventListener("click", (event) => {
        block.scrollIntoView({
            block: "start",
            behavior: "smooth"
        });
        event.preventDefault();
    });
}