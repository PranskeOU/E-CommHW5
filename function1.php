<?php require_once("header.php"); ?>
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
<button type="button" onclick="myFunction()">Show me a fruit</button>
