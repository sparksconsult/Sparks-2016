<?php
/**
 * Template part for Journal Menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<div data-sticky-container>
		<div class="header-container sticky" data-sticky data-options="marginTop:0;">
			<div class="row">
				<header id="masthead" class="site-header" role="banner">
					<div class="title-bar" data-responsive-toggle="site-navigation">
						<button class="menu-icon" type="button" data-toggle="offCanvas"></button>
						<div class="title-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Test</a>
						</div>
					</div>

					<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
						<div class="top-bar-left">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sparks_logo.png" alt="Sparks Logo">
							</a>
						</div>
						<div class="top-bar-right">
						<?php foundationpress_top_bar_j();?>

							<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
								<?php get_template_part( 'parts/mobile-top-bar' ); ?>
							<?php endif; ?>
						</div>
					</nav>
				</header>
			</div>
		</div>
	</div>