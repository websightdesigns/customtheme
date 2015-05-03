<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package customtheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if( is_page('Posts') ) { ?>
	<ol class="breadcrumb">
		<li><a href="<?php echo get_bloginfo('wpurl').'/'; ?>">Home</a></li>
		<li class="active">Posts</li>
	</ol>
	<?php } ?>

	<div class="entry-content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'customtheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //edit_post_link( __( 'Edit', 'customtheme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
