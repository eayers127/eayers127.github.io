const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    speed: 2000,
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    autoplay:{
        delay:5000,
    },

});

const hb = document.querySelector('#hamburgerBtn');
hb.addEventListener('click',()=>{
  document.querySelector('#primaryNav').classList.toggle('open');
})