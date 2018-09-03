<?php

get_header();



// Роутинг по страницам

$route_name = get_route_name(get_page_link());

switch ($route_name) {
  // Номера
  case 'nomera':
    require_once('pages/nomera.php'); break;

  // Цены
  case 'price':
    require_once('pages/price.php'); break;

  // Online-бронирование
  case 'online-booking':
    require_once('pages/online-booking.php'); break;

  // Скидки для постоянных гостей
  case 'often-visitors':
    require_once('pages/often-visitors.php'); break;

  // Контакты
  case 'contacts':
    require_once('pages/contacts.php'); break;

  // Экскурсии
  case 'excursions':
    require_once('pages/actions-type-excursions.php'); break;

  // Туры
  case 'tours':
    require_once('pages/actions-type-tours.php'); break;

  // Активный отдых
  case 'active-rest':
    require_once('pages/actions-type-active-rest.php'); break;
}



get_footer();
