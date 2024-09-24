<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylePag1.css">
    </head>
    <body style="background-color:rgb(216, 240, 255); font-family: Verdana, Geneva, Tahoma, sans-serif;">
        <div style="background-color:whitesmoke; margin-left: -10px; margin-right: -10px;margin-top: -10px;">
                <header id="headerMarca">
                    <a id="headerSeccionLogo" href="proyecto.html">
                        <span class="NomMarca">Sistema Logistico</span>
                        <span class="DescMarca" >IUDC</span>
                    </a>
                    <nav class="BarNavegacion" style="height: 90px;">
                        <ul>
                            <li>
                                <a href="pagina1.html"><img class="logoEmp" src="fotos/ultimo (1).png" style="width:100%;"></a>
                            </li>   
                            <li>
                                <div id="divisor"> </div>
                            </li>
                            <li>
                                <img id="logoU" src="fotos/Logo-UniversitariadeColombia.png">
                            </li>
                        </ul>
                    </nav>
                </header>
        </div>
        <h1 style="text-align: center;margin-top: 140px;">Inicio de Sesión</h1>
        <div class="divConten">
            <form class="contenedor" method="get">
                <div class="grid_inicio"><!--Usuario y contraseña-->
                    <div>
                        <img class="icon-image" src="fotos/icono-usuario.png"> 
                        </div>
                    <div>
                        <input class="input-login" id="usuario" type="texto" name="usuario" placeholder="Usuario...">
                    </div>
                    <div>
                        <img class="icon-image" src="fotos/icono-contraseña.png" aling="right">
                    </div>
                    <div>
                        <input class="input-login" id="contraseña" type="password" name="contraseña" placeholder="Contraseña...">
                    </div>
                    <div class="botonInicio">
                        <input  class="btn" type="submit" name="iniciarsesion" value="Iniciar Sesion" formaction="validar.php">
                    </div>
                    <div class="botonRegistro">
                        <input  class="btn" type="submit" name="registrar" value="Registrarse" formaction="Pagina2.html">
                    </div>
                </div>
            </form>
        </div>
        <script src="" async defer></script>
    </body>
    <footer>
        <p class="piePag">Derechos Reservados Grupo No. 07 | Kimberly Tatiana Rincon Quiñonez | Nicolas Castillo Niño | Cesar Andres Diaz Delgado | MYNES SAS ® - 2024</p>
    </footer>
</html>