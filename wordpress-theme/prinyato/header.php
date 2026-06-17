<?php $T = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="приёмка квартир калининград, приёмка квартиры в новостройке, приёмка квартиры от застройщика, приёмка домов, технадзор калининград, строительный контроль калининград, дистанционная приёмка квартиры">
<link rel="icon" href="<?php echo $T; ?>/assets/img/logo.png" type="image/png">
<link rel="apple-touch-icon" href="<?php echo $T; ?>/assets/img/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Golos+Text:wght@400;500;600;700&family=Caveat:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $T; ?>/css/tokens.css?v=<?php echo filemtime(get_template_directory() . '/css/tokens.css'); ?>">
<link rel="stylesheet" href="<?php echo $T; ?>/css/styles.css?v=<?php echo filemtime(get_template_directory() . '/css/styles.css'); ?>">

<!-- Schema.org JSON-LD: HomeAndConstructionBusiness + FAQPage. Реальные NAP/телефон/соцсети клиента. -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HomeAndConstructionBusiness",
      "@id": "https://prinyatopro.ru/#business",
      "name": "ПринятоПро",
      "description": "Независимая профессиональная приёмка квартир, домов и таунхаусов у застройщика и технический надзор за ремонтом в Калининграде, области и на побережье. Официальный акт с печатью, фото дефектов с привязкой к квартире, фиксированная цена в договоре, дистанционная приёмка по доверенности.",
      "url": "https://prinyatopro.ru/",
      "image": "https://prinyatopro.ru/wp-content/themes/prinyato/assets/img/act-sample.jpg",
      "telephone": "+79062377902",
      "priceRange": "от 8000 ₽",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Калининград",
        "addressRegion": "Калининградская область",
        "addressCountry": "RU",
        "streetAddress": "ул. Челнокова, 9, помещение 4, кабинет 410"
      },
      "sameAs": [
        "https://t.me/prinyatopro",
        "https://vk.com/prinyatopro"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+79062377902",
        "contactType": "customer service",
        "areaServed": "RU",
        "availableLanguage": "Russian"
      },
      "areaServed": [
        { "@type": "City", "name": "Калининград" },
        { "@type": "AdministrativeArea", "name": "Калининградская область" },
        { "@type": "City", "name": "Зеленоградск" },
        { "@type": "City", "name": "Светлогорск" },
        { "@type": "City", "name": "Пионерский" }
      ],
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "09:00",
        "closes": "19:00"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Услуги приёмки и технадзора",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Приёмка квартиры от застройщика" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Технический надзор ремонта" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Разовый технический аудит ремонта" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Финальная приёмка ремонта" } }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://prinyatopro.ru/#faq",
      "mainEntity": [
        { "@type": "Question", "name": "Сколько стоит приёмка квартиры в Калининграде?", "acceptedAnswer": { "@type": "Answer", "text": "Ориентировочно от 8 000 ₽. Точная цена зависит от площади, типа объекта и набора работ; по рынку Калининграда приёмка обычно стоит 8 000–15 000 ₽. Стоимость фиксируем в договоре заранее, без доплат на месте." } },
        { "@type": "Question", "name": "Сколько длится приёмка?", "acceptedAnswer": { "@type": "Answer", "text": "В среднем 1,5–3 часа, дом или таунхаус дольше. За это время эксперт обходит весь объект с оборудованием, фотографирует каждый дефект и вносит замечания в дефектную ведомость." } },
        { "@type": "Question", "name": "Что будет, если найдём дефекты?", "acceptedAnswer": { "@type": "Answer", "text": "Внесём их в официальный акт и дефектную ведомость — документ, который застройщик обязан исполнить. Акт приёма-передачи вы не подписываете, пока дефекты не устранены. После устранения можно заказать повторный выезд, чтобы убедиться, что всё исправлено." } },
        { "@type": "Question", "name": "Нужно ли мне присутствовать лично?", "acceptedAnswer": { "@type": "Answer", "text": "Не обязательно. Вы можете быть рядом с экспертом, подключиться по видеосвязи или полностью доверить приёмку нам по доверенности — это удобно для иногородних. В любом случае получите видеообзор, фото дефектов и официальный акт." } },
        { "@type": "Question", "name": "Реально ли принять квартиру дистанционно?", "acceptedAnswer": { "@type": "Answer", "text": "Да. Эксперт принимает квартиру по доверенности, показывает всё по видеосвязи в реальном времени, присылает видеообзор и оформляет документы. Это экономит минимум два приезда в Калининград." } },
        { "@type": "Question", "name": "Чем официальный акт отличается от обычной бумажки?", "acceptedAnswer": { "@type": "Answer", "text": "Это документ осмотра с печатью компании, подписью эксперта и фотографиями дефектов, привязанными к вашей квартире. Такой акт застройщик обязан принять и исполнить, а не отмахнуться словами «фото чужое»." } },
        { "@type": "Question", "name": "Можно ли взыскать с застройщика неустойку за дефекты?", "acceptedAnswer": { "@type": "Answer", "text": "В ряде случаев закон даёт право требовать устранения дефектов или компенсации. Конкретные варианты зависят от вашей ситуации и от закона, действующего на момент обращения. Мы зафиксируем дефекты официальными документами и подскажем, что у вас есть." } },
        { "@type": "Question", "name": "Нужны ли документы об образовании эксперта?", "acceptedAnswer": { "@type": "Answer", "text": "Да, наши эксперты — инженеры с профильным образованием и регалиями в профессиональных реестрах, документы предоставляем по запросу. Некоторые застройщики требуют подтвердить квалификацию специалиста, и у нас с этим проблем не возникает." } }
      ]
    }
  ]
}
</script>
<?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>

<!-- ===================== ШАПКА ===================== -->
<header class="site-header">
  <div class="hd-inner">
    <div class="topbar">
      <a href="<?php echo is_front_page() ? '#hero' : esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="ПринятоПро — на главную">
        <img src="<?php echo $T; ?>/assets/img/logo.png" alt="ПринятоПро — приёмка квартир и технадзор в Калининграде" width="180" height="64">
        <span class="tg">Приёмка квартир<br>и технадзор в Калининграде</span>
      </a>
      <nav class="nav" aria-label="Основная навигация">
        <div class="nav-dd" id="navDD">
          <button class="navlink dd-toggle" id="ddToggle" aria-expanded="false" aria-haspopup="true">
            Услуги
            <svg viewBox="0 0 12 8" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M1 1.5L6 6.5L11 1.5"/></svg>
          </button>
          <div class="dd-menu" role="menu">
            <a href="/priemka-kvartiry-ot-zastroyschika/" role="menuitem">Приёмка квартиры от застройщика</a>
            <a href="/tehnadzor-remonta-kvartiry/" role="menuitem">Технический надзор ремонта</a>
            <a href="/razovyy-audit-remonta/" role="menuitem">Разовый технический аудит ремонта</a>
            <a href="/finalnaya-priemka-remonta/" role="menuitem">Финальная приёмка ремонта</a>
            <a href="/uslugi/" role="menuitem" class="dd-all">Все услуги →</a>
          </div>
        </div>
        <a class="navlink" href="/tseny/">Цены</a>
        <a class="navlink" href="/o-nas/">О нас</a>
        <a class="navlink" href="/blog/">Блог</a>
        <a class="navlink" href="/kontakty/">Контакты</a>
      </nav>
      <div class="head-contact">
        <span class="hours">Ежедневно с 9:00 до 19:00</span>
        <a class="phone" href="tel:+79062377902">+7 (906) 237-79-02</a>
      </div>
      <a class="btn sm" href="#lead-modal" data-lead-open>Рассчитать цену</a>
      <button class="burger" id="burger" aria-label="Открыть меню" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
  <!-- мобильное меню -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mm-services" id="mmServices">
      <button type="button" class="mm-toggle" id="mmServicesToggle" aria-expanded="false">Услуги
        <svg viewBox="0 0 12 8" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M1 1.5L6 6.5L11 1.5"/></svg>
      </button>
      <div class="mm-sub">
        <a href="/priemka-kvartiry-ot-zastroyschika/">Приёмка квартиры от застройщика</a>
        <a href="/tehnadzor-remonta-kvartiry/">Технический надзор ремонта</a>
        <a href="/razovyy-audit-remonta/">Разовый технический аудит ремонта</a>
        <a href="/finalnaya-priemka-remonta/">Финальная приёмка ремонта</a>
        <a href="/uslugi/" class="mm-all">Все услуги →</a>
      </div>
    </div>
    <a href="/tseny/">Цены</a>
    <a href="/o-nas/">О нас</a>
    <a href="/blog/">Блог</a>
    <a href="/kontakty/">Контакты</a>
    <a class="phone" href="tel:+79062377902">+7 (906) 237-79-02</a>
    <a class="btn" href="#lead-modal" data-lead-open>Рассчитать цену</a>
  </div>
</header>
