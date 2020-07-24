<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=tienda_demo","root","");
		return $link;

	}

}