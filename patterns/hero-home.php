<?php
/**
 * Title: Hero — Homepage
 * Slug: the-first/hero-home
 * Categories: the-first_hero, the-first_page
 * Viewport Width: 1280
 * Description: Full-width dark hero with headline, tagline, and two CTA buttons.
 * Keywords: hero, homepage, banner, welcome
 */
?>

<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|primary"},"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="background-color:var(--wp--preset--color--primary);padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">

		<!-- Eyebrow label -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"0.8125rem"}}} -->
		<p class="has-text-align-center" style="color:var(--wp--preset--color--accent);font-size:0.8125rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Welcome</p>
		<!-- /wp:paragraph -->

		<!-- Main headline -->
		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge","style":{"color":{"text":"var:preset|color|base"},"typography":{"lineHeight":"1.1","letterSpacing":"-0.03em"}}} -->
		<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-huge-font-size" style="letter-spacing:-0.03em;line-height:1.1">Your Name.<br>Your Story.</h1>
		<!-- /wp:heading -->

		<!-- Subheadline -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.7)"},"typography":{"fontSize":"1.25rem","lineHeight":"1.65"}}} -->
		<p class="has-text-align-center" style="color:rgba(255,255,255,0.7);font-size:1.25rem;line-height:1.65">I design, build, and write about things on the internet.<br>Based in [City]. Currently [what you're working on].</p>
		<!-- /wp:paragraph -->

		<!-- CTA buttons -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
			<!-- wp:button {"style":{"color":{"background":"var:preset|color|base","text":"var:preset|color|contrast"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/blog" style="background-color:var(--wp--preset--color--base);color:var(--wp--preset--color--contrast)">Read My Writing</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|base"},"border":{"color":"rgba(255,255,255,0.4)"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button has-base-color has-text-color" href="/contact" style="border-color:rgba(255,255,255,0.4);color:var(--wp--preset--color--base)">Get In Touch</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
