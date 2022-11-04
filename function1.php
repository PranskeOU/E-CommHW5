<?php require_once("header.php"); ?>
<p id="fruits"></p>
<script>
  function fruits(){
    let fruits = [ "Apple", "Orange", "Peach", "Banana", "Plum", "Grape", "Strawberry", "Blueberry", "Mango", "Your mom" ];
    
    return "These are some fruits:<br>Apple<br>Orange<br>Banana"
  }
  document.getElementById("fruits").innerHTML = fruits();
</script>
    
