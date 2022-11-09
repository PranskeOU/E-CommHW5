<?php require_once("header.php"); ?>
<button type="button" onclick="myFunction()">Count</button>
<p id="counter"></p>

<script>
  let a = 0;
  function myFunction() {
    document.getElementById("counter").innerHTML = counter();
    a++;
  }
  function counter(){
    return "Counter: " + a;
</script>
