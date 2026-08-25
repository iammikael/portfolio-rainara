<?php
declare(strict_types=1);

require __DIR__ . '/dados-projetos.php';

$caminho = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$slug = $_GET['slug'] ?? basename(rtrim($caminho, '/'));
$indiceAtual = array_search($slug, array_column($projetos, 'slug'), true);

if ($indiceAtual === false) {
    http_response_code(404);
    exit('Projeto não encontrado.');
}

$projeto = $projetos[$indiceAtual];
$anterior = $projetos[($indiceAtual - 1 + count($projetos)) % count($projetos)];
$proximo = $projetos[($indiceAtual + 1) % count($projetos)];
$esc = static fn (string $valor): string => htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
$descricao = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit vel eros a tempor, in sagittis facilisis nulla a aliquam.';
$desafio = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta sem nec ante facilisis commodo.';
$galeria = [
    $projeto['imagem'],
    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1400&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1400&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?q=80&w=1400&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?q=80&w=1400&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?q=80&w=1400&auto=format&fit=crop',
];
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
  <title><?= $esc($projeto['nome']) ?> | Rainara Vitória</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://images.unsplash.com">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="/assets/css/projeto-detalhe.css" rel="stylesheet">
</head>
<body>
  <main class="project-detail">
    <div class="grain" aria-hidden="true"></div>
    <svg class="rough-filter" aria-hidden="true" focusable="false"><filter id="rough" x="-20%" y="-20%" width="140%" height="140%"><feTurbulence type="fractalNoise" baseFrequency="0.018" numOctaves="2" seed="7" result="noise"/><feDisplacementMap in="SourceGraphic" in2="noise" scale="4"/></filter></svg>
    <nav class="detail-nav">
      <span class="detail-mark">R.V · ARQUITETURA</span>
      <a href="/#projetos" class="back-link" aria-label="Voltar aos projetos"><svg viewBox="0 0 20 14" aria-hidden="true"><path d="M18,7 L2,7 M8,1 L2,7 L8,13" /></svg>voltar aos projetos</a>
    </nav>

    <div class="detail-content">
      <section class="detail-hero">
        <div class="hero-frame"><svg viewBox="0 0 1040 560" preserveAspectRatio="none" aria-hidden="true"><rect x="4" y="4" width="1032" height="552" rx="18" /></svg><img src="<?= $esc($projeto['imagem']) ?>" alt="<?= $esc($projeto['nome']) ?> — vista geral" fetchpriority="high" decoding="async"></div>
      </section>

      <header class="project-head">
        <div class="titleblock"><h1><?= $esc($projeto['nome']) ?><svg viewBox="0 0 320 16" aria-hidden="true"><path d="M4,8 C80,14 220,14 316,6" /></svg></h1><p><?= $esc($projeto['categoria']) ?> · Dourados, MS · <?= $esc($projeto['ano']) ?></p></div>
        <div class="chips"><span class="chip"><?= $esc($projeto['tipo']) ?></span><span class="chip"><?= $esc($projeto['area']) ?></span><span class="chip chip-number"><?= $esc($projeto['numero']) ?></span></div>
      </header>

      <section class="detail-about"><span>// sobre o projeto</span><p><?= $esc($descricao) ?></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet maximus odio eu dignissim, sed tristique nunc posuere.</p></section>
      <aside class="margin-note"><svg viewBox="0 0 40 40" aria-hidden="true"><path d="M5,18 C9,7 20,5 27,12 M21,8 L27,12 L22,18" /></svg><p><?= $esc($desafio) ?></p></aside>

      <section class="study"><img src="/assets/img/planta-real-1200.jpg" width="1200" height="591" alt="Planta baixa do projeto <?= $esc($projeto['nome']) ?>" loading="lazy" decoding="async"><div><span>Estudo de planta</span><h2>Da planta à obra</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit vel eros a tempor, in sagittis facilisis nulla a aliquam.</p></div></section>

      <section class="detail-gallery"><p>Galeria · execução</p><div class="gallery-grid"><?php foreach ($galeria as $indice => $imagem): ?><figure><svg viewBox="0 0 300 375" preserveAspectRatio="none" aria-hidden="true"><rect x="3" y="3" width="294" height="369" rx="10" /></svg><button class="gallery-trigger" type="button" data-gallery-index="<?= $indice ?>" data-image="<?= $esc($imagem) ?>" data-alt="<?= $esc($projeto['nome']) ?> — detalhe <?= $indice + 1 ?>" aria-label="Ampliar foto <?= $indice + 1 ?> do projeto <?= $esc($projeto['nome']) ?>"><img src="<?= $esc($imagemMiniatura($imagem)) ?>" alt="<?= $esc($projeto['nome']) ?> — detalhe <?= $indice + 1 ?>" loading="lazy" decoding="async"><span>ampliar foto</span></button><figcaption>fl. <?= str_pad((string) ($indice + 1), 2, '0', STR_PAD_LEFT) ?> · detalhe do projeto</figcaption></figure><?php endforeach; ?></div></section>

      <nav class="project-pagination"><a href="/projetos/<?= $esc($anterior['slug']) ?>">← <?= $esc($anterior['nome']) ?></a><a href="/projetos/<?= $esc($proximo['slug']) ?>"><?= $esc($proximo['nome']) ?> →</a></nav>
    </div>
  </main>
  <dialog class="gallery-preview" aria-labelledby="gallery-preview-caption">
    <button class="gallery-preview-close" type="button" aria-label="Fechar preview">×</button>
    <button class="gallery-preview-nav gallery-preview-prev" type="button" aria-label="Foto anterior">←</button>
    <figure><img src="" alt=""><figcaption id="gallery-preview-caption"></figcaption></figure>
    <button class="gallery-preview-nav gallery-preview-next" type="button" aria-label="Próxima foto">→</button>
  </dialog>
  <script src="/assets/js/galeria-preview.js"></script>
</body>
</html>
