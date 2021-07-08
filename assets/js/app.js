"use strict";
function testWebP(callback) {
    var webP = new Image();
    webP.onload = webP.onerror = function () {
        callback(webP.height == 2);
    };
    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

    if (support == true) {
        document.querySelector('body').classList.add('webp');
    } else {
        document.querySelector('body').classList.add('no-webp');
    }
});;

new Swiper('.image-slider', {
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
})

const showMore = document.querySelector('.show-more'),
      individualDevelopmentBlock = document.querySelector('.individual-development-section div'),
      checkout = document.querySelector('.checkout'),
      menu = document.querySelector('.menu'),
      menuLinks = document.querySelector('.menu-links'),
      btnClose = document.querySelector('.close'),
      footer = document.querySelector('footer');



showMore.addEventListener('click', function() {
  individualDevelopmentBlock.style.height = 'inherit';
  showMore.style.display = 'none';
})

checkout.addEventListener('click', () => footer.scrollIntoView({
  behavior: 'smooth',
  block: 'start'
}));

menu.addEventListener('click', () => {
  menuLinks.classList.remove('hide');
  btnClose.classList.remove('hide');
})

menu.addEventListener('click', (e) => {
  const target = e.target;
  if(target.classList == 'close'){
    menuLinks.classList.add('hide');
    btnClose.classList.add('hide');
  }
})
