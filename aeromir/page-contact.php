<?php get_header(); ?>

<section class="contacts">
   <div class="container">
      <div class="contacts__inner">
         <div class="contacts__item">
            <h2 class="title">ООО “АэроМир”</h2>
            <ul class="navigation__list contacts__list">
               <li class="navigation__item navigation__item-adress contacts__adress">
                  <img class="navigation__icon" src="/wp-content/themes/aeromir/img/location.svg" alt="">
                  <div class="text-header">ул. Щербакова, 34, оф. 111
                     г. Минск</div>
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
            <p class="text">
               Для заказа, а также по всем интересующим вопросом воспользуйтесь любым удобным
               для Вас способом связи.
            </p>

         </div>
         <div class="contacts__item contacts__maps">
            <iframe class="contacts__maps-pc"
               src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae7b1300a7bc195dfdd294a767a0d2265316e989ba89a594edfcbffb9e8304187&amp;source=constructor"
               width="680" height="430" frameborder="0"></iframe>
            <iframe class="contacts__maps-md"
               src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae7b1300a7bc195dfdd294a767a0d2265316e989ba89a594edfcbffb9e8304187&amp;source=constructor"
               width="401" height="240" frameborder="0"></iframe>
            <iframe class="contacts__maps-mini"
               src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae7b1300a7bc195dfdd294a767a0d2265316e989ba89a594edfcbffb9e8304187&amp;source=constructor"
               width="100%" height="249" frameborder="0"></iframe>
         </div>
      </div>
   </div>
</section>

<div class="contacts__form">
   <div class="container">
      <h2 class="section-title">Напишите нам</h2>
      <div class="contacts__form-inner">
         <form action="#" class="form">
            <input type="text" placeholder="Ваше имя" class="form__input form__input-number">
            <input type="email" placeholder="Ваш e-mail" class="form__input form__input-name">
            <textarea class="form__input form__input-textarea" placeholder="Ваше сообщение" name="comment"></textarea>
            <button class="btn btn-min-width">Отправить</button>
         </form>
      </div>
   </div>
</div>

<?php get_footer(); ?>