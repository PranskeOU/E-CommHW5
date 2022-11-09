<?php require_once("header.php"); ?>
<head>
    <style>
        #Img {
            display: none;
        }
    </style>
</head>

<button id="Btn" onclick="myFunction()">Show the MIS Logo!</button>
<img id="Img" src="https://www.ou.edu/price/mis/_jcr_content/headeripar/image.img.png/1534452278211.png"></img>
<script>
function myFunction(){
	document.getElementById('Img').src='https://www.ou.edu/price/mis/_jcr_content/headeripar/image.img.png/1534452278211.png'.style.display="block";
	document.getElementByID('Btn').style.display="none";
}

</script>
