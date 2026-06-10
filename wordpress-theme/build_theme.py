#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Генератор WordPress-темы `prinyato` из статической главной (главная/index.html).

Зачем: дизайн главной свёрстан вручную (GSAP/Lenis/рваная вёрстка). Чтобы он стал
НАСТОЯЩЕЙ главной WordPress (а не статикой в /glavnaya/), нужен PHP-шаблон с
wp_head()/wp_body_open()/wp_footer() — именно через эти хуки плагины (Я.Метрика,
LiteSpeed, Rank Math, Contact Form 7/Flamix) вставляют свой код.

Скрипт разрезает index.html на header.php / front-page.php / footer.php,
вставляет WP-хуки, переписывает пути ассетов на тему и копирует css/js/assets.
Правишь главная/* → перезапускаешь скрипт → дерево темы пересобрано.
"""
import os, re, shutil, sys

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
SRC = os.path.join(ROOT, "главная")
SRC_HTML = os.path.join(SRC, "index.html")
THEME = os.path.join(ROOT, "wordpress-theme", "prinyato")
THEME_SLUG = "prinyato"
SKIP_ASSETS = {"bg.jpg", "bg-mobile.jpg", "paper_desk.jpg",  # неиспользуемые тяжёлые фоны
               "gsap.min.js", "ScrollTrigger.min.js"}        # GSAP убран — карусель на vanilla, Lenis на своём RAF

def read(p):
    with open(p, encoding="utf-8") as f:
        return f.read()

def write(p, s):
    os.makedirs(os.path.dirname(p), exist_ok=True)
    with open(p, "w", encoding="utf-8") as f:
        f.write(s)

def rewrite(html):
    # 1) абсолютные ссылки glavnaya → корень / тема
    html = html.replace(
        "https://prinyatopro.ru/glavnaya/assets/img/",
        "https://prinyatopro.ru/wp-content/themes/%s/assets/img/" % THEME_SLUG)
    html = html.replace("https://prinyatopro.ru/glavnaya/#faq", "https://prinyatopro.ru/#faq")
    html = html.replace("https://prinyatopro.ru/glavnaya/", "https://prinyatopro.ru/")
    # 2) относительные ассеты css/ js/ assets/ → URI темы
    html = re.sub(r'(href|src)="(css|js|assets)/', r'\1="<?php echo $T; ?>/\2/', html)
    return html

def strip_for_yoast(html):
    """Убираем из <head> теги, которыми теперь управляет Yoast SEO (иначе дубли).
    Оставляем: <meta name=keywords> (Yoast их не выводит) и JSON-LD (нашу схему;
    схему Yoast гасим фильтром в functions.php). Title теперь даёт title-tag/Yoast."""
    html = re.sub(r'[ \t]*<title>.*?</title>\n?', '', html, flags=re.S)
    html = re.sub(r'[ \t]*<meta name="description"[^>]*>\n?', '', html)
    html = re.sub(r'[ \t]*<meta property="og:[^"]*"[^>]*>\n?', '', html)
    html = re.sub(r'[ \t]*<meta name="twitter:[^"]*"[^>]*>\n?', '', html)
    html = re.sub(r'[ \t]*<link rel="canonical"[^>]*>\n?', '', html)
    return html

def main():
    html = read(SRC_HTML)
    html = rewrite(html)
    html = strip_for_yoast(html)  # убрать дубль-теги, которыми управляет Yoast

    # WP-хуки
    html = re.sub(r'(<body[^>]*>)', r'\1\n<?php wp_body_open(); ?>', html, count=1)
    html = html.replace("</head>", "<?php wp_head(); ?>\n</head>", 1)
    html = html.replace("</body>", "<?php wp_footer(); ?>\n</body>", 1)

    # разрез по <main>
    i0 = html.index('<main id="primary"')
    i1 = html.index("</main>") + len("</main>")
    header_part = html[:i0].rstrip() + "\n"
    main_part = html[i0:i1]
    footer_part = html[i1:].lstrip()

    head_var = "<?php $T = get_template_directory_uri(); ?>\n"

    # чистим тему и пишем файлы
    if os.path.isdir(THEME):
        shutil.rmtree(THEME)
    os.makedirs(THEME, exist_ok=True)

    write(os.path.join(THEME, "header.php"), head_var + header_part)
    write(os.path.join(THEME, "front-page.php"),
          "<?php get_header(); $T = get_template_directory_uri(); ?>\n" + main_part + "\n<?php get_footer(); ?>\n")
    write(os.path.join(THEME, "footer.php"), head_var + footer_part)

    # index.php — фолбэк (страницы/блог фазы 2); сейчас просто отдаёт каркас
    write(os.path.join(THEME, "index.php"),
          "<?php get_header(); ?>\n"
          "<main id=\"primary\" class=\"wrap\" style=\"padding:60px 0\">\n"
          "  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>\n"
          "    <article <?php post_class(); ?>>\n"
          "      <h1><?php the_title(); ?></h1>\n"
          "      <div><?php the_content(); ?></div>\n"
          "    </article>\n"
          "  <?php endwhile; else : ?>\n"
          "    <p>Контент готовится.</p>\n"
          "  <?php endif; ?>\n"
          "</main>\n"
          "<?php get_footer(); ?>\n")

    # style.css — заголовок темы
    write(os.path.join(THEME, "style.css"),
          "/*\n"
          "Theme Name: ПринятоПро\n"
          "Theme URI: https://prinyatopro.ru/\n"
          "Author: ПринятоПро\n"
          "Description: Самостоятельная тема лид-генерационного сайта по приёмке квартир и технадзору (Калининград). Главная свёрстана вручную (GSAP/Lenis), плагины работают через wp_head/wp_footer.\n"
          "Version: 1.0.0\n"
          "Requires at least: 6.5\n"
          "Requires PHP: 7.4\n"
          "Text Domain: prinyato\n"
          "*/\n"
          "/* Стили темы — в assets/css/ (tokens.css, styles.css), подключены в header.php. */\n")

    # functions.php
    write(os.path.join(THEME, "functions.php"), FUNCTIONS_PHP)

    # копируем ассеты (css, js, assets) с пропуском тяжёлых неиспользуемых фонов
    for sub in ("css", "js", "assets"):
        s = os.path.join(SRC, sub)
        if not os.path.isdir(s):
            continue
        d = os.path.join(THEME, sub)
        shutil.copytree(s, d)
    # удалить пропускаемые фоны
    for root_, _, files in os.walk(THEME):
        for fn in files:
            if fn in SKIP_ASSETS or fn == ".DS_Store":
                os.remove(os.path.join(root_, fn))

    # отчёт
    n = sum(len(f) for _, _, f in os.walk(THEME))
    print("Тема собрана:", THEME)
    print("Файлов всего:", n)
    for f in ("header.php", "front-page.php", "footer.php", "functions.php", "style.css", "index.php"):
        p = os.path.join(THEME, f)
        print("  %-16s %d байт" % (f, os.path.getsize(p)))

FUNCTIONS_PHP = """<?php
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
"""

if __name__ == "__main__":
    main()
