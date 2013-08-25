<?php
if ( !defined('ABSPATH')) exit;
/**
 * Template Name: With Cover
 *
 * The template for displaying pages with 'With Cover' template.
 * 
 * @package Dinky
 * @version 1.3
 * @since Dinky 1.1
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
<?php define('HAVE_COVER', true); ?>
<?php get_header(); ?>
		<div id="content" class="container" role="main">
			<div id="main"<?php if (!dinky_get_theme_option('sidebar_display')): ?> class="full"<?php endif; ?>>
				<?php get_sidebar('up_main'); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'image-attachment' ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; ?>
					<?php dinky_pages_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>
			</div>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>