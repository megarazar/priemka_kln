<?php
/**
 * Тема «ПринятоПро» — функции.
 * Дизайн главной свёрстан вручную; CSS/JS подключены тегами в header.php/footer.php
 * (сохраняем точный порядок и defer вендоров). Здесь — только то, что нужно WordPress.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'after_setup_theme', function () {
    add_theme_support( 'post-thumbnails' );
    // Кадр карточки блога (лента/категории) и обложки статьи — обрезка по центру.
    add_image_size( 'prinyato-card', 760, 480, true );   // 3:2, карточка в ленте
    add_image_size( 'prinyato-cover', 1200, 630, true );  // обложка статьи + OG
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

// Фавикон прописан вручную в header.php — не даём WP выводить свой wp_site_icon() через wp_head().
remove_action( 'wp_head', 'wp_site_icon' );

/**
 * Главную рисует front-page.php, но «страница на главной» = служебная стр. «Главная»
 * (нужна, чтобы блог работал «страницей записей»). Из-за этого Yoast ставит на /
 * canonical/og:url служебной страницы (/glavnaya/). Форсим корень сайта.
 */
add_filter( 'wpseo_canonical',     function ( $u ) { return is_front_page() ? home_url( '/' ) : $u; } );
add_filter( 'wpseo_opengraph_url', function ( $u ) { return is_front_page() ? home_url( '/' ) : $u; } );

// Контентная ширина (для медиа в записях блога фазы 2).
if ( ! isset( $content_width ) ) $content_width = 800;

/**
 * Фаза 2: здесь регистрируются CPT `uslugi`, `zhk` и таксономии
 * (Тип услуги, Район, Застройщик) — см. wp_structure_prinyato.md §3.2-3.3.
 * Пока главная самодостаточна, оставляем заготовку.
 */

/* ======================================================================
 * БЛОГ (стандартные записи WordPress) — see wp_structure_prinyato.md §4.5
 * Шаблоны: home.php (лента /blog/), archive.php (категории/теги), single.php.
 * ====================================================================== */

/**
 * Время чтения записи, мин. Считаем по русскому счёту слов
 * (кириллица + латиница) из «сырого» контента без тегов; ~180 слов/мин.
 */
function prinyato_reading_time( $post = null ) {
    $post = get_post( $post );
    if ( ! $post ) return 1;
    $text  = wp_strip_all_tags( strip_shortcodes( $post->post_content ) );
    $words = preg_match_all( '/[\p{L}\p{N}]+/u', $text, $m );
    return max( 1, (int) ceil( $words / 180 ) );
}

/**
 * Первичная рубрика записи (для «eyebrow» и хлебных крошек).
 * Возвращает WP_Term или null.
 */
function prinyato_primary_category( $post = null ) {
    $cats = get_the_category( get_post( $post ) ? get_post( $post )->ID : null );
    return ! empty( $cats ) ? $cats[0] : null;
}

/**
 * Единый CTA-блок в конце информационных статей (seo/08-informatsionnye-zaprosy.md).
 * Секция #cta уже получает бежевый фон и рваный край в styles.css (переиспользуем ID).
 */
function prinyato_blog_cta() { ?>
<section class="sec blog-cta" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head">
      <span class="eyebrow">Нужна помощь инженера?</span>
      <h2 class="sh">Приёмка с экспертом в Калининграде и области</h2>
      <p class="sec-lead">Найдём скрытые дефекты, оформим официальный акт и добьёмся устранения за счёт застройщика. Работаем и дистанционно — по доверенности.</p>
    </div>
    <div class="cta-row">
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>
<?php }

/**
 * Длина и «хвост» анонса записи в ленте блога.
 */
add_filter( 'excerpt_length', function () { return 28; } );
add_filter( 'excerpt_more',  function () { return '…'; } );

// Contact Form 7: отключаем авто-<p>/<br>, иначе wpautop оборачивает поля в <p>
// и вставляет <br> между ними — наша grid-вёрстка формы (Имя/Фамилия в ряд) ломается.
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Карта «слаг страницы → название услуги» — единый источник истины
 * для заголовка попапа (footer.php) и пометки услуги в CRM (обработчик ниже).
 */
function prinyato_service_map() {
    return array(
        'priemka-kvartiry-ot-zastroyschika' => 'Приёмка от застройщика',
        'priemka-kvartiry-v-novostroyke'    => 'Приёмка в новостройке',
        'priemka-domov'                     => 'Приёмка домов и таунхаусов',
        'priemka-kvartiry-posle-remonta'    => 'Приёмка после ремонта',
        'tehnadzor-remonta-kvartiry'        => 'Технадзор за ремонтом',
        'distantsionnaya-priemka'           => 'Дистанционная приёмка',
        'razovyy-audit-remonta'             => 'Разовый аудит ремонта',
        'finalnaya-priemka-remonta'         => 'Финальная приёмка ремонта',
        'priemka-kvartir-zelenogradsk'      => 'Приёмка в Зеленоградске',
        'priemka-kvartir-svetlogorsk'       => 'Приёмка в Светлогорске',
        'priemka-kvartir-pionerskiy'        => 'Приёмка в Пионерском',
    );
}

/**
 * Название услуги по пути/слагу (берём первый сегмент пути). '' если не услуга.
 */
function prinyato_service_label( $path_or_slug ) {
    $slug = trim( (string) $path_or_slug, '/' );
    if ( false !== strpos( $slug, '/' ) ) {
        $parts = explode( '/', $slug );
        $slug  = $parts[0];
    }
    $map = prinyato_service_map();
    return isset( $map[ $slug ] ) ? $map[ $slug ] : '';
}

/**
 * Текст попапа заявки под текущую страницу.
 * Страница услуги → заголовок = название услуги. Иначе универсальный оффер.
 * Возвращает array( 'eyebrow', 'title', 'sub' ).
 */
function prinyato_lead_copy() {
    $service = '';
    $obj = get_queried_object();
    if ( ( $obj instanceof WP_Post ) && ! is_front_page() ) {
        $service = prinyato_service_label( $obj->post_name );
    }
    if ( '' !== $service ) {
        return array(
            'eyebrow' => 'Заявка на услугу',
            'title'   => $service,
            'sub'     => 'Перезвоним в течение 15 минут, уточним детали объекта и назовём точную цену.',
        );
    }
    return array(
        'eyebrow' => 'Заявка',
        'title'   => 'Оставьте заявку — подберём услугу и рассчитаем стоимость',
        'sub'     => 'Перезвоним в течение 15 минут, поможем выбрать услугу под ваш объект и назовём точную цену.',
    );
}

/**
 * Дублирование заявки в Telegram-группу менеджеров (#2).
 * Токен и chat_id — секреты в wp-config (PRINYATO_TG_BOT_TOKEN / PRINYATO_TG_CHAT_ID).
 * Нет констант → тихо выходим. Запрос неблокирующий: не тормозит отправку формы
 * и сбой Telegram не влияет на запись лида в CRM.
 */
function prinyato_tg_notify( $text ) {
    if ( ! defined( 'PRINYATO_TG_BOT_TOKEN' ) || ! PRINYATO_TG_BOT_TOKEN ) return;
    if ( ! defined( 'PRINYATO_TG_CHAT_ID' )   || ! PRINYATO_TG_CHAT_ID )   return;
    wp_remote_post( 'https://api.telegram.org/bot' . PRINYATO_TG_BOT_TOKEN . '/sendMessage', array(
        'timeout'  => 8,
        'blocking' => false,
        'body'     => array(
            'chat_id'                  => PRINYATO_TG_CHAT_ID,
            'text'                     => $text,
            'parse_mode'               => 'HTML',
            'disable_web_page_preview' => 'true',
        ),
    ) );
}

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

    // UTM-метки и источник перехода — приходят скрытыми полями формы (см. js/lead.js) в $_POST.
    $post = function ( $k ) {
        return isset( $_POST[ $k ] ) ? sanitize_text_field( wp_unslash( $_POST[ $k ] ) ) : '';
    };
    $page     = $post( 'pp_page' );
    $landing  = $post( 'pp_landing' );
    $referrer = $post( 'pp_referrer' );
    $quiz     = $post( 'pp_quiz' ); // ответы квиза «Расчёт стоимости» (js/quiz.js)
    $service  = prinyato_service_label( $page ); // на какую услугу заявка (по странице)

    $comments = 'Заявка с сайта prinyatopro.ru. Согласие на обработку ПД и ознакомление с политикой получены.';
    if ( $service )  { $comments .= "\nУслуга: " . $service; }
    if ( $quiz )     { $comments .= "\nОтветы квиза: " . $quiz; }
    if ( $page )     { $comments .= "\nСтраница заявки: " . $page; }
    if ( $landing )  { $comments .= "\nПервый вход: " . $landing; }
    if ( $referrer ) { $comments .= "\nРеферер: " . $referrer; }

    $src_desc = ( $quiz ? 'Квиз «Расчёт стоимости»' : 'Форма «Заявка»' ) . ' на prinyatopro.ru'
              . ( $service ? ' · ' . $service : '' ); // услуга в источнике — переносится лид→сделка при конвертации

    $fields = array(
        'TITLE'              => 'Заявка' . ( $service ? ': ' . $service : ' с сайта' ) . ( $quiz ? ' (квиз)' : '' ) . ( $name ? ' — ' . $name : '' ),
        'NAME'               => $first,
        'LAST_NAME'          => $last,
        'SOURCE_ID'          => 'WEB',
        'SOURCE_DESCRIPTION' => $src_desc,
        'PHONE'              => array( array( 'VALUE' => $phone, 'VALUE_TYPE' => 'WORK' ) ),
        'COMMENTS'           => $comments,
    );

    // Услуга в отдельное кастомное поле лида. Код поля (UF_CRM_…) — секрет в wp-config
    // (константа PRINYATO_B24_UF_SERVICE), чтобы не хардкодить в теме. Нет константы → пропускаем.
    if ( '' !== $service && defined( 'PRINYATO_B24_UF_SERVICE' ) && PRINYATO_B24_UF_SERVICE ) {
        $fields[ PRINYATO_B24_UF_SERVICE ] = $service;
    }

    // Штатные UTM-поля лида Битрикс24 (заполняются только при наличии).
    $utm_map = array(
        'utm_source'   => 'UTM_SOURCE',
        'utm_medium'   => 'UTM_MEDIUM',
        'utm_campaign' => 'UTM_CAMPAIGN',
        'utm_content'  => 'UTM_CONTENT',
        'utm_term'     => 'UTM_TERM',
    );
    foreach ( $utm_map as $src => $b24 ) {
        $v = $post( $src );
        if ( '' !== $v ) { $fields[ $b24 ] = $v; }
    }

    // Дублируем заявку в Telegram-группу менеджеров (#2) — до логики CRM, шлём всегда.
    $esc = function ( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8' ); };
    $tg  = "🔔 <b>Новая заявка с сайта</b>\n";
    if ( $name )  { $tg .= "👤 " . $esc( $name ) . "\n"; }
    if ( $phone ) { $tg .= "📞 " . $esc( $phone ) . "\n"; }
    $tg .= "🛠 Услуга: " . ( $service ? $esc( $service ) : 'общая / не указана' ) . "\n";
    if ( $quiz ) { $tg .= "📝 Квиз: " . $esc( $quiz ) . "\n"; }
    if ( $page ) { $tg .= "📄 Страница: " . $esc( $page ) . "\n"; }
    $utm_line = trim( $post( 'utm_source' ) . ' / ' . $post( 'utm_medium' ) . ' / ' . $post( 'utm_campaign' ), ' /' );
    if ( '' !== $utm_line ) { $tg .= "🔗 UTM: " . $esc( $utm_line ) . "\n"; }
    prinyato_tg_notify( $tg );

    // --- Дедупликация (#4), версия под «простой режим» CRM (включён на портале):
    // crm.lead.add мгновенно авто-конвертируется в Контакт+Сделку, поэтому искать
    // «живые лиды» бессмысленно (все S/CONVERTED). Логика по сущностям простого режима:
    //   контакт по телефону есть + у него ОТКРЫТАЯ сделка → комментарий в сделку, дубль не плодим;
    //   контакт есть, открытых сделок нет → новая сделка на этого контакта (новый запрос);
    //   контакта нет → обычный crm.lead.add (авто-конверт создаст контакт+сделку).
    $b24 = function ( $method, $body ) {
        $r = wp_remote_post( rtrim( PRINYATO_B24_WEBHOOK, '/' ) . '/' . $method . '.json', array(
            'timeout' => 12,
            'body'    => $body,
        ) );
        if ( is_wp_error( $r ) ) return null;
        return json_decode( wp_remote_retrieve_body( $r ), true );
    };
    if ( '' !== $phone ) {
        $dup = $b24( 'crm.duplicate.findbycomm', array(
            'type'        => 'PHONE',
            'values'      => array( $phone ),
            'entity_type' => 'CONTACT',
        ) );
        $contact_ids = ( $dup && isset( $dup['result']['CONTACT'] ) ) ? (array) $dup['result']['CONTACT'] : array();
        if ( $contact_ids ) {
            $cid   = (int) reset( $contact_ids );
            $deals = $b24( 'crm.deal.list', array(
                'filter' => array( 'CONTACT_ID' => $cid, 'CLOSED' => 'N' ),
                'select' => array( 'ID' ),
                'order'  => array( 'ID' => 'DESC' ),
            ) );
            $open_deal = ( $deals && ! empty( $deals['result'] ) ) ? (int) $deals['result'][0]['ID'] : 0;
            if ( $open_deal ) {
                $b24( 'crm.timeline.comment.add', array(
                    'fields' => array(
                        'ENTITY_ID'   => $open_deal,
                        'ENTITY_TYPE' => 'deal',
                        'COMMENT'     => "Повторная заявка с сайта (тот же телефон).\n" . $comments,
                    ),
                ) );
                return; // дубль не создаём
            }
            // Контакт знакомый, но открытых сделок нет — это новый запрос: сделка на него.
            $deal_fields = array(
                'TITLE'              => $fields['TITLE'],
                'CONTACT_ID'         => $cid,
                'SOURCE_ID'          => 'WEB',
                'SOURCE_DESCRIPTION' => $fields['SOURCE_DESCRIPTION'],
                'COMMENTS'           => $comments,
            );
            foreach ( array( 'UTM_SOURCE', 'UTM_MEDIUM', 'UTM_CAMPAIGN', 'UTM_CONTENT', 'UTM_TERM' ) as $u ) {
                if ( isset( $fields[ $u ] ) ) { $deal_fields[ $u ] = $fields[ $u ]; }
            }
            if ( '' !== $service && defined( 'PRINYATO_B24_UF_SERVICE' ) && PRINYATO_B24_UF_SERVICE ) {
                $deal_fields[ PRINYATO_B24_UF_SERVICE ] = $service;
            }
            $b24( 'crm.deal.add', array(
                'fields' => $deal_fields,
                'params' => array( 'REGISTER_SONET_EVENT' => 'Y' ),
            ) );
            return;
        }
    }

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
