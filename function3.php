<?php require_once("header.php"); ?>
<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange" 
  -webkit-appearance="none";
  width="100%";
  height="15px";
  border-radius="5px";  
  background="#d3d3d3";
  outline="none";
  opacity="0.7";
  -webkit-transition=".2s";
  transition: opacit=".2s";>
</div>

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
