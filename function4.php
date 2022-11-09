<?php require_once("header.php"); ?>
<head>
    <style>
        #Img {
            display: none;
        }
    </style>
</head>

<button type="button" id="Btn" onclick="myFunction()">Show the MIS Logo!</button>
<img class="Img" id="Img" src="https://www.ou.edu/price/mis/_jcr_content/headeripar/image.img.png/1534452278211.png" />
<script>
function myFunction(){
	document.getElementById('Img').src='https://www.ou.edu/price/mis/_jcr_content/headeripar/image.img.png/1534452278211.png'.style.display="block";
	document.getElementByID('Btn').style.display="none";
}

</script>
