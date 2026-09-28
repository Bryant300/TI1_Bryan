<?php
require_once __DIR__ . '/../config.php';
$page = $_GET['p'] ?? 'accueil';
if (is_string($page) && ($page === 'accueil' || in_array($page, ARRAY_VALID_PAGES, true))) {
    require ROOT_PATH . '/view/' . $page . '.php';
} else {
    http_response_code(404);
    require ROOT_PATH . '/view/error404.php';
}
