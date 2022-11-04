<?php require_once("header.php"); ?>
  <script type="text/javascript">
    function loadMessage(){
      let loadMessage = "There's the second function! See, I bet you didn't even catch it... it was called automatically when the page loaded in!";
      alert(loadMessage);
    }
    window.onload = loadMessage;
  </script>
</body>
