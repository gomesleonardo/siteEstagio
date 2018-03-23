<?php
	//Receber Multiplos Arquivos no Destino	
	foreach($_FILES as $item){
			$destino = "arquivos/{$item['name']}";
			move_uploaded_file($item['tmp_name'],destino);		
			}	
?>