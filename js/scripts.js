/*Menu offCanvas*/
const menuHamburguer = document.querySelector('#check')
const offCanvas = document.querySelector('.header__nav--offcanvas')

function toggleOffCanvas(){
    offCanvas.classList.toggle('is-active')
}

menuHamburguer.addEventListener('change', toggleOffCanvas)

/*Animation Paragraph Home*/
const text = document.querySelector('.js-write')

function typeWriter(element){
    const textArray = element.innerHTML.split('')
    element.innerHTML = ''
    textArray.forEach( (letter, indice) => {
        setTimeout(function(){
            element.innerHTML += letter
        }, 80 * indice)
    } )    
}

typeWriter(text)