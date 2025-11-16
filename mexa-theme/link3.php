<?php
/**
 * Template Name: Navigator Page
 * Description: WordPress template for the site navigator page.
 *
 * @package MEXA_Infrastructure
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Інструкція</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav>
        <ul>
            <li class="nav-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна сторінка</a></li>
            <li><a href="<?php echo esc_url( home_url( '/link/' ) ); ?>">Інфраструктура</a></li>
            <li><a href="<?php echo esc_url( home_url( '/link2/' ) ); ?>">Токен</a></li>
            <li><a href="#">Навігатор по сайту</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="header">
            <div class="padding">

            </div>
            <h1>Інструкція по застосуванню</h1>
            <div class="year">2024</div>
        </div>

        <div class="points-grid">
            <div class="point-card">
                <div class="point-number">ПУНКТ 1</div>
                <p>Запустіть маркер SAIDAG</p>
                <p>Запуск стейкінга для майнінгових операцій</p>
                <p>Розвивайте спільноту та соціальні мережі</p>
                <p>Списки CEX</p>
            </div>
            <div class="point-card">
                <div class="point-number">ПУНКТ 2</div>
                <p>Андрейтська підтримка проєкту</p>
                <p>Випуск партнерської коаліції з впровадженням обміну токенів для майнінгу</p>
                <p>Запровадження механізму застави</p>
                <p>Низькопротокольне впровадження нового формату цифрового майнінгу</p>
            </div>
            <div class="point-card">
                <div class="point-number">ПУНКТ 3</div>
                <p>Підтримка нових блокчейнів в проєкті</p>
                <p>Подальше збільшення лістингу на біржах</p>
                <p>Оптимізація моніторингу майнерів з використанням AI для підвищення ефективності обладнання</p>
            </div>
            <div class="point-card">
                <div class="point-number">ПУНКТ 4</div>
                <p>Партнерство з урядом регіону SEA. Будівництво дата-центру потужністю 200 МВт.</p>
                <p>Програмно-апаратний комплекс власних інноваційних розробок в лінійку</p>
                <p>Дорожня карта 2.0</p>
            </div>
        </div>

        <div class="logo-area">
            <img src="/pic/logo2.png" alt="MEXA Logo" class="logo-image">
            <div class="logo-text">MEXA</div>
        </div>

        <div class="info-text">
            Жодна інформація на цьому веб-сайті не є фінансовою порадою, і завжди рекомендується проконсультуватися з кваліфікованим фінансовим консультантом перед тим, як брати участь у будь-яких покупках жетонів.
        </div>

        <div class="social-icons">
            <a href="#" class="social-icon">🌐</a> <a href="#" class="social-icon">🐦</a>
            <a href="#" class="social-icon">✉️</a>
        </div>

        <div class="footer">
            © [Рік] Команда Стейкінгу
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
