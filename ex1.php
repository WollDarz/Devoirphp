<!doctype html>
<html>
<head>
	<title>Welcome To : Vegetables Shop </title>
</head>
<body>
<h3><center>liste de Vegetables</center></h3>
	<?php 
		try{ 
		
			$tab= array("img0.jpeg", "img1.jpeg", "img2.jpeg", "img3.jpeg", "img4.jpeg");
			shuffle ( $tab );
				foreach ($tab as $val) {
					echo "<img src=' $val '></img>";		
				} 
		}
			  catch(exeception $e){
				echo ' l erreur est :$e';
			 }
	?>
</body>
</html>

