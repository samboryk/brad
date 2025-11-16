<?php
/**
 * Shared header markup for the MEXA Infrastructure theme.
 *
 * @package MEXA_Infrastructure
 */
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
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( home_url( '/link/' ) ); ?>">Інфраструктура</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( home_url( '/link2/' ) ); ?>">Токен</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( home_url( '/link3/' ) ); ?>">Навігатор по сайту</a></li>
                </ul>
            </nav>

            <div class="header-icons">
                <img src="x.png" alt="X">
                <img src="telegram.png" alt="Telegram">
            </div>
        </div>
    </div>
</header>
