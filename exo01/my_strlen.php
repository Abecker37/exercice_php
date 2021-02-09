<?php
	function my_strlen ($string){
		$str = str_split($string);
		$nb = 0;
		 for ($i=0; isset($str[$i]) ; $i++) { 
		 	$nb++;
		 }
		echo $nb;
	}
?>