
var containerX = document.querySelector("#posX"),
    containerY = document.querySelector("#posY");

var onMouseMove = function (ev) {
    var posX = ev.clientX,
        posY = ev.clientY;

    containerX.textContent = posX;
    containerY.textContent = posY;
};

document.addEventListener("mousemove", onMouseMove);