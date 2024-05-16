<?php

require_once dirname(__DIR__) . '/class/PDO/BlogPDO.php';

editPersonNewsletter();

function editPersonNewsletter(): void{
    if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['subscriber-modification'])){

        $id = $_POST["id"];
        $newName = $_POST["newName"];
        $newEmail = $_POST["newEmail"];

        editNewsletter($newName, $newEmail, $id);
    }
}

function editNewsletter($newName, $newEmail, $id){
    $pdo = new BlogPDO;
    $sql = $pdo->prepare("UPDATE subscribers SET firstname=?, email=? WHERE id = ?");
    $sql->execute([$newName, $newEmail, $id]);
    header("location: /pages/CRUDnewsletter.php");
}

