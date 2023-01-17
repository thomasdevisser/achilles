<?php

/**
 * Registering a custom Block Pattern category
 */
add_action( 'init', 'achilles_register_pattern_categories' );
function achilles_register_pattern_categories() {
  register_block_pattern_category(
    'achilles',
    array( 
      'label' => __( 'Achilles', 'achilles' )
    )
  );
}

/**
 * Unregister core Block Patterns
 */
add_action( 'after_setup_theme', 'block_course_theme_unregister_patterns', 15 );
function block_course_theme_unregister_patterns() {
    remove_theme_support('core-block-patterns');
}

/**
 * Unregister all remote Block Patterns
 * Doesn't work for all patterns yet because this hook gets called too early
 * @see https://github.com/WordPress/gutenberg/issues/26667
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );