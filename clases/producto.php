<?php

class producto{

    public function registrar($conexion, $nombre, $valor, $cantidad, $categoria){
        
        $query = "call registar_Producto('$nombre', $valor, $cantidad, $categoria)";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta = "Producto registrado";
        }else{
            $respuesta = " Problemas al registar";
        }
            return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM ver_Producto";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $id){
        $query = "call consultar_Producto($id)";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $id, $nombre, $valor, $cantidad, $categoria ){
        $query = "call editar_Producto($id,'$nombre',$valor, $cantidad, $categoria)";
        
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Categoria actualizado";
        }else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "call eliminar_Producto($id)";
        $consulta = mysqli_query($conexion, $query);
       
        if($consulta){
            $respuesta = "Producto eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;

        
    }
}