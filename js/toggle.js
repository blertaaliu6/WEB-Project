const navMenu = document.getElementById('nav-menu'),
      toggleMenu = document.getElementById('header_toggle'),
      closeMenu = document.getElementById('header_close')


toggleMenu.addEventListener('click',() =>{
    navMenu.classList.toggle('show')

})

closeMenu.addEventListener('click',() =>{
    navMenu.classList.replace('show')

})