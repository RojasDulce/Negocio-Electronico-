let boton = document.querySelector('.form_conteiner_calcu .form_submit');

console.log(boton);

boton.addEventListener('click', calcular);


function calcular(){
    let n1=document.querySelector('#n1').value;
    console.log(n1);
    let n2=document.querySelector('#n2').value;
    console.log(n2);
    let s=n1 * n1;
    let s2 = n2 / s;
    console.log(s2);

    if(s2<=18.5){
        alert(`está dentro de los valores correspondientes a “delgadez o bajo peso".`);
    }else if(s2>18.5 && s2<25.0){
        alert(`está dentro de los valores "normales" o de peso saludable.`)
    }else if(s2>=25.0 && s2<30.0){
        alert(`está dentro de los valores correspondientes a "sobrepeso".`)
    }else if(s2 > 30.0){
        alert(`está dentro de los valores de "obesidad".`)
    }else{alert(`No te encontre eres un especimen raro`)}

}
