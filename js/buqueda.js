document.addEventListener("keyup", e=>{

    if(e.target.matches("#buscador")){

        if (e.key ==="Escape")e.target.value = ""

        document.querySelectorAll(".card").forEach(product => {
            product.textContent.toLowerCase().includes(e.target.value.toLowerCase())
            ?product.classList.remove("filtro")
            :product.classList.add("filtro");
        })
    }


} )


const openModalcata = document.querySelector('.btn_modal_cata');
const modalcata = document.querySelector('.modal_cata');
const closeModalcata = document.querySelector('.modal__close_cata');

openModalcata.addEventListener('click', (e) =>{
    e.preventDefault();
    modalcata.classList.add('modal--show');

})


closeModalcata.addEventListener('click', (e) =>{
    e.preventDefault();
    modalcata.classList.remove('modal--show');
})


const openModalcata2 = document.querySelector('.btn_modal_cata1');
const modalcata2 = document.querySelector('.modal_cata1');
const closeModalcata2 = document.querySelector('.modal__close_cata1');

openModalcata2.addEventListener('click', (e) =>{
    e.preventDefault();
    modalcata2.classList.add('modal--show');

})


closeModalcata2.addEventListener('click', (e) =>{
    e.preventDefault();
    modalcata2.classList.remove('modal--show');
})
