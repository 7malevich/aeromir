// npm i jquery
// import $ from 'jquery';
// window.jQuery = $;

require('../vendor/choices.js/public/assets/scripts/choices.min.js');
require('../vendor/mmenu-js/dist/mmenu.js');

import Swiper, { Navigation, Pagination, Autoplay, Controller} from 'swiper';
Swiper.use([Navigation, Pagination, Autoplay, Controller]);

document.addEventListener(
   "DOMContentLoaded", () => {
       new Mmenu( "#mmenu", {
       });
   }
);

document.addEventListener('DOMContentLoaded', () => {
   document.querySelector('.search__btn').addEventListener('click', (e) => {
      e.preventDefault() 
      document.querySelector('.mmenu__search').classList.toggle('active')
   })

   const burger = document.querySelector('.burger-menu');
   const burgerMenuBody = document.querySelector('.burger-menu.active');
   const body = document.body;

   burger.addEventListener('click', (e) => {
      body.classList.toggle('mm-wrapper_opening')
      burger.classList.toggle('active')
      body.classList.add('mm-wrapper_blocking')
      if(!body.classList.contains('mm-wrapper_opening')){
         body.classList.remove('mm-wrapper_blocking')        
      }
   });
 

   // ======================== SLIDER ========================   
   const swiperFacilities = new Swiper('.our-facilities-swiper', {
      observer: true,
      observeParents: true, 
      slidesPerView: 1,
      spaceBetween: 5,
      slidesPerGroup: 1,
      loop: true,
      pagination: {
         el: '.swiper-pagination.our-facilities__pagination',
         clickable: true,
         type: 'bullets'
      }
   });

   const swiperProductStandard = new Swiper('.swiper-product-cart-staandard', {
      slidesPerView: 4,
      spaceBetween: 5, 
      slidesPerGroup: 1,
		navigation: {
			nextEl: '.swiper-arrow-next-standart',
			prevEl: '.swiper-arrow-prev-standart',
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
           spaceBetween: 5,
         },
         1150: {
           slidesPerView: 4,
           spaceBetween: 5, 
         }
       }      
	});

   const swiperProductPremium = new Swiper('.swiper-product-cart.swiper-product-cart-premium', {
      slidesPerView: 4,
      spaceBetween: 5,
      slidesPerGroup: 1,
		navigation: {
			nextEl: '.swiper-arrow-next-premium',
			prevEl: '.swiper-arrow-prev-premium',
		},
      pagination: {
         el: '.swiper-pagination.swiper-pagination__product-premium',
         clickable: true,
         type: 'bullets'
       },
      breakpoints: {
         320: {
           slidesPerView: 1,
           spaceBetween: 5,
         },
         550: {
           slidesPerView: 2,
         },
         790: {
           slidesPerView: 3,
           spaceBetween: 5,
         },
         1150: {
           slidesPerView: 4,
         }
       }      

	});

   const swiperPremisesApartments = new Swiper('.swiper-premises-apartments', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		navigation: {
			prevEl: '#swiper-arrow-next-apartments',
			nextEl: '#swiper-arrow-prev-apartments' 
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

	});

   const swiperPremisesOffices = new Swiper('.swiper-premises-offices', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		navigation: {
			prevEl: '.swiper-arrow-next-offices',
			nextEl: '.swiper-arrow-prev-offices' 
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

	});

   const swiperPremisesTrade = new Swiper('.swiper-premises-trade', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		navigation: {
			prevEl: '.swiper-arrow-next-trade',
			nextEl: '.swiper-arrow-prev-trade' 
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

	}); 

   const swiperPremisesIndustrial = new Swiper('.swiper-premises-industrial', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		navigation: {
			prevEl: '.swiper-arrow-next-industrial',
			nextEl: '.swiper-arrow-prev-industrial' 
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
	});

   const swiperPremisesAll = new Swiper('.swiper-premises-all', {
      observer: true,
      observeParents: true,
      slidesPerView: 3,
      spaceBetween: 25,
		navigation: {
			prevEl: '#swiper-arrow-next-all',
			nextEl: '#swiper-arrow-prev-all' 
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
	});


   const swiperReviews = new Swiper('.swiper-container.swiper-reviews', {
      slidesPerView: 3,
      spaceBetween: 25,
      slidesPerGroup: 1,
		loop: false,
		navigation: {
			prevEl: '.swiper-arrow-next-reviews',
			nextEl: '.swiper-arrow-prev-reviews' 
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
	});

   const galleryMini = new Swiper('.gallery-about-mini', {
      spaceBetween: 15,
      slidesPerView: 5,
      touchRatio: 0.2,
      breakpoints: {
         320: {
            spaceBetween: 5,
         },
         866: {
            spaceBetween: 15,
         },
       },
      loop: true,
      slideToClickedSlide: true,
    });

    const galleryTop = new Swiper('.gallery-about-top', {
      spaceBetween: 10,
      navigation: {
			nextEl: '.swiper-arrow-next-gallery',
			prevEl: '.swiper-arrow-prev-gallery'    
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
         type: 'bullets'
      },
      loop: true,
      loopedSlides: 5
      });

      galleryMini.controller.control = galleryTop;
      galleryTop.controller.control = galleryMini;
      
   

   // ======================== TAB ========================
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

   let tabObjects = function () {

      let tabNavObjects = document.querySelectorAll('.our-facilities-catigories__list'),
          tabContentObjects = document.querySelectorAll('.tab-facilities'),
          tabNameObjects; 
   
      tabNavObjects.forEach(item => {
          item.addEventListener('click', selectTabNav)
      });
   
      function selectTabNav() {
          tabNavObjects.forEach(item => {
              item.classList.remove('is-active');
          });
          this.classList.add('is-active');
          tabNameObjects = this.getAttribute('data-tab-name');
          selectTabContent(tabNameObjects);
      }
   
      function selectTabContent(tabNameObjects) {
          tabContentObjects.forEach(item => {
              item.classList.contains(tabNameObjects) ? item.classList.add('is-active') : item.classList.remove('is-active');
          });
      }   
   };
   tabObjects();


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

      // ======================== accordions ========================
      const accordionsPtoductDescription = document.querySelectorAll('.characteristics__item');
   
      for(let item of accordionsPtoductDescription){
         item.addEventListener('click', function() {
           if(this.classList.contains('active')){
            this.classList.remove('active'); 
           } else{
              for(let el of accordionsPtoductDescription){
                 el.classList.remove('active');
              }
              this.classList.add('active');
           }
         })
      }
});
