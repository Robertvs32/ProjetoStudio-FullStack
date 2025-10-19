const arrayFotos = [
    './img/instalacoes/recepcao.png',
    './img/instalacoes/aparelhos1.png',
    './img/instalacoes/aparelhos2.png',
    './img/instalacoes/aparelhos3.png',
    './img/instalacoes/banheiro.png',
    './img/instalacoes/bebedouros.png',
    './img/instalacoes/massagem.png',
]

const btnRight = document.querySelector('#btnRightSlider');
const btnLeft = document.querySelector('#btnLeftSlider');
const sliderImg = document.querySelector('#sliderImg');


let contador = 0;


document.addEventListener('DOMContentLoaded', () => {
    sliderImg.src = arrayFotos[contador]
})

btnRight.addEventListener('click', () => {
    sliderImg.style.transition = "transform 0.45s ease";
    sliderImg.style.transform = "translateX(100%)";

    setTimeout(() => {
        if(contador < arrayFotos.length - 1){
            contador++;
            sliderImg.src = arrayFotos[contador];
        } else {
            contador = 0;
            sliderImg.src = arrayFotos[contador];
        }
        sliderImg.style.transition = "none";
        sliderImg.style.transform = "translateX(-100%)";
    }, 450);

    setTimeout(() => {
        sliderImg.style.transition = "transform 0.45s ease";
        sliderImg.style.transform = "translateX(0)";
    }, 500);

})

btnLeft.addEventListener('click', () => {
    sliderImg.style.transition = "transform 0.45s ease";
    sliderImg.style.transform = "translateX(-100%)";
    
    setTimeout(() => {
        if(contador > 0){
            contador--;
            sliderImg.src = arrayFotos[contador];
        }
        else {
            contador = (arrayFotos.length - 1);
            sliderImg.src = arrayFotos[contador];
        }
        sliderImg.style.transition = "none";
        sliderImg.style.transform = "translateX(100%)";
    }, 450);
        
    setTimeout(() => {
        sliderImg.style.transition = "transform 0.45s ease";
        sliderImg.style.transform = "translateX(0)";
    }, 500);
})