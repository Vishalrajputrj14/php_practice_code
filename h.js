let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');  // Fixed typo
    navbar.classList.remove('active');
}

var swiper = new Swiper(".room-slider", {
    spaceBetween: 20,  // Fixed typo
    grabCursor: true,
    loop: true,
    centeredSlides: true,  // Fixed typo
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",  // Fixed class selector
        clickable: true,  // Fixed typo
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

