<?php
/**
 * Тема «ПринятоПро» — функции.
 * Дизайн главной свёрстан вручную; CSS/JS подключены тегами в header.php/footer.php
 * (сохраняем точный порядок и defer вендоров). Здесь — только то, что нужно WordPress.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'after_setup_theme', function () {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'title-tag' ); // title теперь ведёт WordPress/Yoast (в шаблоне <title> убран)
    // Меню для будущей навигации (хедер/футер) — редактируется без кода в «Внешний вид → Меню».
    register_nav_menus( array(
        'primary' => 'Главное меню (хедер)',
        'footer'  => 'Меню в подвале',
    ) );
} );

/**
 * SEO ведёт Yoast: title / canonical / OG / Twitter / sitemap (теги из шаблона убраны).
 * НО нашу богатую Schema.org (HomeAndConstructionBusiness с адресом/гео/телефоном + FAQPage)
 * оставляем в шаблоне и ОТКЛЮЧАЕМ схему Yoast — иначе на странице было бы две схемы.
 * meta keywords оставлены в шаблоне (Yoast их не выводит, дубля нет).
 */
add_filter( 'wpseo_json_ld_output', '__return_false' );

// Контентная ширина (для медиа в записях блога фазы 2).
if ( ! isset( $content_width ) ) $content_width = 800;

/**
 * Фаза 2: здесь регистрируются CPT `uslugi`, `zhk` и таксономии
 * (Тип услуги, Район, Застройщик) — см. wp_structure_prinyato.md §3.2-3.3.
 * Пока главная самодостаточна, оставляем заготовку.
 */
