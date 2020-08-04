<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=qf5dic2wzyjf1x5x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=h4mm55t2l7sh5f9v","t93vsxhvr61swckp","cdhjx6y1heo107gx");
		return $link;
		// $link = new PDO("mysql:host=localhost;dbname=importacionesstyle_db","root","");
		// return $link;

	}

}