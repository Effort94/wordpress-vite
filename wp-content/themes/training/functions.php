<?php

// Enqueue the theme's JS and CSS files
add_action('wp_enqueue_scripts', function() {

    $is_dev = getenv('WP_ENV') === 'local';

    $dist_directory = get_theme_file_path('dist/assets/');

    // Find the JS and CSS files with the hash in the filename
    $js_files = glob($dist_directory . 'main.*.js');
    $css_files = glob($dist_directory . 'main.*.css');

    if (!empty($js_files)) {
        wp_enqueue_script('mytheme-js', get_theme_file_uri('dist/assets/' . basename($js_files[0])), [], null, true);

        // Enqueue the HMR script if in dev mode
        if ($is_dev) {
            // Vite uses the default port 3000 for HMR
            wp_enqueue_script('vite-hmr', 'http://localhost:3000/@vite/client', [], null, true);
        }
    }

    if (!empty($css_files)) {
        wp_enqueue_style('mytheme-css', get_theme_file_uri('dist/assets/' . basename($css_files[0])), [], null);
    }
});

// Add Vite development server HMR script only in the development environment
add_action('wp_footer', function() {
    if (defined('WP_ENV') && WP_ENV === 'development') {
        ?>
        <script type="module">
            if (import.meta.hot) {
                import.meta.hot.accept();
            }
        </script>
        <?php
    }
}, 100);


/**
 * Register primary navigation menu
 *
 * @return void
 */
function register_primary_navigation_menu(): void {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'training'),
        )
    );
}
add_action('after_setup_theme', 'register_primary_navigation_menu');
