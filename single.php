<?php get_header(); ?>

<div class="single">
  <?php if(have_posts()) : the_post(); ?>
  <div class="single-article">
    <?php if (has_category()) :?>
    <div class="single-category"><?php echo get_the_category_list(''); ?></div>
    <?php endif; ?>
    <h1 class="single-title"><?php the_title(); ?></h1>
    <p class="single-date"><?php echo get_the_date('Y.m.d'); ?></p>

    <?php if(has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
    <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/blog__first.jpg" alt="">
    <?php endif; ?>

    <div class="main-text">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>