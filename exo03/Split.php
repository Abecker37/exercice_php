<?php 
	function callback($text){
		if ($text == "") {
			return false;
			
		}else{
			return true;
		}
	}
	function my_split($string){
		$str = explode(" ", $string);
		$result = array_filter ( array $str , $callback = "callback" ) ;
		sort($result);
		return($result);
	}
			
	
 ?>