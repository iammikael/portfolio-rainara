<?php
declare(strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$arquivoSolicitado = __DIR__ . $uri;

// Permite que o servidor nativo entregue CSS, JavaScript, imagens e SVGs.
if ($uri !== '/' && is_file($arquivoSolicitado)) {
    return false;
}

require __DIR__ . '/api/index.php';
