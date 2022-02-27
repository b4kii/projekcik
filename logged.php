<?php
    include_once "header.php";
?>

<section class="can">

<div class="buttons">
    <button onclick="pen()">Pen</button>

    <button onclick="erase()">Ereaser</button>

    <button onclick="reset()">Reset</button> <br>

    <button onclick="changeColor('Red')" style="background-color: red">Red</button>
    <button onclick="changeColor('Green')" style="background-color: green;">Green</button>
    <button onclick="changeColor('Blue')" style="background-color: blue;">Blue</button>
    <button onclick="changeColor('Yellow')" style="background-color: yellow;">Yellow</button>
</div>

<canvas id="canvas" width="800" height="600" style="border: 1px solid black;"></canvas>

<script src="script/canvas.js"></script>

</section>

<?php
    include_once "footer.php";
?>
