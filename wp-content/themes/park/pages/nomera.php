<div class="page-nomera">
  <h1 class="main-heading">Номера</h1>

  <div class="nomer-wrapper">

    <!-- Стандарт -->

    <div
      class="nomer"
      data-path="<?= get_template_directory_uri() . '/img/_page-nomera/level-1/' ?>"
      data-img-count="<?= count_files_in_dir('/img/_page-nomera/level-1/') ?>"
    >
      <img class="img" src="<?= get_template_directory_uri() . '/img/_page-nomera/level-1/1.jpg' ?> ">

      <h2 class="heading">
        Стандарт
      </h2>

      <p class="desc">
        Стандартный двухместный номер с удобствами в номере. В номере есть все необходимые предметы мебели – одна двухспальная или две односпальные кровати, шкаф, стол, стулья, тумбочки, телевизор.
      </p>

      <div class="more-photos btn-run-modal btn-orange">Больше фото..</div>
    </div>



    <!-- Улучшенный -->

    <div
      class="nomer"
      data-path="<?= get_template_directory_uri() . '/img/_page-nomera/level-2/' ?>"
      data-img-count="<?= count_files_in_dir('/img/_page-nomera/level-2/') ?>"
    >
      <img class="img" src="<?= get_template_directory_uri() . '/img/_page-nomera/level-2/1.jpg' ?> ">

      <h2 class="heading">
        Улучшенный
      </h2>

      <p class="desc">
        Улучшенный двухместный номер с удобствами в номере. В номере есть все необходимое – двуспальная кровать, шкаф, стол, стулья, телевизор. Также номер оборудован холодильником и кондиционером.
      </p>

      <div class="more-photos btn-run-modal btn-orange">Больше фото..</div>
    </div>



    <!-- Семейный -->

    <div
      class="nomer"
      data-path="<?= get_template_directory_uri() . '/img/_page-nomera/level-3/' ?>"
      data-img-count="<?= count_files_in_dir('/img/_page-nomera/level-3/') ?>"
    >
      <img class="img" src="<?= get_template_directory_uri() . '/img/_page-nomera/level-3/1.jpg' ?> ">

      <h2 class="heading">
        Семейный
      </h2>

      <p class="desc">
        Семейный номер рассчитанный на 4 человек - в одной комнате двуспальная кровать, во второй - раскладной диван и кресло. В номере имеется душ, туалет, телевизор, холодильник, кондиционер и вся необходимая мебель.
      </p>

      <div class="more-photos btn-run-modal btn-orange">Больше фото..</div>
    </div>



    <!-- Коттедж -->

    <div
      class="nomer"
      data-path="<?= get_template_directory_uri() . '/img/_page-nomera/level-4/' ?>"
      data-img-count="<?= count_files_in_dir('/img/_page-nomera/level-4/') ?>"
    >
      <img class="img" src="<?= get_template_directory_uri() . '/img/_page-nomera/level-4/1.jpg' ?> ">

      <h2 class="heading">
        Коттедж
      </h2>

      <p class="desc">
        Коттедж на 4-х человек со всеми удобствами (душ, туалет). Две спальные комнаты, общая гостиная оборудована кухней со всеми необходимыми вещами (плита, микроволновка, посуда, телевизор, холодильник).
      </p>

      <div class="more-photos btn-run-modal btn-orange">Больше фото..</div>
    </div>
  </div>
</div>

<?php require_once(__DIR__ . '/../modal-viewer.php'); ?>
