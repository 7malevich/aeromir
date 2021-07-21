<?php get_header(); ?>

<section class="advantages">
   <div class="container">
      <div class="advantages__inner">
         <div class="advantages__item">
            <img src="/wp-content/themes/aeromir/img/advantages/price.svg" alt="" class="advantages__images">
            <span class="text">Услуга под ключ: подбор и монтаж</span>
         </div>
         <div class="advantages__item">
            <img src="/wp-content/themes/aeromir/img/advantages/price.svg" alt="" class="advantages__images">
            <span class="text">Лучшая цена</span>
         </div>
         <div class="advantages__item">
            <img src="/wp-content/themes/aeromir/img/advantages/delivery.svg" alt="" class="advantages__images">
            <span class="text">Бесплатная доставка</span>
         </div>
         <div class="advantages__item">
            <img src="/wp-content/themes/aeromir/img/advantages/support-agent.svg" alt="" class="advantages__images">
            <span class="text">Договор, чек, гарантия</span>
         </div>
         <div class="advantages__item">
            <img src="/wp-content/themes/aeromir/img/advantages/price.svg" alt="" class="advantages__images">
            <span class="text">Сервисное обслуживание</span>
         </div>
      </div>
   </div>
</section>

<section class="baner-collage">
   <div class="container">
      <div class="baner-collage__inner">
         <div class="baner-collage__item baner-collage__item-max"
            style="background: url('/wp-content/themes/aeromir/img/wa-bg-1.jpg');">
            <div class="baner-collage__item-wrapper">
               <div class="baner-collage__item-box">
                  <h2 class="section-title baner-collage__title">Кондиционеры в Каталоге</h2>
                  <h3 class="baner-collage__suptitle">от 875 руб.</h3>
               </div>
            </div>
            <button class="btn baner-collage__btn">
               <span>Выбрать</span>
            </button>
         </div>
         <div class="baner-collage__item-wrapper">
            <div class="baner-collage__item" style="background-image: url('/wp-content/themes/aeromir/img/wa-bg-2.jpg');">
               <h4 class="title">Консультация по подбору кондиционера</h4>
               <a class="baner-collage__more">
                  <span>Узнать больше</span>
               </a>
            </div>
            <div class="baner-collage__item" style="background-image: url('/wp-content/themes/aeromir/img/wa-bg-3.jpg');">
               <h4 class="title">Цены на монтаж</h4>
               <a class="baner-collage__more">
                  <span>Узнать больше</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="product-cart product-cart--staandard">
   <div class="container">
      <h2 class="section-title">Горячие предложения сезона 2021</h2>
      <h4 class="title">Класс “Стандарт”</h4>
      <div class="product-cart__container-arrows">
         <div class="swiper-container swiper-product-cart swiper-product-cart-staandard">
            <div class="swiper-wrapper">

                  <?php
                  $args = array(
                     'post_type' => 'product',
                     'category_name' => 'standard'
                      // 'posts_per_page' => 1,
                  );

                  $query = new WP_Query($args);

                  if ($query->have_posts()) {
                     while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="swiper-slide product-cart__slide">
                           <div class="product-cart__inner">
                              <div class="product-cart__images-box">
                                 <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="product-cart__images">
                              </div>
                              <h2 class="product-cart__title"><?php the_title(); ?></h2>
                              <span class="product-cart__price"><?= get_field('product-price'); ?> бел. руб.</span>
                              <a href="<?= get_post_permalink(); ?>" class="product-cart__link">
                                 <span>Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <?php }
                  }
                  wp_reset_postdata(); ?>

            </div>
            <div class="swiper-pagination swiper-pagination__product-standart"></div>
         </div>
         <div class="swiper-button-next swiper-arrow-next swiper-arrow-next-standart">
            <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
         </div>
         <div class="swiper-button-prev swiper-arrow-prev swiper-arrow-prev-standart">
            <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
         </div>
        </div>
      <a href="#" class="more">
         <span class="more-prev">Перейти в Каталог</span>
      </a>
   </div>
</section>
<section class="product-cart product-cart--premium">
   <div class="container">
      <h4 class="title">Класс “Премиум”</h4>
      <div class="product-cart__container-arrows">
         <div class="swiper-container swiper-product-cart swiper-product-cart-premium">
            <div class="swiper-wrapper">

                  <?php
                  $args = array(
                     'post_type' => 'product',
                     'category_name' => 'premium'
                      // 'posts_per_page' => 1,
                  );

                  $query = new WP_Query($args);

                  if ($query->have_posts()) {
                     while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="swiper-slide product-cart__slide">
                           <div class="product-cart__inner">
                              <div class="product-cart__images-box">
                                 <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="product-cart__images">
                              </div>
                              <h2 class="product-cart__title"><?php the_title(); ?></h2>
                              <span class="product-cart__price"><?= get_field('product-price'); ?> бел. руб.</span>
                              <a href="<?= get_post_permalink(); ?>" class="product-cart__link">
                                 <span>Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <?php }
                  }
                  wp_reset_postdata(); ?>

            </div>
            <div class="swiper-pagination swiper-pagination__product-premium"></div>
         </div>
         <div class="swiper-button-next swiper-arrow-next swiper-arrow-next-premium">
            <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
         </div>
         <div class="swiper-button-prev swiper-arrow-prev swiper-arrow-prev-premium">
            <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
         </div>
      </div>
      <a href="#" class="more">
         <span class="more-prev">Перейти в Каталог</span>
      </a>
   </div>
</section>
<section class="about">
   <div class="about__container">
      <div class="container">
         <div class="about__inner">
            <h2 class="title">Компания АэроМир - это аттестованная компания, которая с 2014 года успешно решает
               поставленные
               задачи в сфере микроклимата по всей Республике Беларусь. </h2>
            <p class="text">Мы реализовали более 35 крупных объектов коммерческих заказчиков и более 500 частных
               клиентов.
               НАШИ САМЫЕ ГЛАВНЫЕ ПРАВИЛА - ЭТО КЛИЕНТООРИЕНТИРОВАННОСТЬ, КАЧЕСТВО, ОПЕРАТИВНОСТЬ И КУЛЬТУРА
               СТРОИТЕЛЬНОГО
               ПРОИЗВОДСТВА ! Более подробно ознакомиться с информацией о нашей компании в можете в разделе
               <a class="about__link" href="#">О компании.</a>
            </p>
         </div>
      </div>
      <div class="about__img-box">
         <img src="/wp-content/themes/aeromir/img/about.jpg" alt="" class="about__img">
      </div>
   </div>
</section>
<section class="catalog">
   <div class="container">
      <div class="catalog__item">
         <div class="catalog__item-box">
            <h2 class="section-title">Желаете сделать микроклимат дома или в офисе комфортнее и чище?</h2>

         </div>
         <div class="catalog__item-box">
            <div class="catalog__inner-img">
               <svg class="catalog__svg" width="100" height="100" viewBox="0 0 100 100" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M84.9127 18.5715H15.2856C14.7334 18.5715 14.2856 19.0192 14.2856 19.5715V45.5261C14.2856 46.0784 14.7334 46.5261 15.2856 46.5261H84.9127C85.465 46.5261 85.9127 46.0784 85.9127 45.5261V19.5715C85.9127 19.0192 85.465 18.5715 84.9127 18.5715Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
                  <path
                     d="M79.8214 48.5715V47.3215H78.5714H21.4286H20.1786V48.5715V52.3572C20.1786 53.3237 20.9621 54.1072 21.9286 54.1072H78.0714C79.0379 54.1072 79.8214 53.3237 79.8214 52.3572V48.5715Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
                  <path d="M8.57141 79.3995C8.57141 79.3995 20.2807 76.6568 25.5551 59.9895" stroke="#61C9C5"
                     stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path d="M38.1084 61.7827C38.1084 61.7827 35.7876 78.3445 29.9857 85.3068" stroke="#61C9C5"
                     stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path d="M50.5562 61.7827V89.9483" stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10"
                     stroke-linecap="round" />
                  <path d="M92.8572 79.3995C92.8572 79.3995 81.1479 76.6568 75.8734 59.9895" stroke="#61C9C5"
                     stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path d="M63.3202 61.7827C63.3202 61.7827 65.641 78.3445 71.4428 85.3068" stroke="#61C9C5"
                     stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <rect x="47.1428" y="24.2856" width="15.7143" height="4.28572" rx="0.5" fill="#61C9C5" />
                  <rect x="67.1428" y="24.2856" width="4.28572" height="4.28572" rx="0.5" fill="#61C9C5" />
                  <rect x="75.7142" y="24.2856" width="4.28571" height="4.28572" rx="0.5" fill="#61C9C5" />
               </svg>
               <h4 class="title">Кондиционеры</h4>
               <a href="#" class="catalog__more"><span>Перейти в Каталог</span>
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M0.624394 11.5453C0.827762 11.7487 1.15749 11.7487 1.36085 11.5453L6.88533 6.02087L1.36085 0.496387C1.15749 0.29302 0.827762 0.29302 0.624394 0.496387C0.421027 0.699755 0.421027 1.02948 0.624394 1.23285L5.41242 6.02087L0.624394 10.8089C0.421027 11.0123 0.421027 11.342 0.624394 11.5453Z"
                        fill="#808080" />
                  </svg>
               </a>
            </div>
            <div class="catalog__inner-img">
               <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M58.4964 45.3671C64.2637 45.3671 68.9391 40.6917 68.9391 34.9244C68.9391 29.157 64.2637 24.4817 58.4964 24.4817C52.7291 24.4817 48.0537 29.157 48.0537 34.9244C48.0537 40.6917 52.7291 45.3671 58.4964 45.3671Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path
                     d="M76.91 37.5406C76.9508 37.2412 77.1163 36.9716 77.3708 36.8087L81.4422 34.2014C81.7766 33.9873 81.9526 33.5955 81.8907 33.2033L81.254 29.1708C81.1912 28.773 80.8958 28.4516 80.5046 28.3556L75.8627 27.216C75.5674 27.1435 75.3227 26.9399 75.188 26.6674C74.8821 26.0487 74.5424 25.4477 74.1704 24.8672C74.0058 24.6104 73.9579 24.2944 74.0492 24.0033L75.4603 19.5059C75.5794 19.1262 75.462 18.7119 75.1614 18.4512L72.1137 15.8073C71.808 15.5422 71.3728 15.4873 71.0109 15.6684L66.8576 17.7464C66.5818 17.8844 66.2585 17.8859 65.9767 17.7606C65.2851 17.453 64.5753 17.1889 63.8514 16.9698C63.5569 16.8807 63.3134 16.6689 63.1946 16.385L61.3774 12.0424C61.2218 11.6705 60.8581 11.4285 60.4549 11.4285H56.4367C56.034 11.4285 55.6706 11.67 55.5147 12.0413L53.6545 16.4712C53.537 16.7511 53.2982 16.9608 53.0087 17.0518C52.3314 17.2645 51.667 17.5167 51.0186 17.8071C50.7356 17.9338 50.4103 17.9325 50.1333 17.7932L45.9244 15.6765C45.5636 15.4951 45.129 15.5485 44.8229 15.8119L41.7627 18.4455C41.461 18.7051 41.342 19.119 41.4597 19.4992L42.9185 24.211C43.0072 24.4975 42.9612 24.8079 42.802 25.0622C42.4931 25.5554 42.2074 26.063 41.9457 26.5833C41.8116 26.85 41.5716 27.0497 41.2823 27.1233L36.4556 28.3507C36.0661 28.4498 35.7738 28.7723 35.7134 29.1696L35.0989 33.2125C35.0391 33.6058 35.2183 33.9972 35.555 34.2091L39.7377 36.8409C39.9945 37.0025 40.1625 37.2722 40.2047 37.5727C40.2913 38.19 40.4083 38.8027 40.5552 39.4083C40.6262 39.7009 40.5709 40.0111 40.3946 40.2553L37.3814 44.4287C37.1487 44.751 37.1289 45.1805 37.3312 45.5228L39.3952 49.0162C39.6004 49.3635 39.9941 49.5535 40.3936 49.4981L45.5373 48.7844C45.8345 48.7432 46.1334 48.8387 46.3585 49.037C46.6769 49.3175 47.0045 49.587 47.3409 49.8451C47.5814 50.0296 47.7334 50.3082 47.7479 50.611L47.9993 55.8803C48.0184 56.2788 48.2724 56.6279 48.6458 56.7685L52.4072 58.1851C52.7857 58.3277 53.2128 58.2282 53.4894 57.933L57.2088 53.9634C57.3979 53.7617 57.6621 53.6465 57.9384 53.6578C58.1503 53.6665 58.3578 53.6773 58.5748 53.6773C58.8912 53.6773 59.2043 53.6674 59.5153 53.6508C59.8143 53.6348 60.107 53.7467 60.3132 53.9638L63.9144 57.7555C64.1928 58.0487 64.6203 58.1453 64.9978 58.0005L68.7454 56.5622C69.119 56.4188 69.3711 56.0666 69.3864 55.6667L69.5854 50.4519C69.5969 50.1517 69.7436 49.8739 69.9787 49.6869C70.3536 49.3886 70.7171 49.0757 71.0681 48.7489C71.2944 48.5383 71.6016 48.4348 71.908 48.4765L76.8187 49.1455C77.2186 49.1999 77.612 49.0087 77.8162 48.6606L79.8687 45.1622C80.0698 44.8193 80.0488 44.3898 79.815 44.0682L76.7993 39.9192C76.6254 39.6799 76.5678 39.3761 76.6324 39.0874C76.7466 38.576 76.8393 38.0599 76.91 37.5406Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
                  <path
                     d="M75.043 76.7689C78.0486 76.7689 80.485 74.3325 80.485 71.327C80.485 68.3215 78.0486 65.885 75.043 65.885C72.0375 65.885 69.6011 68.3215 69.6011 71.327C69.6011 74.3325 72.0375 76.7689 75.043 76.7689Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path
                     d="M84.6052 72.9166C84.653 72.6182 84.8171 72.3484 85.0716 72.1854L86.737 71.1189C87.0714 70.9047 87.2474 70.513 87.1855 70.1208L86.9522 68.643C86.8894 68.2452 86.594 67.9238 86.2028 67.8278L84.3166 67.3647C84.0214 67.2923 83.778 67.0879 83.6368 66.8187C83.5414 66.6366 83.4403 66.4576 83.3335 66.282C83.1751 66.0213 83.1258 65.706 83.2172 65.4149L83.7893 63.5913C83.9084 63.2116 83.7911 62.7974 83.4904 62.5366L82.3811 61.5742C82.0754 61.3091 81.6402 61.2542 81.2783 61.4353L79.6095 62.2703C79.3337 62.4082 79.0109 62.4082 78.7261 62.2899C78.506 62.1984 78.2825 62.1153 78.0562 62.0407C77.7639 61.9443 77.52 61.734 77.4012 61.4501L76.6673 59.6965C76.5117 59.3246 76.148 59.0825 75.7449 59.0825H74.2879C73.8852 59.0825 73.5217 59.3241 73.3658 59.6954L72.6087 61.4984C72.4912 61.7783 72.2519 61.9866 71.9646 62.0845C71.7613 62.1538 71.5604 62.23 71.3621 62.313C71.0761 62.4327 70.7514 62.4329 70.4743 62.2935L68.7767 61.4398C68.4159 61.2583 67.9813 61.3118 67.6752 61.5752L66.5605 62.5345C66.2588 62.7942 66.1398 63.208 66.2575 63.5882L66.8577 65.527C66.9464 65.8136 66.8992 66.1233 66.7459 66.3811C66.6681 66.5122 66.5933 66.645 66.5217 66.7796C66.3814 67.0432 66.1428 67.2436 65.8534 67.3172L63.8646 67.8229C63.4751 67.9219 63.1828 68.2445 63.1224 68.6418L62.897 70.1246C62.8372 70.5179 63.0164 70.9093 63.3531 71.1212L65.0727 72.2032C65.3295 72.3648 65.4961 72.6348 65.5452 72.9342C65.5731 73.1041 65.6054 73.2733 65.6421 73.4415C65.7064 73.7357 65.6525 74.0456 65.4762 74.2897L64.2228 76.0257C63.9901 76.348 63.9704 76.7775 64.1726 77.1198L64.9266 78.3959C65.1318 78.7432 65.5255 78.9332 65.925 78.8778L68.0648 78.5809C68.3619 78.5397 68.6599 78.6364 68.8896 78.8294C68.9423 78.8737 68.9954 78.9174 69.049 78.9606C69.2851 79.1507 69.4381 79.4282 69.4525 79.731L69.5576 81.9332C69.5766 82.3317 69.8307 82.6807 70.2041 82.8214L71.5703 83.3359C71.9488 83.4784 72.3759 83.3789 72.6524 83.0838L74.23 81.4001C74.4191 81.1983 74.6831 81.0894 74.9595 81.0975C75.0005 81.0987 75.0418 81.0995 75.0838 81.0995C75.1722 81.0995 75.2601 81.098 75.3475 81.0953C75.6469 81.086 75.9395 81.196 76.1458 81.4131L77.6462 82.9929C77.9246 83.286 78.3521 83.3827 78.7296 83.2379L80.0891 82.7161C80.4626 82.5727 80.7148 82.2205 80.7301 81.8206L80.8131 79.6458C80.8245 79.3456 80.9722 79.0689 81.2028 78.8765C81.2763 78.8151 81.349 78.7526 81.4207 78.689C81.652 78.4839 81.9583 78.3792 82.2646 78.4209L84.275 78.6948C84.6749 78.7493 85.0683 78.558 85.2725 78.2099L86.022 76.9324C86.2232 76.5895 86.2021 76.16 85.9684 75.8384L84.7125 74.1106C84.5385 73.8713 84.4825 73.5678 84.5403 73.2776C84.5642 73.1577 84.5858 73.0373 84.6052 72.9166Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
                  <path
                     d="M13.0335 84.1888L10.9467 82.3099L26.7089 65.1039L27.3109 62.1372L31.3512 61.5468L48.2963 43.4267L48.1924 41.4439L57.482 34.424L58.8732 35.6766"
                     fill="white" />
                  <path
                     d="M13.0335 84.1888L10.9467 82.3099L26.7089 65.1039L27.3109 62.1372L31.3512 61.5468L48.2963 43.4267L48.1924 41.4439L57.482 34.424L58.8732 35.6766"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
                  <path
                     d="M13.0334 84.1888L15.8257 86.8829L31.7866 69.856L34.7735 69.0366L35.0328 64.9518L51.8786 46.7422L53.9608 46.7278L60.2693 37.0237L58.8732 35.6767"
                     fill="white" />
                  <path
                     d="M13.0334 84.1888L15.8257 86.8829L31.7866 69.856L34.7735 69.0366L35.0328 64.9518L51.8786 46.7422L53.9608 46.7278L60.2693 37.0237L58.8732 35.6767"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
               </svg>
               <h4 class="title">Монтаж кондиционеров</h4>
               <a href="#" class="catalog__more"><span>Перейти в Каталог</span>
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M0.624394 11.5453C0.827762 11.7487 1.15749 11.7487 1.36085 11.5453L6.88533 6.02087L1.36085 0.496387C1.15749 0.29302 0.827762 0.29302 0.624394 0.496387C0.421027 0.699755 0.421027 1.02948 0.624394 1.23285L5.41242 6.02087L0.624394 10.8089C0.421027 11.0123 0.421027 11.342 0.624394 11.5453Z"
                        fill="#808080" />
                  </svg>
               </a>
            </div>
         </div>

      </div>
      <div class="catalog__item">
         <div class="catalog__item-box">
            <h2 class="section-title">Установить систему кондиционирования или приточно-вытяжную вентиляцию воздуха ?
            </h2>
         </div>
         <div class="catalog__item-box">
            <div class="catalog__inner-img">
               <svg width="100" height="100" class="catalog__svg" viewBox="0 0 100 100" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M81.4286 43.5714L90.7424 49.6223" stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10"
                     stroke-linecap="round" />
                  <path d="M6.04871 49.6223L49.0183 22.9999L61.084 30.7064" stroke="#61C9C5" stroke-width="2.5"
                     stroke-miterlimit="10" stroke-linecap="round" />
                  <path d="M81.1676 43.5505V87.1429H15.8569V77.0232" stroke="#61C9C5" stroke-width="2.5"
                     stroke-miterlimit="10" stroke-linecap="round" />
                  <path
                     d="M2.85718 65.3467C2.85718 65.3467 7.99486 55.5385 24.8869 57.8738C35.6293 59.3528 40.8448 63.1671 50.7309 59.8199C56.4913 57.8738 58.4374 55.772 61.1619 51.9577C62.8745 49.5445 64.0421 43.2392 64.4314 41.2153C65.9882 32.9639 69.9583 29.1495 77.5091 25.6466C86.9281 21.2873 84.7485 10.0779 84.7485 10.0779"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path
                     d="M4.49182 76.4004C4.49182 76.4004 9.6295 66.5922 26.5215 68.9275C37.2639 70.4065 42.0902 74.3765 52.6769 71.4185C58.5152 69.7837 64.8205 65.5024 67.545 60.1312C68.4013 58.4186 69.1019 56.5504 69.4911 54.4486C71.048 46.1972 68.7127 39.347 81.7125 35.6883C92.2993 32.7303 90.7424 22.1436 90.7424 22.1436"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                  <path d="M78.7545 15.8383L84.7485 10L90.6646 15.8383" stroke="#61C9C5" stroke-width="2.5"
                     stroke-miterlimit="10" stroke-linecap="round" />
                  <path d="M84.7484 27.9039L90.8202 22.0657L96.7363 27.9039" stroke="#61C9C5" stroke-width="2.5"
                     stroke-miterlimit="10" stroke-linecap="round" />
               </svg>

               <h4 class="title">Вентиляция</h4>
               <a href="#" class="catalog__more"><span>Перейти в Каталог</span>
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M0.624394 11.5453C0.827762 11.7487 1.15749 11.7487 1.36085 11.5453L6.88533 6.02087L1.36085 0.496387C1.15749 0.29302 0.827762 0.29302 0.624394 0.496387C0.421027 0.699755 0.421027 1.02948 0.624394 1.23285L5.41242 6.02087L0.624394 10.8089C0.421027 11.0123 0.421027 11.342 0.624394 11.5453Z"
                        fill="#808080" />
                  </svg>
               </a>
            </div>
            <div class="catalog__inner-img">
               <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M77.4445 45.2475C77.5096 44.9524 77.6983 44.6984 77.9661 44.5583L83.7123 41.5497C84.0641 41.3655 84.2736 40.9907 84.2461 40.5945L83.8597 35.0305C83.8318 34.6286 83.5655 34.2828 83.1842 34.153L77.1064 32.0848C76.8186 31.9868 76.5922 31.7628 76.4833 31.479C76.1358 30.5731 75.7337 29.6896 75.2791 28.8336C75.136 28.5642 75.1161 28.245 75.2324 27.963L77.6478 22.1083C77.7996 21.7404 77.7188 21.3175 77.442 21.0315L73.6048 17.0662C73.3235 16.7755 72.8946 16.6829 72.5184 16.8317L66.7064 19.1305C66.4197 19.2439 66.0973 19.2175 65.8284 19.0666C64.9069 18.5493 63.9518 18.0956 62.9695 17.7086C62.6832 17.5957 62.4593 17.3632 62.3657 17.0701L60.4404 11.0402C60.3178 10.6562 59.9766 10.3833 59.575 10.3482L54.0971 9.86892C53.696 9.83382 53.3129 10.0428 53.1252 10.3991L50.1185 16.1071C49.9771 16.3757 49.721 16.5641 49.4243 16.6278C48.4504 16.8367 47.4906 17.1081 46.5506 17.4403C46.2582 17.5436 45.9342 17.5135 45.6704 17.3506L40.2795 14.0214C39.9359 13.8092 39.4983 13.8246 39.1703 14.0603L34.6876 17.2833C34.3645 17.5156 34.2099 17.9175 34.294 18.3066L35.6912 24.7676C35.7546 25.0608 35.682 25.3662 35.4999 25.6046C34.996 26.2644 34.5266 26.9504 34.0939 27.6598C33.9384 27.9147 33.6817 28.0925 33.3871 28.1406L26.8012 29.2153C26.4046 29.28 26.0852 29.5758 25.9904 29.9664L24.6729 35.3949C24.5791 35.7816 24.7234 36.1871 25.0404 36.4275L30.3181 40.4303C30.5599 40.6137 30.704 40.8969 30.7182 41.2C30.7594 42.0834 30.849 42.9637 30.9865 43.8368C31.0333 44.1343 30.9509 44.4385 30.754 44.6664L26.2522 49.8762C25.9923 50.177 25.9353 50.6031 26.1069 50.9617L28.5013 55.9646C28.6754 56.3284 29.0511 56.552 29.4539 56.5316L36.391 56.1803C36.6906 56.1652 36.9803 56.2862 37.1861 56.5044C37.6181 56.9627 38.0678 57.4037 38.5341 57.8262C38.7588 58.0298 38.8857 58.3208 38.8737 58.6237L38.5947 65.6684C38.5789 66.067 38.8016 66.4369 39.1612 66.6095L44.1188 68.9887C44.4834 69.1637 44.9176 69.1018 45.2188 68.8319L50.6185 63.9932C50.8245 63.8087 51.0978 63.7165 51.3722 63.7506C51.6826 63.7891 51.9819 63.8336 52.2985 63.8613C52.7452 63.9004 53.1881 63.9235 53.6286 63.9364C53.928 63.9452 54.2097 64.0825 54.3963 64.3168L58.7515 69.7874C59.0033 70.1037 59.4208 70.2373 59.8094 70.1259L65.0895 68.6123C65.4742 68.502 65.7561 68.1731 65.8061 67.7761L66.6788 60.8537C66.7164 60.5557 66.8866 60.2914 67.138 60.127C67.7245 59.7434 68.2939 59.3337 68.8445 58.8992C69.0872 58.7077 69.4026 58.6316 69.7041 58.6999L76.1881 60.168C76.5817 60.2571 76.9903 60.1009 77.2241 59.7719L80.4358 55.2524C80.6661 54.9283 80.6825 54.4986 80.4777 54.1579L76.9436 48.279C76.7912 48.0254 76.7601 47.7177 76.851 47.4362C77.0835 46.7166 77.2816 45.9862 77.4445 45.2475Z"
                     stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
                  <path
                     d="M41.7241 47.6454L12.8572 77.1306L18.4405 82.8571L47.1886 53.25C49.2081 54.4684 51.5839 55.0776 54.1974 55.0776C62.1566 55.0776 68.5715 48.4983 68.5715 40.335C68.5715 38.6293 68.3339 37.0453 67.8587 35.5833L57.9988 45.3304L49.4457 36.1925L58.474 26.3234C57.1673 25.8361 55.7417 25.7142 54.1974 25.7142C46.2382 25.7142 39.8234 32.2936 39.8234 40.4569C39.9422 43.1373 40.6549 45.5741 41.7241 47.6454Z"
                     fill="white" stroke="#61C9C5" stroke-width="2.5" stroke-miterlimit="10" />
               </svg>

               <h4 class="title">Монтаж вентиляции</h4>
               <a href="#" class="catalog__more"><span>Перейти в Каталог</span>
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M0.624394 11.5453C0.827762 11.7487 1.15749 11.7487 1.36085 11.5453L6.88533 6.02087L1.36085 0.496387C1.15749 0.29302 0.827762 0.29302 0.624394 0.496387C0.421027 0.699755 0.421027 1.02948 0.624394 1.23285L5.41242 6.02087L0.624394 10.8089C0.421027 11.0123 0.421027 11.342 0.624394 11.5453Z"
                        fill="#808080" />
                  </svg>
               </a>
            </div>
         </div>

      </div>
   </div>
</section>

<section class="our-objects">
   <div class="container">
      <h2 class="section-title">Наши объекты</h2>
      <div class="our-objects__tab tabs">
         <div class="our-objects-catigories tabs-catigories">
            <div data-tab-name="tab-1"
               class="our-objects-catigories__list is-active tabs-catigories__list--active tabs-catigories__list">
               Все
            </div>
            <div data-tab-name="tab-2" class="our-objects-catigories__list tabs-catigories__list">
               Квартиры
            </div>
            <div data-tab-name="tab-3" class="our-objects-catigories__list tabs-catigories__list">
               Офисы
            </div>
            <div data-tab-name="tab-4" class="our-objects-catigories__list tabs-catigories__list">
               Торговые обьекты
            </div>
            <div data-tab-name="tab-5" class="our-objects-catigories__list tabs-catigories__list">
               Промышленные обьекты
            </div>
         </div>
         <div class="tabs__body">
            <div class="tab our-objects__tab-all premises tab-1 is-active">
               <div class="premises__inner product-cart__container-arrows">
                  <div class="swiper-container swiper-premises swiper-premises-all">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination swiper-premises__pagination"></div>
                  </div>
                  <div class="swiper-button-next swiper-arrow-next" id="swiper-arrow-next-all">
                     <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
                  </div>
                  <div class="swiper-button-prev swiper-arrow-prev" id="swiper-arrow-prev-all">
                     <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
                  </div>
               </div>
            </div>
            <div class="tab our-objects__tab-apartments premises tab-2">
               <div class="premises__inner product-cart__container-arrows">
                  <div class="swiper-container swiper-premises swiper-premises-apartments">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination swiper-premises__pagination"></div>
                  </div>
                  <div class="swiper-button-next swiper-arrow-next" id="swiper-arrow-next-apartments">
                     <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
                  </div>
                  <div class="swiper-button-prev swiper-arrow-prev" id="swiper-arrow-prev-apartments">
                     <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
                  </div>
               </div>
            </div>
            <div class="tab our-objects__tab-offices premises tab-3">
               <div class="premises__inner product-cart__container-arrows">
                  <div class="swiper-container swiper-premises swiper-premises-offices">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination swiper-premises__pagination"></div>
                  </div>
                  <div class="swiper-button-next swiper-arrow-next">
                     <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
                  </div>
                  <div class="swiper-button-prev swiper-arrow-prev">
                     <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
                  </div>
               </div>
            </div>
            <div class="tab our-objects__tab-trade premises tab-4">
               <div class="premises__inner product-cart__container-arrows">
                  <div class="swiper-container swiper-premises swiper-premises-trade">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination swiper-premises__pagination"></div>
                  </div>
                  <div class="swiper-button-next swiper-arrow-next">
                     <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
                  </div>
                  <div class="swiper-button-prev swiper-arrow-prev">
                     <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
                  </div>
               </div>
            </div>
            <div class="tab our-objects__tab-industrial premises tab-5">
               <div class="premises__inner product-cart__container-arrows">
                  <div class="swiper-container swiper-premises swiper-premises-industrial">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-premises__slide">
                           <div class="swiper-premises__slide-inner">
                              <div class="swiper-premises__slide-img-box">
                                 <img src="/wp-content/themes/aeromir/img/our-objects/all/our-objects.jpg" alt=""
                                    class="swiper-premises__slide-img">
                              </div>
                              <h4 class="swiper-premises__slide-title">Офисное помещение (проект, монтаж, продажа)</h4>
                              <div class="swiper-premises__slide-area">Площадь монтируемой вентиляции: кв</div>
                              <a href="#" class="more swiper-premises__slide-more">
                                 <span class="more-prev">Подробнее</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination swiper-premises__pagination"></div>
                  </div>
                  <div class="swiper-button-next swiper-arrow-next">
                     <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
                  </div>
                  <div class="swiper-button-prev swiper-arrow-prev">
                     <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>


<?php 
$reviews = get_field('review', 14);
if( isset($reviews) & !empty($reviews) ) {
?>
<section class="reviews">
   <div class="container">
      <h2 class="section-title">Отзывы наших клиентов</h2>
      <div class="reviews__container-arrows product-cart__container-arrows">
         <div class="swiper-container swiper-reviews">
            <div class="swiper-wrapper">

               <?php foreach($reviews as $review) { ?>
                  <div class="swiper-slide swiper-reviews__slide">
                     <div class="swiper-reviews__inner">
                        <div class="swiper-reviews__box">
                           <div class="swiper-reviews__box-img">
                              <img src="<?= $review['review-avatar']['url'] ?>" alt="<?= $review['review-name'] ?>" class="swiper-reviews__img">
                           </div>
                           <div class="swiper-reviews__box-inner">
                              <h2 class="swiper-reviews__title"><?= $review['review-name'] ?></h2>
                              <h4 class="swiper-reviews__suptitle"><?= $review['review-position'] ?></h4>
                           </div>
                        </div>
                        <p class="swiper-reviews__text"><?= $review['review-text'] ?></p>
                     </div>
                  </div>
               <?php } ?>

            </div>
            <div class="swiper-pagination swiper-pagination__product-standart"></div>
         </div>
         <div class="swiper-button-next swiper-arrow-next swiper-arrow-next-reviews">
            <img class="swiper-arrow-next__img" src="/wp-content/themes/aeromir/img/arrow-next.svg" alt="">
         </div>
         <div class="swiper-button-prev swiper-arrow-prev swiper-arrow-prev-reviews">
            <img class="swiper-arrow-prev__img" src="/wp-content/themes/aeromir/img/arrow-prev.svg" alt="">
         </div>
      </div>
   </div>
</section>
<?php } ?>

<section class="submitting-form">
   <div class="container">
      <div class="submitting-form__inner">
         <div class="submitting-form__item">
            <h2 class="section-title">Как заказать? <br>
               Или получить консультацию?</h2>
            <p class="text">При отправке формы наши специалисты свяжутся с Вами в ближайшее время и помогут подобрать
               необходимый кондиционер по Вашим параметрам.</p>
         </div>
         <div class="submitting-form__item">
            <div class="submitting-form__form-inner">
               <form action="#" class="form">
                  <input type="text" placeholder="Имя" class="form__input form__input-number">
                  <input type="tel" placeholder="Номер телефона" class="form__input form__input-name">
                  <button class="btn btn-width">Получить консультацию</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<?php 
$advantages = get_field('advantage', 'options');
if( isset($advantages) & !empty($advantages) ) {
$advantagesCounter = 1;
?>
<section class="advantages-accordion">
   <div class="container">
      <h2 class="section-title">Наши преимущества</h2>
      <div class="accordion">
         <div class="accordion__inner">
            
            <?php foreach($advantages as $advantage){ ?>
               <div class="accordion__item">
                  <div class="accordion__header">
                     <div class="accordion__number">
                        <span class="accordion__number-text"><?= $advantagesCounter++ ?></span>
                     </div>
                     <div class="accordion__title">
                        <?= $advantage['advantage-title'] ?>
                     </div>
                  </div>
                  <div class="accordion__content">
                     <div class="accordion__content-inner">
                        <?= $advantage['advantage-text'] ?>
                     </div>
                  </div>
               </div>
            <?php } ?>

         </div>
      </div>
   </div>
</section>
<?php } ?>

<?php 
$faq = get_field('faq', 'options');
if( isset($faq) & !empty($faq) ) {
?>
<section class="faq-askquestion">
   <div class="container">
      <div class="faq-askquestion__inner">
         <div class="faq-askquestion__item">
            <h2 class="section-title">Часто задаваемые вопросы</h2>
            <div class="accordion faq">
               <div class="accordion__inner">
                  
                  <?php foreach($faq as $faqItem){ ?>
                     <div class="accordion__item faq__item">
                        <div class="accordion__header faq__header">
                           <h2 class="faq__question">?</h2>
                           <!--<img src="..//wp-content/themes/aeromir/img/questionn.svg" alt="" class="faq__img">-->
                           <div class="accordion__title faq__title">
                              <?= $faqItem['faq-question'] ?>
                           </div>
                        </div>
                        <div class="accordion__content">
                           <div class="accordion__content-inner">
                              <?= $faqItem['faq-answer'] ?>
                           </div>
                        </div>
                     </div>
                  <?php } ?>

               </div>
            </div>

         </div>
         <div class="faq-askquestion__item">
            <h2 class="section-title">Задать вопрос</h2>
            <div class="faq-askquestion__form-inner">
               <form action="#" class="form">
                  <input type="text" placeholder="Ваше имя" class="form__input form__input-number">
                  <input type="email" placeholder="Ваш e-mail" class="form__input form__input-name">
                  <textarea class="form__input form__input-textarea" placeholder="Ваше сообщение" name="comment"></textarea>
                  <button class="btn btn--width">Задать вопрос</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<?php } ?>

<?php get_footer(); ?>