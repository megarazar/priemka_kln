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

/**
 * Интеграция Contact Form 7 → Битрикс24 (создание Лида).
 * Срабатывает только для формы заявки (ID 33). Вебхук — в константе
 * PRINYATO_B24_WEBHOOK (wp-config.php, секрет, вне репозитория).
 */
add_action( 'wpcf7_mail_sent', function ( $contact_form ) {
    if ( (int) $contact_form->id() !== 33 ) return;
    if ( ! defined( 'PRINYATO_B24_WEBHOOK' ) || ! PRINYATO_B24_WEBHOOK ) return;

    $sub = WPCF7_Submission::get_instance();
    if ( ! $sub ) return;
    $d = $sub->get_posted_data();

    $val = function ( $k ) use ( $d ) {
        if ( ! isset( $d[ $k ] ) ) return '';
        $v = is_array( $d[ $k ] ) ? reset( $d[ $k ] ) : $d[ $k ];
        return sanitize_text_field( (string) $v );
    };

    $first = $val( 'first-name' );
    $last  = $val( 'last-name' );
    $phone = $val( 'phone' );
    $name  = trim( $first . ' ' . $last );

    $fields = array(
        'TITLE'              => 'Заявка с сайта' . ( $name ? ' — ' . $name : '' ),
        'NAME'               => $first,
        'LAST_NAME'          => $last,
        'SOURCE_ID'          => 'WEB',
        'SOURCE_DESCRIPTION' => 'Форма «Заявка» на prinyatopro.ru',
        'PHONE'              => array( array( 'VALUE' => $phone, 'VALUE_TYPE' => 'WORK' ) ),
        'COMMENTS'           => 'Заявка с главной страницы. Согласие на обработку ПД и ознакомление с политикой конфиденциальности получены.',
    );

    $url  = rtrim( PRINYATO_B24_WEBHOOK, '/' ) . '/crm.lead.add.json';
    $resp = wp_remote_post( $url, array(
        'timeout' => 15,
        'body'    => array(
            'fields' => $fields,
            'params' => array( 'REGISTER_SONET_EVENT' => 'Y' ),
        ),
    ) );

    if ( is_wp_error( $resp ) ) {
        error_log( '[B24] lead error: ' . $resp->get_error_message() );
        return;
    }
    $code = wp_remote_retrieve_response_code( $resp );
    $body = wp_remote_retrieve_body( $resp );
    if ( 200 !== (int) $code || false !== strpos( $body, '"error"' ) ) {
        error_log( '[B24] lead failed (' . $code . '): ' . substr( $body, 0, 300 ) );
    }
}, 10, 1 );
