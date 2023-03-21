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
      delay: 5000,
  },

});

const hb = document.querySelector('#hamburgerBtn');
hb.addEventListener('click',()=>{
  document.querySelector('#primaryNav').classList.toggle('open');
})

let urlString = document.location.href;

let urlArray = urlString.split('/');

let pageHREF = urlArray[urlArray.length-1];

let menu = document.querySelectorAll('ul#primaryNav li a');

let i;
for(i=0; i<menu.length; i++) {
  let currentURL = (menu[i].getAttribute('href'));

  if (currentURL === pageHREF) {
    menu[i].parentNode.className='active';
    if(menu[i].parentNode.parentNode.parentNode.tagName==='LI'){
      menu[i].parentNode.parentNode.parentNode.className="parent active";
    }
    else{
      menu[i].parentNode.className='';
    }
  }else{
    menu[0].parentNode.className='active';
  }
}
