<?php require_once("header.php"); ?>
<body onload='myFunction()'>
  <script>
    function myFunction(){
       document.getElementById("loadMessage").innerHTML = loadMessage();
    }
    
    function loadMessage(){
      let loadMessage = "There's the second function! See, I bet you didn't even catch it... it was called automatically when the page loaded in!";
      return loadMessage;
  </script>
</body>
