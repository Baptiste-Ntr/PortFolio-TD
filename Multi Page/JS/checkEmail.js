function isEmail(emailAdress){
    let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (emailAdress.match(regex)) 
    return true; 

   else 
    return false; 
}

var btn = document.getElementById("btnsend");

btn.addEventListener("click", () => {

    var mail = document.getElementById("form-mail").value;
    var submit = document.getElementById('submit');

    if(isEmail(mail.value)) {
        submit.click();
        mail.style.color = "lime";
        setTimeout(() => {
            mail.style.color = "#fff";
        }, 1000);
    } else {
        mail.style.color = "red";
    }
})