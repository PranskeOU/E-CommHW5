<?php require_once("header.php"); ?>
  <script>
    function loadMessage(){
      let loadMessage = "This is it! This is the second function. Click OK and move on!";
      if(confirm(loadMessage) == true){
        window.location.href = "function3.php";
      }
    }
    window.onload = loadMessage;
  </script>
</body>
