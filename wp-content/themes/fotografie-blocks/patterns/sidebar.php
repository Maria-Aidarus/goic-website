<?php

/**
 * Title: Sidebar
 * Slug: fotografie-blocks/sidebar
 * Categories: fotografie-blocks, page
 */
?>

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar"><!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"0.85px","fontSize":"17px","textTransform":"uppercase","lineHeight":1.6}}} -->
		<h2 class="wp-block-heading has-text-align-left" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-size:17px;font-style:normal;font-weight:300;letter-spacing:0.85px;line-height:1.6;text-transform:uppercase"><?php esc_html_e('About', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-services.jpg')); ?>" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e('Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus commodo, rhoncus et ante.', 'fotografie-blocks'); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"0.85px","fontSize":"17px","textTransform":"uppercase","lineHeight":1.6}}} -->
		<h2 class="wp-block-heading has-text-align-left" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-size:17px;font-style:normal;font-weight:300;letter-spacing:0.85px;line-height:1.6;text-transform:uppercase"><?php esc_html_e('latest post', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"featuredImageAlign":"left","addLinkToFeaturedImage":true} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"0.85px","fontSize":"17px","textTransform":"uppercase","lineHeight":1.6}}} -->
		<h2 class="wp-block-heading has-text-align-left" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-size:17px;font-style:normal;font-weight:300;letter-spacing:0.85px;line-height:1.6;text-transform:uppercase"><?php esc_html_e('categories', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:categories {"showPostCounts":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"0.85px","fontSize":"17px","textTransform":"uppercase","lineHeight":1.6}}} -->
		<h2 class="wp-block-heading has-text-align-left" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-size:17px;font-style:normal;font-weight:300;letter-spacing:0.85px;line-height:1.6;text-transform:uppercase"><?php esc_html_e('Follow Us', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"7px","left":"7px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

			<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
