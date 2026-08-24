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
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($portfolio['nome'] . ' ' . $portfolio['sobrenome']) ?> | Estud. de Arquitetura</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/portfolio.css" rel="stylesheet">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/portfolio.js"></script>
</body>
</html>
