export const loginpopup = () => {


    const logincontainer = document.querySelector(".login");
    const loginbutton = document.querySelector(".loginbutton");


    //Function that toggles classes
    const toggle = (item, cls1, cls2) => {
        item.classList.toggle(cls1);
        item.classList.toggle(cls2);
    }

    const handleLogin = (e) => {
        console.log(e.currentTarget);
        toggle(logincontainer, "fadeOut", "fadeIn");
    }


    //Check if press login button or login container
    loginbutton.addEventListener("click", handleLogin);
    logincontainer.addEventListener("click", handleLogin);
}
