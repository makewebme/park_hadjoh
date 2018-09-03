<?php

get_header();

require_once('yandex_counter.php');

// Главная

if (is_front_page()) {
  require_once('pages/home.php');
}

get_footer();
