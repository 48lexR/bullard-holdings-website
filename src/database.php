<?php

$host = getenv('MARIADB_HOST');
$user = getenv('MARIADB_USER');
$password = getenv('MARIADB_PASSWORD');
$database = getenv('MARIADB_DATABASE');

$dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

$page = $_GET['page'] ?? '';

$pdo = $pdo = new PDO($dsn, $user, $password, [
    PDO::ATTR_ERRMODE   =>  PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>  PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES  =>  false,
]);

function renderPageLinks($pdo): void {
    $stmt = $pdo->query('SELECT id, name FROM pages ORDER BY name');

    foreach ($stmt as $page) {
        printf(
            '<a href="%s">%s</a>' . "\n",
            htmlspecialchars($page['id']),
            htmlspecialchars($page['name'])
        );
    }
}

?>
