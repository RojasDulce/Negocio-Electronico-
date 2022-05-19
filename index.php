<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/stylemodal.css">
   
    <link rel="icon" href="img/logo_solo.png" sizes="35x35" type="image/png">
    <script
      src="https://kit.fontawesome.com/8214ee2fbf.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="icon"
      href="imagenes/logo_solo.png"
      sizes="35x35"
      type="image/png"
    />
    <title>Nutriología</title>
  </head>
  <body>
    <!--************************************Inicio de navar********************************************************************-->
    <header>
      <nav>
        <div class="mobile">
          <div class="header">
            <div class="logo">
              <img
                src="img/logo_solo.png"
                alt="logo"
                width="65px"
                height="50px"
              />
            </div>
            
            <div class="more">
              <button id="bMore">
                <i class="fa-solid fa-bars"></i>
              </button>
            </div>
          </div>

          <div id="links" class="links">
            <a href="index.php">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#planes">Planes</a>
            <a href="#contacto">Contacto</a>
            <?php if(!isset($_SESSION["user_id"])):?>
            <a href="login/login.php">Iniciar sesion</a>
            <?php else:?>
            <a href="login/logout.php">cerrar sesion</a>
            <?php endif;?>
            <a href="#">Servicios</a>
            <ul class="nav-ul">
              <li><a href="carroT.php">Tienda</a></li>
              <li><a href="#" >Tips Rapidos</a></li>
              <li><a href="#" >Videos</a></li>
              <li><a href="#" >Calculador</a></li>
              <li><a href="#" >Control alimentos</a></li>
            </ul>
          </div>
        </div>

        <div class="desktop">
          <div class="logo">
            <img
              src="img/logo_solo.png"
              alt="logo"
              width="65px"
              height="50px"
            />
          </div>

          <div class="primary">
            <a href="index.php">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#planes">Planes</a>
            <a href="#contacto">Contacto</a>
            <?php if(!isset($_SESSION["user_id"])):?>
            <a href="login/login.php">Iniciar sesion</a>
            <?php else:?>
            <a href="login/logout.php">cerrar sesion</a>
            <?php endif;?>
            
          </div>
          <div class="secondary full">
            <a href="#" class="servicios">Servicios</a>
            
            <ul class="nav-ul">
              <li><a href="carroT.php">Tienda</a></li>
              <li><a href="#" class="btn_modal_tip">Tips Rapidos</a></li>
              <li><a href="#" class="btn_modal_vid">Videos</a></li>
              <li><a href="#" class="btn_modal_calcu">Calculador</a></li>
              <li><a href="#" class="btn_modal_seg">Control alimentos</a></li>
            </ul>
          </div>
          <div class="secondary unique">
            <!--*<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>-->
          </div>
          <div class="secondary mini">
            <a href="#">Mas...</a>
            <div class="submenu">
              <ul class="nav-ul">
                <li><a href="carroT.php">Tienda</a></li>
                <li><a href="#" class="btn_modal_tip">Tips Rapidos</a></li>
                <li><a href="#" class="btn_modal_vid">Videos</a></li>
                <li><a href="#" class="btn_modal_calcu">Calculador</a></li>
                <li><a href="#" class="btn_modal_seg">Control alimentos</a></li>
              </ul>
            </div>
          </div>

          <div class="menuservicio"></div>
        </div>
      </nav>

      <!--*************************************Fin de navar*******************************************************************-->

      <!--***************************+*Inicio Header************************************************-->
      <section class="header_inicio">
        <img
          src="img/nutri-foto.png"
          alt="foto de nutriologo"
          width="500px"
          height="500px"
        />
        <div class="nombre_nutri">
          <h1>Lic. Daniel García Velázquez</h1>
          <a href="#contacto">Contactar</a>
        </div>
      </section>
      <div class="wave" style="height: 150px; overflow: hidden">
        <svg
          viewBox="0 0 500 150"
          preserveAspectRatio="none"
          style="height: 100%; width: 100%"
        >
          <path
            d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #d0dff2"
          ></path>
        </svg>
      </div>
      <!--***************************+*fin Header************************************************-->
    </header>
    <!--****************************inicio nosotros************************************************-->
    <section class="nosotros" id="nosotros" >
      <div class="contenedor">
        <head>
          <h2 class="title">NOSOTROS</h2>
        </head>
        <div class="body_nos">
          <p class="text_nos">
            Mi <b>misión</b> es causar un impacto en las personas, de tal forma
            que comprendan sobre lo que es nutrición, y sus diferentes funciones en la
            vida diaria, de esta forma podrán cuidar su salud, peso y desarrollo
            saludable.
            <br />
            <b>Lic. Daniel García Velázquez</b> es un experto con el objetivo de
            brindar a las personas conocimiento sobre la nutriología, exponiendo
            sus conocimientos en tips, videos y diferentes servicios para su
            bienestar.
          </p>
          <img class="img_nos" src="img/logo-ofin.png" alt="logo" width="550px" height="400px"
          />
        </div>
      </div>
    </section>
    <!--****************************fin nosotros************************************************-->

    <!--****************************inicio planes************************************************-->
    <section id="planes">
      <div class="contenedor">
        <head>
          <h2 class="title">PLANES</h2>
        </head>
        <div class="tarjetas_plan">
            <div class="card">
                 <div class="face front">
                     <img src="img/control-peso.jpg" alt="Control peso">
                     <h4>Control de peso</h4>
                     
                 </div>
                 <div class="face back">
                    <h4>Control de peso</h4>
                        <p>Con una buena alimentación podrás obtener el 
                        cuerpo que más has querido, al mismo tiempo que aprendes
                        a comer sin la necesidad de perderte tus comidas favoritas.
                        </p>
                        <div class="link-trj">
                            <a href="#">Contactar</a>
                        </div>
                 </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/desarrollo.jpg" alt="Control peso">
                    <h4>Desarrollo</h4>
                    
                </div>
                <div class="face back">
                   <h4>Desarrollo</h4>
                       <p>
                         Brindo una forma agradable para los niños de tal
                         manera que se alimentan y desarrollan sanamente
                         al mismo tiempo que comienzan a comer sin el tabú
                         de que las verduras tienen un mal sabor.
                       </p>
                       <div class="link-trj">
                           <a href="#">Contactar</a>
                       </div>
                </div>
           </div>

           <div class="card">
            <div class="face front">
                <img src="img/embarazo.jpg" alt="Control peso">
                <h4>Embarazo</h4>
                
            </div>
                <div class="face back">
                     <h4>Embarazo</h4>
                     <p>
                        En cada consulta se da seguimiento a un embarazo
                        sano para que el desarrollo del bebé sea optimo y 
                        de igual manera la madre llevara una buena alimentación.
                    </p>
                   <div class="link-trj">
                       <a href="#">Contactar</a>
                   </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/enfermedades.jpg" alt="Control peso">
                    <h4>Enfermedades</h4>
            
            </div>
            <div class="face back">
                <h4>Enfermedades</h4>
                <p>
                  Brindo seguimiento a una alimentación saludable a personas 
                  con enfermedades como hipertiroidismo, hipotiroidismo, diabetes,
                  hipertensión arterial, obesidad, anemia, entre otros ayudandolos a 
                  mejorar su estilo de vida.
                </p>
                <div class="link-trj">
                   <a href="#">Contactar</a>
                </div>
            </div>
            </div>
        </div>

        </div>
      </div>
    </section>
    <!--****************************fin planes************************************************-->

    <!--****************************inicio contactar************************************************-->
    <section id="contacto">
      <div class="contenedor">
        <head>
          <h2 class="title">CONTACTAR</h2>
        </head>
        <form action="" class="form_ini">
            <!--<p class="form_frase">Manda tu numero para que asi poder agendar una cita <a class="form_link" href="">agenda ahora</a></p>-->

            <div class="form_conteiner_ini">
                <div class="form_grup">
                    <input type="text" name="nombre" class="form_input" placeholder=" ">
                    <label for="nombre" class="form_label">Nombre completo</label>
                    <span class="form_line"></span>
                </div>

                <div class="form_grup">
                    <input type="text" name="numero" class="form_input" placeholder=" ">
                    <label for="numero" class="form_label">Número de Teléfono</label>
                    <span class="form_line"></span>
                </div>

                <div class="form_grup">
                    <input type="email" name="email" class="form_input" placeholder=" ">
                    <label for="email" class="form_label">Correo electrónico</label>
                    <span class="form_line"></span>
                </div>

                <div class="form_grup">
                    <textarea name="descripcion" id="descripcion" class="form_input" placeholder=" " cols="50" rows="5"></textarea>
                    <label for="descripcion" class="form_label">Motivo de visita</label>
                    <span class="form_line"></span>
                </div>

                <input type="submit" class="form_submit" value="Contactar">
                
            </div>
        </form>
      </div>
    </section>
    <!--****************************fin contactar************************************************-->

    <!--****************************inicio preguntas frecuentes************************************************-->
    <section>
      <div class="contenedor">
        <head>
          <h2 class="title">PREGUNTAS FRECUENTES</h2>
        </head>
        <details>
            <summary>
                ¿Qué beneficios tiene adquirir este servivio?
            </summary>
            <div class="respuesta">
                <p>
                  Estos son los beneficios que estoy ofreciendo en mi servicio como nutriólogo:
                  <ul>
                    <li>Contar con un asesoramiento en nutrición</li>
                    <li>Cuidado de la salud</li>
                    <li>Aprendizaje sobre la alimentación sana</li>
                    <li>Apoyo en aplicar tus nuevos hábitos de vida</li>
                    
                  </ul>
                </p>
            </div>
        </details>

        <details>
            <summary>
                ¿Qué horario laboral está disponible?
            </summary>
            <div>
                <p>
                  De lunes a viernes de 10 am - 10 pm. *Con previa cita*
                </p>
            </div>
        </details>

        <details>
            <summary>
                ¿Qué planes ofrece?
            </summary>
            <div>
                <p>
                  Los planes que ofrezco son los siguientes:
                  <ol>
                    <li>Control de peso</li>
                    <li>Desarrollo saludable</li>
                    <li>Alimentación en el embarazo</li>
                    <li>Alimentación en enfermedades alimenticias</li>
                  </ol>
                </p>
            </div>
        </details>
        

        <details>
            <summary>
                ¿Cuál es el plazo de entrega de pedidos?
            </summary>
            <div>
                <p>El plazo de entrega es de 2 a 3 días aproximadamente.</p>
            </div>
        </details>

        <details>
            <summary>
                ¿Cuántas comidas hay que hacer al dia?
            </summary>
            <div>
                <p>
                  Mientrás consumas tus calorias apropiadas al día 
                  no importa la hora o las proporciones de la comida.
                  Incluso es un mito el decir que el desayuno es la 
                  comida más importante del día.
                </p>
            </div>
        </details>
        <details>
          <summary>
              ¿Los alimentos integrales engordan?
          </summary>
          <div>
              <p>
                Aportan la misma cantidad de calorias que los refinados
                la diferencia esta en que los integrales aportan fibra
                y nutrientes.
              </p>
          </div>
      </details>
      <details>
        <summary>
            ¿Tomar agua durante a comida entropece la digestión?
        </summary>
        <div>
            <p>
              El aporte de agua es necesario a lo largo de todo el día
              incluso en el momento de las comidas y en absluto entorpece 
              la digestión.
            </p>
        </div>
    </details>
    <details>
      <summary>
          ¿La transpiración me ayuda a quemar grasa y bajar de peso?
      </summary>
      <div>
          <p>
            Para quemar la grasa lo que se necesita es dieta con las calorias
            necesarias para tu peso y tu edad y realizar actividad fisica.
            La transpiración es solo una perdida de liquido momentaneo, en cuanto
            bebes agua recuperas lo perdido.
          </p>
      </div>
    </details>
    <details>
      <summary>
        ¿Por qué no tengo los resultados que deseo si hago ejercicio y dieta?
      </summary>
     <div>
        <p>
          Por la falta de agua ya que al hacer ejercicio pierdes agua, si no la tomas,
          tu nivel de agua baja y tu nivel de grasa sube.
        </p>
     </div>
    </details>
      </div>
    </section>
    <!--****************************fin preguntas frecuentes************************************************-->

    <!--****************************inicio footer************************************************-->
    <footer>
      <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 90" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C168.40,-37.99 336.00,163.31 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #d95276;"></path></svg></div>
      <div class="pie_inicio">
      <div class="group1">
       <div class="box">
           <figure>
               <a href="#">
                   <img src="img/logo_solo.png" alt="logo" width="100px" height="70px">
                </a>
            </figure>
        </div>
       <div class="box">
           <h3>Propiedad de</h3>
           <p>Lic. Daniel García Velázquez</p>
           <p>Salvatierra, Gto.</p>
       </div>
       <div class="box">
           <h3>Sigueme</h3>
           <div class="red_social">
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#" ><i class="fa-brands fa-instagram"></i></a>
           </div>
       </div>
      </div>
      <div class="group2">
        <small>&copy; 2022 <b>Lic. Daniel Garcia</b> - Todos los derechos reservados. </small>
      </div>
    </div>
    </footer>
    <!--****************************fin footer************************************************-->
    
    <!--****************************inicio modals************************************************-->
 
<!--***********************************************************+-->
<section class="modal_se">
  <div class="modal__conteiner">
      <!--*<img src="img/tecnm.png" class="modal_img" alt="">-->
      <h2 class="modal__title">Iniciar Sesión</h2>
      <p class="modal__parrafo">
          Inicia sesion con tu correo electronico o tu nombre de usuario              
      </p>
      <form action="" class="form_ini">
          <!--<p class="form_frase">Manda tu numero para que asi poder agendar una cita <a class="form_link" href="">agenda ahora</a></p>-->

          <div class="form_conteiner">
              <div class="form_grup">
                  <input type="text" name="nombreocorreo" class="form_input" placeholder=" ">
                  <label for="nombreocorreo" class="form_label">Nombre o correo</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="password" name="password" class="form_input" placeholder=" ">
                  <label for="password" class="form_label">Contraseña</label>
                  <span class="form_line"></span>
              </div>

              <input type="submit" class="form_submit" value="Entrar">
              
              <hr>
                  <div class="altern_regis">
                  <p class="">¿No tienes cuenta? <a href="" class="login_now btn_modal"> Registrate ahora</a></p>
          
               </div>

          </div>
      </form>
      <a href="#" class="modal__close_se">Cerrar</a>
  </div>
</section>  

<!--***************************************************************************-->
<section class="modal">
  <div class="modal__conteiner">
      <!--*<img src="img/tecnm.png" class="modal_img" alt="">-->
      <h2 class="modal__title">Registrarse</h2>
      <p class="modal__parrafo">
          Crea una cuenta para obtener los beneficioss              
      </p>
      <form action="" class="form_ini">-
          <!--<p class="form_frase">Manda tu numero para que asi poder agendar una cita <a class="form_link" href="">agenda ahora</a></p>-->

          <div class="form_conteiner">
              <div class="form_grup">
                  <input type="text" name="nombre" class="form_input" placeholder=" ">
                  <label for="nombre" class="form_label">Nombre</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="text" name="numero" class="form_input" placeholder=" ">
                  <label for="numero" class="form_label">Apellido</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="text" name="numero" class="form_input" placeholder=" ">
                  <label for="numero" class="form_label">Nombre usuario</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="email" name="email" class="form_input" placeholder=" ">
                  <label for="email" class="form_label">Correo electroni</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="password" name="password" class="form_input" placeholder=" ">
                  <label for="password" class="form_label">Contraseña</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="password" name="c_password" class="form_input" placeholder=" ">
                  <label for="c_password" class="form_label">Confirmar Contraseña</label>
                  <span class="form_line"></span>
              </div>

              <input type="submit" class="form_submit" value="Registrarse">
              
              <hr>
                  <div class="altern_regis">
                  <p class="">o registrarse con:</p>
             
                  <div class="group_regis">
                     <a href=""><i class="fa-brands fa-google"></i></a>
                      <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                  </div>
               </div>

          </div>
      </form>
      <a href="#" class="modal__close">Cerrar</a>
  </div>
</section>
<!--***********************************************************+-->

<!--***********************************************************+-->
<section class="modal_calcu">
  <div class="modal__conteiner">
      <!--*<img src="img/tecnm.png" class="modal_img" alt="">-->
      <h2 class="modal__title">Calculator</h2>
      <p class="modal__parrafo">
          Calcula si estas en sobre peso, regular o sedentario.             
      </p>
      <form action="" class="form_ini">-
          <!--<p class="form_frase">Manda tu numero para que asi poder agendar una cita <a class="form_link" href="">agenda ahora</a></p>-->

          <div class="form_conteiner_calcu">
              <div class="form_grup">
                  <input type="number" name="edad" class="form_input" placeholder=" ">
                  <label for="edad" class="form_label">Edad</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="text" name="estatura" class="form_input" id="n1" placeholder=" ">
                  <label for="estatura" class="form_label" >Estatura</label>
                  <span class="form_line"></span>
              </div>

              <div class="form_grup">
                  <input type="text" name="peso" class="form_input" id="n2" placeholder=" ">
                  <label for="peso" class="form_label" >Peso</label>
                  <span class="form_line"></span>
              </div>

              <!--<input type="submit" class="form_submit" id="calcula" value="Calcular">-->
              <a href="#" class="form_submit" id="calcula">Calcular</a>
              
          </div>
      </form>
      <a href="#" class="modal__close_calcu">Cerrar</a>
  </div>
  </section>
   <!--***********************************************************+-->
       <!--***********************************************************+-->
       <section class="modal_tip">
        <div class="modal__conteiner">
            <!--*<img src="img/tecnm.png" class="modal_img" alt="">-->
            <h2 class="modal__title">Tips de Salud</h2>
            <p class="modal__parrafo">
                Para obtener mejores resultados, aquí tienes algunos tips que te pueden servir.             
            </p>
            
            <div class="tips">
                <img src="img/1midecom.jpg" alt="photo1" width="100´px" height="100px">
                <p>
                  El ejercicio solo abarca el 20% de los resultados, el otro 80% lo hara una alimentación
                  saludable y adecuada.
                  Recuerda que todos los ejercicio trabajan el abdomen.
                </p>
            </div>
            
            <div class="tips">
                <img src="img/2ejercit.jpg" alt="photo1" width="100´px" height="100px">
                <p>Mide tu comida en las porciones adecuadas y de preferencia crea el habito
                    de utilizar una bascula gramera que te ayudara a realizar de una manera más
                    eficiente tu dieta saludable.
                </p>
            </div>

            <div class="tips">
                <img src="img/metas.jpg" alt="photo1" width="100´px" height="100px">
                <p>
                  Recuerda que la revisión debe ser cada quince días, ya que llevas un control de 
                  periodos pequeños, si puedes controlar tu alimentación en pequeños tiempos lo podras 
                  realizar en periodos más largos.
                </p>
            </div>

            <div class="tips">
                <img src="img/visitdoc.jpg" alt="photo1" width="100´px" height="100px">
                <p>
                  Recuerda consultar un experto en nutrición antes de adaptarte dietas que les funcionan a 
                  otras personas, un camino facil no es el adecuado, <b>los remedios caseros funcionan al instante 
                    pero el efecto rebote te traera complicaciones de salud </b>
                </p>
            </div>

            
            <a href="#" class="modal__close_tip">Cerrar</a>
        </div>
    </section>
     <!--***********************************************************+-->
     <section class="modal_vid">
        <div class="modal__conteiner">
            <!--*<img src="img/tecnm.png" class="modal_img" alt="">-->
            <h2 class="modal__title">Registrarse</h2>
            <p class="modal__parrafo">
                Crea una cuenta para obtener los beneficioss              
            </p>

            <div class="videos_cont">
                <h3>Videos basicos entrenamientos</h3>
                <div class="box_video">
                    <div class="video"><video src="img/videob1.m4v" ></video></div>
                    <div class="video"><video src="img/videob2.m4v" ></video></div>
                </div>
            </div>

            <div class="videos_cont">
                <h3>Videos basicos calentamientos</h3>
                <div class="box_video">
                    <div class="video"><video src="img/videob3.mp4" ></video></div>
                    <div class="video"><video src="img/videob4.m4v" ></video></div>
                </div>
            </div>

            <div class="videos_cont">
                <h3>Videos entrenamiento intermedio</h3>
                <div class="box_video">
                    <div class="video"><video src="img/videob5.mp4" ></video></div>
                    <div class="video"><video src="img/videob6.mp4" ></video></div>
                </div>
            </div>

            <div class="videos_cont">
                <h3>Videos intermedio avanzado</h3>
                <div class="box_video">
                    <div class="video"><video src="img/videob7.mp4" ></video></div>
                    <div class="video"><video src="img/videob8.mp4" ></video></div>
                </div>
            </div>

            <a href="#" class="modal__close_vid">Cerrar</a>
        </div>
    </section>
     <!--***********************************************************+-->
     <section class="modal_seg">
        <div class="modal__conteiner">
            <!--*<img src="img/tecnm.png" class="modal_img" alt="">-->
            <h2 class="modal__title">Plan de alimentación</h2>
            <p class="modal__parrafo">
                Puedes verificar tu alimentacion siguiendo el plan que te proporcionaron
            </p>
            <hr>
           <div class="container_slider">
               <div class="slider" id="slider">
                    <div class="slider_section">
                       <img src="img/cat1.jpg" alt="" class="slider_img">
                    </div>
                    <div class="slider_section">
                       <img src="img/cat2.jpg" alt="" class="slider_img">
                    </div>
                    <div class="slider_section">
                       <img src="img/cat3.jpg" alt="" class="slider_img">
                    </div>
                    <div class="slider_section">
                       <img src="img/cat4.jpg" alt="" class="slider_img">
                    </div>
                   <div class="slider_section">
                       <img src="img/cat5.jpg" alt="" class="slider_img">
                    </div>
               </div>
               <div class="slider_btn slider_btn--right" id="btn_right">&#62;</div>
               <div class="slider_btn slider_btn--left" id="btn_left">&#60;</div>
           </div>
           <hr>
            <a href="#" class="modal__close_seg">Cerrar</a>
        </div>
    </section>
     <!--***********************************************************+-->



    <!--*************************************inicio codigo de Javascript*******************************************************************-->

    <!--***************codigo funcion boton mas.. del navar*************************-->
    <script>
      const bMore = document.querySelector("#bMore");
      const links = document.querySelector("#links");

      bMore.addEventListener("click", (e) => {
        links.classList.toggle("collapsed");
      });
    </script>
    <script src="./js/modal.js"></script>
    <!--*****++++funcion frutas++++++-->
      <!--*script de jquery para animacion-->
    <script src="img/static/js/jquery-2.1.4.min.js"></script>
    <!--*importancion css animacion de hojas-->
    <link rel="stylesheet" type="text/css" href="img/static/css/AutumnLeaf.min.css">
    <!--*importancion archivos de javascript-->
    <script src="img/static/js/greensock.js"></script>
    <script src="img/static/js/AutumnLeaf.min.js"></script>
    <script src="./js/calcular.js"></script>
<!--*script de imagenes-->
<script type="text/javascript">
$.AutumnLeafStart({
  leavesfolder: "img/static/nutricion/",
  howmanyimgsare: 7,
  initialleaves: 10,
  maxyposition: -10,
  multiplyclick: true,
  multiplynumber: 2,
  infinite: true,
  fallingsequence: 4000
});

</script>
    <!--*****++++funcion frutas++++++-->
    
    <!--***************fin de funcion boton mas.. del navar*************************-->

    <!--*************************************Fin codigo de Javascript*******************************************************************-->
  </body>
</html>
