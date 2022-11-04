<?php require_once("header.php"); ?>
<p id="fruits"></p>
<script>
  function fruits(){
    return "These are some fruits:\nApple\nOrange\nBanana\n"
  }
  document.getElementById("fruits").innerHTML = fruits();
</script>
    
