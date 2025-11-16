<?php
/**
 * Template Name: Token Page
 * Description: WordPress template for the Токен page layout.
 *
 * @package MEXA_Infrastructure
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockDAG SAIDAG</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav id="header" class="fixed">
        <ul>
            <li class="nav-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна сторінка</a></li>
            <li><a href="<?php echo esc_url( home_url( '/link/' ) ); ?>">Інфраструктура</a></li>
            <li><a href="<?php echo esc_url( home_url( '/link2/' ) ); ?>">Токен</a></li>
            <li><a href="<?php echo esc_url( home_url( '/link3/' ) ); ?>">Навігатор по сайту</a></li>
        </ul>
    </nav>
    <div style="text-align: center;margin-top: 30px;">
          <nav class="menu">
                <button class="active">Токеноміка</button>
                <button><a href="<?php echo esc_url( home_url( '/link3/' ) ); ?>"></a>Як купити</button>
                <button >Ставка</button>
        </nav>
    </div>

    <main>
        <div class="content">
            <div class="image-container">
                <img src="/pic/face.png" alt="BlockDAG SAIDAG">
            </div>
            <div class="text-container">
                <h2><a>SAIDAG</a> — це ваш ключ до видобутку токенів BlockDAG</h2>
                <p>Інвестуйте в наші майнінгові операції, придбавши токени SAIDAG і взявши участь у нашій програмі стекінгу. Рівні ставок визначаються на основі кількості поставлених токенів і тривалості періоду блокування. Переходьте до вищих рівнів, щоб розблокувати чудові прибутки, податок на токени сприяє збільшенню операційних витрат.</p>
                <div class="stats">
                    <div class="stat">
                        <h3>Загальна пропозиція</h3>
                        <p>1B</p>
                    </div>
                    <div class="stat">
                        <h3>Ставка</h3>
                        <p>5/5</p>
                    </div>
                    <div class="stat">
                        <h3>Ліквідність</h3>
                        <p>85%</p>
                    </div>
                    <div class="stat">
                        <h3>Команда</h3>
                        <p>5%</p>
                    </div>
                    <div class="stat">
                        <h3>CEX</h3>
                        <p>10%</p>
                    </div>
                </div>
                <div class="container">
                    <p class="label">Адреса смарт-контракту</p>
                    <div class="address-box">
                        <span class="address">0xa2dD817c2fDc3a2996f1A5174CF8f1AaED466E82</span>
                        <button class="copy-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                                <path d="M8 8H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2h-2v2H6v-10h2v-2Zm10-2h-8a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm0 2v8H8V8h10Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
