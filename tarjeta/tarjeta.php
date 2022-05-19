<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="tarjeta.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap"
    />
    <title>Formulario de Tarjeta de Credito</title>
  </head>
  <body>
    <div class="contenedor">
      <!--tarjeta-->
      <section class="tarjeta " id="tarjeta" id="logo-marca">
        <div class="delantera">
          <div class="logo-marca">
            <!--se va a agregar desde java scrip-->
          </div>
          <img src="img/chip-tarjeta.png" class="chip" alt="" />
          <div class="datos">
            <div class="grupo" id="numero">
              <p class="label">Número de tarjeta</p>
              <p class="numero">#### #### #### ####</p>
            </div>
            <div class="flexbox">
              <!--derecha-->
              <div class="grupo" id="nombre">
                <p class="label">Nombre del Titular</p>
                <!--clases utilizadas solo para dar estilo css y los id para javascript-->
                <p class="nombre">Dulce María Rojas</p>
              </div>
              <!--izquierda-->
              <div class="grupo" id="expiracion">
                <p class="label">Expiracion</p>
                <p class="expiracion">
                  <span class="mes">MM</span> / <span class="year">AA</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="trasera">
          <div class="barra-magnetica">

          </div>
          <div class="datos">
            <div class="grupo" id="firma">
              <p class="label">Firma</p>
              <div class="firma">
                <!--con javascript de forma dinamica se agrega la firma-->
                <p></p>
              </div>
            </div>
            <div class="grupo" id="ccv">
                  <p class="label">CCV</p>
                  <p class="ccv"></p>
            </div>
          </div>
          <p class="leyenda">El Banco de México</p>
          <a href="#" class="link-banco">wwww.bancomx.com</a>
        </div>
      </section>
      <!--boton-->
      <div class="contenedor-btn">
        <button class="btn-abrir-formulario" id="btn-abrir-formulario">
          <i class="fa-solid fa-plus"></i>
        </button>
      </div>
      <!--formulario-->
      <form action="../login/registrot.php" id="formulario-tarjeta" class="formulario-tarjeta" method="POST">
        <div class="grupo">
          <label for="inputNumero">Número de Tarjeta</label>
          <input type="text" id="inputNumero" name="inputNumero" maxlength="19" minlength="19" autocomplete="off">
        </div>
        <div class="nombre">
          <label for="inputNombre">Nombre del Titular</label>
          <input type="text" id="inputNombre" name="inputNombre" maxlength="50" minlength="5" autocomplete="off">
        </div>
       
        <div class="flexbox">
          <div class="grupo expira">
            <label for="selectMes">Expiracion</label>
            <div class="flexbox">
              <div class="grupo-select">
                <select name="mes" id="selectMes">
                  <option  id="mes" name="mes" disabled selected>Mes</option>
                </select>
                <i class="fa-solid fa-angle-down"></i>
              </div>
              <div class="grupo-select">
                <select name="year" id="selectYear">
                  <option id="year" name="year" disabled selected>Año</option>
                </select>
                <i class="fa-solid fa-angle-down"></i>
              </div>
            </div>
          </div>
          <!--grupo codigo de seguridad ccv-->
          <div class="grupo ccv">
            <label for="inputCCV">CCV</label>
            <input type="text" id="inputCCV" name="inputCCV" maxlength="3" minlength="3">
          </div>
        </div>
        <button type="submit" class="btn-enviar">
          Enviar
        </button>
      </form>
    </div>

    <script src="tarjeta.js"></script>
    <script
      src="https://kit.fontawesome.com/8214ee2fbf.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
