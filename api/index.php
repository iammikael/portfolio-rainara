<?php
declare(strict_types=1);

$portfolio = [
    'nome' => 'Rainara',
    'sobrenome' => 'Vitoria',
    'profissao' => 'Estudante de Arquitetura',
];

$menu = [
    ['texto' => 'Sobre mim', 'link' => '#sobre', 'ativo' => true],
    ['texto' => 'Projetos', 'link' => '#projetos', 'ativo' => false],
    ['texto' => 'Contato', 'link' => '#contato', 'ativo' => false],
];
require __DIR__ . '/dados-projetos.php';
$imagemMiniatura = static function (string $url): string {
    return str_contains($url, 'images.unsplash.com')
        ? str_replace('w=1400', 'w=700', $url)
        : $url;
};
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($portfolio['nome'] . ' ' . $portfolio['sobrenome']) ?> | Estud. de Arquitetura</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://images.unsplash.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/portfolio.css" rel="stylesheet">
  <link href="/assets/css/projetos.css" rel="stylesheet">
</head>
<body>
  <main class="hero">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <p class="logo">Portfolio 2026</p>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Abrir menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="menu">
          <ul class="navbar-nav align-items-lg-center gap-lg-2">
            <?php foreach ($menu as $item): ?>
              <li class="nav-item">
                <a class="nav-link<?= $item['ativo'] ? ' active' : '' ?>"<?= $item['ativo'] ? ' aria-current="page"' : '' ?> href="<?= htmlspecialchars($item['link']) ?>">
                  <?= htmlspecialchars($item['texto']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </nav>

    <section id="inicio" class="container hero-content d-flex align-items-center">
      <div class="row align-items-center w-100 gy-5">
        <div class="col-lg-7">
          <h1 class="signature">
            <?= htmlspecialchars($portfolio['nome']) ?> <span class="highlight"><?= htmlspecialchars($portfolio['sobrenome']) ?></span>
          </h1>
          <p class="subtitle"><?= htmlspecialchars($portfolio['profissao']) ?></p>
        </div>
        <div class="col-lg-3 text-center text-lg-end floorplan-column">
          <svg class="floorplan" viewBox="0 0 420 300" role="img" aria-label="Planta baixa ilustrativa">
            <path class="dimension" d="M52 48h-12v194h12 M40 48h-8 M40 242h-8 M58 254v12h324v-12 M58 266v8 M382 266v8"/>
            <text class="measure" x="35" y="152" transform="rotate(-90 35 152)">6,00 m</text>
            <text class="measure" x="196" y="281">8,00 m</text>
            <rect class="wall" x="58" y="48" width="324" height="194"/>
            <path class="wall" d="M58 145h324 M203 48v97 M203 145v97 M310 145v97"/>
            <path class="door" d="M140 145v-25a25 25 0 0 1 25 25 M214 145v-25a25 25 0 0 1 25 25 M203 214h30a30 30 0 0 1 30 28 M310 196h24a24 24 0 0 1 24 24 M180 242v-30a30 30 0 0 1 30 30"/>
            <path class="door" d="M203 48h46 M311 48h42 M58 196v27"/>
            <ellipse class="door" cx="128" cy="97" rx="27" ry="11"/>
            <ellipse class="door" cx="299" cy="97" rx="27" ry="11"/>
            <ellipse class="door" cx="125" cy="190" rx="20" ry="10"/>
            <ellipse class="door" cx="352" cy="214" rx="14" ry="9"/>
            <text class="room" x="109" y="100">cozinha</text>
            <text class="room" x="284" y="100">quarto</text>
            <text class="room" x="114" y="193">sala</text>
            <text class="room" x="345" y="217">wc</text>
            <text class="room" x="224" y="234">acesso</text>
          </svg>
        </div>
      </div>
    </section>
  </main>

  <section id="sobre" class="about-section">
    <div class="container">
      <div class="row align-items-center justify-content-center g-5">
        <div class="col-md-5 col-lg-4 text-center">
          <figure class="about-photo-frame">
            <svg class="photo-border photo-border-top" viewBox="0 0 146 166" aria-hidden="true">
              <path d="M3 3.24706C3.66 3.24706 20.83 3.24706 46.825 3.08206C65.9379 2.96074 83.98 2.90706 88.15 3.41206C90.6703 3.71728 93.32 4.57706 102.415 5.07706C124.348 6.28281 139.66 6.23706 140.825 8.39706C143.231 12.8582 142.34 17.2271 141.17 23.3771C138.391 37.9835 139.34 42.8871 139.165 59.6821C139.096 66.3394 141 80.7871 141.83 92.8721C142 102.787 142.33 110.237 142.83 119.657C143 128.087 143 143.927 142 162.247" />
            </svg>
            <img src="/assets/img/sobre-mim.png" alt="Rainara VitÃ³ria sentada Ã  mesa" loading="lazy" decoding="async">
            <svg class="photo-border photo-border-bottom" viewBox="0 0 133 169" aria-hidden="true">
              <path d="M3.30157 3.00064C3.96157 5.99064 5.30157 31.7606 3.64157 46.9856C3.20144 51.0224 2.30157 58.9406 3.96157 70.1156C6.58985 87.809 5.30157 99.9006 4.47157 108.481C3.84289 114.979 3.30157 124.921 4.29657 131.986C4.88531 136.166 6.30157 146.251 10.2616 158.751C14.0721 170.779 31.9516 162.671 41.2166 162.171C77.2395 160.227 83.2616 163.001 88.2866 163.996C92.9677 164.923 98.2816 163.681 106.412 162.171C111.542 162.001 120.782 162.001 125.377 161.341C129.972 160.681 129.642 159.361 129.302 158.001" />
            </svg>
          </figure>
        </div>
        <article class="col-md-7 col-lg-6 about-copy">
          <h2>Sobre mim</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit vel eros a tempor. In sagittis facilisis nulla a aliquam. Nullam non dui quis augue tristique condimentum. Nulla porta sem nec ante facilisis commodo. Duis laoreet maximus odio eu dignissim. </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit vel eros a tempor. In sagittis facilisis nulla a aliquam. Nullam non dui quis augue tristique condimentum. Nulla porta sem nec ante facilisis commodo. Duis laoreet maximus odio eu dignissim..</p>
        </article>
      </div>
    </div>
  </section>

  <section id="projetos" class="projects-section">
    <div class="container">
      <header class="projects-header">
        <p>seleção de estudos e projetos</p>
        <h2>Projetos</h2>
      </header>

      <div class="projetos-grid">
        <?php foreach ($projetos as $projeto): ?>
          <a class="projeto-card" href="/projetos/<?= htmlspecialchars($projeto['slug'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Ver detalhes do projeto <?= htmlspecialchars($projeto['nome'], ENT_QUOTES, 'UTF-8') ?>">
            <img class="photo" src="<?= htmlspecialchars($imagemMiniatura($projeto['imagem']), ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy" decoding="async">
            <div class="shade"></div>
            <span class="tag"><?= htmlspecialchars($projeto['nome']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section id="contato" class="home-contact-section">
    <div class="container">
      <header class="home-contact-header">
        <h2>Contato</h2>
        <p class="home-contact-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit vel eros a tempor</p>
      </header>
      <div class="home-contact-channels">
        <a class="home-contact-channel accent" href="https://wa.me/5567900000000" target="_blank" rel="noopener"><span>WhatsApp</span><b>(67) 90000-0000</b><em>chamar →</em></a>
        <a class="home-contact-channel" href="mailto:teste@email.com"><span>E-mail</span><b>teste@email.com</b><em>enviar →</em></a>
      </div>
      <div class="home-contact-bottom">
        <div class="home-contact-socials" aria-label="Redes sociais">
          <a href="#" aria-label="Instagram">ig</a>
          <a href="#" aria-label="Behance">B</a>
        </div>
        <p class="home-contact-note">Atendo em <strong>Dourados, MS</strong> e projetos remotos para qualquer lugar do Brasil.</p>
      </div>
    </div>
  </section>
  <footer class="site-footer">
    <div class="site-footer-line">
      <span>Dourados, MS - 2026</span>
    </div>
    <p class="site-footer-credit">desenvolvido por <a href="https://github.com/mikaelbueno" target="_blank" rel="noopener">Mikael Bueno</a></p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/portfolio.js"></script>
  <script src="/assets/js/projetos.js"></script>
</body>
</html>
