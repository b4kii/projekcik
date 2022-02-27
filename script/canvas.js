const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");

canvas.width = 800;
canvas.height = 600;

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
    ctx.globalCompositeOperation = 'destination-out';
}

function reset() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function pen() {
    ctx.globalCompositeOperation = 'source-over';
    ctx.strokeStyle = 'Black';
    draw(e);
}

function changeColor(color) {
    ctx.strokeStyle = color;
    ctx.globalCompositeOperation = 'source-over';
    draw(e);
}

function draw(e) {
    if(!painting) return;
    ctx.lineWidth = 10;
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
