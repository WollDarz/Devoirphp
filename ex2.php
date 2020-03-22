<?php
    try {
		
		$f=fopen("file.txt", "r");
	     $i=-1;
	   //$tab est une matrice ou $tab[$i] represent tableau d'elements du ligne numero i+1
		while($s=fgets($f)){
			$i++;
			$tab[$i]=explode( '|', $s);	
		}
		foreach ($tab as $tab1) {
			foreach ($tab1 as $val){
				echo $val;
			}
			echo "<br>";
		}
	}catch(exeception $e){
	echo ' l erreur est :$e';
}
		
	
?>
