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
        🔍
        <input type="text" placeholder="Buscar productos...">
      </div>

      <!-- ICONOS -->
      <div class="header-icons">

        <div class="icon">
          👤
          <span>Perfil</span>
        </div>

        <div class="icon cart">
          🛒
          <span>Carro</span>
          <div class="badge">2</div>
        </div>

      </div>

    </div>

    <!-- MENÚ -->
    <nav class="nav">

      <a class="active">🏠 Inicio</a>
      <a>🦴 Barf</a>
      <a>🥣 Blanda</a>
      <a>🦴 Dura</a>
      <a>🔍 Buscar</a>

    </nav>

  </div>

</header>