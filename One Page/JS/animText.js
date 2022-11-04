const AnimTXT = document.getElementById("animtxt");

new Typewriter(AnimTXT, {
  deleteSpeed: 30,
})
  .changeDelay(100)
  .typeString("Développeur Front-End")
  .pauseFor(300)
  .deleteChars(10)
  .typeString("<span class='front-end'> Front-End</span>" )
  .start();
