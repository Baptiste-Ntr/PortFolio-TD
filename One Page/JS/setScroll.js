var scrolldiv = document.getElementById('scroll-container');
var arrow = document.getElementById('arrow');

var projectscont = document.getElementById('projects-container');
var cvcont = document.getElementById('cv-container');
var contactcont = document.getElementById('contact-form');

var nav_projet = document.getElementById('nav_projets');
var nav_cv = document.getElementById('nav_cv');
var nav_contact = document.getElementById('nav_contact');

scrolldiv.addEventListener('click', () => {
    projectscont.scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "nearest",
  });
    // console.log("oui");
});

arrow.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
})

nav_projet.addEventListener('click', () => {
  projectscont.scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "nearest",
  });
});

nav_cv.addEventListener('click', () => {
  cvcont.scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "nearest",
  });
});

nav_contact.addEventListener('click', () => {
  contactcont.scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "nearest",
  });
});

