<?php
    include "conexion.php";
    $user = $_GET["usuario"];
    $password = $_GET["contraseña"];
    echo "".$user."".$password."";
    if (empty($user) || empty($password)) {
        ?>
            <h2 class="error">¡Por favor, complete todos los campos!;</h2>
        <?php
    }else{
        if((strlen($_GET["usuario"])>1)&& (strlen($_GET['contraseña'])>1)){    
            $query = "SELECT idUsuario FROM usuario WHERE usuario=?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("i", $user);
            $stmt->execute();
            $result = $stmt->get_result();
            $datos = array();
            while ($row = $result->fetch_assoc()) {
                $datos[] = $row['idUsuario'];
            }
            $idUsuarioQ = $datos[0];
            if(!$idusuario=null){         
                $query2 = "SELECT contraseña.Contraseña FROM usuario usuario INNER JOIN contraseña contraseña ON usuario.Contraseña_idContraseña = contraseña.idContraseña WHERE usuario.idUsuario =?";
                $stmt2 = $conexion->prepare($query2);
                $stmt2->bind_param("i", $idUsuarioQ);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $datos2 = array();
                while ($row2 = $result2->fetch_assoc()) {
                    $datos2[] = $row2['Contraseña'];
                }
                $contraseñaQ = $datos2[0];
                if(!$contrasena=null) {
                    if(($password == $contraseñaQ) && ($idUsuarioQ != null)) {
                        header("Location: Pagina2.html");
                    }else{
                        ?>
                            <h2 class="error">¡Error al validar los datos!</h2>
                        <?php
                    }
                }else{
                    ?>
                        <h2 class="error">¡El usuario no existe, verifique su usuario e intente nuevamente. Si no tiene usuario, presione en Registrar!1</h2>
                    <?php
                }
            } else {
                ?>
                    <h2 class="error">¡El usuario no existe, verifique su usuario e intente nuevamente. Si no tiene usuario, presione en Registrar!2</h2>
                <?php
            }
        }else{
            ?>
                <h2 class="error">¡El usuario no existe, verifique su usuario e intente nuevamente. Si no tiene usuario, presione en Registrar!3</h2>
            <?php
        }   
    }
?>