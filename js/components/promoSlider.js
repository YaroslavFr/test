import Swiper from 'swiper/bundle'

const promoSlider = new Swiper('.swiper', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    //el: '.swiper-pagination',
    el: '.promo-slider__pagination',
    bulletClass: 'promo-slider__bullet',
    bulletElement: 'span',
    bulletActiveClass: 'promo-slider__bullet--active',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.promo-slider__button--next',
    prevEl: '.promo-slider__button--prev'
  },

  autoHeight: true,

  // Accessibility
  a11y: {
    enabled: true,
  }
});

export default promoSlider;
