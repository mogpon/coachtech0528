<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
    </a>
    <nav class="menu">
      <ul>
        <li><a href="">HTML</a></li>
        <li><a href="">CSS</a></li>
        <li><a href="">JavaScript</a></li>
        <li><a href="">PHP</a></li>
        <li><a href="">MySQL</a></li>
      </ul>
    </nav>
  </header>