<?php
    include_once "header.php";
?>

<section class="can">
    <h2 style="color: black;">CANVAS</h2>

    <div class="buttons">
        <button onclick="pen()" class="bin highlight btnActive">
            <i class="material-icons">brush</i>
        </button>
        <button onclick="erase()" class="bin highlight">
            <i class="fa fa-eraser"></i>
        </button>
        <button onclick="fillCanvas()" class="bin">
            <i class="material-icons">format_color_fill</i>
        </button>
        <button onclick="reset()" class="bin">
            <i class="material-icons">format_color_reset</i>
        </button>

        <input type="color" class="bin" onchange="changeColor(this.value)">
        <input onchange="changeWidth(this.value)" class="bin" type="range" min="1" max="100" value="2" />
        <button onclick="test()" class="bin">
            <i class="material-icons">swap_horiz</i>
        </button>
    </div>

    <canvas id="canvas" class="on" style="border: 1px solid black;"></canvas>
    <canvas id="animation" class="off" style="border: 1px solid black;"></canvas>

    <div class="down">
        <a href="" id="download" download="canvas.jpg" onclick="downloadImg(this)">
            <i class="material-icons">file_download</i>
        </a>
    </div>

</section>

<section class="todo">
    <div class="wrap">
        <h2>TODO LIST</h2>
        <form method="post" id="todo-list">
            <input type="text" name="text" id="text" class="text" placeholder="Task" required>
            <div class="xd">
                <button type="submit" name="add" id="add" class="tb">ADD</button>
            </div>
        </form>
            <button name="delete" id="delete" class="tb">DEL</button>

        <table id="display-list" class="dis">

        </table>
    </div>
</section>

<script src="script/canvas.js"></script>
<script src="script/animation.js"></script>
<script src="script/todo.js"></script>

<?php
    include_once "footer.php";
?>
