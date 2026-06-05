<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-content">

    <!-- IZQUIERDA -->
    <div class="hero-text">
      <h1>Comida biológica<br>para tu mejor amigo</h1>

      <p>
        Alimentación 100% natural y ecológica para perros.
        Sin aditivos, sin conservantes. Entregada en tu puerta.
      </p>

      <div class="hero-buttons">
        <a href="#productos" class="btn-primary">Ver productos</a>
        <a href="#info" class="btn-secondary">Conoce más</a>
      </div>
    </div>

    <!-- DERECHA -->
    <div class="hero-card">
      <span class="tag">RECOMENDADO</span>

      <div class="card-content">

        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-box.png" alt="Producto pollo barf">
        </div>

        <div class="card-info">
          <span class="category small">Barf</span>
          <h3>Pollo Barf</h3>
          <p>Elaborado con carne 100% de Pollo. Natural sin aditivos ni conservantes.</p>
          <p class="price">2,95 € /500gr</p>
          <button class="btn-add">Añadir al carrito</button>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- PRODUCTOS -->
<section id="productos" class="products">
  <div class="container">

    <h2 class="section-title">PRODUCTOS DESTACADOS</h2>

    <div class="product-grid">

      <article class="product-card">
        <div class="product-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-box.png" alt="Pollo Barf">
        </div>
        <span class="product-category">BARF</span>
        <h3>Pollo Barf</h3>
        <p>Carne 100% de Pollo. Natural sin aditivos ni conservantes.</p>
        <p class="price">2,95 €</p>
        <button class="btn-card add-to-cart">Añadir</button>
      </article>

      <article class="product-card">
        <div class="product-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-box.png" alt="Ganso con calabaza">
        </div>
        <span class="product-category">BLANDA</span>
        <h3>Ganso con calabaza</h3>
        <p>Ingredientes de calidad BIO. Grain free para digestión sensible.</p>
        <p class="price">2,75 €</p>
        <button class="btn-card add-to-cart">Añadir</button>
      </article>

      <article class="product-card">
        <div class="product-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-box.png" alt="Cordero atún pollo">
        </div>
        <span class="product-category">DURA</span>
        <h3>Cordero / Atún / Pollo</h3>
        <p>Formulado para todo tipo de raza canina adulta. Bajo en cereal.</p>
        <p class="price">44,90 €</p>
        <button class="btn-card add-to-cart">Añadir</button>
      </article>

    </div>

  </div>
</section>


<!-- CATEGORÍAS -->
<section class="categories">
  <div class="container">

    <h2 class="section-title">CATEGORÍAS</h2>

    <div class="category-grid">

      <div class="category-card">
        <div class="category-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-steak.png" alt="Dieta Barf">
        </div>
        <h3>Dieta Barf</h3>
        <p>Alimentación cruda y natural</p>
      </div>

      <div class="category-card">
        <div class="category-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-bowl.png" alt="Dieta Blanda">
        </div>
        <h3>Dieta Blanda</h3>
        <p>Comida húmeda y suave</p>
      </div>

      <div class="category-card">
        <div class="category-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/green-bone.png" alt="Dieta Dura">
        </div>
        <h3>Dieta Dura</h3>
        <p>Pienso seco y croquetas</p>
      </div>

    </div>

  </div>
</section>


<!-- INFO -->
<section id="info" class="info">
  <div class="container">

    <div class="info-box">

      <div class="info-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/dgreen-leaf.png" alt="Hoja verde">
      </div>

      <div class="info-text">
        <h3>Cuida la alimentación de tu compañero</h3>
        <p>
          Darle a tu perro comida BIO ayudará a mejorar su salud digestiva,
          pelaje y energía. Es esencial mantener una dieta equilibrada para
          satisfacer todas sus necesidades nutricionales.
        </p>
      </div>

    </div>

  </div>
</section>


<!-- BENEFICIOS -->
<section class="benefits">
  <div class="container">

    <div class="benefit">
      <span class="benefit-icon">✅</span>
      <p>Ingredientes naturales</p>
    </div>

    <div class="benefit">
      <span class="benefit-icon">🚚</span>
      <p>Envío rápido</p>
    </div>

    <div class="benefit">
      <span class="benefit-icon">🐾</span>
      <p>Aprobado por veterinarios</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
