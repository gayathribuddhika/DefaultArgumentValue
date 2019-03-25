<?php

function setArea($height=100,$base=50){
	$Area = $height*$base/2;
	echo "Area of the triangle is ".$Area."<br>";
}

setArea();//use the default value of 100 and 50
setArea(10,5);

?>