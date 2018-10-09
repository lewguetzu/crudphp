<?php

    include "clases/conexion.php";
    include "clases/producto.php";
    include "clases/categoria.php";

    $objConexion = new conexion();
    $objProducto = new producto();
    $objCategoria = new categoria();

    $conexion = $objConexion->conectar();
    $datosProducto = $objProducto->consultarId($conexion, $_GET['id']);
    $conexion = $objConexion->conectar();
    $categorias = $objCategoria->consultar($conexion);
    
    $nombre;
    $valor;
    $cantidad;
    $categoria;
    $id;

    while($tienda = mysqli_fetch_array($datosProducto)){
        $nombre = $tienda['nombre_Pro'];
        $valor = $tienda['valor'];
        $cantidad = $tienda['cantidad'];
        $categoria = $tienda['id_categoria'];
        $id = $tienda['id_producto'];
    
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <form action="controladores/editarP.php" method="POST">

            <input type="hidden" name="id" value=<?php echo "$id"?>>
            <label for="">Nombre </label><input type="Text" value="<?php echo $nombre; ?>" name="nombre" id="nombre"><br>
            <label for="">Valor</label><input type="Text" value="<?php echo $valor; ?>" name="valor" id="valor"><br>
            <label for="">Cantidad </label><input type="Text" value="<?php echo $cantidad; ?>" name="cantidad" id="cantidad"><br>
            <label for="">Categoria</label>
        
       
        
        <select name="categoria">
            <?php

                while($categoria = mysqli_fetch_array($categorias)){

                    ?>

                        <option value="<?php echo $categoria['id_categoria']?>"><?php echo $categoria['nombre']?></option>
                    <?php
                }

            ?>   

        </select>

            <br><input type="Submit" name="Editar" value="Actualizar">

        </form>

        <br><a href='menu.html'><button>Volver al Menu</button></a>

    </body>
</html>