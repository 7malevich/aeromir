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
            <div class="about-information__cart product-cart">
               <div class="product-cart__inner-tile product-cart__inner--shodow">

                  <?php
                  $args = array(
                     'post_type' => 'product'
                      // 'posts_per_page' => 1,

                  );

                  $query = new WP_Query($args);

                  if ($query->have_posts()) {
                     while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="product-cart__item-tile">
                           <div class="product-cart__images-box">
                              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="product-cart__images">
                           </div>
                           <h2 class="product-cart__title"><?php the_title(); ?></h2>
                           <span class="product-cart__price"><?= get_field('product-price'); ?> бел. руб.</span>
                           <a href="<?= get_post_permalink(); ?>" class="product-cart__link">
                              <span>Подробнее</span>
                           </a>
                        </div>
                        <?php }
                  }
                  wp_reset_postdata(); ?>

               </div>
               <div class="product-cart__more">
                  <button class="btn btn-gray comments__btn">
                     <span> Показать еще</span>
                  </button>
                  <ul class="product-cart__panation pagination">
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
   </div>
</section>

<?php
// get_sidebar();
get_footer();
