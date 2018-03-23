<?php
class Conexao{
	private $con;
	public function setCon($data){
		$this->con = $data;
	}
	public function getCon(){
		return $this->con;
	}
	function __construct(){
		try{
			$srv = "localhost";
			$usr = "root";
			$pwd = "123456";
			$db = "leo";
			$this->setCon(new PDO("mysql:host=$srv;dbname=$db",$usr,$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")));
			$this->getCon()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $ex){
			echo "{$ex->getMessage()}";
		}
	}
}
?>
