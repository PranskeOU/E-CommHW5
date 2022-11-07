<?php require_once("header.php"); ?>
<button type="button" onclick="myFunction()">Draw a rectangle</button>
<p id="drawRectangle"></p>
<script>
  function MyFunction(){
    document.GetElementById("drawRectangle").innerHTML = drawRectangle();
  }
  
function drawRectangle(){
  setup();
  draw();
}
  
function setup() { 
    createCanvas(400, 300); 
} 
function draw() { 
    background(220);
    let c = color('green');
    fill(c);
    rect(50, 50, 300, 200); 
}
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
