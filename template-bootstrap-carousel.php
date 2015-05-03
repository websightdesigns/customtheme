<?php
/*
Template Name: Bootstrap Carousel
*/

/**
 * @package customtheme
 */

/**
 * Page template to display an image carousel using Bootstrap 3 and Advanced Custom Fields Pro.
 */

get_header(); ?>

<div id="primary" class="content-area col-md-<?php echo ( is_active_sidebar( 'sidebar-1' ) ? '9' : '12' ); ?> col-sm-12">
  <div class="well">
    <main id="main" class="site-main" role="main">

      <header class="entry-header page-header">
        <h1 class="entry-title">Bootstrap Carousel</h1>
      </header>

      <?php
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        if( is_plugin_active('advanced-custom-fields-pro/acf.php') ) {
          if( have_rows( 'slideshow', get_page_by_title( "Bootstrap Carousel" ) ) ):
            ?>
              <div id="slideshow" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <?php $i = 0; while ( have_rows( 'slideshow', get_page_by_title( "Bootstrap Carousel" ) ) ) : the_row(); ?>
                  <li data-target="#slideshow" data-slide-to="<?php echo $i; ?>"<?php if($i == 0) { ?> class="active"<?php } ?>></li>
                  <?php $i++; endwhile; ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <?php
                  // loop through the rows of data
                  $i = 0;
                  while ( have_rows( 'slideshow', get_page_by_title( "Bootstrap Carousel" ) ) ) : the_row();
                    // display a sub field value
                    if( get_sub_field( 'image', get_page_by_title( "Bootstrap Carousel" ) ) ) {
                      $image = get_sub_field( 'image', get_page_by_title( "Bootstrap Carousel" ) );
                      $ext = pathinfo($image, PATHINFO_EXTENSION);
                    }
                    $title = '';
                    if( get_sub_field( 'title', get_page_by_title( "Bootstrap Carousel" ) ) ) {
                      $title = get_sub_field( 'title', get_page_by_title( "Bootstrap Carousel" ) );
                    }
                    $description = '';
                    if( get_sub_field( 'description', get_page_by_title( "Bootstrap Carousel" ) ) ) {
                      $description = get_sub_field( 'description', get_page_by_title( "Bootstrap Carousel" ) );
                    }
                    ?>
                      <div class="item<?php if($i == 0) { ?> active<?php } ?>">
                        <img src="<?php echo (isset($image) ? $image : ''); ?>" class="img-responsive" alt="">
                        <div class="carousel-caption">
                          <h4><?php echo (isset($title) ? htmlentities($title, ENT_COMPAT) : ''); ?></h4>
                          <?php echo (isset($description) ? $description : ''); ?>
                        </div>
                      </div>
                    <?php
                    $i++;
                  endwhile;
                  ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            <?php
          else:
            ?>
            <p>You do not have any carousel slides. To add a slide, edit this page in the WordPress admin.</p>
            <?php
          endif;
        } else {
          ?>
          <p>You must have the Advanced Custom Fields Pro plugin installed and activated to use this Bootstrap Carousel page template.</p>
          <?php
        }
      ?>

    </main>
  </div>
</div>

<?php
get_sidebar();
get_footer();
