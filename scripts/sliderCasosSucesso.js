const arrayFotosCasos = [
    './img/casosDeSucesso/evolucao1.png',
    './img/casosDeSucesso/evolucao2.png',
    './img/casosDeSucesso/evolucao3.png',
    './img/casosDeSucesso/evolucao4.png'
]

const btnRightCasos = document.querySelector('#btnRightSliderCasos');
const btnLeftCasos = document.querySelector('#btnLeftSliderCasos');
const sliderImgCasos = document.querySelector('#sliderImgCasos');


let cont = 0;


document.addEventListener('DOMContentLoaded', () => {
    sliderImgCasos.src = arrayFotosCasos[cont]
})

btnRightCasos.addEventListener('click', () => {
    sliderImgCasos.style.transition = "transform 0.45s ease";
    sliderImgCasos.style.transform = "translateX(100%)";

    setTimeout(() => {
        if(cont < arrayFotosCasos.length - 1){
            cont++;
            sliderImgCasos.src = arrayFotosCasos[cont];
        } else {
            cont = 0;
            sliderImgCasos.src = arrayFotosCasos[cont];
        }
        sliderImgCasos.style.transition = "none";
        sliderImgCasos.style.transform = "translateX(-100%)";
    }, 450);

    setTimeout(() => {
        sliderImgCasos.style.transition = "transform 0.45s ease";
        sliderImgCasos.style.transform = "translateX(0)";
    }, 500);

})

btnLeftCasos.addEventListener('click', () => {
    sliderImgCasos.style.transition = "transform 0.45s ease";
    sliderImgCasos.style.transform = "translateX(-100%)";
    
    setTimeout(() => {
        if(cont > 0){
            cont--;
            sliderImgCasos.src = arrayFotosCasos[cont];
        }
        else {
            cont = (arrayFotosCasos.length - 1);
            sliderImgCasos.src = arrayFotosCasos[cont];
        }
        sliderImgCasos.style.transition = "none";
        sliderImgCasos.style.transform = "translateX(100%)";
    }, 450);
        
    setTimeout(() => {
        sliderImgCasos.style.transition = "transform 0.45s ease";
        sliderImgCasos.style.transform = "translateX(0)";
    }, 500);
})