<?php
/**
 * Title: Call to Action — Banner
 * Slug: the-first/cta-banner
 * Categories: the-first_cta
 * Viewport Width: 1280
 * Description: Full-width accent-coloured CTA banner with heading, sub-copy, and a button.
 * Keywords: cta, banner, call to action, conversion
 */
?>

<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|accent"},"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"4xl","style":{"color":{"text":"var:preset|color|base"},"typography":{"lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-4-x-l-font-size" style="line-height:1.2">Ready to work together?</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"1.125rem"}}} -->
		<p class="has-text-align-center" style="color:rgba(255,255,255,0.85);font-size:1.125rem">Let's build something great. I'm available for freelance projects and collaborations.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"var:preset|color|base","text":"var:preset|color|accent"},"border":{"radius":"0.375rem"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact" style="border-radius:0.375rem;background-color:var(--wp--preset--color--base);color:var(--wp--preset--color--accent)">Let's Talk →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
