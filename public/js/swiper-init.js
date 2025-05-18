document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.swiper', {
    modules: [Navigation],
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});