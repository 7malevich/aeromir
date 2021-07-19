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
               <span class="breadcrumb__text">Каталог</span>
            </a>
         </li>
      </ul>
   </div>
</div>
<section class="about-information">
   <div class="container">
      <div class="about-information__inner">
         <div class="about-information__sidebar sidebar-about">
            <ul class="sidebar-about__list product-cart__list">
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Кондиционеры для квартиры и дома
                  </a>
               </li>
               <li class="sidebar-about__item active">
                  <a href="#" class="sidebar-about__link">
                     Кондиционеры для офиса
                     и магазина
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Промышленное кондиционирование
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Аксессуары для кондиционеров
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Расходный материал
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Сервис, химия, обслуживание
                  </a>
               </li>
            </ul>
         </div>
         <div class="about-information__content about-information__content-spasing">
            <div class="product-cart__item">
               <div class="product-cart__img">
                  <img src="<?php the_post_thumbnail_url(); ?>"
                     alt="<?php the_title(); ?>">
                  <?php 
                  if( get_field('product-recommend') == 'Да' ){
                     echo '<span class="product-cart__recommended">Рекомендуем</span>';
                  } 
                  if( get_field('product-in-stock') == 'Да' ){
                     echo '<span class="product-cart__stock">В наличии</span>';
                  }
                  ?>
               </div>
               <div class="product-cart__content">
                  <div class="product-cart__content-top">
                     <h2 class="product-cart__title title"><?php the_title(); ?></h2>
                     <div class="product-cart__price"><?= get_field('product-price'); ?> бел. руб.</div>
                  </div>
                  <div class="comments__rater product-cart__rater">
                     <?= get_field('product-rating'); ?>
                     <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M10.886 6.926l.112.345h6.454l-4.925 3.553-.296.214.114.347 1.883 5.756-4.935-3.561L9 13.369l-.293.211-4.935 3.56 1.884-5.755.113-.347-.296-.214L.548 7.271h6.454l.113-.345L9 1.164l1.886 5.762z"
                           stroke="gray" />
                     </svg>
                     <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M10.886 6.926l.112.345h6.454l-4.925 3.553-.296.214.114.347 1.883 5.756-4.935-3.561L9 13.369l-.293.211-4.935 3.56 1.884-5.755.113-.347-.296-.214L.548 7.271h6.454l.113-.345L9 1.164l1.886 5.762z"
                           stroke="gray" />
                     </svg>
                     <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M10.886 6.926l.112.345h6.454l-4.925 3.553-.296.214.114.347 1.883 5.756-4.935-3.561L9 13.369l-.293.211-4.935 3.56 1.884-5.755.113-.347-.296-.214L.548 7.271h6.454l.113-.345L9 1.164l1.886 5.762z"
                           stroke="gray" />
                     </svg>
                     <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M10.886 6.926l.112.345h6.454l-4.925 3.553-.296.214.114.347 1.883 5.756-4.935-3.561L9 13.369l-.293.211-4.935 3.56 1.884-5.755.113-.347-.296-.214L.548 7.271h6.454l.113-.345L9 1.164l1.886 5.762z"
                           stroke="gray" />
                     </svg>
                     <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M10.886 6.926l.112.345h6.454l-4.925 3.553-.296.214.114.347 1.883 5.756-4.935-3.561L9 13.369l-.293.211-4.935 3.56 1.884-5.755.113-.347-.296-.214L.548 7.271h6.454l.113-.345L9 1.164l1.886 5.762z"
                           stroke="gray" />
                     </svg>
                  </div>
                  <p class="product-cart__text"><?php the_content(); ?></p>

                  <?php
                  $characteristics = get_field('product-characteristic');
                  if( isset($characteristics) & !empty($characteristics) ){
                  ?>
                     <div class="product-cart__details characteristics">
                        <div class="characteristics__item accordion__item active">
                           <div class="characteristics__title">Характеристики</div>
                           <div class="characteristics__content accordion__content">
                              <?php foreach($characteristics as $characteristic){ ?>
                                 <div class="characteristics__content-item">
                                    <div class="characteristics__name"><?= $characteristic['product-characteristic-title'] ?></div>
                                    <div class="characteristics__description"><?= $characteristic['product-characteristic-value'] ?></div>
                                 </div>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  <?php } ?>
                  <a href="" class="btn product-cart__btn">Заказать</a>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>

<?php
// get_sidebar();
get_footer();
