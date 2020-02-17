document.addEventListener("DOMContentLoaded", (e) => {
    scrollToElement("to-down", "content");
});

/**
 * Scrilling to the specified item
 * @param {string} performed control element
 * @param {string} toElement to which element
 */
function scrollToElement(performed, toElement) {
    var perfObj = document.getElementById(performed);
    var toElemObj = document.getElementById(toElement);

    perfObj.addEventListener("onclick", (e) => {
        toElemObj.scrollIntoView({
            block: "start",
            behavior: "smooth"
        })
    });
}