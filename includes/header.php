<?php

require_once dirname(__DIR__) . '/config.php';
require_once 'functions/login.php';
require_once 'functions.php';

?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= SITE_NAME ?></title>
  <meta name="author" content="Recette facile et Rapide">
  <meta name="description" content="Recette">
  <meta name="keywords" content="recette, recette patisserie, recette facile">
  <link rel="icon" type="image/x-icon" href="/assets/img/icons8-cupcake-16.png">
  <link rel="canonical" href="https://getbootstrap.comexamples/starter-template/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/style.css">

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
    <div class="navbar-brand">
      <a href="/index.php" class="text-light"><?php echo "Blog" ?></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <?= nav_menu(MAIN_MENU, 'nav-link') ?>
      </ul>
      <?php if (is_connected()) : ?>
        <button onclick="location.href='/pages/logout.php'" type="button" class="btn btn-danger mr-2">Log out</button>
      <?php endif; ?>
    </div>
  </nav>

  <main role="main" class="container">
    <div class="starter-template">
      <!-- Don't show title if is a blog post -->
      <?php if (strpos($_SERVER["SCRIPT_NAME"], 'blog/post.php') === false) : ?>
        <div class="banner-m">
        <h1 style="height:fit-content; font-family: cursive; color:darkblue;">Des recette simple, rapides et pas cher pour tous les jours.</h1>
        </div>
      <?php endif; ?>