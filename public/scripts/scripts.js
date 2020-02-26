document.addEventListener("DOMContentLoaded", () => {
    scrollToElement("to-down", "content");
    setCurrentTime();

    navScrollingToElement("link-company", "company");
    navScrollingToElement("link-objects", "objects");
    navScrollingToElement("link-conditions", "conditions");
    navScrollingToElement("link-contacts", "contacts");

    objectsOpen();

    var nav = document.getElementById("nav");
    nav.style.cssText = "margin-top: 92px";

});

window.addEventListener("scroll", () => {
    var nav = document.getElementById("nav");

    if (window.pageYOffset < 5) {
        nav.style.cssText = "margin-top: 92px; \
            background-color: transparent; \
            box-shadow: none";
    } else {
        nav.style.cssText = "margin-top: 0; \
        background-color: #212121; \
        box-shadow: 0 2px 4px rgba(0,0,0,.5);";
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

    var V = .3;

    element.addEventListener("click", (event) => {

        var w = window.pageYOffset,
            t = block.getBoundingClientRect().top - 60,
            start = null;

        requestAnimationFrame(step);

        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));

            window.scrollTo(0, r);

            if (r != w + t) {
                requestAnimationFrame(step);
            }
        }

        event.preventDefault();
    });
}

function objectsOpen() {
    var objectsList = document.querySelectorAll(".l-o-section");
    var openingClass = "opening";

    objectsList.__proto__.opening = undefined;

    objectsList.__proto__.closeOpening = function() {

        if(objectsList.opening !== undefined)
            objectsList.opening.classList.remove(openingClass)
    }

    objectsList.__proto__.open = function(obj) {
        var current = objectsList.opening,
            open = obj;

        if (current !== undefined)
            current.classList.remove(openingClass);

        if (open === undefined)
            throw new Error('ObjectList: Objects to open is not defined!');

        open.classList.add(openingClass);
        objectsList.opening = open;
    }

    objectsList.forEach(obj => {
        obj.addEventListener("click", (e) => {
            objectsList.open((e.target.offsetParent).offsetParent);
        });
    })
}