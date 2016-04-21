<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php
		switch(WP_AGCF_LANG){
			case 'ja':
				print '検索対象:';
				break;
			case 'cn':
				print '搜索:';
				break;
			default:
				print 'Search for:';
				break;
		}
		//echo _x( 'Search for:', 'label', 'twentysixteen' );
		?></span>
		<input type="search" class="search-field" placeholder="<?php
		switch(WP_AGCF_LANG){
			case 'ja':
				print '検索 &hellip;';
				break;
			case 'cn':
				print '搜索 &hellip;';
				break;
			default:
				print 'Search &hellip;';
				break;
		}
		//echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' );
		?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php
		switch(WP_AGCF_LANG){
			case 'ja':
				print '検索対象:';
				break;
			case 'cn':
				print '搜索:';
				break;
			default:
				print 'Search for:';
				break;
		}
		//echo esc_attr_x( 'Search for:', 'label', 'twentysixteen' );
		?>" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
</form>
