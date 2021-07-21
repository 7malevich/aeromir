
<!DOCTYPE html>
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
   <meta property="og:image" content="images/dist/preview.jpg">

   <link rel="stylesheet" href="css/main.min.css">

</head>

<body>
   <div id="page">
      <header class="header">
         <div class="header-top__wrapper">
            <div class="container">
               <div class="header-top">

                  <a href="#" class="logo">
                     <img src="images/dist/logo.png" alt="Логотип aeromir" class="logo-img">
                  </a>
                  <nav class="header-top__navigation navigation">
                     <ul class="navigation__list">
                        <li class="navigation__item navigation__item-adress">
                           <img class="navigation__icon" src="images/dist/location.svg" alt="">
                           <div class="text-header">ул. Щербакова, 34, оф. 111
                              г. Минск</div>
                        </li>
                        <li class="navigation__item navigation__item-time">
                           <img class="navigation__icon" src="images/dist/time.svg" alt="">
                           <div class="text-header text-header--width-time">Пн-Пт <br>
                              8:00 - 20:00</div>
                        </li>
                        <li class="navigation__item navigation__item-contacts">
                           <div class="navigation__item-contact">
                              <img class="navigation__icon" src="images/dist/call.svg" alt="">
                              <div class="text-header text-header--width-tel">
                                 <a href="tel: +375447423755" class="text-header">+375 44 742 37 55</a>
                              </div>
                           </div>
                           <div class="navigation__item-contact">
                              <img class="navigation__icon" src="images/dist/mail.svg" alt="">
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
                                 <img src="images/dist/soc/telegram.svg" alt="" class="soc__img">
                              </a>
                           </li>
                           <li class="soc__item">
                              <a href="#" class="soc__link">
                                 <img src="images/dist/soc/viber.svg" alt="" class="soc__img">
                              </a>
                           </li>
                           <li class="soc__item">
                              <a href="#" class="soc__link">
                                 <img src="images/dist/soc/whatsapp.svg" alt="" class="soc__img">
                              </a>
                           </li>
                        </ul>
                        <form class="header-top__search search" action="" method="get">
                           <input class="search__input" placeholder="Поиск" name="s" placeholder="Искать здесь..."
                              type="search">
                           <button class="search__btn" type="submit">
                              <img src="images/dist/search.svg" alt="">
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
                        <a href="#" class="navbar-nav__link">Каталог</a>
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
                        <a href="#" class="navbar-nav__link">Монтаж вентиляции</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="#" class="navbar-nav__link">Монтаж кондиционеров</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="#" class="navbar-nav__link">Получить консультацию</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="#" class="navbar-nav__link">О компании</a>
                     </li>
                     <li class="navbar-nav__item">
                        <a href="#" class="navbar-nav__link">Контакты</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>

         <form class="header-top__search search header-top__search--mobile" action="" method="get">
            <input class="search__input" placeholder="Поиск" name="s" placeholder="Искать здесь..." type="search">
            <button class="search__btn" type="submit">
               <img src="images/dist/search.svg" alt="">
            </button>
         </form>
      </header>
<div class="s-breadcrumb">
   <div class="container">
      <ul class="breadcrumb">
         <li class="breadcrumb__item">
            <a href="/" class="breadcrumb__link">
               <span class="breadcrumb__text">Главная</span>
            </a>
         </li>
         <li class="breadcrumb__item">
            <a href="#" class="breadcrumb__link">
               <span class="breadcrumb__text">Услуги</span>
            </a>
         </li>
      </ul>
   </div>
</div>
<section class="about-information">
   <div class="container">
      <div class="about-information__inner about-information__content about-information__inner--between">
         <div class="about-information__sidebar sidebar-about">
            <ul class="sidebar-about__list our-facilities__sidebar-list">
               <li class="sidebar-about__item active">
                  <a href="#" class="sidebar-about__link">
                     Консультация
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     О системах кондиционирования
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Кондиционирование квартиры
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Кондиционирование
                     коттеджа
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Кондиционирование офисов
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Кондиционирование кафе
                     и ресторанов
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Кондиционирование магазинов и торговых залов
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Промышленное кондиционирование
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Портфолио
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Цены на проектирование
                     и монтаж
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Лицензии
                  </a>
               </li>
               <li class="sidebar-about__item">
                  <a href="#" class="sidebar-about__link">
                     Рекомендательные письма
                     и отзывы
                  </a>
               </li>
            </ul>
         </div>
         <div class="about-information__content-spasing">
            <div class="about-information__cart product-cart">
               <div class="product-baner" style="background-image: url(/images/dist/banner/banner-6.jpg);">
                  <div class="product-baner__box">
                     <h2 class="product-baner__title">
                        Монтаж вентиляции
                     </h2>
                     <h4 class="product-baner__suptitle">
                        в домах и квартирах
                     </h4>
                  </div>
                  <div class="product-baner__box">
                     <a href="#" class="btn">Заполнить заявку</a>
                  </div>
               </div>
               <h2 class="product-baner__heading">
                  Заполните заявку и мы перезвоним Вам для уточнения деталей
                  для дальшейшего расчета!
               </h2>
               <div class="installation">
                  <h4 class="installation__heading"></h4>
                  <div class="installation__inner">
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">1</div>
                           <div class="installation__title">Первичная консультация и подготовка предложения</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Консультация о вариантах решения задач, подготовка предложения с подбором оборудования и
                              стоимость монтажа.
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">2</div>
                           <div class="installation__title">Предпроектные работы</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Заключение договора на разработку проектной документации, обследование объекта и
                              разработка концепции построения инженерных систем.
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">3</div>
                           <div class="installation__title">Разработка проектной документации</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Подготвка и согласование технического задания, разработка рабочей документации в
                              соответсвии с архитектурным решением..
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">4</div>
                           <div class="installation__title">составление окончательной сметы на основании проекта</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Подготвка и согласование технического задания, разработка рабочей документации в
                              соответсвии с архитектурным решением..
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">5</div>
                           <div class="installation__title">Поставка оборудования и материалов</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Заказ и поставка всего необходимого оборудования в соответствие со сроками реализации
                              проекта.
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">6</div>
                           <div class="installation__title">монтажные и пусконаладочные работы</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Выполнение общестроительных подготовительных работ, монтаж основного и вспомогательного
                              оборудования, пусконаладка, испытания систем.
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">7</div>
                           <div class="installation__title">сдача объекта в эксплуатацию</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Сдача готовых инженерных систем заказчику, демонстрация равботоспособности, инструктаж
                              пользователей или обслуживающего персонала.
                           </div>
                        </div>
                     </div>
                     <div class="installation__item">
                        <div class="installation__top">
                           <div class="installation__number">8</div>
                           <div class="installation__title">сдача объекта в эксплуатацию</div>
                        </div>
                        <div class="installation__content">
                           <div class="installation__text">
                              Сдача готовых инженерных систем заказчику, демонстрация равботоспособности, инструктаж
                              пользователей или обслуживающего персонала.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
<section class="submitting-form">
   <div class="container">
      <div class="submitting-form__inner">
         <div class="submitting-form__item">
            <h2 class="section-title">Свяжитесь с нами по телефону<br>
               +375 44 742 37 55</h2>
            <p class="text">Или заполните форму и наши специалисты свяжутся с Вами в ближайшее время для консультации и
               уточнения деталей.</p>
         </div>
         <div class="submitting-form__item">
            <div class="submitting-form__form-inner">
               <form action="#" class="form">
                  <input type="text" placeholder="Имя" class="form__input form__input-number">
                  <input type="tel" placeholder="Номер телефона" class="form__input form__input-name">
                  <button class="btn btn-width">Оставить заявку</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

      <footer class="footer">
         <div class="container">
            <div class="footer__inner">
               <div class="footer__item">
                  <ul class="footer__list">
                     <li class="footer__item">
                        <h4 class="footer__item-title">Кондиционирование</h4>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Оборудование
                        </a>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Расходные материалы
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="footer__item">
                  <ul class="footer__list">
                     <li class="footer__item">
                        <h4 class="footer__item-title">Вентиляция</h4>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Оборудование
                        </a>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Материалы
                        </a>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Расходные материалы
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="footer__item">
                  <ul class="footer__list">
                     <li class="footer__item">
                        <h4 class="footer__item-title">Инженерные работы</h4>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Проектирование систем
                        </a>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Монтажные работы
                        </a>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Пуско-наладочные работы
                        </a>
                     </li>
                     <li class="footer__item">
                        <a href="#" class="footer__link">
                           Сервисные работы
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="footer__item">
                  <ul class="footer__list">
                     <li class="footer__item">
                        <h4 class="footer__item-title">Контактная информация</h4>
                     </li>
                     <li class="navigation__item navigation__item-adress footer__item-adress">
                        <img class="navigation__icon" src="images/dist/location.svg" alt="">
                        <div class="text-header">ул. Щербакова, 34, оф. 111
                           г. Минск</div>
                     </li>
                     <li class="navigation__item navigation__item-contacts">
                        <div class="navigation__item-contact">
                           <img class="navigation__icon" src="images/dist/call.svg" alt="">
                           <div class="text-header text-header--width-tel">
                              <a href="tel: +375447423755" class="text-header">+375 44 742 37 55</a>
                           </div>
                        </div>
                        <div class="navigation__item-contact footer__item-contact">
                           <img class="navigation__icon" src="images/dist/mail.svg" alt="">
                           <div class="text-header text-header--width-time">
                              <a href="mailto: zakaz.kond@mail.ru" class="text-header">zakaz.kond@mail.ru</a>
                           </div>
                        </div>
                     </li>
                     <ul class="header-top__soc footer__soc">
                        <li class="soc__item">
                           <a href="#" class="soc__link">
                              <img src="images/dist/soc/telegram.svg" alt=""
                                 class="soc__img footer__soc-img footer__soc-img-tg">
                           </a>
                        </li>
                        <li class="soc__item">
                           <a href="#" class="soc__link">
                              <img src="images/dist/soc/viber.svg" alt="" class="soc__img footer__soc-img">
                           </a>
                        </li>
                        <li class="soc__item">
                           <a href="#" class="soc__link">
                              <img src="images/dist/soc/whatsapp.svg" alt="" class="soc__img footer__soc-img">
                           </a>
                        </li>
                     </ul>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      </div>
      <nav id="mmenu">
         <ul>
            <li><span>Каталог</span>
               <ul>
                  <li><span>Кондиционирование</span>
                     <ul>
                        <li><a href="/">Кондиционеры для квартиры и дома</a></li>
                        <li><a href="/">Кондиционеры для офиса и магазина</a></li>
                        <li><a href="/">Промышленные кондиционеры</a></li>
                        <li><a href="/">Аксессуары для кондиционеров</a></li>
                        <li><a href="/">Расходные материалы</a></li>
                        <li><a href="/">Сервис, химия, обслуживание</a></li>
                     </ul>
                  </li>
                  <li><a href="/">Вентиляция</a></li>
               </ul>
            </li>
            <!--<li><span>Services</span>
               <ul>
                  <li><a href="/services/design">Design</a></li>
                  <li><a href="/services/development">Development</a></li>
                  <li><a href="/services/marketing">Marketing</a></li>
               </ul>
            </li>-->
            <li><a href="/">Монтаж вентиляции</a></li>
            <li><a href="/">Монтаж кондиционеров</a></li>
            <li><a href="/">Получить консультацию</a></li>
            <li><a href="/">О компании</a></li>
            <li><a href="/">Контакты</a></li>
         </ul>
      </nav>
      <script src="js/app.min.js"></script>

      </body>

      </html>