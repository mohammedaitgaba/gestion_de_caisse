const navSlide = () => {
    let menu = document.querySelector('.menu');
    let nav = document.querySelector('.nav_content');
    menu.addEventListener('click',()=>{
    nav.classList.toggle('nav-active');
    menu.classList.toggle('toggle');
});

}
navSlide();