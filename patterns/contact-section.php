<?php
/**
 * Title: Contact Section
 * Slug: the-first/contact-section
 * Categories: the-first_content, the-first_cta
 * Viewport Width: 1280
 * Description: Two-column contact section with email details and social links.
 * Keywords: contact, email, social, links, reach out
 */
?>

<!-- wp:group {"style":{"color":{"background":"var:preset|color|base-2"},"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:var(--wp--preset--color--base-2);padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"0.8125rem"}}} -->
		<p class="has-text-align-center" style="color:var(--wp--preset--color--accent);font-size:0.8125rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Contact</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"4xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-4-x-l-font-size">Let's Talk</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","fontSize":"lg","style":{"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-align-center has-lg-font-size" style="color:var(--wp--preset--color--muted)">Have a project in mind or just want to say hi? I'd love to hear from you.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Two-column detail -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
	<div class="wp-block-columns">

		<!-- Contact details -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"xl"} -->
				<h3 class="wp-block-heading has-x-l-font-size">Get in touch</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}}} -->
				<p style="color:var(--wp--preset--color--muted)">Email is the best way to reach me. I usually reply within 24 hours on weekdays.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><strong>Email:</strong> <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@yourdomain.com">Send an Email</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Social links -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"xl"} -->
				<h3 class="wp-block-heading has-x-l-font-size">Find me online</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}}} -->
				<p style="color:var(--wp--preset--color--muted)">I share work, thoughts, and links in these places.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li><a href="https://twitter.com/yourhandle">Twitter / X — @yourhandle</a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="https://linkedin.com/in/yourprofile">LinkedIn — Your Name</a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="https://github.com/yourusername">GitHub — @yourusername</a></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><a href="https://read.cv/yourprofile">Read.cv — Your profile</a></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
