<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>

<header class="header">

  <div class="container">

    <!-- TOP -->
    <div class="header-top">

      <!-- LOGO -->
      <div class="logo">
        🐾 <span>Happy Meal</span>
      </div>

      <!-- BUSCADOR -->
      <div class="search-box">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/search.png"
              alt="Icono de lupa">
        <input type="text" placeholder="Buscar productos...">
      </div>

      <!-- ICONOS -->
      <div class="header-icons">

        <div class="icon profile">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/user.png"
          alt="Icono de perfil">
          <span>Perfil</span>
        </div>

        <div class="icon cart">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/shopping-cart.png"
          alt="Icono de carrito">
          <span>Carro</span>
          <div class="badge">2</div>
        </div>

      </div>
    </div>

    <!-- MENÚ -->
    <nav class="nav">

        <a href="#" class="nav-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/home.png"
          alt="Icono de inicio">
          <span>Inicio</span>
        </a>
        <a href="#" class="nav-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/steak.png"
          alt="Icono de Barf">
          <span>Barf</span>
        </a>
        <a href="#" class="nav-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/bowl.png"
          alt="Icono de Blanda">
          <span>Blanda</span>
        </a>
        <a href="#" class="nav-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/bone.png" alt="Icono de Dura">
          <span>Dura</span>
        </a>
        <a href="#" class="nav-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/search.png" alt="Icono de búsqueda">
          <span>Buscar</span>
        </a>
      </div>
    </nav>

  </div>

</header>