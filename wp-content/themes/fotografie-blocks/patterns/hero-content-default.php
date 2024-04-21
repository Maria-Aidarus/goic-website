<?php

/**
 * Title: Hero Content Default
 * Slug: fotografie-blocks/hero-content-default
 * Categories: fotografie-blocks, page
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/assets/images/hero-content.jpg')); ?>","id":21610,"dimRatio":0,"isDark":false,"align":"full","className":"wp-block-section wp-block-hero-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|110","bottom":"var:preset|spacing|110"}}}} -->
<div class="wp-block-cover alignfull is-light wp-block-section wp-block-hero-content" style="padding-top:var(--wp--preset--spacing--110);padding-bottom:var(--wp--preset--spacing--110)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-21610" alt="" src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/hero-content.jpg')); ?>" data-object-fit="cover" />
   <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{}},"layout":{"inherit":true,"type":"constrained"}} -->
      <div class="wp-block-group"><!-- wp:media-text {"mediaId":22413,"mediaType":"image","mediaWidth":43,"className":"alignwide"} -->
         <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:43% auto">
            <figure class="wp-block-media-text__media"><img src="" alt="" class="wp-image-22413 size-full" /></figure>
            <div class="wp-block-media-text__content"><!-- wp:group {"className":"wp-block-group-heading no-border"} -->
               <div class="wp-block-group wp-block-group-heading"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"foreground","fontSize":"extra-large"} -->
                  <h2 class="wp-block-heading has-text-align-left has-foreground-color has-text-color has-extra-large-font-size no-border" style="font-style:normal;font-weight:300;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Hero Content', 'fotografie-blocks') ?></h2>
                  <!-- /wp:heading -->

                  <!-- wp:paragraph {"align":"left","textColor":"body-text"} -->
                  <p class="has-text-align-left has-body-text-color has-text-color"><?php esc_html_e('Showcase the best feature of your business on the Hero Content Section. The new multipurpose WordPress theme allows you to underscore your best content. Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon to On crossing the imaginary line drawn from Punta Mala to Azuera.', 'fotografie-blocks') ?></p>
                  <!-- /wp:paragraph -->
               </div>
               <!-- /wp:group -->

               <!-- wp:buttons -->
               <div class="wp-block-buttons"><!-- wp:button -->
                  <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'fotografie-blocks') ?></a></div>
                  <!-- /wp:button -->
               </div>
               <!-- /wp:buttons -->
            </div>
         </div>
         <!-- /wp:media-text -->
      </div>
      <!-- /wp:group -->
   </div>
</div>
<!-- /wp:cover -->
