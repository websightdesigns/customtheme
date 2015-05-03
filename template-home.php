<?php
/*
Template Name: Home
*/

/**
 * @package customtheme
 */

get_header(); ?>

<div id="primary" class="content-area col-md-<?php echo ( is_active_sidebar( 'sidebar-1' ) ? '9' : '12' ); ?> col-sm-12">
  <main id="main" class="site-main" role="main">

    <div class="jumbotron">
      <header class="entry-header">
        <h1 class="entry-title site-title"><?php bloginfo( 'name' ); ?></h1>
      </header>
      <?php
        $description = get_bloginfo( 'description', 'display' );
        if( $description || is_customize_preview() ):
          ?><p class="site-description"><?php echo $description; ?></p><?php
        endif;
      ?>
      <p><a class="btn btn-primary btn-lg" href="<?php echo geturl('About'); ?>" role="button">Learn more</a></p>
    </div>

  </main>

</div>

<?php
get_sidebar();
get_footer();
