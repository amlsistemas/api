<?php


class Connection{

	/*Informacion de la base de datos */

	static public function infoDatabase(){

		$infoDB = array(
			"database" => "loginsystem",
			"user" => "root",
			"pass" => ""
		);

		return $infoDB;

	}

	/*Conexion a la base de datos */

	static public function connect(){

		try{

			$link = new PDO(
				"mysql :host-localhost; dbname=".Connection::infoDatabase()["database"],
				Connection::infoDatabase()["user"],
				Connection::infoDatabase()["pass"]
			);

			$link->exec("set names utf8");
		}catch(POOException $e){
			die("Error: " .$e->getMessage());
		}
		return $link;
	}
}