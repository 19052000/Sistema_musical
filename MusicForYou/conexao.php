<?php
	
	try{
		$conex = new PDO("mysql:host=localhost;dbname=bd_musica","root","");
	} 
	catch(PDOException $e){
		echo $e->getMessage(); 		
	}
?>	

