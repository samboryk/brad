<?php
/**
 * Shared header markup for the MEXA Infrastructure theme.
 *
 * @package MEXA_Infrastructure
 */

if ( ! function_exists( 'mexa_get_template_page_link' ) ) {
    /**
     * Resolve the permalink for the first page that uses the provided template.
     *
     * This allows the navigation to stay in sync regardless of the actual page
     * slugs that the site owner selects inside the WordPress admin.
     *
     * @param string $template Template filename, e.g. 'link.php'.
     * @param string $fallback Relative fallback path if no page uses the template.
     *
     * @return string Permalink for the matching page or a fallback URL.
     */
    function mexa_get_template_page_link( $template, $fallback = '/' ) {
        $pages = get_pages(
            [
                'meta_key'   => '_wp_page_template',
                'meta_value' => $template,
                'number'     => 1,
                'post_type'  => 'page',
                'post_status'=> 'publish',
            ]
        );

        if ( ! empty( $pages ) && isset( $pages[0]->ID ) ) {
            return get_permalink( $pages[0]->ID );
        }

        return home_url( $fallback );
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="header-content">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">MEXA</a>

        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <div class="nav-container">
            <nav id="header" class="fixed">
                <ul>
                    <li style="margin-right: 50px;margin-left: 30px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна сторінка</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( mexa_get_template_page_link( 'link.php' ) ); ?>">Інфраструктура</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( mexa_get_template_page_link( 'link2.php' ) ); ?>">Токен</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( mexa_get_template_page_link( 'link3.php' ) ); ?>">Навігатор по сайту</a></li>
                </ul>
            </nav>

            <div class="header-icons">
                <img src="x.png" alt="X">
                <img src="telegram.png" alt="Telegram">
            </div>
        </div>
    </div>
</header>
