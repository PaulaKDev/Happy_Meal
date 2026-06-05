<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">

  <div class="container">

    <!-- TOP -->
    <div class="header-top">

      <!-- LOGO -->
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/Logo3.png" alt="Logo Happy Meal">
      </div>

      <!-- BUSCADOR -->
      <div class="search-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/search.png" alt="Buscar">
        <input type="text" placeholder="Buscar productos...">
      </div>

      <!-- ICONOS -->
      <div class="header-icons">

        <div class="icon profile">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/user.png" alt="Perfil">
          <span>Perfil</span>
        </div>

        <div class="icon cart">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/shopping-cart.png" alt="Carrito">
          <span>Carro</span>
          <div class="badge" id="cart-count">0</div>
        </div>

      </div>
    </div>

    <!-- MENÚ -->
    <nav class="nav">

      <a href="#" class="nav-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/home.png" alt="Inicio">
        <span>Inicio</span>
      </a>

      <a href="#" class="nav-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/steak.png" alt="Barf">
        <span>Barf</span>
      </a>

      <a href="#" class="nav-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/bowl.png" alt="Blanda">
        <span>Blanda</span>
      </a>

      <a href="#" class="nav-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/bone.png" alt="Dura">
        <span>Dura</span>
      </a>

      <a href="#" class="nav-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/search.png" alt="Buscar">
        <span>Buscar</span>
      </a>

    </nav>

  </div>

</header>