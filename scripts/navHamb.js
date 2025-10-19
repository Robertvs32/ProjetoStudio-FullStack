const obj_btnHamb = document.querySelector('#btnHamb');
const obj_navResponsiva = document.querySelector('.navResponsiva');

obj_btnHamb.addEventListener('click', () => {
    obj_navResponsiva.classList.toggle('navResponsivaActive');
})
