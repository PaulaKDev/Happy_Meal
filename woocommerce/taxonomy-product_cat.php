<?php get_header(); ?>

<main>

<section class="products products-taxonomy">
  <div class="container">

    <h2 class="section-title">
      <?php single_term_title(); ?>
    </h2>

    <div class="product-grid">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); global $product; ?>

          <article class="product-card">

            <div class="product-image">
              <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
            </div>

            <span class="product-category">
              <?php echo wc_get_product_category_list($product->get_id()); ?>
            </span>

            <h3><?php the_title(); ?></h3>

            <p class="product-desc">
              <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
            </p>

            <p class="price">
              <?php echo $product->get_price_html(); ?>
            </p>

            <a href="?add-to-cart=<?php echo $product->get_id(); ?>" class="btn-card">
              Añadir
            </a>

          </article>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>

<?php get_footer(); ?>