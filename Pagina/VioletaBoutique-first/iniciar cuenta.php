<?php
$correo_usuario=trim($_POST['email_sesion']);
$password_usuario=trim($_POST['psw_sesion']);
include("con_base de datos.php");
if(isset($_POST['submit_sesion'])){
    if(strlen($_POST['email_sesion'])>1 && strlen($_POST['psw_sesion'])>1){
        $consulta= "SELECT * FROM datos WHERE correo='$correo_usuario'";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){
            while($row=$resultado->fetch_array()){
                $id=$row['id'];
                $correo=$row['correo'];
                $password=$row['contraseña'];
                if($correo==$correo_usuario && $password==$password_usuario){
                    ?>
                    <B><FONT COLOR="white">Sesion iniciada </FONT>
                    <?php
                }else{
                    ?>
                    <B><FONT COLOR="white">Datos incorrectos </FONT>
                    <?php
                }
            }
        }else{
            ?>
            <B><FONT COLOR="white">Datos incorrectos </FONT>
            <?php
        }       
    }else{
        ?>
        <B><FONT COLOR="white">Rellene los formularios vacios </FONT>
        <?php
    }
}
?>