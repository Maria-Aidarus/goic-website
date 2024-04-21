<?php

/**
 * Title: Footer
 * Slug: fotografie-blocks/footer
 * Categories: fotografie-blocks, footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide"><!-- wp:social-links {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
				<ul class="wp-block-social-links is-style-logos-only" style="padding-top:0;padding-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

					<!-- wp:social-link {"url":"#","service":"youtube"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
			<p class="has-text-align-center has-link-color">
				<?php printf(
					_x('Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'fotografie-blocks'),
					esc_attr(date_i18n(__('Y', 'fotografie-blocks'))),
					'<a href="' . esc_url(home_url('/')) . '">' . esc_attr(get_bloginfo('name', 'display')) . '</a><span class="sep"> </span>  by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>'
				); ?> </p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
