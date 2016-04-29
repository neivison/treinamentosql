<?php
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=treinamento;","root","");
	}catch(PDOException $e){
		echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
		die;
	}
?>