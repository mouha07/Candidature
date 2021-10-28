<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.2
 */
ob_start();
cspt_get_featured_data();
$featured = ob_get_contents();
ob_end_clean();
$class = array();
if( empty($featured) ){
	$class[] = 'cspt-no-img';
}
if( !defined('EMPHIRES_ADDON_VERSION') ){
	$class[] = 'cspt-default-view';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
	<div class="cspt-blog-classic">
		<?php if( defined('EMPHIRES_ADDON_VERSION') ) : ?>
			<div class="cspt-meta-date-top"><?php echo get_the_date( 'd' ); ?><span><?php echo get_the_date( 'M' ); ?></span></div>
		<?php endif; ?>
		<?php cspt_get_featured_data(); ?>
		<div class="cspt-blog-classic-inner">
			<?php
			// Meta
			$meta_html = '';
			$meta_html .= cspt_meta_date( '', true );
			$meta_html .= cspt_meta_author();
			$meta_html .= cspt_meta_category();
			$meta_html .= cspt_meta_comment( true );
			if( get_post_format()!='status' && get_post_format()!='quote' && !is_single() ) : ?>
			<h3 class="cspt-post-title">
				<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
			</h3>
			<?php endif; ?>
			<?php if( !empty($meta_html) ) : ?>
			<div class="cspt-blog-meta cspt-blog-meta-top">
				<?php echo cspt_esc_kses($meta_html); ?>
			</div>
			<?php endif; ?>

			<div class="cspt-entry-content">
				<?php
				if( get_post_format()!='quote' ){
					if( is_single() ){
						/* translators: %s: Name of current post */
						the_content( sprintf(
							'',
							get_the_title()
						) );
					} else {
						$limit			= cspt_get_base_option('blog-classic-limit');
						$limit_switch	= cspt_get_base_option('blog-classic-limit-switch');
						if ( has_excerpt() ){
							the_excerpt();
							?>
							<div class="cspt-read-more-link"><a href="<?php echo esc_url( get_permalink() ) ?>"><?php esc_html_e('Read More', 'emphires'); ?></a></div>
							<?php
						} else if( $limit>0 && $limit_switch=='1' ){
							$content = get_the_content('',FALSE,'');
							$content = wp_strip_all_tags($content);
							$content = strip_shortcodes($content);
							echo cspt_esc_kses( wp_trim_words($content, $limit) );
							?>
							<div class="cspt-read-more-link"><a href="<?php echo esc_url( get_permalink() ) ?>"><?php esc_html_e('Read More', 'emphires'); ?></a></div>
							<?php
						} else {
							/* translators: %s: Name of current post */
							the_content( sprintf(
								'',
								get_the_title()
							) );
							if( !is_single() ){
								global $post;
								if( strpos( $post->post_content, '<!--more-->' ) ) {
									?>
									<div class="cspt-read-more-link">
										<a href="<?php echo esc_url( get_permalink() ) ?>"><?php esc_html_e('Read More','emphires') ?></a>
									</div>
									<?php
								}
							}
						}
						?>
						<?php
					}
				}
				wp_link_pages( array(
					'before'      => '<div class="page-links">' . esc_attr__( 'Pages:', 'emphires' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );
				?>
			</div><!-- .entry-content -->

			<?php get_template_part( 'theme-parts/post', 'bottom-meta' ); ?>

		</div>

	</div>

	<?php if( is_single() ) : ?>
		<?php get_template_part( 'theme-parts/post', 'author-info' ); ?>
		<?php cspt_related_post() ?>
	<?php endif; ?>
</article><!-- #post-## -->