const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");

canvas.width = 800;
canvas.height = 600;

ctx.fillStyle = "white";
ctx.fillRect(0, 0, canvas.width, canvas.height);

let painting = false;

function startPosition(e) {
    painting = true;

    draw(e);
}

function finishedPosition() {
    painting = false;
    
    ctx.beginPath();
}

function erase() {
    ctx.strokeStyle = "White";
    draw();
}

let col = "black";

function changeColor(color) {
    col = color;
    pen();
}

function pen() {
    ctx.globalCompositeOperation = "source-over";
    ctx.strokeStyle = col;
    draw();
}

function fillCanvas() {
    ctx.fillStyle = col;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
}

const buttons = document.getElementsByClassName("highlight");
for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
        let temp = document.getElementsByClassName("btnActive");
        temp[0].className = temp[0].className.replace(" btnActive", "");
        this.className += " btnActive";
    });
}

function reset() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
}

function downloadImg(el) {
    let image = canvas.toDataURL("image/jpg");
    el.href = image;
}

ctx.lineWidth = 2;
function changeWidth(value) {
    ctx.lineWidth = value;
}

function draw(e) {
    if(!painting) return;
    ctx.lineCap = "round";

    let rect = canvas.getBoundingClientRect();
    let x = e.clientX - rect.left;
    let y = e.clientY - rect.top;

    ctx.lineTo(x, y);
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(x, y);
}

canvas.addEventListener("mousedown", startPosition);
canvas.addEventListener("mouseup", finishedPosition);
canvas.addEventListener("mousemove", draw);

function test() {
    if (canvas.className == "on") {
        canvas.className = "off";
        animation.className = "on";
    } else {
        canvas.className = "on";
        animation.className = "off";
    }
}
