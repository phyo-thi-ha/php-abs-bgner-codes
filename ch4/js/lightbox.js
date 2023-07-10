function init() {
    var lightBoxElements = "<div id='lightbox'>";
    lightBoxElements += "<div id='overlay' class=hidden></div>";
    lightBoxElements += "<img id='big-image' class='hidden' />";
    lightBoxElements += "</div>";
    document.querySelector("body").innerHTML += lightBoxElements;
    var bigImage = document.querySelector("#big-image");
    bigImage.addEventListener("click",toggle,false)
    prepareThumbs();
}
function toggle(event) {

    var clickedImage = event.target;
    var bigImage = document.querySelector("#big-image");
    var overlay = document.querySelector("#overlay");
    bigImage.src = clickedImage.src;
    console.log(bigImage.src)
    if (overlay.getAttribute("class") === "hidden"){
        overlay.setAttribute("class","showing");
        bigImage.setAttribute("class","showing")
    } else {
        overlay.setAttribute("class","hidden");
        bigImage.setAttribute("class","hidden");

    }

}

function prepareThumbs() {
    var liElements = document.querySelectorAll("ul#images li");
    var i = 0;
    var image, li;
    while (i < liElements.length) {
        li = liElements[i];
        li.setAttribute("class",'lightbox');
        image = li.querySelector("img");
        image.addEventListener("click",toggle,false);
        console.log(image)
        i += 1;
    }
}
document.addEventListener("DOMContentLoaded",init,false);