<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php
					switch(WP_AGCF_LANG){
						case 'ja':
							print 'お探しのページが見つかりません。';
							break;
						case 'en':
						default:
							print 'Oops! That page can&rsquo;t be found.';
							break;							
					}
					?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php
					switch(WP_AGCF_LANG){
						case 'ja':
							print 'こちらには何もありません。検索をお試しください。';
							break;
						case 'en':
						default:
							print 'It looks like nothing was found at this location. Maybe try a search?';
							break;							
					}
					?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
