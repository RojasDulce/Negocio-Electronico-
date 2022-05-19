

//**Funcion de modal calculator */
const openModalc = document.querySelector('.btn_modal_calcu');
const modalc = document.querySelector('.modal_calcu');
const closeModalc = document.querySelector('.modal__close_calcu');

openModalc.addEventListener('click', (e) =>{
    e.preventDefault();
    modalc.classList.add('modal--show');
    
 
})


closeModalc.addEventListener('click', (e) =>{
    e.preventDefault();
    modalc.classList.remove('modal--show');
})

//**Funcion de modal tips de salud */
const openModalt = document.querySelector('.btn_modal_tip');
const modalt = document.querySelector('.modal_tip');
const closeModalt = document.querySelector('.modal__close_tip');

openModalt.addEventListener('click', (e) =>{
    e.preventDefault();
    modalt.classList.add('modal--show');

})


closeModalt.addEventListener('click', (e) =>{
    e.preventDefault();
    modalt.classList.remove('modal--show');
})

/**Funcion de modal videos y reproduccion */
const openModalv = document.querySelector('.btn_modal_vid');
const modalv = document.querySelector('.modal_vid');
const closeModalv = document.querySelector('.modal__close_vid');

openModalv.addEventListener('click', (e) =>{
    e.preventDefault();
    modalv.classList.add('modal--show');

})


closeModalv.addEventListener('click', (e) =>{
    e.preventDefault();
    modalv.classList.remove('modal--show');
})

var video = document.querySelectorAll('video')

video.forEach(play => play.addEventListener('click', () =>{
    play.classList.toggle('active');

    if(play.paused){
        play.play();
    }else{
        play.pause();
        play.currentTime = 0;
    }

}))
/***Funcion de modal seguimiento de alimentacion */
const openModalsg = document.querySelector('.btn_modal_seg');
const modalsg = document.querySelector('.modal_seg');
const closeModalsg = document.querySelector('.modal__close_seg');

openModalsg.addEventListener('click', (e) =>{
    e.preventDefault();
    modalsg.classList.add('modal--show');

})


closeModalsg.addEventListener('click', (e) =>{
    e.preventDefault();
    modalsg.classList.remove('modal--show');
})
//**Funcion de slider y recorrido de imagenes */
const slider = document.querySelector('#slider');
let sliderSection = document.querySelectorAll('.slider_section');
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector('#btn_left');
const btnRight = document.querySelector('#btn_right');

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function Next(){
    let sliderSectionFirst = document.querySelectorAll('.slider_section')[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "marginLeft o.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}

function Prev(){
    let sliderSection = document.querySelectorAll('.slider_section');
    let sliderSectionLast = sliderSection[sliderSection.length -1];
    slider.style.marginLeft = "0";
    slider.style.transition = "marginLeft o.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 500);
}

btnRight.addEventListener('click', function(){
    Next();
});

btnLeft.addEventListener('click', function(){
    Prev();
});

