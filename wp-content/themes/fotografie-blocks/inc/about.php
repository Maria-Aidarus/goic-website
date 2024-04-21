<?php
/**
 * Theme About Page
 *
 * @package Fotografie_Blocks
 * @since 1.0
 */

function fotografie_blocks_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_fotografie-blocks-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'fotografie-blocks-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'fotografie_blocks_theme_page_admin_style' );

/**
 * Add theme page
 */
function fotografie_blocks_menu() {
	add_theme_page( esc_html__( 'Fotografie Blocks', 'fotografie-blocks' ), esc_html__( 'Fotografie Blocks', 'fotografie-blocks' ), 'edit_theme_options', 'fotografie-blocks-theme', 'fotografie_blocks_theme_page_display' );
}
add_action( 'admin_menu', 'fotografie_blocks_menu' );

/**
 * Display About page
 */
function fotografie_blocks_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Full Site Editing WordPress Theme', 'fotografie-blocks' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Fotografie Blocks!', 'fotografie-blocks' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Fotografie Blocks has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'fotografie-blocks' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/fotografie-blocks/#theme-instructions"><?php esc_html_e( 'Theme documentation', 'fotografie-blocks' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Fotografie Blocks Pro Theme', 'fotografie-blocks' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to Fotografie Blocks Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'fotografie-blocks' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/fotografie-blocks-pro/"><?php esc_html_e( 'Buy Fotografie Blocks Pro', 'fotografie-blocks' ); ?></a>
						</div>
					</div>

				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'fotografie-blocks' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'fotografie-blocks' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/fotografie-blocks"><?php esc_html_e( 'View Demo', 'fotografie-blocks' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#theme-instructions' ); ?>"><?php esc_html_e( 'Theme Instructions', 'fotografie-blocks' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'fotografie-blocks' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'fotografie-blocks' ); ?></a>
					</div>
				</div>

				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'fotografie-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Loved Fotografie Blocks Blocks? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'fotografie-blocks' ); ?></p>
						<a href="https://wordpress.org/support/theme/fotografie-blocks/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'fotografie-blocks' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
