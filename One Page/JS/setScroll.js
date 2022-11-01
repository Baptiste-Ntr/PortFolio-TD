var scrolldiv = document.getElementById('scroll-container');
var projectscont = document.getElementById('projects-container');

scrolldiv.addEventListener('click', () => {
    projectscont.scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "nearest",
  });
    // console.log("oui");
})
