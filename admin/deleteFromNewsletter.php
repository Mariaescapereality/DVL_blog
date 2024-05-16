<?php

require_once dirname(__DIR__) . '/class/PDO/BlogPDO.php';

$id = $_GET["id"];
newsletter_delete($id);

/**
 * erase a newsletter person.
 * 
 * string $id id of newsletter person
 */
function newsletter_delete($id){
  $pdo = new BlogPDO;
    $sql = $pdo->prepare("DELETE FROM subscribers WHERE id = ?");
    $sql->execute([$id]);
    header("location: /admin/CRUDnewsletter.php");
  }

