<?php

class Conexion{

	 static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=saince",
			            "root",
			            "Saince2024*");

		$link->exec("set names utf8");

		return $link;

	}

}