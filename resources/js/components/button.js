export const button = () => {

//Function that toggles classes
const toggle = (item,cls1,cls2) => {
item.classList.toggle(cls1);
item.classList.toggle(cls2);
}

//Function that runs when hovering over button
const handleHover = (e) => {
const item = e.currentTarget.children[1];
toggle(item,"unhover","hover");
}


//Get all the buttons and check if hover over
const buttons = document.querySelectorAll(".button");
buttons.forEach(button => {
button.addEventListener("mouseenter", handleHover);
button.addEventListener("mouseleave", handleHover);
});
}
