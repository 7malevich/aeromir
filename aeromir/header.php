<html>

<head>

   <meta charset="utf-8">
   <!-- <base href="/"> -->

   <title>
      aeromir
   </title>
   <meta name="description" content="Startup HTML template OptimizedHTML 5">

   <meta name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

   <link rel="icon" href="images/favicon.png">
   <meta property="og:image" content="/wp-content/themes/aeromir/img/preview.jpg">

	<?php wp_head(); ?>
</head>

<body>
   <div id="page">
      <header class="header">
         <div class="header-top__wrapper">
            <div class="container">
               <div class="header-top">
                  <a href="/" class="logo">
                     <img src="/wp-content/themes/aeromir/img/logo.png" alt="Логотип aeromir" class="logo-img">
                  </a>
                  <nav class="header-top__navigation navigation">
                     <ul class="navigation__list">
                        <li class="navigation__item navigation__item-adress">
                           <img class="navigation__icon" src="/wp-content/themes/aeromir/img/location.svg" alt="">
                           <div class="text-header">ул. Щербакова, 34, оф. 111
                              г. Минск</div>
                        </li>
                        <li class="navigation__item navigation__item-time">
                           <img class="navigation__icon" src="/wp-content/themes/aeromir/img/time.svg" alt="">
                           <div class="text-header text-header--width-time">Пн-Пт <br>
                              8:00 - 20:00</div>
                        </li>
                        <li class="navigation__item navigation__item-contacts">
                           <div class="navigation__item-contact">
                              <img class="navigation__icon" src="/wp-content/themes/aeromir/img/call.svg" alt="">
                              <div class="text-header text-header--width-tel">
                                 <a href="tel: +375447423755" class="text-header">+375 44 742 37 55</a>
                              </div>
                           </div>
                           <div class="navigation__item-contact">
                              <img class="navigation__icon" src="/wp-content/themes/aeromir/img/mail.svg" alt="">
                              <div class="text-header text-header--width-time">
                                 <a href="mailto: zakaz.kond@mail.ru" class="text-header">zakaz.kond@mail.ru</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="header-top__navigation-wrapper">
                        <ul class="header-top__soc soc">
                           <li class="soc__item">
                              <a href="#" class="soc__link">
                                 <img src="/wp-content/themes/aeromir/img/soc/telegram.svg" alt="" class="soc__img">
                              </a>
                           </li>
                           <li class="soc__item">
                              <a href="#" class="soc__link">
                                 <img src="/wp-content/themes/aeromir/img/soc/viber.svg" alt="" class="soc__img">
                              </a>
                           </li>
                           <li class="soc__item">
                              <a href="#" class="soc__link">
                                 <img src="/wp-content/themes/aeromir/img/soc/whatsapp.svg" alt="" class="soc__img">
                              </a>
                           </li>
                        </ul>
                        <form class="header-top__search search" action="" method="get">
                           <input class="search__input" placeholder="Поиск" name="s" placeholder="Искать здесь..."
                              type="search">
                           <button class="search__btn" type="submit">
                              <img src="/wp-content/themes/aeromir/img/search.svg" alt="">
                           </button>
                        </form>
                     </div>
                  </nav>
               </div>
            </div>
         </div>

         <div class="burger-menu">
            <a href="#mmenu" class="burger burger-menu__btn" id="sidebarBurger">
               <span></span>
            </a>
         </div>

         <!--<div class="mobile-menu">
            <div class="sidebar" id="sidebar">
               <button class="sidebar__close" id="sidebarClose">
               </button>
            </div>
         </div>-->

         <div class="header-menu">
            <div class="container">
               <nav class="navbar-nav header-menu__navbar-nav">
                  <ul class="navbar-nav__list">
                     <li class="navbar-nav__item">
                        <a href="catalog" class="navbar-nav__link">Каталог</a>
                        <ul class="navbar-nav__dropdown dropdown-menu">
                           <li class="dropdown-menu__item">
                              <a href="#" class="dropdown-menu__link">Кондиционирование</a>
                              <ul class="supdropdown-menu">
                                 <li class="supdropdown-menu__item">
                                    <a href="#" class="supdropdown-menu__link">Кондиционеры для квартиры и дома</a>
                                 </li>
                                 <li class="supdropdown-menu__item">
                                    <a href="#" class="supdropdown-menu__link">Кондиционеры для офиса и магазина</a>
                                 </li>
                                 <li class="supdropdown-menu__item">
                                    <a href="#" class="supdropdown-menu__link">Промышленные кондиционеры</a>
                                 </li>
                                 <li class="supdropdown-menu__item">
                                    <a href="#" class="supdropdown-menu__link">Аксессуары для кондиционеров</a>
                                 </li>
                                 <li class="supdropdown-menu__item">
                                    <a href="#" class="supdropdown-menu__link">Расходные материалы</a>
                                 </li>
                                 <li class="supdropdown-menu__item">
                                    <a href="#" class="supdropdown-menu__link">Сервис, химия, обслуживание</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown-menu__item">
                              <a href="#" class="dropdown-menu__link">Вентиляция</a>
                           </li>
                        </ul>

                     </li>
                     <li class="navbar-nav__item">
                        <a href="/ventilation-installation" class="navbar-nav__link">Монтаж вентиляции</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="/conditioners-installation" class="navbar-nav__link">Монтаж кондиционеров</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="#" class="navbar-nav__link">Получить консультацию</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="about" class="navbar-nav__link">О компании</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="contact" class="navbar-nav__link">Контакты</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>

         <!--<form class="header-top__search search header-top__search--mobile" action="" method="get">
            <input class="search__input" placeholder="Поиск" name="s" placeholder="Искать здесь..." type="search">
            <button class="search__btn" type="submit">
               <img src="/wp-content/themes/aeromir/img/search.svg" alt="">
            </button>
         </form>-->
      </header>