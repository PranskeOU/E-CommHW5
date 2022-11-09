<?php require_once("header.php"); ?>
<button type="button" id="Btn" onclick="myFunction()">Show the MIS Logo!</button>
<img id="Img" src="https://www.ou.edu/price/mis/_jcr_content/headeripar/image.img.png/1534452278211.png" />
<img style="display:none;" id="Img" src="myFunction()" />
<script>
function myFunction(){
	document.getElementById('Img').src='https://www.ou.edu/price/mis/_jcr_content/headeripar/image.img.png/1534452278211.png'.style.display="block".innerHTML;
	document.getElementByID('Btn').style.display="none".innerHTML;
}
</script>
