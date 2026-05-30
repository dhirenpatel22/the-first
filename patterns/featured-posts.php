<?php
/**
 * Title: Featured Posts — Grid
 * Slug: the-first/featured-posts
 * Categories: the-first_content
 * Viewport Width: 1280
 * Description: 3-column grid showing the three most recent posts with category, title, and date.
 * Keywords: posts, blog, grid, recent, latest
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

	<!-- Section header -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"level":2,"fontSize":"3xl"} -->
		<h2 class="wp-block-heading has-3-x-l-font-size">Latest Writing</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}}} -->
		<p style="color:var(--wp--preset--color--muted)"><a href="/blog">View all posts →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Query: 3 latest posts, no inheritance -->
	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.5rem"}}} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {"term":"category","fontSize":"xs","style":{"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}}} /-->
					<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"xl"} /-->
					<!-- wp:post-date {"fontSize":"xs","style":{"color":{"text":"var:preset|color|muted"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}}} -->
			<p style="color:var(--wp--preset--color--muted)">No posts published yet.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
