<?php
/**
 * Template Name: Home Page
 * Description: Dedicated template for the main landing page.
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
    <header>
    <div class="header-content">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">MEXA</a>

        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <div class="nav-container">
            <nav>
                <ul>
                    <li style="margin-right: 50px;margin-left: 30px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна сторінка</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( home_url( '/link/' ) ); ?>">Інфраструктура</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( home_url( '/link1/' ) ); ?>">Токен</a></li>
                    <li style="margin-right: 50px;"><a href="<?php echo esc_url( home_url( '/link2/' ) ); ?>">Навігатор по сайту</a></li>
                </ul>
            </nav>

            <div class="header-icons">
            <img src="x.png" > <img src="telegram.png" >
         </div>
        </div>

    </div>
</header>

    <section class="hero">
        <div class="hero-content">
            <h1 class="h1">ІНФРАСТРУКТУРА МАЙНІНГУ</h1>
            <h2>НА ОСНОВІ ШТУЧНОГО ІНТЕЛЕКТУ</h2>
            <h3>Представляємо інноваційну інфраструктуру майнінгу, керовану АІ, що використовує протоколи blockDAG, масштабоване узагальнення Конесенсусу Накамото.</h3>
        </div>
        <div class="hero-image">
            <img src="/pic/ui-ux-design_1197721-139366-removebg-preview 1.png" alt="Mining Infrastructure">
        </div>
    </section>
    <section class="buttons">
        <a href="#" class="button gitbook">GitBook</a>
        <a href="#" class="button telegram">Наш Телеграм Канал</a>
    </section>
    <?php wp_footer(); ?>
</body>
</html>
