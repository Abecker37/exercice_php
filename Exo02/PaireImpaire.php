<?php
	While(1){
	echo "Entrez un nombre: ";
	$reponse = fgets(STDIN);
	if ($reponse%2 == 1){
      echo "$reponse est impair";
  		echo PHP_EOL;
  	}
     else{
      echo "$reponse est pair";
  		echo PHP_EOL; 
  	}
}
?>