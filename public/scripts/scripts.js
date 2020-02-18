document.addEventListener("DOMContentLoaded", () => {
    scrollToElement("to-down", "content");
    setCurrentTime();
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
 * Scrilling to the specified item
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