/*Menu offCanvas*/
const menuHamburguer = document.querySelector('#check')
const offCanvas = document.querySelector('.header__nav--offcanvas')

function toggleOffCanvas(){
    offCanvas.classList.toggle('is-active')
}

menuHamburguer.addEventListener('change', toggleOffCanvas)

/*Animation Span Home*/
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

/*Animation Scroll Soft*/
const menuItens = document.querySelectorAll('.header__nav--offcanvas a[href^="#"]')

menuItens.forEach( item => {
    item.addEventListener('click', scrollToIdOnClick)    
} )

function getScrollTopByHref(element){
    const id = element.getAttribute('href')
    return document.querySelector(id).offsetTop
}

function scrollToIdOnClick(event){
    event.preventDefault()
    const to = getScrollTopByHref(event.target) - 80
    
    scrollToPosition(to)
}

function scrollToPosition(to){
    smoothScrollTo(0, to);
}

function smoothScrollTo(endX, endY, duration) {
    const startX = window.scrollX || window.pageXOffset;
    const startY = window.scrollY || window.pageYOffset;
    const distanceX = endX - startX;
    const distanceY = endY - startY;
    const startTime = new Date().getTime();
  
    duration = typeof duration !== 'undefined' ? duration : 400;
  
    // Easing function
    const easeInOutQuart = (time, from, distance, duration) => {
      if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
      return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
    };
  
    const timer = setInterval(() => {
      const time = new Date().getTime() - startTime;
      const newX = easeInOutQuart(time, startX, distanceX, duration);
      const newY = easeInOutQuart(time, startY, distanceY, duration);
      if (time >= duration) {
        clearInterval(timer);
      }
      window.scroll(newX, newY);
    }, 1000 / 60); // 60 fps
  };

