<?php get_header(); ?>

<div class="s-breadcrumb">
   <div class="container">
      <ul class="breadcrumb">
         <li class="breadcrumb__item">
            <a href="#" class="breadcrumb__link">
               <span class="breadcrumb__text">Главная</span>
            </a>
         </li>
         <li class="breadcrumb__item">
            <a href="#" class="breadcrumb__link">
               <span class="breadcrumb__text">О компании</span>
            </a>
         </li>
      </ul>
   </div>
</div>
<section class="about-information">
   <div class="container">
      <div class="about-information__inner about-information__inner-licenses">
         <aside class="about-information__sidebar sidebar-about">
            <ul class="sidebar-about__list">
               <li class="sidebar-about__item active">
                  <a href="about.html" class="sidebar-about__link">
                     Информация о компании
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="licenses.html" class="sidebar-about__link">
                     Лицензии и сертификаты
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="services.html" class="sidebar-about__link">
                     Услуги
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="comments.html" class="sidebar-about__link">
                     Отзывы
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Новости климатического рынка
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Блог
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Контакты и реквизиты
                  </a>
               </li>
            </ul>
         </aside>
         <div class="about-information__content">
            <h1 class="about-information__title"><?php the_title(); ?></h1>
            <p class="about-information__text">
               <?php the_content(); ?>
            </p>

            <div class="about-information__gallery">
               <div class="swiper-container gallery-about gallery-about-top">
                  <div class="swiper-wrapper gallery-about__wrapper">
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/1.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/2.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/3.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/4.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/5.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/6.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/7.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about__slide">
                        <div class="gallery-about__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/8.jpg" alt="" class="gallery-about__img">
                        </div>
                     </div>
                  </div>
                  <div class="swiper-button-next swiper-arrow-next-gallery">
                     <img class="swiper-arrow-next-gallery__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="s">
                  </div>
                  <div class="swiper-button-prev swiper-arrow-prev-gallery">
                     <img class="swiper-arrow-prev-gallery__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
                  </div>
               </div>

               <div class="swiper-container gallery-about gallery-about-mini ">
                  <div class="swiper-wrapper gallery-about-mini__wrapper">
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/1.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/2.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/3.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/4.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/5.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/6.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/7.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                     <div class="swiper-slide gallery-about-mini__slide">
                        <div class="gallery-about-mini__img-box">
                           <img src="/wp-content/themes/aeromir/img/about-gallery/8.jpg" alt="" class="gallery-about-mini__img">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination gallery-about-mini__swiper-pagination"></div>

            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>