<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="theme-color" content="#bla"  />
    <title>Tienda Nutrimental</title>
    
    

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/8214ee2fbf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>

    <!--***************************Header navar*****************************-->
    <header class="container-fluid position-sticky top-0">
      <ul
        class="nav  mb-3 py-3 container"
        id="pills-tab"
        role="tablist"
      >
        <li class="nav-item" role="presentation">
          <a
          href="index.php"
            class="nav-link "
            
            >Inicio</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <i class="fa-solid fa-cart-shopping nav-link" id="pills-contact-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-contact"
          type="button"
          role="tab"
          aria-controls="pills-contact"
          aria-selected="false"
          ></i>
        </li>
      </ul>


    </header>
<!--***************************Buscador e inicio de galeria*****************************-->
    <div id="hero">
      <div class="container">
        <div class="row-1">
          <div class="six columns">
            <div class="contenido-hero">
              <h2>Pide tu producto favorito</h2>
              <p>Todos los productos más cerca de ti</p>
              <form action="#" id="busqueda" method="post" class="formulario">
                <input
                  class="card-filter"
                  type="search"
                  placeholder="¿Que te gustaria comprar?"
                  id="buscador" 
                />
                <!--*<input  type="submit" class="submit-buscador" id="submit-buscador"/>-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--***************************Barra de descripción*****************************-->
    <div class="barra">
      <div class="container-2">
        <div class="row-2">
          <div class="four columns icono icono1">
            <p>
              Tazones <br />
              Explora lo mejor para tus comidas
            </p>
          </div>
          <div class="four columns icono icono2">
            <p>
              Cucharas medidoras <br />
              Controlar tus porciones de comida
            </p>
          </div>
          <div class="four columns icono icono3">
            <p>
              Objetos y Vasos <br />
              Ejercitate y mantente hidratado
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--*****Alert que muestran el mensaje de agregado o eliminado el producto*****-->

    <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Producto Añadido al carrito!
    </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
      Producto removido!
    </div>

<!--*******Lista de productos*******-->


    <div class="tab-content" id="pills-tabContent">
      <!--*<div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" >   1</div>-->
      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <h2 class="h4 m-4">Pedidos en linea</h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha1.php"><h5 class="card-title pt-2 text-center">Bascula Gramera Blanca</h5></a>
               <img src="./img/BasculaGramera.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Bascula tipo reloj de color blanco, la cual puede pesar hasta 5 kg. es facil de cargar y no requiere baterias.
                  producto hecho de plastico y metal que no influye en el peso.
                </p>
                <h5 class="">Precio: <span class="precio">$ 150</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha2.php"><h5 class="card-title pt-2 text-center">Bascula Gramera Metal</h5></a>
              <img src="./img/BasculaGrameraM.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Bascula gramera de metal color negro con gris contien opcion "TARE" para quitar el peso del recipiente.
                  Peso maximo de 3 kg. necesita baterias "AA". --Incluye baterias--
                </p>
                <h5 class="">Precio: <span class="precio">$ 200</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha3.php"><h5 class="card-title pt-2 text-center">Bascula gramera Tendencia</h5></a>
              <img src="./img/BasculaGrameraT.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Bascula gramera de tendecia color blanco peso maximo de 5Kg. incluye plato para pesar, no requiere baterias.
                </p>
                <h5 class="">Precio: <span class="precio">$ 120</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha4.php"><h5 class="card-title pt-2 text-center">Bascula de Peso</h5></a>
              <img src="./img/BasculaPeso.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Bascula de peso color blanco con vidrio tranparente blanco --incluye cinta metrica--, fragil al usar de manera inadecuada.
                  No requiere baterias.
                </p>
                <h5 class="">Precio: <span class="precio">$ 300</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha5.php"><h5 class="card-title pt-2 text-center">Duo Batidora</h5></a>
              <img src="./img/Batidora.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Batidoras de madera de tipo globo practicas para mover, de facl uso e incluye un tazon para preparar.
                </p>
                <h5 class="">Precio: <span class="precio">$ 60</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha6.php"><h5 class="card-title pt-2 text-center">Batidora Metalica</h5></a>
              <img src="./img/Batidoras.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Batidora metalica de tipo globo de metal inoxidable, especial para comidas.
                </p>
                <h5 class="">Precio: <span class="precio">$ 50</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha7.php"><h5 class="card-title pt-2 text-center">Botella Termica</h5></a>
              <img src="./img/BotellaAgua.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Botella para liquidos que los mantiene a temperatura, es inoxidable y cuenta con una garradera
                  es de un litro.
                </p>
                <h5 class="">Precio: <span class="precio">$ 80</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha8.php"><h5 class="card-title pt-2 text-center">Botellas Flourescentes</h5></a>
              <img src="./img/BotellasFlouresentes.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Botellas flourecentes de plastico con apariencia de cristal, diferentes colores flourecentes desde 
                  500ml. a un litro.
                </p>
                <h5 class="">Precio: <span class="precio">$ 80</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha9.php"><h5 class="card-title pt-2 text-center">Tazas especiales</h5></a>
              <img src="./img/Bowls.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Juego de tazas blancas con adornos de flores, especiales para medir los alimentos.
                  Contamos con distintos tamaños para medir.
                </p>
                <h5 class="">Precio: <span class="precio">$ 200</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha10.php"><h5 class="card-title pt-2 text-center">Cinta Metrica</h5></a>
              <img src="./img/Cintametrica.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Cintas para medir cintura, cadera o cualquier parte del cuerpo, es de 200cm de color amarillo,
                  de plástico y con doble cara.
                </p>
                <h5 class="">Precio: <span class="precio">$ 20</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
            <a href="fichasProducto/ficha11.php"><h5 class="card-title pt-2 text-center">Juego Cubiertos metalicos</h5></a>
              <img src="./img/Cubiertos.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Cucharas medidoras de diferentes tamaños, incluyen unos tenedores y un untador, son plasticas con apariencia metalica.
                </p>
                <h5 class="">Precio: <span class="precio">$ 60</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1" style="width: 20rem;">
             <a href="fichasProducto/ficha12.php"><h5  class="card-title pt-2 text-center">Juego de Platos</h5></a> 
             <img src="./img/Cucharas.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">
                  Platos de plastico especiales para los cortes de carne con separaciones para porciones de comida.
                </p>
                <h5 class="">Precio: <span class="precio">$ 60</span></h5>
                <h6 class="dispo"><b>Disponible</b></h6>
                <div class="d-grid gap-2">
                <button  class="btn button-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-hover">
        <thead>
          <tr class="">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-t">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-com"><a href="tarjeta/tarjeta.php">COMPRAR</a> </button>
        </div>
      </div>
      
      </div>
    </div>
<!--*********Footer**********************-->
    <footer class=" p-3 mt-5">
      <p class="text-center m-0">&copy; 2022 <b>e-commerce</b></p>
    </footer>
<!--***************************JAVASCRIPT*****************************-->
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/buqueda.js"></script>

    <!--**********Estrela**************-->
    

    <!--****Funcion chat bot****-->
    <script src="//code.tidio.co/xrozdy2elycpo8koectv2w6tmnw1l8ds.js" async></script>

  </body>
</html>
