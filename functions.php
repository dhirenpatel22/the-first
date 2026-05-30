<?php
/**
 * The First — Theme Functions
 *
 * @package   TheFirst
 * @version   1.0.0
 * @link      https://github.com/dhirenpatel22/the-first
 */

defined( 'ABSPATH' ) || exit;

// =========================================================================
// Constants
// =========================================================================

define( 'THE_FIRST_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'THE_FIRST_DIR',     get_template_directory() );
define( 'THE_FIRST_URI',     get_template_directory_uri() );

// =========================================================================
// Theme Setup
// =========================================================================

function the_first_setup() {
	load_theme_textdomain( 'the-first', THE_FIRST_DIR . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video',
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'the-first' ),
		'footer'  => __( 'Footer Navigation', 'the-first' ),
		'social'  => __( 'Social Links', 'the-first' ),
	) );
}
add_action( 'after_setup_theme', 'the_first_setup' );

// =========================================================================
// Editor Styles
// =========================================================================

function the_first_editor_styles() {
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'the_first_editor_styles' );

// =========================================================================
// Enqueue Assets
// =========================================================================

function the_first_enqueue_assets() {
	wp_enqueue_style(
		'the-first-style',
		get_theme_file_uri( 'style.css' ),
		array(),
		THE_FIRST_VERSION
	);

	if ( ! is_admin() ) {
		wp_enqueue_script(
			'the-first-navigation',
			get_theme_file_uri( 'assets/js/navigation.js' ),
			array(),
			THE_FIRST_VERSION,
			array( 'strategy' => 'defer', 'in_footer' => true )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'the_first_enqueue_assets' );

// =========================================================================
// Block Styles
// =========================================================================

function the_first_register_block_styles() {

	// Button: Outline
	register_block_style( 'core/button', array(
		'name'         => 'outline',
		'label'        => __( 'Outline', 'the-first' ),
		'inline_style' => '
			.wp-block-button.is-style-outline .wp-block-button__link {
				background: transparent !important;
				border: 2px solid currentColor;
			}
			.wp-block-button.is-style-outline .wp-block-button__link:hover {
				background: var(--wp--preset--color--contrast) !important;
				color: var(--wp--preset--color--base) !important;
				border-color: var(--wp--preset--color--contrast);
			}
		',
	) );

	// Button: Ghost (text link)
	register_block_style( 'core/button', array(
		'name'         => 'ghost',
		'label'        => __( 'Ghost', 'the-first' ),
		'inline_style' => '
			.wp-block-button.is-style-ghost .wp-block-button__link {
				background: transparent !important;
				color: var(--wp--preset--color--contrast) !important;
				padding-inline: 0;
				text-decoration: underline;
				text-underline-offset: 3px;
				text-decoration-thickness: 2px;
			}
		',
	) );

	// Image: Rounded
	register_block_style( 'core/image', array(
		'name'         => 'rounded',
		'label'        => __( 'Rounded', 'the-first' ),
		'inline_style' => '
			.wp-block-image.is-style-rounded img {
				border-radius: 1rem;
			}
		',
	) );

	// Image: Shadow
	register_block_style( 'core/image', array(
		'name'         => 'shadow',
		'label'        => __( 'Shadow', 'the-first' ),
		'inline_style' => '
			.wp-block-image.is-style-shadow img {
				box-shadow: 0 20px 25px -5px rgba(0,0,0,0.12), 0 8px 10px -6px rgba(0,0,0,0.08);
			}
		',
	) );

	// List: Checkmark
	register_block_style( 'core/list', array(
		'name'         => 'checkmark',
		'label'        => __( 'Checkmark', 'the-first' ),
		'inline_style' => '
			ul.wp-block-list.is-style-checkmark {
				list-style: none;
				padding-left: 0;
			}
			ul.wp-block-list.is-style-checkmark li {
				padding-inline-start: 1.75em;
				position: relative;
			}
			ul.wp-block-list.is-style-checkmark li::before {
				content: "✓";
				position: absolute;
				inset-inline-start: 0;
				color: var(--wp--preset--color--accent);
				font-weight: 700;
			}
		',
	) );

	// Group: Card
	register_block_style( 'core/group', array(
		'name'         => 'card',
		'label'        => __( 'Card', 'the-first' ),
		'inline_style' => '
			.wp-block-group.is-style-card {
				background: var(--wp--preset--color--base);
				border: 1px solid var(--wp--preset--color--border);
				border-radius: 0.75rem;
				padding: var(--wp--preset--spacing--60);
				box-shadow: 0 1px 3px 0 rgba(0,0,0,0.06);
			}
		',
	) );

	// Group: Highlighted
	register_block_style( 'core/group', array(
		'name'         => 'highlighted',
		'label'        => __( 'Highlighted', 'the-first' ),
		'inline_style' => '
			.wp-block-group.is-style-highlighted {
				background: var(--wp--preset--color--base-2);
				border-radius: 0.75rem;
				padding: var(--wp--preset--spacing--70);
			}
		',
	) );

	// Separator: Thick
	register_block_style( 'core/separator', array(
		'name'         => 'thick',
		'label'        => __( 'Thick', 'the-first' ),
		'inline_style' => '
			.wp-block-separator.is-style-thick {
				border-bottom-width: 4px;
				border-bottom-color: var(--wp--preset--color--contrast);
				max-width: 60px;
			}
		',
	) );
}
add_action( 'init', 'the_first_register_block_styles' );

// =========================================================================
// Pattern Categories
// =========================================================================

function the_first_register_pattern_categories() {
	$categories = array(
		'the-first_hero'    => __( 'Hero Sections', 'the-first' ),
		'the-first_content' => __( 'Content Sections', 'the-first' ),
		'the-first_cta'     => __( 'Call to Action', 'the-first' ),
		'the-first_page'    => __( 'Page Layouts', 'the-first' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'the_first_register_pattern_categories' );

// =========================================================================
// Content Helpers
// =========================================================================

// Custom excerpt length
add_filter( 'excerpt_length', fn() => 30 );

// Clean excerpt suffix
add_filter( 'excerpt_more', fn() => '&hellip;' );

// =========================================================================
// Security Hardening
// =========================================================================

// Remove WP generator tag from all output
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// Remove version numbers from enqueued assets
function the_first_remove_asset_versions( string $src ): string {
	return strpos( $src, '?ver=' ) ? remove_query_arg( 'ver', $src ) : $src;
}
add_filter( 'style_loader_src',  'the_first_remove_asset_versions' );
add_filter( 'script_loader_src', 'the_first_remove_asset_versions' );

// Disable XML-RPC entirely
add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove X-Pingback header
add_filter( 'wp_headers', function( array $headers ): array {
	unset( $headers['X-Pingback'] );
	return $headers;
} );

// Remove noisy/revealing head links
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Generic login error message — don't reveal valid usernames
add_filter( 'login_errors', fn() => __( 'Incorrect username or password.', 'the-first' ) );

// Prevent user enumeration via ?author=N redirect
function the_first_prevent_author_enum(): void {
	if ( ! is_admin() && null !== filter_input( INPUT_GET, 'author' ) && ! is_user_logged_in() ) {
		wp_safe_redirect( home_url( '/' ), 301 );
		exit;
	}
}
add_action( 'init', 'the_first_prevent_author_enum' );

// Disable file editing through the admin UI (belt-and-suspenders alongside wp-config)
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

// Security response headers
function the_first_security_headers(): void {
	if ( ! is_admin() ) {
		header( 'X-Frame-Options: SAMEORIGIN' );
		header( 'X-Content-Type-Options: nosniff' );
		header( 'Referrer-Policy: strict-origin-when-cross-origin' );
		header( 'Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=()' );
	}
}
add_action( 'send_headers', 'the_first_security_headers' );

// =========================================================================
// Performance Optimisations
// =========================================================================

// Disable WordPress emoji scripts (~50 KB of JS/CSS saved on every page load)
function the_first_disable_emojis(): void {
	remove_action( 'wp_head',            'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts','print_emoji_detection_script' );
	remove_action( 'wp_print_styles',    'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed',   'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss',   'wp_staticize_emoji' );
	remove_filter( 'wp_mail',            'wp_staticize_emoji_for_email' );

	add_filter( 'tiny_mce_plugins', function( array $plugins ): array {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} );

	add_filter( 'wp_resource_hints', function( array $urls, string $type ): array {
		if ( 'dns-prefetch' === $type ) {
			$emoji_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
			$urls = array_values( array_diff( $urls, array( $emoji_url ) ) );
		}
		return $urls;
	}, 10, 2 );
}
add_action( 'init', 'the_first_disable_emojis' );

// Disable oEmbed discovery links and host JS (reduces external requests)
function the_first_disable_oembed(): void {
	remove_action( 'wp_head',         'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head',         'wp_oembed_add_host_js' );
	remove_action( 'rest_api_init',   'wp_oembed_register_route' );
	add_filter(    'embed_oembed_discover', '__return_false' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
}
add_action( 'init', 'the_first_disable_oembed' );

// Remove Dashicons for logged-out visitors
function the_first_dequeue_dashicons(): void {
	if ( ! is_admin() && ! is_user_logged_in() ) {
		wp_dequeue_style( 'dashicons' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_first_dequeue_dashicons', 99 );

// Remove jQuery Migrate on the front end
function the_first_remove_jquery_migrate( WP_Scripts $scripts ): void {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$jquery = $scripts->registered['jquery'];
		if ( $jquery->deps ) {
			$jquery->deps = array_diff( $jquery->deps, array( 'jquery-migrate' ) );
		}
	}
}
add_action( 'wp_default_scripts', 'the_first_remove_jquery_migrate' );

// Cap post revisions if not already defined in wp-config.php
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
	define( 'WP_POST_REVISIONS', 5 );
}
