<?php $query = new WP_Query($args); ?>

<?php if ( $query->have_posts() ) { ?>
  <div class="posts-wrapper">
    <?php while ( $query->have_posts() ) { ?>
      <?php $query->the_post(); ?>

      <div class="post">
        <div class="img-wrapper">
          <?php if (get_the_post_thumbnail( $page->ID, 'medium')) {
            echo get_the_post_thumbnail( $page->ID, 'medium');
          } else { ?>
            <img
              width="300" height="200"
              src="<?= get_template_directory_uri() . '/img/no-preview-image.png' ?>"
            >;
          <?php } ?>
        </div>

        <h2 class="heading"><?php the_title() ?></h2>

        <div class="excerpt">
          <?php the_excerpt() ?>
        </div>

        <a
          class="read-more btn-orange"
          href="<?php the_permalink() ?>"
          title="<?php the_title() ?>"
        >
          Далее..
        </a>
      </div>
    <?php } ?>
  </div>
<?php } ?>
