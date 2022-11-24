<?php
include("con_base de datos.php");
if(isset($_POST['submit_registro1'])){
    $titulo=trim($_POST['Nombre_articulo']);
    $precio=trim($_POST['Precio_articulo']);
    $categoria=trim($_POST['select']);
    $link=trim($_POST['image1']);
    $consulta= "SELECT * FROM accesorios WHERE titulo='$correo_usuario'";
    $resultado1=mysqli_query($conex,$consulta);
    $comprobar=0;
    if($resultado1){
        while($row=$resultado1->fetch_array()){
            $titulo_bd=$row['titulo'];
            $categoria_bd=$row['categoria'];
            $precio_bd=$row['precio'];
            if($titulo==$titulo_bd && $categoria_bd==$categoria && $precio_bd==$precio ){
                $comprobar=1;
                ?>
                <B><FONT COLOR="black">Ya existe un articulo asi </FONT>
                <?php
            }
        }
        if($comprobar==0){
            $consulta="INSERT INTO accesorios(titulo, categoria, precio, link) VALUES ('$titulo','$categoria','$precio','$link')";
            $resultado=mysqli_query($conex,$consulta);
            if($resultado){
                ?>
                <label for="psw"><b>Accesorio registrado</b></label>
                <?php
            }else{
            ?>
            <label for="psw"><b>Error al regsitrar</b></label>
            <?php
        }
    }
    }
}
?>