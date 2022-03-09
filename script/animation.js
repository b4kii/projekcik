const animation = document.querySelector("#animation");
const animationCtx = animation.getContext("2d");

animation.width = 800;
animation.height = 600;

function Circle (x, y, r, c) {
    this.x = x;
    this.y = y;
    this.r = r;
    this.c = c;
    
    this.dx = Math.floor(Math.random() * 6) + 1;
    this.dx *= Math.floor(Math.random() * 2) == 1 ? 1 : -1;
    this.dy = Math.floor(Math.random() * 6) + 1;
    this.dy *= Math.floor(Math.random() * 2) == 1 ? 1 : -1;
 
    this.draw = function () {
        animationCtx.beginPath();
        animationCtx.fillStyle = this.c;
        animationCtx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        animationCtx.fill();
    }
 
    this.animate = function () {
        this.x += this.dx;
        this.y += this.dy;

        if (this.x + this.r > animation.width || this.x - this.r < 0) {
            this.dx = -this.dx;
        }
        
        if (this.y + this.r > animation.height || this.y - this.r < 0) {
            this.dy = -this.dy;
        }
        this.draw();
    }
}

const balls = [];

for (let i = 0; i < 30; i++) {
    let r = Math.floor(Math.random() * 30) + 15;
    let x = Math.random() * (animation.width - r * 2) + r;
    let y = Math.random() * (animation.height - r * 2) + r;
    let c = 'yellow';
    balls.push(new Circle(x, y, r, c));
}

function Update () {
    animationCtx.fillStyle = "blue";
    animationCtx.clearRect(0, 0, animation.width, animation.height);
    animationCtx.fillRect(0, 0, animation.width, animation.height);
    
    for (let i = 0; i < balls.length; i++) {
        let ball = balls[i];
        ball.animate();
    }
    
    requestAnimationFrame(Update);
}
Update();