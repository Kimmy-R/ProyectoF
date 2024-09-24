<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="styleSoli.css" />

  </head>
  <body>

    <header class="header_a">
        <div class="container">
          <div class="area_logo_header">
            <img src="fotos/laboratorios.png" alt="Logo" class="logo">
          </div>
          <nav class="area_nav_header">
            <ul class="list_nav_header">
              <li><a href="">---</a></li>
              <li><a href="">---</a></li>
              <li><a href="">Home</a></li>
              <li><a class="btn_contact" href="pag3.html">Salir</a></li>
            </ul>
          </nav>
        </div>
      </header>

    <h1 id="title">Solicitudes</h1>
    <p id="description">Realiza la solicitud para el laboratorio que deseas</p>
    <form  class="form" id="survey-form" action='' method="post">

      <label for="name" id="name-label">Fecha de uso de laboratorio: 
        <input id="name" name="name" type="date" required placeholder="dd/mm/aaaa" />
      </label>

      <label for="business"> Id_Usuario:
        <select id="dropdown" name="business">
          <option value="">--Selecciona uno--</option>
        </select>
      </label>

      <label for="business"> Id_Laboratorio:
        <select id="dropdown" name="business">
          <option value="">--Selecciona uno--</option>
        </select>
      </label>

      <label for="business"> Id_Jornada:
        <select id="dropdown" name="business">
          <option value="">--Selecciona uno--</option>
        </select>
      </label>

      <fieldset class="user">
        <legend>Jornada</legend>
        <label for="user"> 
          <input value="yes" id="user" type="radio" name="user" checked/> 
          Diurna
        </label> 
        <label for="no-user"> 
          <input id="no-user" type="radio" name="user" value="no" /> 
          Nocturna
        </label>
      </fieldset>

      <div class="btns">
        <button type="Cancel" id="Cancel" value="Cancel"> Cancelar </button>
        <button type="submit" id="submit" value="Submit"> Enviar </button>
      </div>
      <?php
        include("solicitar.php");
      ?>
    </form>
    </form>
  </body>

            
</html>
