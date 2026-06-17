<?php
/**
 * Шаблон страницы «Технический надзор ремонта» (/tehnadzor-remonta-kvartiry/).
 * Хаб услуги №2 Продуктовой матрицы 2.0. Подхватывается по слагу (WP page ID 15).
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у /tseny/ — рваные края без правок CSS.
 * Уникальный контент. Текст — подготовка_страниц/07-tehnadzor-ФИНАЛ.md.
 * Ключевая оговорка матрицы: инженер НЕ советует платить/не платить. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Технический надзор ремонта","item":"https://prinyatopro.ru/tehnadzor-remonta-kvartiry/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Технический надзор ремонта",
  "serviceType":"Строительный контроль ремонта",
  "description":"Независимый контроль качества ремонта на ключевых этапах с актом после каждого выезда. Месячное сопровождение: «Мини» и «Стандарт».",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"},
  "offers":{"@type":"Offer","priceCurrency":"RUB","price":"16000","description":"Технадзор «Мини» — 2 плановых выезда в месяц"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="tehnadzor" data-section="tehnadzor">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуга</span>
      <h1 class="sh">Технический надзор ремонта</h1>
      <p class="sec-lead">Независимо контролируем качество ремонта на ключевых этапах, пока работает ваша бригада. После каждого выезда — акт с замечаниями и фото, чтобы вы понимали, за что платите строителям.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <p class="micro" data-reveal>Акт после каждого выезда · Проверка только личным выездом инженера · Оплата помесячно · Выезд по Калининграду и области</p>
  </div>
</section>

<!-- ===== ЗАЧЕМ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зачем это нужно</span>
      <h2 class="sh">Чтобы платить за ремонт, а не за переделки</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Когда ремонт идёт без контроля, нарушения вылезают позже — когда стяжка залита, стены закрыты, а бригада уже получила деньги. Переделать скрытый этап стоит в разы дороже, чем поймать ошибку вовремя.</p>
      <p>Мы независимы от вашей бригады и сами ничего не ремонтируем, поэтому проверяем чужую работу без конфликта интересов. Сами мы не рекомендуем, платить подрядчику или нет — мы фиксируем техническое состояние работ, а решение об оплате остаётся за вами.</p>
    </div>
  </div>
</section>

<!-- ===== ЧТО КОНТРОЛИРУЕМ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Объём работ</span>
      <h2 class="sh">Что контролируем на этапах</h2>
      <p class="sec-lead">Главное — поймать скрытые работы до того, как их закроют. Поэтому проверяем по ключевым этапам.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li><b>Инженерные сети</b> — разводка электрики и сантехники до штробления и зашивки.</li>
        <li><b>Гидроизоляция</b> — санузлы и мокрые зоны перед стяжкой и плиткой.</li>
        <li><b>Стяжка и штукатурка</b> — толщина, ровность, технология, отсутствие пустот и трещин.</li>
        <li><b>Шпаклёвка и малярные работы</b> — подготовка поверхностей под финиш.</li>
        <li><b>Плиточные работы</b> — укладка, уклоны, примыкания, пустоты под плиткой.</li>
        <li><b>Финальная сдача</b> — качество финишной отделки перед расчётом с бригадой.</li>
      </ul>
      <p>Проверяем только личным выездом инженера с приборами. Фото и видео от бригады технический осмотр не заменяют — на них не видно ни ровность, ни скрытые нарушения.</p>
    </div>
  </div>
</section>

<!-- ===== ФОРМАТЫ И ЦЕНА (бежевая) ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Форматы</span>
      <h2 class="sh">Сопровождение и цена</h2>
      <p class="sec-lead">Технадзор — это месячное сопровождение с оплатой вперёд. Два формата под объём ремонта.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc">
        <span class="num-tag">Мини</span>
        <h3>Технадзор «Мини»</h3>
        <p>2 плановых выезда в месяц для объектов до 80 м². Контроль ключевых этапов и акт после каждого выезда.</p>
        <div class="price">16 000 ₽/мес <small>2 выезда</small></div>
      </div>
      <div class="svc">
        <span class="num-tag">Стандарт</span>
        <h3>Технадзор «Стандарт»</h3>
        <p>4 плановых выезда в месяц, ориентир — раз в неделю. Для активной фазы ремонта и больших объектов.</p>
        <div class="price">от 30 000 ₽/мес <small>4 выезда</small></div>
      </div>
    </div>
    <p class="micro" data-reveal>Объекты свыше 80 м² — по тарифной сетке. Акт после каждого выезда: что проверено, что выполнено, какие замечания, фото и статус по этапу.</p>
  </div>
</section>

<!-- ===== ЧТО НЕ ВХОДИТ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что не входит в технадзор</h2>
      <p class="sec-lead">Мы технический контролёр, а не прораб и не юрист.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор со строителями от вашего имени.</li>
        <li>Не управляем ремонтом и не контролируем бригаду ежедневно.</li>
        <li>Не отвечаем за действия подрядчиков и не решаем за вас, платить или нет.</li>
      </ul>
      <p>Наша работа — дать вам честное техническое заключение по качеству на каждом этапе. Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наши акты станут для этого основой.</p>
    </div>
  </div>
</section>

<!-- ===== СВЯЗАННЫЕ УСЛУГИ ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Смежное</span>
      <h2 class="sh">Если месячное сопровождение не нужно</h2>
      <p class="sec-lead">Иногда хватает одного выезда или проверки в конце — выберите подходящий формат.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Разовый технический аудит ремонта</h3><p>Один выезд: проверить состояние работ или принять отдельный этап.</p><a class="more" href="/razovyy-audit-remonta/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Финальная приёмка ремонта</h3><p>Проверка готового ремонта перед окончательным расчётом со строителями.</p><a class="more" href="/finalnaya-priemka-remonta/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Приёмка квартиры от застройщика</h3><p>Если ремонт ещё впереди, а квартиру нужно принять у застройщика.</p><a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о технадзоре</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Чем технадзор отличается от разового аудита?</summary><p>Технадзор — это сопровождение всего ремонта с регулярными выездами и актом после каждого. <a href="/razovyy-audit-remonta/">Разовый аудит</a> — один выезд под конкретный вопрос, без месячного договора.</p></details>
      <details data-reveal><summary>Как часто вы выезжаете на объект?</summary><p>В «Мини» — 2 раза в месяц, в «Стандарт» — 4 (ориентир раз в неделю). Выезды планируем под ключевые этапы, чтобы поймать скрытые работы до закрытия.</p></details>
      <details data-reveal><summary>Вы советуете, платить бригаде или нет?</summary><p>Нет. Мы фиксируем техническое состояние работ и даём заключение по качеству. Решение об оплате вы принимаете сами в рамках договора с подрядчиком.</p></details>
      <details data-reveal><summary>Можно проверить только один этап?</summary><p>Да. Для этого есть <a href="/razovyy-audit-remonta/">разовый технический аудит</a> — один выезд без месячного сопровождения.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Возьмите ремонт под технический контроль</h2>
      <p class="sec-lead">Расскажите про объект и стадию ремонта — подберём формат и посчитаем стоимость.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
