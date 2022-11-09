<?php require_once("header.php"); ?>
<p id="counter"></p>
<script>
  setInterval(function myFunction(){
          document.getElementById("counter").innerHTML = counter();
  },100)
  function counter(){
          let i=0;
          i++;
          return i;
  }
  window.onload = myFunction();
</script>
