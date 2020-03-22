<?php
try{
	$f=fopen("file2.txt", "r");
}
catch(exeception $e){
	echo ' l erreur est :$e';
}
	
	
	
?>
<html>
<head></head>
<body>
<h1>centrale d'achats</h1>
<h3>Commande clients </h3>
<table style="width:100%">
<link rel="stylesheet" href="./style.css">
  <tr>
    <th>Numéro de commande</th>
    <th>Numéro client </th>
    <th>Date de commande </th>
	<th>Désignation article</th>
    <th>Quantite (Pal)</th>
    <th>Prix unitaire (DH) </th>
    <th>Date de livraison </th>
    <th>adresse client  </th>
  </tr>
  <?php while($s=fgets($f)){?>
	 <tr><?php  $tab=explode( '|', $s);
				foreach ($tab as $tab1) {
			?>
    <td><?php   echo $tab1;?></td> 
   <?php
     }
 ?></tr><?php } ?>
</table>
</body>
</html>