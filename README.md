# The First

A clean, flexible WordPress block theme built for full site editing with Gutenberg. Designed as a solid foundation for any personal website, portfolio, or blog — opinionated enough to look great out of the box, minimal enough to adapt to anything.

**Requires:** WordPress 6.4+, PHP 8.0+

---

## What's Included

```
the-first/
├── style.css                  Theme header + global CSS utilities
├── theme.json                 Design system (colors, type, spacing, layout)
├── functions.php              Theme setup, block styles, security, performance
├── templates/
│   ├── index.html             Fallback (used when no other template matches)
│   ├── home.html              Blog listing page
│   ├── single.html            Single post
│   ├── page.html              Static page
│   ├── page-full-width.html   Full-width page (no max-width constraint)
│   ├── page-no-title.html     Page / post without a printed title
│   ├── archive.html           Category, tag, date, and author archives
│   ├── search.html            Search results
│   └── 404.html               Error page
├── parts/
│   ├── header.html            Sticky site header with logo + navigation
│   ├── footer.html            Dark footer with brand, nav, and copyright
│   └── sidebar.html           Optional sidebar (search, recent posts, categories)
├── patterns/
│   ├── hero-home.php          Full-width dark hero for homepage
│   ├── cta-banner.php         Accent-coloured call-to-action banner
│   ├── featured-posts.php     3-column grid of latest posts
│   ├── about-intro.php        Two-column about section with portrait
│   └── contact-section.php    Contact details + social links
└── assets/
    ├── css/editor-style.css   Gutenberg editor overrides
    └── js/navigation.js       Keyboard-accessible submenu enhancement
```

---

## Activating the Theme

1. Upload the `the-first` folder to `wp-content/themes/`.
2. Go to **Appearance → Themes** and activate **The First**.
3. Go to **Appearance → Editor** to start customising templates, parts, and patterns.

---

## Design System (`theme.json`)

All visual tokens live in `theme.json`. Edit this file to reskin the theme for a new project without touching any CSS.

### Color Palette

| Name             | Slug            | Default        | Purpose                        |
|------------------|-----------------|----------------|--------------------------------|
| Base             | `base`          | `#FFFFFF`      | Page background                |
| Base Secondary   | `base-2`        | `#F7F7F5`      | Subtle section backgrounds     |
| Contrast         | `contrast`      | `#1A1A1A`      | Body text, buttons             |
| Contrast Secondary | `contrast-2`  | `#4A4A4A`      | Secondary text                 |
| Primary          | `primary`       | `#1A3353`      | Hero backgrounds, links        |
| Primary Light    | `primary-light` | `#2A4F80`      | Gradient endpoint, hover states|
| Accent           | `accent`        | `#E05D44`      | CTA buttons, category labels   |
| Accent Light     | `accent-light`  | `#FF8066`      | Gradient endpoint              |
| Muted            | `muted`         | `#767676`      | Meta text, placeholders        |
| Border           | `border`        | `#E2E2E2`      | Dividers, input borders        |

**To change the palette:** edit the `settings.color.palette` array in `theme.json`. All blocks referencing `var:preset|color|primary` will update automatically.

### Typography

Three system font stacks ship by default:

| Slug           | Stack                                            |
|----------------|--------------------------------------------------|
| `system-sans`  | `-apple-system, BlinkMacSystemFont, Segoe UI…`  |
| `system-serif` | `Georgia, Times New Roman…`                      |
| `system-mono`  | `Courier New, Courier…`                          |

**To add a custom web font** (e.g. from Google Fonts):

1. Add a `@font-face` block in `style.css` or enqueue the font in `functions.php`.
2. Register the font family in `theme.json`:

```json
{
  "fontFamily": "'Inter', var(--wp--preset--font-family--system-sans)",
  "name": "Inter",
  "slug": "inter"
}
```

3. Set it as the body default:

```json
"styles": {
  "typography": {
    "fontFamily": "var(--wp--preset--font-family--inter)"
  }
}
```

### Font Sizes

Ten fluid sizes from `xs` (0.75 rem) through `huge` (4 rem). Sizes `lg` through `huge` use CSS `clamp()` so they scale between mobile and desktop automatically.

### Spacing Scale

Ten steps from `10` (4 px / 0.25 rem) through `100` (128 px / 8 rem). Reference them in block attributes as `var:preset|spacing|60` or in CSS as `var(--wp--preset--spacing--60)`.

### Layout Widths

| Setting       | Default  | Change in `theme.json` `settings.layout` |
|---------------|----------|------------------------------------------|
| Content width | `720px`  | `contentSize`                            |
| Wide width    | `1200px` | `wideSize`                               |

---

## Templates

### Assigning a Custom Template to a Page

In the WordPress editor, open the **Page Attributes** panel (or the **Template** option in the sidebar) and choose:

- **Full Width Page** — removes the `max-width` constraint. Good for landing pages built entirely with wide/full-width blocks.
- **Page (No Title)** — hides the post title. Useful when the hero pattern or first content block already includes a heading.

### Adding a New Template

1. Create `templates/my-template.html` with valid block markup.
2. Register it in `theme.json` under `customTemplates`:

```json
{
  "name": "my-template",
  "postTypes": ["page"],
  "title": "My Custom Template"
}
```

---

## Template Parts

Parts are reusable sections injected into templates via `<!-- wp:template-part {"slug":"header"} /-->`.

### Editing Parts

Go to **Appearance → Editor → Template Parts**. Changes are saved to the database and override the theme file.

### Adding a New Part

1. Create `parts/my-part.html`.
2. Register it in `theme.json` under `templateParts`:

```json
{
  "area": "uncategorized",
  "name": "my-part",
  "title": "My Part"
}
```

3. Insert it in any template: `<!-- wp:template-part {"slug":"my-part"} /-->`

---

## Block Patterns

Patterns appear in the block inserter under the **Patterns** tab, grouped by category.

| Slug                          | Category          | Description                        |
|-------------------------------|-------------------|------------------------------------|
| `the-first/hero-home`         | Hero, Page        | Full-width dark hero               |
| `the-first/cta-banner`        | Call to Action    | Accent banner with button          |
| `the-first/featured-posts`    | Content           | 3-column latest posts grid         |
| `the-first/about-intro`       | Content, Page     | Two-column bio + portrait          |
| `the-first/contact-section`   | Content, CTA      | Contact details + social links     |

### Adding a New Pattern

Create `patterns/my-pattern.php` with a registration header:

```php
<?php
/**
 * Title: My Pattern
 * Slug: the-first/my-pattern
 * Categories: the-first_content
 * Viewport Width: 1280
 * Description: A short description.
 */
?>
<!-- block markup here -->
```

WordPress auto-discovers all PHP files in the `patterns/` directory.

---

## Block Styles

These extra style variants are registered in `functions.php` and appear in the **Styles** panel when a block is selected:

| Block         | Style Name   | Effect                              |
|---------------|--------------|-------------------------------------|
| `core/button` | Outline      | Transparent fill, coloured border   |
| `core/button` | Ghost        | No fill, underline only             |
| `core/image`  | Rounded      | 1 rem border-radius on the image    |
| `core/image`  | Shadow       | Drop shadow                         |
| `core/list`   | Checkmark    | Replaces bullets with ✓ marks       |
| `core/group`  | Card         | White card with border + shadow     |
| `core/group`  | Highlighted  | Off-white background, rounded       |
| `core/separator` | Thick     | Bold short accent rule              |

---

## Security Features

All of the following are active by default. See `functions.php` for the implementation.

| Feature                          | Details                                                   |
|----------------------------------|-----------------------------------------------------------|
| Generator tag removed            | WordPress version hidden from `<head>` and RSS feeds      |
| Asset version strings stripped   | `?ver=X.X` removed from enqueued URLs                     |
| XML-RPC disabled                 | Fully disabled via filter                                 |
| X-Pingback header removed        | Prevents pingback amplification attacks                   |
| Noisy head links removed         | RSD, WLW manifest, shortlink, adjacent posts links        |
| Generic login errors             | Doesn't reveal whether a username exists                  |
| Author enumeration blocked       | `?author=N` redirects to home for logged-out visitors     |
| File editing disabled            | `DISALLOW_FILE_EDIT` defined (belt + suspenders)          |
| Security response headers        | `X-Frame-Options`, `X-Content-Type-Options`, `Referrer-Policy`, `Permissions-Policy` |

**Recommended additions in `wp-config.php`:**

```php
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );  // prevents plugin/theme installs too
define( 'WP_POST_REVISIONS', 5 );
define( 'FORCE_SSL_ADMIN', true );
```

**Recommended `.htaccess` additions** (Apache):

```apache
# Block access to sensitive files
<FilesMatch "(wp-config\.php|readme\.html|license\.txt|xmlrpc\.php)">
    Order deny,allow
    Deny from all
</FilesMatch>

# Disable directory browsing
Options -Indexes
```

---

## Performance Features

| Feature                        | Saving                                              |
|--------------------------------|-----------------------------------------------------|
| Emoji scripts disabled         | ~50 KB JS + CSS removed from every page             |
| oEmbed discovery disabled      | Removes external DNS look-up on every page load     |
| Dashicons dequeued (guests)    | ~30 KB CSS removed for logged-out visitors          |
| jQuery Migrate removed         | ~8 KB JS removed on front end                       |
| Post revisions capped at 5     | Reduces database bloat                              |
| Asset version query strings removed | Improves proxy/CDN cacheability              |
| Navigation JS deferred         | Non-blocking script loading                         |

**Additional recommendations:**

- Enable a page-caching plugin (WP Super Cache, W3 Total Cache, or LiteSpeed Cache).
- Use a CDN for static assets.
- Enable GZIP/Brotli compression at the server level.
- Add `loading="lazy"` attribute to images below the fold (WordPress does this automatically for images below the first viewport).

---

## Creating a Child Theme

To customise the theme without losing changes on updates:

1. Create `wp-content/themes/the-first-child/` with a `style.css`:

```css
/*
Theme Name: The First Child
Template:   the-first
Version:    1.0.0
*/
```

2. Add a `functions.php` that enqueues the parent stylesheet:

```php
<?php
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'the-first-parent', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'the-first-child',  get_stylesheet_uri(), ['the-first-parent'] );
} );
```

3. Copy any file you want to override (template, part, `theme.json`) into the child theme directory. WordPress loads the child version first.

---

## Adapting for a New Site

Quick checklist when reusing the theme for a different project:

- [ ] Update author info in `style.css` header
- [ ] Set brand colors in `theme.json` → `settings.color.palette`
- [ ] Add custom fonts if needed (see Typography section above)
- [ ] Adjust `contentSize` / `wideSize` in `theme.json` if the design calls for different column widths
- [ ] Edit `parts/header.html` and `parts/footer.html` in the Site Editor to set up navigation menus
- [ ] Update placeholder text in patterns (`about-intro.php`, `contact-section.php`, `hero-home.php`)
- [ ] Set a site logo via **Appearance → Customize → Site Identity** (or in the Site Editor)
- [ ] Review and update the security headers in `functions.php` (CSP, frame options) to match the site's needs

---

## Frequently Asked Questions

**Why no `functions.php` classic widgets or widget areas?**
Block themes use template parts and patterns instead of classic widget areas. The sidebar template part (`parts/sidebar.html`) achieves the same result natively in the block editor.

**Can I use plugins with this theme?**
Yes. The theme is intentionally unopinionated about plugins. WooCommerce, ACF, Gravity Forms, Yoast SEO, and most other major plugins are compatible.

**Where do I create navigation menus?**
Go to **Appearance → Editor → Navigation** to create and assign menus to the header and footer navigation blocks.

**The REST API restriction is commented out — should I enable it?**
Only if you don't need a public REST API (e.g. for headless use, mobile apps, or Gutenberg itself). Enabling it will break the block editor for logged-out previews. Leave it commented unless you have a specific reason to restrict it.

**How do I add Google Fonts?**
See the Typography section above. For performance, self-host the font files rather than loading them from Google's servers (use `google-webfonts-helper.herokuapp.com` to download the files).

---

## License

GNU General Public License v2 or later.
See [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
