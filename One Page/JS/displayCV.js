var cvimg = document.getElementById('cvimg');
var bigimg = document.getElementById('bigimg');

cvimg.addEventListener("click", () => {
    bigimg.style.display = "flex";
    bigimg.scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "nearest",
  });
})


    bigimg.addEventListener('click', () => {
        bigimg.style.display = "none";
        cv.scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "nearest",
        })
    })


