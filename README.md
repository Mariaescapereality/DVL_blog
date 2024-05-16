# DVL_blog
blog des recettes pour DVL
_____________________________________________________________________________________________________________________________________________________________________________________________________________________
## Contenu
1. [Info]
2. [Connection]
3. [Creatrice]
_____________________________________________________________________________________________________________________________________________________________________________________________________________________
## Info
Ce projet a été réalisé pour l'entreprise de mon stage. C'est un blog minimaliste.
_____________________________________________________________________________________________________________________________________________________________________________________________________________________
## Connection
Vous pouvez vous connecter au compte administrateur et créer un article, modifier du texte, ajouter des images et les supprimer, collecter une base de données d'abonnement pour votre fil d'actualité et la modifier.
```Php
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'includes/init.php';

$title = 'Blog';

$images_folder = 'assets/img/uploads/posts/';
$pdo = new BlogPDO;

$error = null;
$message = null;

// Fletch categories
try {
    $query = $pdo->query("SELECT `name` FROM `categories` ORDER BY `name`");
    $categories = $query->fetchAll();
} catch (PDOException $e) {
    $error = 'PDO error: ' . $e->getMessage();
}

// Posts sorting based on category selection
try {
    if (isset($_GET['cat']) && strtolower($_GET['cat']) !== 'all') {
        $cat = strtolower($_GET['cat']);
        $query = $pdo->query("SELECT `id`, `title`, `content`, `date`, `category`, `featured_image` FROM `posts` WHERE `category` LIKE '" . $cat . "' ORDER BY `id` DESC");
        $query2 = $pdo->query("SELECT `description` FROM `categories` WHERE `name` LIKE '" . $cat . "'");
        $posts = $query->fetchAll(PDO::FETCH_CLASS, 'Post');
        $this_category = $query2->fetch();
        if (empty($posts)) {
            $message = "No post yet in this category.";
        }
    } else {
        $query = $pdo->query("SELECT `id`, `title`, `content`, `date`, `category`, `featured_image` FROM `posts` ORDER BY `id` DESC");
        $posts = $query->fetchAll(PDO::FETCH_CLASS, 'Post');
    }
} catch (PDOException $e) {
    $error = 'PDO error: ' . $e->getMessage();
}
?>
```
____________________________________________________________________________________________________________________________________________________________________________________________________________________________
##Creatrice
GitHub: https://github.com/Mariaescapereality
____________________________________________________________________________________________________________________________________________________________________________________________________________________________
##Contributing
Bug reports and pull requests are welcome.
____________________________________________________________________________________________________________________________________________________________________________________________________________________________
##License
The module is available as open source under the terms of the Apache License, Version 2.0
