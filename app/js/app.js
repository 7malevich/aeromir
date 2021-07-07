// npm i jquery
// import $ from 'jquery';
// window.jQuery = $;

 require('~/node_modules/choices.js/public/assets/scripts/choices.min.js');

import Swiper,{ Navigation, Pagination, Autoplay} from 'swiper';
Swiper.use([Navigation, Pagination, Autoplay]);


document.addEventListener('DOMContentLoaded', () => {

   // ======================== SLIDER ========================
   const swiperProductStandard = new Swiper('.swiper-product-cart-staandard', {
      slidesPerView: 4,
      spaceBetween: 25,
      slidesPerGroup: 1,
		navigation: {
			prevEl: '#js-prev1',
			nextEl: '#js-next1' 
		},
      pagination: {
         el: '.swiper-pagination.swiper-pagination__product-standart',
         clickable: true,
         type: 'bullets'
       },
      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         550: {
           slidesPerView: 2,
         },
         850: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
         1150: {
           slidesPerView: 4,
         }
       }      
	})

   const swiperProductPremium = new Swiper('.swiper-product-cart.swiper-product-cart-premium', {
      slidesPerView: 4,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false,
		},
		navigation: {
			prevEl: '#js-prev',
			nextEl: '#js-next'    
		},
      pagination: {
         el: '.swiper-pagination.swiper-pagination__product-premium',
         clickable: true,
         type: 'bullets'
       },
      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         550: {
           slidesPerView: 2,
         },
         790: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
         1150: {
           slidesPerView: 4,
         }
       }      

	}) 
   const swiperPremisesApartments = new Swiper('.swiper-premises-apartments', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false, 
		},
		navigation: {
			prevEl: '#js-apartments-prev',
			nextEl: '#js-apartments-next'   
		},
      pagination: {
         el: '.swiper-pagination.swiper-premises__pagination',
         clickable: true,
         type: 'bullets'
      },

      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         600: {
           slidesPerView: 2,
         },
         930: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
       }      

	})

   const swiperPremisesOffices = new Swiper('.swiper-premises-offices', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false, 
		},
		navigation: {
			prevEl: '#js-offices-prev',
			nextEl: '#js-offices-next'   
		},
      pagination: {
         el: '.swiper-pagination.swiper-premises__pagination',
         clickable: true,
         type: 'bullets'
      },

      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         600: {
           slidesPerView: 2,
         },
         930: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
       }      

	})
   const swiperPremisesTrade = new Swiper('.swiper-premises-trade', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false, 
		},
		navigation: {
			prevEl: '#js-trade-prev',
			nextEl: '#js-trade-next'   
		},
      pagination: {
         el: '.swiper-pagination.swiper-premises__pagination',
         clickable: true,
         type: 'bullets'
      },

      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         600: {
           slidesPerView: 2,
         },
         930: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
       }      

	})
   const swiperPremisesIndustrial = new Swiper('.swiper-premises-industrial', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false, 
		},
		navigation: {
			prevEl: '#js-object-prev',
			nextEl: '#js-object-next'   
		},
      pagination: {
         el: '.swiper-pagination.swiper-premises__pagination',
         clickable: true,
         type: 'bullets'
      },

      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         600: {
           slidesPerView: 2,
         },
         930: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
       }      

	})
   const swiperPremisesAll = new Swiper('.swiper-premises-all', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false, 
		},
		navigation: {
			prevEl: '#js-object-prev',
			nextEl: '#js-object-next'   
		},
      pagination: {
         el: '.swiper-pagination.swiper-premises__pagination',
         clickable: true,
         type: 'bullets'
      },

      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         600: {
           slidesPerView: 2,
         },
         930: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
       }      

	})


   const swiperReviews = new Swiper('.swiper-container.swiper-reviews', {
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		speed: 2700,
		mousewheel: {
			invert: false,
		},
		navigation: {
			prevEl: '#js-prev-reviews',
			nextEl: '#js-next-reviews'    
		},
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
         type: 'bullets'
       },
      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         667: {
           slidesPerView: 2,
         },
         1042: {
           slidesPerView: 3,
           spaceBetween: 30,
         },
       }  
	})

   // ======================== TAB ========================
   let tab = function () {
      let tabNav = document.querySelectorAll('.our-objects-catigories__list'),
          tabContent = document.querySelectorAll('.tab'),
          tabName;
   
      tabNav.forEach(item => {
          item.addEventListener('click', selectTabNav)
      });
   
      function selectTabNav() {
          tabNav.forEach(item => {
              item.classList.remove('is-active');
          });
          this.classList.add('is-active');
          tabName = this.getAttribute('data-tab-name');
          selectTabContent(tabName);
      }
   
      function selectTabContent(tabName) {
          tabContent.forEach(item => {
              item.classList.contains(tabName) ? item.classList.add('is-active') : item.classList.remove('is-active');
          });
      }
   
   };

   // ======================== accordions ========================
   const accordions = document.querySelectorAll('.accordion__item');
   
   for(let item of accordions){
      item.addEventListener('click', function() {
        if(this.classList.contains('active')){
         this.classList.remove('active');
        } else{
           for(let el of accordions){
              el.classList.remove('active');
           }
           this.classList.add('active');
        }
      })
   }

   // ======================== TAB SELECTORS ========================
   const elementArea = document.querySelector('.js-choice.js-faq-select-area');
   const choicesArea = new Choices(elementArea, {
      searchEnabled: false,
      placeholderValue : 'Please Choose…' , 
      removeItemButton : true , 
   }); 

   const elementQuestio = document.querySelector('.js-choice.js-faq-select-question');
   const choicesQuestio = new Choices(elementQuestio, {
      searchEnabled: false,
   }); 

// ======================== MENU ========================
   let burgerMenu = () => {
      const burger = document.querySelector('#sidebarBurger');
      const sidebar = document.querySelector('#sidebar');
      const body = document.body;

      burger.addEventListener('click', event =>{
         body.classList.toggle('show-sidebar');
         burger.classList.toggle('active');
      });
      
   };  
// ======================== MENU ACCORDION ========================   

   tab();
   burgerMenu();

  

});
