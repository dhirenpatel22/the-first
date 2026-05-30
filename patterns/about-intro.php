<?php
/**
 * Title: About — Introduction
 * Slug: the-first/about-intro
 * Categories: the-first_content, the-first_page
 * Viewport Width: 1280
 * Description: Two-column about section with portrait photo on the left and bio text on the right.
 * Keywords: about, bio, introduction, personal, profile
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|90"}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- Photo column -->
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"1rem"},"color":{"background":"var:preset|color|base-2"}}} -->
			<figure class="wp-block-image" style="background-color:var(--wp--preset--color--base-2);border-radius:1rem"><img src="" alt="A photo of [Your Name]" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- Bio column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group">

				<!-- Eyebrow -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"0.8125rem"}}} -->
				<p style="color:var(--wp--preset--color--accent);font-size:0.8125rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">About Me</p>
				<!-- /wp:paragraph -->

				<!-- Headline -->
				<!-- wp:heading {"level":2,"fontSize":"4xl"} -->
				<h2 class="wp-block-heading has-4-x-l-font-size">Hi, I'm [Your Name]</h2>
				<!-- /wp:heading -->

				<!-- Bio paragraphs -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|contrast-2"},"typography":{"lineHeight":"1.8"}}} -->
				<p style="color:var(--wp--preset--color--contrast-2);line-height:1.8">I'm a [role/title] based in [City, Country]. I've been building things on the web for [X] years, with a focus on [speciality].</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|contrast-2"},"typography":{"lineHeight":"1.8"}}} -->
				<p style="color:var(--wp--preset--color--contrast-2);line-height:1.8">Outside of work I spend time [hobby or interest]. I'm currently [project or status].</p>
				<!-- /wp:paragraph -->

				<!-- CTA -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact">Say Hello →</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about">More About Me</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
