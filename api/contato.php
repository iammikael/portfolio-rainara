<?php
declare(strict_types=1);

// Troque estes dados pelos canais definitivos da Rainara.
$contato = [
    'whatsapp' => '5567900000000',
    'telefone' => '+5567900000000',
    'telefone_formatado' => '(67) 90000-0000',
    'email' => 'rainara.vitoria@email.com',
    'instagram' => '#',
    'linkedin' => '#',
    'pinterest' => '#',
];
$esc = static fn (string $valor): string => htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
$paginaFooter = '04';
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato | Rainara Vitória</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="/assets/css/contato.css" rel="stylesheet">
</head>
<body>
  <main class="contact-page">
    <div class="grain" aria-hidden="true"></div>
    <svg class="rough-filter" aria-hidden="true" focusable="false"><filter id="rough" x="-20%" y="-20%" width="140%" height="140%"><feTurbulence type="fractalNoise" baseFrequency="0.018" numOctaves="2" seed="7" result="noise"/><feDisplacementMap in="SourceGraphic" in2="noise" scale="4"/></filter></svg>
    <nav class="contact-nav" aria-label="Navegação principal">
      <a class="contact-mark" href="/">Portfolio 2026</a>
      <div class="contact-links"><a href="/#sobre">Sobre mim</a><a href="/#projetos">Projetos</a><a class="active" aria-current="page" href="/contato">Contato</a></div>
    </nav>
    <div class="contact-content">
      <p class="contact-eyebrow">// vamos conversar</p>
      <h1>Contato<svg viewBox="0 0 300 22" aria-hidden="true"><path d="M4,12 C70,20 200,20 296,10" /></svg></h1>
      <p class="contact-lead">Tem um projeto em mente, uma reforma ou só quer trocar ideia sobre um croqui? <strong>Me chama</strong> — respondo rapidinho por WhatsApp.</p>
      <section class="contact-channels" aria-label="Canais de contato">
        <a class="contact-channel accent" href="https://wa.me/<?= $esc($contato['whatsapp']) ?>" target="_blank" rel="noopener"><svg viewBox="0 0 400 76" preserveAspectRatio="none" aria-hidden="true"><rect x="2" y="2" width="396" height="72" rx="10" /></svg><span class="contact-icon" aria-hidden="true">⌕</span><span><small>WhatsApp</small><b><?= $esc($contato['telefone_formatado']) ?></b></span><em>chamar →</em></a>
        <a class="contact-channel" href="mailto:<?= $esc($contato['email']) ?>"><svg viewBox="0 0 400 76" preserveAspectRatio="none" aria-hidden="true"><rect x="2" y="2" width="396" height="72" rx="10" /></svg><span class="contact-icon" aria-hidden="true">✉</span><span><small>E-mail</small><b><?= $esc($contato['email']) ?></b></span><em>enviar →</em></a>
        <a class="contact-channel" href="tel:<?= $esc($contato['telefone']) ?>"><svg viewBox="0 0 400 76" preserveAspectRatio="none" aria-hidden="true"><rect x="2" y="2" width="396" height="72" rx="10" /></svg><span class="contact-icon" aria-hidden="true">⌕</span><span><small>Telefone</small><b><?= $esc($contato['telefone_formatado']) ?></b></span><em>ligar →</em></a>
      </section>
      <div class="contact-socials" aria-label="Redes sociais"><a href="<?= $esc($contato['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram">ig</a><a href="<?= $esc($contato['linkedin']) ?>" target="_blank" rel="noopener" aria-label="LinkedIn">in</a><a href="<?= $esc($contato['pinterest']) ?>" target="_blank" rel="noopener" aria-label="Pinterest">p</a></div>
      <p class="contact-note">Atendo em <strong>Dourados, MS</strong> e projetos remotos para qualquer lugar do Brasil.</p>
    </div>
    <?php require __DIR__ . '/partials/footer.php'; ?>
  </main>
</body>
</html>
