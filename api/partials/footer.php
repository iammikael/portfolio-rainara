<?php
declare(strict_types=1);

$paginaFooter = $paginaFooter ?? '01';
?>
<footer class="site-footer">
  <div class="site-footer-line">
    <span>Dourados, MS — disponível para projetos remotos</span>
    <span>fl. <?= htmlspecialchars((string) $paginaFooter, ENT_QUOTES, 'UTF-8') ?></span>
  </div>
  <p class="site-footer-credit">desenvolvido por <a href="https://github.com/mikaelbueno" target="_blank" rel="noopener">Mikael Bueno</a></p>
</footer>
