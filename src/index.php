<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'lax'
]);
session_start();
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" description="" />
    <meta name="description" description="Bullard Holdings, LLC is a family-owned real estate business in Duplin County, North Carolina." />
    <title>Bullard Holdings, LLC</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
    </header>
    <main>
      <nav>
        <a href="/"><img src="favicon.svg"></img></a>
          <?php
          require_once __DIR__ . '/database.php';
          renderPageLinks($pdo);
          ?>
      </nav>
      <aside class="sidebar"></aside>
      <section class="content">
        <?php

        ?>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
