# 320 Grit Careers — Integration Guide

## File Structure

```
careers/
├── job-data.php              # Shared demo job data (replace with CPT)
├── job-detail.php
├── job-detail.css
├── job-detail.js
├── open-positions.php
├── open-positions.css
├── open-positions.js
├── apply-position.php
├── apply-position.css
├── apply-position.js
├── saved-positions.php
├── saved-positions.css
├── saved-positions.js
├── introduce-yourself.php
├── introduce-yourself.css
└── introduce-yourself.js
```

Place the entire `careers/` folder inside your **child theme**:

```
wp-content/themes/your-child-theme/careers/
```

---

## Recommended WordPress Page Structure

| Page Title              | Suggested Slug              | Template / Content Source          |
|-------------------------|-----------------------------|------------------------------------|
| Open Positions          | `/careers/open-positions/`  | `open-positions.php`               |
| Job Detail (dynamic)    | `/careers/{job-slug}/`      | CPT single template or page + query|
| Apply                   | `/careers/apply/`           | `apply-position.php` (?job=slug)   |
| Saved Positions         | `/careers/saved/`           | `saved-positions.php`              |
| Introduce Yourself      | `/careers/introduce-yourself/` | `introduce-yourself.php`        |

Create normal WordPress pages for the static ones and assign a custom page template, **or** use `get_template_part()` / shortcodes / Elementor HTML widgets that include the PHP files.

---

## Custom Post Type Recommendation

Register a CPT called `job_position`:

```php
register_post_type( 'job_position', array(
    'labels' => array(
        'name'          => 'Job Positions',
        'singular_name' => 'Job Position',
    ),
    'public'       => true,
    'has_archive'  => 'careers/open-positions',
    'rewrite'      => array( 'slug' => 'careers', 'with_front' => false ),
    'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
    'menu_icon'    => 'dashicons-hardhat',
    'show_in_rest' => true,
));
```

**Suggested meta fields / ACF:**

- `department` (select)
- `location` (text)
- `employment_type` (select: Full-Time, Part-Time, Contract)
- `short_desc` (textarea)
- `overview` (WYSIWYG)
- `responsibilities` (repeater or textarea lines)
- `qualifications` (repeater)
- `benefits` (repeater)
- `reports_to`
- `travel`
- `posted_date`

Then replace `grit_get_demo_jobs()` with a `WP_Query` or `get_posts()` that maps these fields into the same array structure used by the templates.

**URLs:**

- Archive / listing → `/careers/open-positions/` (or CPT archive)
- Single job → `/careers/project-manager/`

---

## How the Five Pages Connect

1. **Open Positions** → cards link to Job Detail via `/careers/{slug}/`
2. **Job Detail** → “Apply Now” goes to `/careers/apply/?job={slug}`
3. **Job Detail / Open Positions** → “Save for Later” stores job ID in `localStorage`
4. **Saved Positions** → reads `localStorage` and hydrates from job data
5. **Introduce Yourself** → general interest form (no specific job)

---

## Enqueuing CSS & JS

In your child theme `functions.php`:

```php
function grit_careers_assets() {
    if ( ! is_page() && ! is_singular( 'job_position' ) ) {
        return;
    }

    $theme_uri = get_stylesheet_directory_uri();
    $version   = '1.0.0';

    // Detect which careers page and enqueue only what’s needed
    if ( is_page( 'open-positions' ) || is_post_type_archive( 'job_position' ) ) {
        wp_enqueue_style( 'grit-open-positions', $theme_uri . '/careers/open-positions.css', array(), $version );
        wp_enqueue_script( 'grit-open-positions', $theme_uri . '/careers/open-positions.js', array(), $version, true );
    }

    if ( is_singular( 'job_position' ) || is_page_template( 'careers/job-detail.php' ) ) {
        wp_enqueue_style( 'grit-job-detail', $theme_uri . '/careers/job-detail.css', array(), $version );
        wp_enqueue_script( 'grit-job-detail', $theme_uri . '/careers/job-detail.js', array(), $version, true );
    }

    if ( is_page( 'apply' ) ) {
        wp_enqueue_style( 'grit-apply', $theme_uri . '/careers/apply-position.css', array(), $version );
        wp_enqueue_script( 'grit-apply', $theme_uri . '/careers/apply-position.js', array(), $version, true );
    }

    if ( is_page( 'saved' ) ) {
        wp_enqueue_style( 'grit-saved', $theme_uri . '/careers/saved-positions.css', array(), $version );
        wp_enqueue_script( 'grit-saved', $theme_uri . '/careers/saved-positions.js', array(), $version, true );
    }

    if ( is_page( 'introduce-yourself' ) ) {
        wp_enqueue_style( 'grit-intro', $theme_uri . '/careers/introduce-yourself.css', array(), $version );
        wp_enqueue_script( 'grit-intro', $theme_uri . '/careers/introduce-yourself.js', array(), $version, true );
    }
}
add_action( 'wp_enqueue_scripts', 'grit_careers_assets' );
```

---

## Replacing Demo Data

1. Create the `job_position` CPT and fields.
2. Update `job-data.php` (or replace the require) with:

```php
function grit_get_demo_jobs() {
    $query = new WP_Query( array(
        'post_type'      => 'job_position',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ) );
    $jobs = array();
    foreach ( $query->posts as $post ) {
        $jobs[] = array(
            'id'              => $post->post_name,
            'slug'            => $post->post_name,
            'title'           => get_the_title( $post ),
            'department'      => get_post_meta( $post->ID, 'department', true ),
            // … map all fields
        );
    }
    return $jobs;
}
```

---

## Connecting Application Forms to Gravity Forms

1. Create a Gravity Form for “Job Application” and another for “General Interest”.
2. Replace the HTML `<form>` blocks with Gravity Forms shortcodes or embed via PHP:

```php
echo do_shortcode( '[gravityform id="X" title="false" description="false" ajax="true"]' );
```

3. Use Gravity Forms conditional logic / hidden fields to pass the job title/slug.
4. The multi-step UX can be recreated with Gravity Forms multi-page forms, or keep the front-end steps and submit via GF API / AJAX on the final step.

---

## Save for Later

Currently uses `localStorage` key `grit_saved_jobs`.

Later you can replace the storage functions with:

- Logged-in user meta (`update_user_meta`)
- Or a simple AJAX endpoint that stores favorites for authenticated users

The UI already updates without full page reloads.

---

## Image Placeholders

Search for `YOUR-IMAGE-URL-` in the PHP files and replace with your media library URLs or Salient image fields.

---

## Notes

- No header or footer is included — your global Salient header/footer will wrap these pages.
- All styles are scoped under `.grit-careers-page` to avoid conflicts.
- Section comments are identical across PHP / CSS / JS for easy extraction.
- Fully responsive (desktop → mobile intentional layouts).
- Accessibility: semantic HTML, labels, ARIA where needed, keyboard support on tabs.
