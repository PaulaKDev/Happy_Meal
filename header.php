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
            <h1 class="logo"><?php bloginfo('name'); ?></h1>
            <nav class="nav">
               <a href="#">Inicio</a>
               <a href="#">Productos</a>
               <a href="#">Contacto</a>
               </a>
            </nav>

            <div class="cart-icon">🛒</div>
        </div>
    </header>
