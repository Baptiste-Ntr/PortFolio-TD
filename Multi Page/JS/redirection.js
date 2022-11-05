var nav_projet = document.getElementById('nav_projets');
var nav_cv = document.getElementById('nav_cv');
var nav_contact = document.getElementById('nav_contact');

nav_projet.addEventListener("click", () => {
    window.location.href = "HTML/projets.html";
});

nav_cv.addEventListener("click", () => {
    window.location.href = "HTML/cv.html";
});

nav_contact.addEventListener("click", () => {
    window.location.href = "HTML/contact.html";
});

var main = document.getElementById('bn');

main.addEventListener("click", () => {
    window.location.href = "../index.html";
    console.log(window.location.href = "../index.html");
});
