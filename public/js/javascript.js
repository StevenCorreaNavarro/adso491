
const Open2Btn = document.querySelector("#form-open2"),
    conta = document.querySelector(".homes"),
    contactos = document.querySelector(".contactosboton"),
    Close2Btn = document.querySelector(".form_closed"),
    pwShowHide2 = document.querySelectorAll(".pw_hide");

Open2Btn.addEventListener("click", () => conta.classList.add("show"));
Close2Btn.addEventListener("click", () => conta.classList.remove("show"));

pwShowHide2.forEach((icon) => {
    icon.addEventListener("click", () => {
        let getPwinput = icon.parentElement.querySelector("input");

        if (getPwinput.type === "password") {
            getPwinput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwinput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash")
        }
    });
});

const formOpenBtn = document.querySelector("#form-open"),
    home = document.querySelector(".home"),
    formContainer = document.querySelector(".form_container"),
    
    formContainer3 = document.querySelector(".form_container3"),
    formCloseBtn = document.querySelector(".form_close"),
    signupBtn = document.querySelector("#signup"),
    loginBtn2 = document.querySelector("#login"),
    pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
    icon.addEventListener("click", () => {
        let getPwinput = icon.parentElement.querySelector("input");

        if (getPwinput.type === "password") {
            getPwinput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwinput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash")
        }
    });
});






signupBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.add("active");
});


loginBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.remove("active");
});



