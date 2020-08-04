<?php

require_once "conexion.php";

class GestorProductosModel
{

    #GUARDAR ARTICULO
    #------------------------------------------------------------

    public function guardarProductoModel($datosModel, $tabla)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (titulo, codigo, descripcion, contenido, imagen, precio, precioxmayor, categoria) VALUES (:titulo,:codigo, :descripcion, :contenido, :imagen, :precio, :precioxmayor, :categoria)");


      

        $stmt->bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datosModel["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_INT);
        $stmt->bindParam(":precioxmayor", $datosModel["precio"], PDO::PARAM_INT);
        $stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

    }

    #MOSTRAR ARTÍCULOS
    #------------------------------------------------------
    static public function mostrarProductosModel($tabla)
    {

        // $stmt = Conexion::conectar()->prepare("SELECT id, titulo, descripcion, contenido, imagen, precio, precioxmayor, categoria, estado  FROM $tabla");
        $stmt = Conexion::conectar()->prepare("SELECT p.id, p.imagen, p.codigo, p.titulo, p.descripcion, p.contenido, p.imagen, p.precio, p.precioxmayor, c.titulo as categoria, p.estado FROM $tabla p
        INNER JOIN categorias c ON p.categoria = c.id");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }

    #BORRAR ARTICULOS
    #-----------------------------------------------------
    public function borrarProductoModel($datosModel, $tabla)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

    }

    #ACTUALIZAR Producto
    #---------------------------------------------------
    // public function editarCategoriaModel($datosModel, $tabla)
    // {

    //     // $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET titulo = :titulo, descripcion = :descripcion, contenido = :contenido, imagen = :imagen, precio = :precio, categoria = :categoria WHERE id = :id");
    //     $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET titulo = :titulo, descripcion = :descripcion, contenido = :contenido, imagen = :imagen, precio = :precio, categoria = :categoria WHERE id = :id");

    //     $stmt->bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
    //     $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
    //     $stmt->bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);
    //     $stmt->bindParam(":imagen", $datosModel["imagen"], PDO::PARAM_STR);
    //     $stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_INT);
    //     $stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_INT);
    //     $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

    //     if ($stmt->execute()) {

    //         return "ok";
    //     } else {

    //         return "error";
    //     }

    //     $stmt->close();

    // }


}
