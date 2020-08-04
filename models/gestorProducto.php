<?php

require_once "backend/models/conexion.php";

class ProductoModels{

	public function seleccionarProductoModel($tabla, $id){

		$stmt = Conexion::conectar()->prepare("SELECT titulo, codigo, descripcion, contenido, imagen, precio,precioxmayor, categoria, id FROM $tabla WHERE id = '$id'");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}