<?php require_once("header.php"); ?>
<canvas id="canvas" height="400" width="500"></canvas>
<script>
setInterval(function drawRectangles() {
    const canvas = document.querySelector('#canvas');

    if (!canvas.getContext) {
        return;
    }

    const ctx = canvas.getContext('2d');
    var randomColor = "#000000".replace(/0/g,function(){return (~~(Math.random()*16)).toString(16);});
    ctx.fillStyle = randomColor;
    ctx.fillRect(100, 100, 150, 100);
},200)

drawRectangles();
</script>
