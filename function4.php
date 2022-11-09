<?php require_once("header.php"); ?>
<button type="button" onclick="myFunction()">Show random text</button>
<h5 id="showText"></h5>
<script>
function myFunction(){
	document.getElementById('showText').innerHTML = showText();
}
function showText(){
	return "I ran out of ideas. This is a block of text."
}
</script>
