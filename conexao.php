<?php
	
	try{
		$conex = new PDO("mysql:host=localhost;dbname=bd-musica","root","");
	} 
	catch(PDOException $e){
		echo $e->getMessage(); 		
	}
?>	

