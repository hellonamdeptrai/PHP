<?php
	$arr = array(1,4,2,6,9,100,45,8,20);
	$solon = null;
	for ($i = 0; $i < count($arr); $i++){
	    if ($arr[$i] > $solon){
	        $solon = $arr[$i];      
	    } 
	}
	echo "Số lớn trong mảng là: " .$solon;
?>