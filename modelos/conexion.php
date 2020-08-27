<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_51f7fb386ce83f5",
			            "b7ba7ce03c9bdf",
			            "a9a5f9a7");

		$link->exec("set names utf8");

		return $link;

	}

}