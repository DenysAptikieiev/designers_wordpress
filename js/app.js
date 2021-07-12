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
  menu = document.querySelector('menu'),
  menuLinks = document.querySelector('.menu .menu-menu-container'),
  menuItem = document.querySelectorAll('.menu-menu-container .menu-item'),
  btnClose = document.querySelector('.close'),
  socialNetworks = document.querySelector('.social-networks'),
  whyWe = document.querySelector('.why-we'),
  usWorks = document.querySelector('.in-web-design-section'),
  form = document.querySelector('footer');

  if (menuLinks) {
    console.log(menuLinks);
    menuLinks.classList.add('hide');
  }

  function createImg() {
    let img = document.createElement('img');
    img.setAttribute('src', 'http://designers.dn/wp-content/themes/designers-test/assets/img/menu_item_ellipse.svg');
    img.setAttribute('alt', 'menu item icon');
    img.setAttribute('style', "display: none;");    
    return img;
  }

  menuItem.forEach(item => {
    item.append(createImg());
  })

showMore.addEventListener('click', function () {
  individualDevelopmentBlock.style.height = 'inherit';
  showMore.style.display = 'none';
})

document.addEventListener('click', (e) => {
  // e.preventDefault();

  if (e.target.classList == 'checkout') {
    form.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  }

  // if(e.target.classList == 'contacts-link') {
  //   socialNetworks.scrollIntoView({
  //     behavior: 'smooth',
  //     block: 'start',
  //   })
  // }

  // if(e.target.classList == 'about-us') {
  //   whyWe.scrollIntoView({
  //     behavior: 'smooth',
  //     block: 'start',
  //   })
  // }

  // if(e.target.classList == 'services') {
  //   usWorks.scrollIntoView({
  //     behavior: 'smooth',
  //     block: 'start',
  //   })
  // }
});

menu.addEventListener('click', (e) => {
  menuLinks.classList.remove('hide');
  btnClose.classList.remove('hide');
})

menu.addEventListener('click', (e) => {
  const target = e.target;
  if (target.classList == 'close') {
    menuLinks.classList.add('hide');
    btnClose.classList.add('hide');
  }
})
