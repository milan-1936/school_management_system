import './bootstrap';

import Alpine from 'alpinejs';

import 'remixicon/fonts/remixicon.css';

window.Alpine = Alpine;

Alpine.start();

// SwiperJS

var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

