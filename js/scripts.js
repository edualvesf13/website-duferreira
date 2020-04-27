/*Menu offCanvas*/
const menuHamburguer = document.querySelector('#check')
const offCanvas = document.querySelector('.header__nav--offcanvas')

function toggleOffCanvas(){
    offCanvas.classList.toggle('is-active')
}

menuHamburguer.addEventListener('change', toggleOffCanvas)