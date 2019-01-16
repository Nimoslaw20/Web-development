<?php
/**
 * The template part for header
 *
 * @package VW One Page 
 * @subpackage vw_one_page
 * @since VW One Page 1.0
 */
?>

<div id="top-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3">
        <div class="logo">
          <?php if( has_custom_logo() ){ vw_one_page_the_custom_logo();
            }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description); ?></p>
          <?php endif; } ?>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
        <?php get_template_part( 'template-parts/header/navigation' ); ?>
      </div>
      <div class="col-lg-1 col-md-1">
        <div class="search-box">
          <span><i class="fas fa-search"></i></span>
        </div>
      </div>
    </div>
    <div class="serach_outer">
      <div class="closepop"><i class="far fa-window-close"></i></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>