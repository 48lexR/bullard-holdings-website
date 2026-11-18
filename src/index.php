<?php

$host = getenv('MARIADB_HOST');
$user = getenv('MARIADB_USER');
$password = getenv('MARIADB_PASSWORD');
$database = getenv('MARIADB_DATABASE');

$dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE   =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    =>  PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES  =>  false,
    ]);
    echo "Connected to database.";
} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit("Failed to connect to database.");
}

?>

<html>
  <head></head>
  <body>
    <p>This is a simple test of an apache setup.</p>
  </body>
</html>
