<?php
/**
 * The footer sidebar widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Juno
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <div class="row">
        <?php dynamic_sidebar( 'sidebar-footer' ); ?>
    </div>
</aside><!-- #secondary -->
