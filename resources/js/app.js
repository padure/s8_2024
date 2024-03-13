import './bootstrap';
import * as bootstrap from 'bootstrap';
import Swiper from 'swiper';
import 'swiper/css';
import "../css/app.css";

var swiper = new Swiper(".auctionsSwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
