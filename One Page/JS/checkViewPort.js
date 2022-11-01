var checkViewPort = function (elem) {
    var bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 0 &&
        bounding.left >= 0 &&
        bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

// Check if the element (elem) is in the ViewPort or not
// Verifie si l'element (elem) est dans le ViewPort ou non

var nav_elements = document.querySelectorAll('.nav-elements');

var nav_projet = document.getElementById('nav_projets');
var nav_cv = document.getElementById('nav_cv');
var nav_contact = document.getElementById('nav_contact');

var project = document.querySelector('#projects-container');
var cv = document.querySelector('#cv-container');
var contact = document.querySelector('#contact-form');


console.log(project);
console.log(cv);
console.log(contact);

function viewPort() {
    if (checkViewPort(project)) {
        console.log("1");
        // console.log(window.getComputedStyle(document.querySelector('#nav_projets'), ':before').setProperty("width", "[50px]"));
        // window.getComputedStyle(document.getElementById('nav_projets'), ':after').getPropertyValue('width', ['50px']);
    } else if (checkViewPort(cv)) {
        console.log("2");
    } else if (checkViewPort(contact)) {
        console.log("3");
    }
}

window.addEventListener("scroll", () => {
    viewPort();
})
