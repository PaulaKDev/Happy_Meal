<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h2>Alimentación natural para tu mascota</h2>
        <p>Ingredientes reales. Más salud. Más energía.</p>
        <button class="btn-primary">Ver productos</button>
    </div>
</section>

<!-- CATEGORÍAS -->
<section class="categories container">
    <h2>Categorías</h2>

    <div class="category-grid">
        <div class="category-card">Barf</div>
        <div class="category-card">Filetes</div>
        <div class="category-card">Latas</div>
    </div>
</section>

<!-- PRODUCTOS -->
<section class="products container">
    <h2>Productos destacados</h2>

    <div class="product-grid">

        <div class="product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg">
            <h3>Pollo natural</h3>
            <p class="price">8.99€</p>
            <button class="btn-add">Añadir</button>
        </div>

        <div class="product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product2.jpg">
            <h3>Carne BARF</h3>
            <p class="price">10.50€</p>
            <button class="btn-add">Añadir</button>
        </div>

        <div class="product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product3.jpg">
            <h3>Lata ecológica</h3>
            <p class="price">4.20€</p>
            <button class="btn-add">Añadir</button>
        </div>

    </div>
</section>

<!-- BENEFICIOS -->
<section class="benefits">
    <div class="container">
        <div class="benefit">✅ Ingredientes naturales</div>
        <div class="benefit">🚚 Envío rápido</div>
        <div class="benefit">🐾 Aprobado por veterinarios</div>
    </div>
</section>

<?php get_footer(); ?>