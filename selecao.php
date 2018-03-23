<?php
	
	require_once("Conexao.php");
	$con = new Conexao();
	$sql = "SELECT * FROM usuario;";
	$resultado = $con->getCon()->query($sql,PDO::FETCH_OBJ);

	foreach($resultado as $item){
		echo "$item->nome <br />";
	}
?>