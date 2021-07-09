export const header = () => {


    //Function that toggles classes
    const toggle = (item,cls1,cls2) => {
    item.classList.toggle(cls1);
    item.classList.toggle(cls2);
    }

    //Function that activates when scrolled
    const handleScroll = () => {
    const header = document.querySelector("#header");
    toggle(header,"headerOut","headerIn");
    }

    //Checking scrollposition via scrollmagic
    var controller = new ScrollMagic.Controller();

    let headerTrigger = new ScrollMagic.Scene({
        triggerElement: '#title', // point of execution
        offset: 800
    }).addTo(controller);

    headerTrigger.on("start", function (event) {
    handleScroll();
    });

}
