<?php
/**
 * Sitemap and Archive Page for Genesis Framework. Customized and modified by Crunchify.
 * Put this in to your child theme directory.
 *
 * @package Genesis\Templates
 * @author  Crunchify
 * @license GPL-2.0+
 * @link    https://crunchify.com/
 */
 
//* Template Name: Archive
 
//* Remove standard post content output
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
 
add_action( 'genesis_entry_content', 'genesis_page_archive_content' );
add_action( 'genesis_post_content', 'genesis_page_archive_content' );
/**
 * This function outputs sitemap-esque columns displaying all pages,
 * categories, authors, monthly archives, and recent posts.
 *
 * @since 1.6
 */
function genesis_page_archive_content() { ?>
 
	
	<!-- This code shows list of all Cagegories on Archive page -->
	<h4><?php _e( 'Categories:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
	</ul>
 
	<!-- This code shows list of top 150 Posts on Archive page -->
	<h4><?php _e( 'Bài viết:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_get_archives( 'type=postbypost&limit=150' ); ?>
	</ul>
 
<?php
}
 
genesis();