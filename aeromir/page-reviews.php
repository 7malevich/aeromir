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
      <div class="about-information__inner">
         <aside class="about-information__sidebar sidebar-about">
            <ul class="sidebar-about__list">
               <li class="sidebar-about__item ">
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
               <li class="sidebar-about__item active">
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
         <div class="about-information__content comments__content">
            <div class="about-information__btn">
               <buttin class="btn">Оставить отзыв</buttin>
            </div>
            <div class="comments__wrapper">
               <div class="about-information__comments comments">
                  <?php 
                  $reviews = get_field('review', 14);
                  if( isset($reviews) & !empty($reviews) ) {
                     foreach($reviews as $review) { ?>
                        <div class="swiper-reviews__inner comments__inner">
                           <div class="comments__inner-box">
                              <div class="swiper-reviews__box">
                                 <div class="swiper-reviews__box-img">
                                    <img src="<?= $review['review-avatar']['url'] ?>" alt="<?= $review['review-name'] ?>" class="swiper-reviews__img">
                                 </div>
                                 <div class="swiper-reviews__box-inner comments__box-inner">
                                    <h2 class="swiper-reviews__title"><?= $review['review-name'] ?></h2>
                                    <p class="swiper-reviews__suptitle"><?= $review['review-position'] ?></p>
                                 </div>
                              </div>
                              <div class="comments__box">
                                 <?= $review['review-rating'] ?>
                                 <div class="comments__rater comments__rater-five">
                                    <svg width="23" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.976 8.869l.112.344h8.364l-6.47 4.668-.296.214.113.347 2.474 7.56-6.48-4.676-.293-.21-.293.21-6.48 4.676 2.474-7.56.113-.347-.296-.214-6.47-4.668h8.364l.112-.344L11.5 1.302l2.476 7.567z"
                                          stroke="gray" />
                                    </svg>
                                    <svg width="23" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.976 8.869l.112.344h8.364l-6.47 4.668-.296.214.113.347 2.474 7.56-6.48-4.676-.293-.21-.293.21-6.48 4.676 2.474-7.56.113-.347-.296-.214-6.47-4.668h8.364l.112-.344L11.5 1.302l2.476 7.567z"
                                          stroke="gray" />
                                    </svg>
                                    <svg width="23" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.976 8.869l.112.344h8.364l-6.47 4.668-.296.214.113.347 2.474 7.56-6.48-4.676-.293-.21-.293.21-6.48 4.676 2.474-7.56.113-.347-.296-.214-6.47-4.668h8.364l.112-.344L11.5 1.302l2.476 7.567z"
                                          stroke="gray" />
                                    </svg>
                                    <svg width="23" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.976 8.869l.112.344h8.364l-6.47 4.668-.296.214.113.347 2.474 7.56-6.48-4.676-.293-.21-.293.21-6.48 4.676 2.474-7.56.113-.347-.296-.214-6.47-4.668h8.364l.112-.344L11.5 1.302l2.476 7.567z"
                                          stroke="gray" />
                                    </svg>
                                    <svg width="23" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.976 8.869l.112.344h8.364l-6.47 4.668-.296.214.113.347 2.474 7.56-6.48-4.676-.293-.21-.293.21-6.48 4.676 2.474-7.56.113-.347-.296-.214-6.47-4.668h8.364l.112-.344L11.5 1.302l2.476 7.567z"
                                          stroke="gray" />
                                    </svg>
                                 </div>
                                 <time class="comments__data" datetime="<?= $review['review-date'] ?>"><?= $review['review-date'] ?></time>
                              </div>
                           </div>
                           <p class="swiper-reviews__text"><?= $review['review-text'] ?></p>
                        </div>
                     <?php } 
                  } ?>

               </div>

               <div class="product-cart__more">
                  <button class="btn btn-gray comments__btn">
                     <span> Показать еще</span>
                  </button>
                  <ul class="comments__panation pagination">
                     <li class="pagination__item pagination__item--first">
                        <a href="#" class="pagination__link">
                           Первая
                        </a>
                     </li>
                     <li class="pagination__item">
                        <a href="#" class="pagination__link">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M11.5 6.5L6 12L11.5 17.5" stroke="#808080" stroke-linecap="round" />
                              <path d="M17.5 6.5L12 12L17.5 17.5" stroke="#808080" stroke-linecap="round" />
                           </svg>
                        </a>
                     </li>
                     <li class="pagination__item active">
                        <a href="#" class="pagination__link">
                           1
                        </a>
                     </li>
                     <li class="pagination__item">
                        <a href="#" class="pagination__link">
                           2
                        </a>
                     </li>
                     <li class="pagination__item">
                        <a href="#" class="pagination__link">
                           3
                        </a>
                     </li>
                     <li class="pagination__item">
                        <a href="#" class="pagination__link">
                           4
                        </a>
                     </li>
                     <li class="pagination__item">
                        <a href="#" class="pagination__link">
                           5
                        </a>
                     </li>
                     <li class="pagination__item">
                        <a href="#" class="pagination__link">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 17.5L11.5 12L6 6.5" stroke="#808080" stroke-linecap="round" />
                              <path d="M12 17.5L17.5 12L12 6.5" stroke="#808080" stroke-linecap="round" />
                           </svg>
                        </a>
                     </li>
                     <li class="pagination__item pagination__item--last">
                        <a href="#" class="pagination__link">
                           Последняя
                        </a>
                     </li>
                  </ul>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>