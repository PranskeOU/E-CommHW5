<?php require_once("header.php"); ?>
<canvas id="canvas" height="400" width="500"></canvas>
<script>
function drawRectangles() {
    const canvas = document.querySelector('#canvas');

    if (!canvas.getContext) {
        return;
    }

    const ctx = canvas.getContext('2d');
    var time = new Date();
    while(time != 'December 31, 2025 00:00:00'){
         var randomColor = "#000000".replace(/0/g,function(){return (~~(Math.random()*16)).toString(16);});
    }
    ctx.fillStyle = randomColor;
    ctx.fillRect(100, 100, 150, 100);
}

drawRectangles();
</script>
<!--
<button type="button" onclick="myFunction()">Show me a fruit</button>
<p id="fruits"></p>
<script>
  let a = 0;
  function myFunction() {
    document.getElementById("fruits").innerHTML = fruits();
    a++;
    if (a==10){
      a=0;
    }
  }
  function fruits(){
    let fruits = [ "Apple", "Orange", "Peach", "Banana", "Plum", "Grape", "Strawberry", "Blueberry", "Mango", "Your mom" ];
    return "Here is a fruit:<br>" + fruits[a];
  }
</script>
-->
