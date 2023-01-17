<?php
/**
 * Title: Hero
 * Slug: achilles/hero
 * Categories: featured, achilles
 * Description: A hero block for starting your page in an interesting way.
 * Keywords: banner, hero, header
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/crete.jpg' ) ); ?>","dimRatio":50,"overlayColor":"white","align":"full"} -->
<div class="wp-block-cover">
  <span
    aria-hidden="true"
    class="wp-block-cover__background has-black-background-color has-background-dim"
  ></span>
  <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/crete.jpg' ) ); ?>" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
      <!-- wp:heading {"textAlign":"center"} -->
      <h2 class="has-text-align-center">Come join the gods</h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Or are you more a titan kinda guy?</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
      <!-- wp:button -->
      <div class="wp-block-button">
        <a class="wp-block-button__link wp-element-button">Join</a>
      </div>
      <!-- /wp:button -->

      <!-- wp:button -->
      <div class="wp-block-button">
        <a class="wp-block-button__link wp-element-button">I'm a titan</a>
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
</div>
<!-- /wp:cover -->