<?php
include("con_base de datos.php");
if(isset($_POST['submit_registro'])){
    if(strlen($_POST['email_registro']) >= 1 && strlen($_POST['psw1_registro']) >= 1 && strlen($_POST['psw2_registro']) >= 1  ){
        if($_POST['psw1_registro']==$_POST['psw2_registro']){
            $compobar=0;
            $correo_usuario=trim($_POST['email_registro']);
            $contraseña_usuario=trim($_POST['psw1_registro']);
            $consulta= "SELECT * FROM datos WHERE correo='$correo_usuario'";
            $resultado1=mysqli_query($conex,$consulta);
            if($resultado1){
                while($row=$resultado1->fetch_array()){
                    $id=$row['id'];
                    $correo=$row['correo'];
                    $password=$row['contraseña'];
                    if($correo==$correo_usuario){
                        $compobar=1;
                        ?>
                        <label for="psw"><b>Ya existe una cuenta en este correo</b></label>
                        <?php
                    }
                    }
                    if($compobar==0){
                        $consulta="INSERT INTO datos(correo, contraseña) VALUES ('$correo_usuario','$contraseña_usuario')";
                        $resultado=mysqli_query($conex,$consulta);
                        if($resultado){
                            $asunto="Registro de cuenta";
                            $destinatario=$correo_usuario;
                            $mensaje="Tu cuenta en la pagina Violeta Boutique ha sido creada exitosamente";
                            $header="Correo enviado por la pagina Violeta Boutique";
                            //mail($destinatario,$asunto,$mensaje);
                            ?>
                            <label for="psw"><b>Cuenta registrada</b></label>
                            <?php
                        }else{
                            ?>
                            <label for="psw"><b>Error al regsitrar</b></label>
                            <?php
                        }
                    }
                }
        }else{
            ?>
            <label for="psw"><b>Contraseñas diferentes</b></label>
            <?php
        }
    }else{
        ?>
        <label for="psw"><b>Espacios vacios</b></label>
        <?php
    }
}
?>