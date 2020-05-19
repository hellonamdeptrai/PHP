<?php
	$arr = array(1,4,2,6,9,100,4,);
	echo "Mảng hiện tại là: ";
	print_r($arr);
	echo "<br>";
	echo "Mảng đảo ngược lại là: ";
	$dao = array_reverse($arr, true);
	print_r($dao);
?>