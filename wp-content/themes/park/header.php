<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="cont">
      <!-- Лого -->
      <a href="/" class="logo-wrapper cf">
        <img class="logo-img" src="<?= get_template_directory_uri() ?>/img/park_logo.png" alt="Парк Хаджох">
      </a>

      <!-- Деревянная табличка -->
      <object type="image/svg+xml" data="<?= get_template_directory_uri() ?>/img/wood_table.svg" class="wood-table"></object>

      <!-- Информация -->
      <div class="info">
        <a class="phone" href="tel:+79618195005">
          +7 (961) 819-50-05
        </a>

        <a href="mailto:park-hadzhoh@mail.ru" class="email">
          park-hadzhoh@mail.ru
        </a>

        <div class="socials cf">
          <a target="_blank" href="https://vk.com/park_hadzhoh" class="vk"></a>
          <a target="_blank" href="https://www.facebook.com/parkhadzhoh" class="fb"></a>
          <a target="_blank" href="https://ok.ru/parkhadzhoh" class="ok"></a>
          <a target="_blank" href="https://instagram.com/park_hadzhoh" class="insta"></a>
          <a target="_blank" href="https://www.youtube.com/channel/UCYdQO0JaUP0XTXn-pZfLQqw" class="yt"></a>
        </div>
      </div>
    </div>
  </header>

  <div class="main-menu-wrapper">
    <div class="cont">
      <div class="btn-mob-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>

      <?php wp_nav_menu( array(
        'theme_location' => 'main-menu',
        'menu_id'        => 'main_menu'
      ) ); ?>
    </div>
  </div>



  <!-- Карусель на главной -->

  <?php if (is_front_page()) { ?>
    <div class="owl-carousel-cont cont">
      <div class="owl-carousel">
        <!-- 1 -->
        <div class="owl-item-wrapper">
          <h2 class="owl-heading">
            Вас приветствует<br>
            Гостевой дом Парк Хаджох!
          </h2>

          <div class="owl-desc">
            <p>
              Приглашаем Вас провести незабываемые дни в краю гор, водопадов и сказочных лугов плато Лагонаки. Мы гарантируем, что отдых в горах Адыгеи не просто запомнится на всю жизнь – Вы станете страстным поклонником нашей гостеприимной республики. Так неизменно случается с каждым, кто ищет активный отдых интеллектуальный отдых и для души, и для тела...
            </p>
          </div>

          <a href="/price" class="owl-more">
            Узнать о ценах ➤
          </a>
        </div>

        <!-- 2 -->
        <div class="owl-item-wrapper">
          <h2 class="owl-heading">
            Экскурсии и<br>
            многодневные туры
          </h2>

          <div class="owl-desc">
            <p>
              Отдых в краю, где на каждом шагу встречаются исторические загадки и поражающие необычностью природные объекты – что может быть лучше? Не упустите свой шанс, и вы познакомиться со спрятанными в холодных глубинах таинственными пещерами – в одной из них миллионы лет назад жил древний человек, попытаться разгадать тайну карстовых воронок и дольменов...
            </p>
          </div>

          <a href="/tours" class="owl-more">
            Подробнее ➤
          </a>
        </div>

        <!-- 3 -->
        <div class="owl-item-wrapper">
          <h2 class="owl-heading">
            Активный отдых
          </h2>

          <div class="owl-desc">
            <p>
              Естественно мы поможем организовать досуг – с удовольствием подберем экскурсии в соответствии с вашими пожеланиями и возможностями: групповые, индивидуальные, пешие. С нашей помощью вы быстро подберете и вариант экстремального отдыха – рафтинг, джипинг. Вы предпочитаете конные прогулки – нет проблем, тоже всегда рады помочь. Во дворе гостиницы есть благоустроенная парковка, беседки, барбекю...
            </p>
          </div>

          <a href="/active-rest" class="owl-more">
            Подробнее ➤
          </a>
        </div>
      </div>
    </div>
  <?php } ?>

  <div class="site-content cont">
