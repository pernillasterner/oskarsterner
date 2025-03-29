<?php
  get_header();
?>

<main>
    <section id="hero" class="container hero">
      <div class="inner_container">
        <div class="heading_wrapper">
          <h1 class="title">Tattoo Artist</h1>
          <h2 class="name">Oskar Sterner</h2>
        </div>

        <div class="social-links_wrapper">
          <a href="https://www.instagram.com/oskar.sterner/" target="_blank">Instagram</a>
          <a href="https://www.facebook.com/sternerjpg/?locale=sv_SE" target="_blank">Facebook</a>
        </div>
      </div>
    </section>

    <?php get_template_part( 'contact' ); ?>
</main>

<?php
  get_footer();
?>