const tarjeta = document.querySelector("#tarjeta"),
  btnAbrirFormulario = document.querySelector("#btn-abrir-formulario"),
  formulario = document.querySelector("#formulario-tarjeta"),
  numeroTarjeta = document.querySelector("#tarjeta .numero"),
  nombreTarjeta = document.querySelector("#tarjeta .nombre"),
  logoMarca = document.querySelector(".logo-marca"),
  firma=document.querySelector('#tarjeta .firma p'),
  mesExpiracion=document.querySelector('#tarjeta .mes'),
  yearExpiracion=document.querySelector('#tarjeta .year'),
  ccv=document.querySelector('#tarjeta .ccv');
  //volteamos la tarjeta para ostrar el frente
  const mostrarFrente=()=>{
      if(tarjeta.classList.contains('active')){
tarjeta.classList.remove('active');
      }
  }
//girar tarjeta
tarjeta.addEventListener("click", () => {
  //toggle se la va a poner si la tiene o quitar si y la tiene
  tarjeta.classList.toggle("active");
});
//abrir el formulario
btnAbrirFormulario.addEventListener("click", () => {
  btnAbrirFormulario.classList.toggle("active");
  formulario.classList.toggle("active");
});
//rellenar los select del mes generado dinamicamente
for (let i = 1; i <= 12; i++) {
  let opcion = document.createElement("option");
  opcion.value = i;
  opcion.innerText = i;
  formulario.selectMes.appendChild(opcion);
}
//rellenar select del año generado automaticamente
const yearActual = new Date().getFullYear();
for (let i = yearActual; i <= yearActual + 8; i++) {
  let opcion = document.createElement("option");
  opcion.value = i;
  opcion.innerText = i;
  formulario.selectYear.appendChild(opcion);
}

//Pasar datos  a la tarjeta y validar los input
//numero de la tarjeta
//4 visa 5 mastercard

//input numero de trajeta
formulario.inputNumero.addEventListener("keyup", (e) => {
  let valorInput = e.target.value;
  //eliminamos espacios en blanco
  formulario.inputNumero.value = valorInput
    .replace(/\s/g, "")
    //eliminar las letras
    .replace(/\D/g, "")
    //ponemos espacio cada 4 numeros
    .replace(/([0-9]{4})/g, "$1 ")
    //elimina ultimo espaciado
    .trim();
  numeroTarjeta.textContent = valorInput;
  if (valorInput == "") {
    numeroTarjeta.textContent = "#### #### #### ####";
    logoMarca.innerHTML = "";
  }
  if (valorInput[0] == 4) {
    logoMarca.innerHTML = "";
    const imagen = document.createElement("img");
    imagen.src = "img/visa.png";
    logoMarca.appendChild(imagen);
  } else if (valorInput[0] == 5) {
    logoMarca.innerHTML = "";
    const imagen = document.createElement("img");
    imagen.src = "img/mastercard.png";
    logoMarca.appendChild(imagen);
  }
  //volteamos la tarjeta para que el usuario vea el frente
  mostrarFrente();
});
//input nombre de tarjeta 
formulario.inputNombre.addEventListener('keyup', (e)=>{
let valorInput=e.target.value;
formulario.inputNombre.value=valorInput.replace(/[0-9]/g, '');
nombreTarjeta.textContent=valorInput;
firma.textContent=valorInput;

if(valorInput==''){
nombreTarjeta.textContent='Dulce Rojas';
}
mostrarFrente();
});
//select del mes
formulario.selectMes.addEventListener('change', (e)=>{
    mesExpiracion.textContent=e.target.value;
    mostrarFrente();
});
//select del year
formulario.selectYear.addEventListener('change', (e)=>{
    yearExpiracion.textContent=e.target.value.slice(2);
    mostrarFrente();
});
//codigo de ccv de seguridad
formulario.inputCCV.addEventListener('keyup', ()=>{
    if(!tarjeta.classList.contains('active')){
        tarjeta.classList.toggle('active');
    }
    formulario.inputCCV.value=formulario.inputCCV.value
    //eliminar espacios
    .replace(/\s/g, "")
    //eliminar las letras
    .replace(/\D/g, "");
    ccv.textContent=formulario.inputCCV.value;
});