---
version: 1.0
name: ПринятоПро — Design System «Акт / Досье»
description: >
  Действующая дизайн-система главной prinyatopro.ru, снятая с исходников темы prinyato (tokens.css + styles.css + front-page.php) и сверенная с боевым рендером 2026-06-14.
  Концепция — «официальный акт приёмки / досье»: тёплая бумага, оторванные клочки с рваными краями, красные рукописные пометки и штампы-печати поверх строгой типографики Oswald. Не Bricks — server-rendered PHP.
source: https://prinyatopro.ru/ (WordPress, кастомная тема `prinyato`)
captured: 2026-06-14
tags: ["real-estate-inspection", "kaliningrad", "act-dossier", "warm-paper", "torn-paper", "rough-notation", "stamp-aesthetic", "ru-cyrillic"]
colors:
  # фон — тёплый белый; «бумага» карточек желтоватая для контраста
  paper: "#fcfaf6"          # фон страницы (background)
  paper-2: "#f7f3ea"        # альт-секции
  panel: "#f3ead4"          # клочок бумаги (желтоватый)
  panel-2: "#f0e6cd"        # карточки потеплее
  card-paper: "#f2e8d0"     # основной цвет карточек-клочков (surface)
  ink: "#221d16"            # основной текст / тёмные секции (on-background)
  ink-soft: "#4f463a"       # вторичный текст
  ink-faint: "#7a6f5d"      # третичный/подписи  ⚠ контраст на грани AA для <18px
  red: "#cc2018"            # акцент-штамп / primary CTA
  red-dark: "#a8170f"       # hover + «жёсткая тень» кнопки
  red-on-dark: "#ff6258"    # тот же акцент на тёмных секциях
  green: "#3c7a4e"          # «принято / исправлено»
  line: "#dccfb1"           # линии разлиновки / границы
  line-dark: "#c2b18d"      # более тёмные границы / поля ввода
  on-primary: "#ffffff"
typography:
  fonts:
    display: "Oswald"        # заголовки, штампы, кнопки, метки — ВСЕГДА uppercase
    body: "Golos Text"       # основной текст (кириллица), fallback system-ui
    hand: "Caveat"           # красные рукописные пометки (eyebrow, подписи)
  hero-h1:
    fontFamily: "Oswald"
    fontSize: "clamp(40px, 6vw, 72px)"
    fontWeight: "700"
    lineHeight: "0.94"
    textTransform: "uppercase"
    letterSpacing: "0.005em"
  section-h2:            # .sh
    fontFamily: "Oswald"
    fontSize: "clamp(34px, 5vw, 58px)"
    fontWeight: "700"
    lineHeight: "1.0"
    textTransform: "uppercase"
  card-h3:              # .sh3 / .svc h3 / card <b>
    fontFamily: "Oswald"
    fontSize: "20–24px"
    fontWeight: "600"
    textTransform: "uppercase"
  eyebrow:              # рукописная метка над заголовком
    fontFamily: "Caveat"
    fontSize: "30px"
    fontWeight: "700"
    color: "red"
    transform: "rotate(-2deg)"
  body:
    fontFamily: "Golos Text"
    fontSize: "17.5px"   # 16.5px ≤680px
    lineHeight: "1.6"
  section-lead:         # .sec-lead
    fontFamily: "Golos Text"
    fontSize: "19.5px"
    color: "ink-soft"
rounded:
  card-clip: "torn (clip-path polygon), НЕ радиус"
  button: "6px"          # --radius
  input: "10–11px"
  pill-dot: "9999px"
spacing:
  wrap: "1180px"         # --wrap, контентная колонка
  gutter: "24px"         # --gap / .wrap padding
  section: "64px"        # .sec вертикаль (44px ≤680px)
  section-head-mb: "34px"
  card-gap: "18px"
shadow:
  card: "0 14px 30px rgba(30,20,8,.16)"     # --shadow-card (через filter:drop-shadow — clip-path режет box-shadow)
  deep: "0 26px 52px rgba(30,20,8,.34)"
  button: "0 3px 0 var(--red-dark)"          # «жёсткая» печатная тень, не размытая
components:
  button-primary:        # .btn
    background: "red"
    color: "#fff"
    font: "Oswald uppercase 600, letter-spacing .03em"
    padding: "14px 26px"
    radius: "6px"
    shadow: "0 3px 0 red-dark"
    active: "translateY(2px); shadow:none"   # эффект «нажатой печати»
  button-ghost:          # .btn.ghost — единственная прозрачная кнопка
    background: "transparent"
    border: "2px solid ink"
    note: "осознанная вторичная кнопка с нормальной рамкой и контрастом — не нарушает анти-паттерн прозрачных CTA"
  card-scrap:            # .svc/.exp/.rev/.gitem/.pstep/.check-card/.equip-card
    background: "card-paper"
    clip-path: "var(--torn-clip) | var(--torn-clip-2) (чередуются nth-child)"
    border: "none; тень — отдельным слоем filter:drop-shadow"
    fallback: "@supports no clip-path → border:1px line + radius:6px + box-shadow"
  stamp:                 # .stamp / .pstamp / .res-stamp
    font: "Oswald 700 uppercase"
    border: "3px double red"
    radius: "8px"
    transform: "rotate(-8…-13deg)"
    opacity: "0.82"
    blend: "mix-blend-mode: multiply (печать «впитывается» в бумагу)"
  trust-band:            # .trust
    background: "ink (тёмная)"
    text: "#fff / #cfc4ad"
    accentNum: "red-on-dark"
  dark-section:          # .distance, .lead-band, .lead-modal, .site-footer
    background: "ink"
    headings: "#fff"
    body: "#d3c8b2 / #cfc4ad"
    eyebrow+icons: "red-on-dark (#ff6258)"
  polaroid-photo:        # .photo / .cc-photo / .ec-photo / .exp-photo / .dist-pic
    border: "4–8px solid #fff"
    shadow: "смещённая жёсткая тень rgba(34,29,22,.18)"
    objectFit: "cover + aspect-ratio (4/5 hero, 3/2 cards, 3/4 портреты)"
motion:
  smooth-scroll: "Lenis lerp 0.12; html.lenis{scroll-behavior:auto} (иначе двойная анимация)"
  reveal: "[data-reveal] opacity:0→1 + translateY(24px)→0, .6s; ГЕЙТ классом .js-anim на <html> (без JS контент виден — безопасный progressive enhancement)"
  rough-notation: "красные пометки дорисовываются по IntersectionObserver(0.6): underline по умолчанию, box на uslugi/faq, circle на experts/geo; hero #mark-lead underline, #heroMsgs circle"
  icon-draw: "контуры иконок (stroke-dasharray:90) «пишутся» с задержками — @keyframes ppDraw"
  scroll-jack: "[data-hscroll] sticky-pin + лента едет по transform; rAF + lerp 0.14 (в такт Lenis); ПК ‘desktop’ для ‘Что проверяем’, мобайл для оборудования/экспертов; fallback — ручной swipe со snap"
  handwriting: "/spasibo/ — ‘Заявка принята’ выписывается слева направо clip-path inset"
---

## Philosophy & Vibe

ПринятоПро продаёт **доверие к документу**. Вся система — это визуальная метафора «официального акта приёмки и досье на квартиру»: тёплая бумага в зерне, листы с **по-настоящему оторванными краями** (органичный SVG-клип, не зигзаг), **красные пометки от руки** (подчёркивания, обводки, кружки), **штампы-печати** двойной рамкой под наклоном, скрепки и «полароидные» фото с белым бортиком и подписью от руки.

Поверх этой «бумажной» теплоты лежит **строгая, почти типографская дисциплина**: все заголовки, кнопки и метки — `Oswald` в верхнем регистре с узким трекингом; основной текст — гуманистический `Golos Text` с хорошей кириллицей. Контраст «строгий шрифт ↔ рукотворная бумага» и создаёт ощущение «эксперт с реальным актом, а не безличный колл-центр» — ровно то позиционирование, которое держит бренд.

Тёмные секции (`ink #221d16`) работают как смысловые якоря-передышки: цифры-трасты, дистанционная приёмка, форма заявки и футер выполнены инверсно (белый заголовок + красный `#ff6258` акцент), разрезая длинный светлый лонгрид на главы.

## Source Replication Doctrine

Эта система — **источник-закон** для любых новых страниц в фирменном стиле (SEO-лендинги, гео-страницы, услуги). При создании новой страницы повторять, а не переизобретать:
1. **Скелет секции:** `section.sec > .wrap(max 1180) > .sec-head(eyebrow + h2.sh + .sec-lead) > контент`. Между всеми крупными блоками — **рваная граница** (декоративный mask-слой `--torn-edge-top`, цвет берётся из `--sec-bg`).
2. **Иерархию пометок:** красная рукописная `eyebrow` (Caveat, наклон −2°) → крупный `h2.sh` (Oswald uppercase) с rough-notation поверх → `.sec-lead`.
3. **Карточки-клочки:** `card-paper` + чередование `--torn-clip` / `--torn-clip-2`, тень только через `filter:drop-shadow` (clip-path режет box-shadow).
4. **Тёмные секции** строить инверсно по контракту `dark-section` (заголовок #fff, текст #d3c8b2, акцент #ff6258).
5. **Фото** — всегда «полароид»: белый бортик 4–8px + смещённая жёсткая тень + `object-fit:cover` с фиксированным `aspect-ratio`.

## Color Guidance

- **`red #cc2018`** — несущий акцент бренда: штампы, пометки, primary-CTA, цены, активные точки. На тёмном фоне — осветлённый `#ff6258` (иначе тонет в `ink`). ⚠️ Красного МНОГО: он одновременно декоративный (пометки/штампы) и функциональный (кнопки/ссылки). Держать дисциплину: **заливная красная кнопка — только для главного целевого действия экрана**; ссылки/цены/пометки красные, но не должны конкурировать с CTA по насыщенности.
- **`ink #221d16`** — текст и фон тёмных секций; пара `ink / paper` даёт высокий контраст (AAA).
- **`ink-soft #4f463a`** — вторичный текст, контраст ок.
- **`ink-faint #7a6f5d`** — третичные подписи/мелочь. ⚠️ На `paper #fcfaf6` контраст ≈ 4.3:1 — на грани AA, для текста <18px усиливать.
- **Бумажные уровни** `paper → paper-2 → panel → card-paper` — вложенность: тёплый-белый фон → желтоватый клочок карточки. `green #3c7a4e` — только семантика «принято/гарантия» (левый бордюр у .gitem).

## Typography Hierarchy

- **Display / заголовки / кнопки / метки:** `Oswald` (400–700), **всегда `text-transform:uppercase`**, узкий трекинг. Несёт «штамповую», документальную строгость.
- **Body / интерфейс:** `Golos Text` (отличная кириллица), 17.5px / lh 1.6.
- **Рукописное:** `Caveat` (700), только красным — eyebrow-метки, подписи к фото, «Листайте вправо →», «Заявка принята». Создаёт «человеческий росчерк поверх документа».
- Подключение Google Fonts с кириллицей; держать только эти три семейства — не подмешивать новые шрифты на новых страницах.

## Layout & Grid

- Контентная колонка `--wrap 1180px`, боковые поля 24px, `.sec` вертикаль 64px (44px на мобайле).
- Сетки: услуги/эксперты/видео `repeat(3,1fr)` → 2 → 1; трасты `repeat(6)` → 3 → 2 → 1; дистанционная/гарантии/гео/отзывы — две колонки → одна.
- **Горизонтальные ленты** (`[data-hscroll]`): на ПК «Что проверяем» едет скролл-джеком (страница вниз = лента влево, sticky-pin), на мобайле — оборудование и эксперты; fallback везде — ручной swipe со scroll-snap. Лента этапов (5 шагов) — обычная snap-карусель со стрелками и точками (без джека).

## Signature Devices (фирменные приёмы — обязательны к переносу)

1. **Оторванный край** — органичный SVG-mask (`--torn-edge` / `--torn-edge-top`, тайл 720px, repeat-x) на шапке/футере/границах секций; карточки рвутся через `clip-path` (`--torn-clip` / `--torn-clip-2`).
2. **Штамп-печать** — `3px double red`, наклон, `opacity .82`, `mix-blend-mode:multiply` (впитывается в бумагу). Номера шагов, «НЕ ПРОВЕРЕНО», цены.
3. **Rough-notation** — красные пометки «от руки» дорисовываются при скролле (underline/box/circle по типу секции).
4. **Полароид-фото** — белый бортик + смещённая жёсткая тень + рукописная подпись (Caveat).
5. **Зерно бумаги** — `body::before` фрактальный SVG-шум, opacity .06, фиксированный.
6. **«Жёсткая» тень кнопки** `0 3px 0 red-dark` + `active:translateY` — эффект физического нажатия штампа.

## Motion

Lenis (lerp 0.12) для всего сайта; reveal-анимации и «дорисовка» иконок/пометок гейтятся классом `.js-anim` (без JS — всё в финальном состоянии, контент виден и индексируется). Скролл-джек на rAF c lerp 0.14 — синхронен с Lenis, без рывков. Всё уважает `prefers-reduced-motion` (анимации выключаются, контент в финале).

## Asset Generation Rules (переключено на наш пайплайн)

- Новые изображения — **только kie.ai GPT Image 2** (поток: createTask → recordInfo → скачать temp URL сразу → sips). НЕ MCP KV, НЕ сток, НЕ Pillow-заглушки. У kie.ai нет 4:5/3:4 — генерить в 2:3 и кадрировать CSS (`object-fit:cover`+`aspect-ratio`).
- Стиль ассетов: реалистичные интерьеры новостроек/приёмок и приборы (тепловизор, лазерный нивелир, пирометр, эндоскоп, тестер) — под «полароид» с белым бортиком. Без панорамных окон в hero (обычная квартира); панорамное фото оставлено только в форме заявки.
- Удаления фона (recraft) у нас нет — изоляцию объекта заказывать промптом kie.ai или согласовывать инструмент отдельно.
- Каждый ассет → запись в `AURA_ASSET_REGISTRY.json`.

## Do's

- Наследовать скелет `.sec-head` (eyebrow → h2.sh → sec-lead) и рваные границы между блоками.
- Держать строго три шрифта (Oswald / Golos Text / Caveat) и uppercase для display.
- Тёмные секции — инверсно по контракту (заголовок #fff, акцент #ff6258).
- Фото — только «полароид» с белым бортиком и фиксированным aspect-ratio + `height:auto` (HTML width/height ломают aspect-ratio).
- Тень у клочков — через `filter:drop-shadow`, не box-shadow.

## Don'ts

- ❌ Никаких видимых плейсхолдеров в индексируемом тексте (`[N]`, `[Имя]`, `[ЖК]`, «рабочий плейсхолдер») — это сейчас главное нарушение (см. рекомендации).
- ❌ Никаких emoji в UI — только SVG/CSS-формы/штампы.
- ❌ Не добавлять прозрачные primary-кнопки (единственная прозрачная — `.btn.ghost` с рамкой 2px — это норма).
- ❌ Не подмешивать новые шрифты/радиусы/тени мимо токенов.
- ❌ Не комбинировать CSS `scroll-behavior:smooth` с Lenis (двойная анимация).
- ❌ Не ставить мелкий приглушённый текст (`ink-faint`) ниже 18px без усиления контраста.

## QA Checklist (для aura-design-reviewer на новых страницах)

- [ ] Контраст: нет ink-on-ink / white-on-white; мелкие подписи ≥ AA.
- [ ] Hero полноценный: eyebrow + H1 + lead + CTA + фото-«полароид».
- [ ] CTA: главная заливная красная — одна на экран, доминирует.
- [ ] Нет плейсхолдеров в тексте; фото — реальные/сгенерированные, не аватары-инициалы.
- [ ] Рваные границы между всеми секциями; клочки чередуют clip-1/clip-2.
- [ ] Reveal/scroll-jack гейтятся .js-anim; без JS контент виден; reduced-motion ок.
- [ ] Мобайл: ленты свайпаются, подсказка «Листайте вправо →» там, где нужно.
- [ ] Консоль без ошибок; CLS/INP в норме.
