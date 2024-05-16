<?php
$title = "editer un subscriber";
require '../includes/header.php';
//require '../includes/functions.php';
?>

<form action="./EditNewsletter.php" method="POST" class="form-example">

    <label for="id">id: </label>
    <input type="text" name="id" id="id" value="<?=$_GET["id"]?>" required />
  
    <label for="newName">Enter your new name: </label>
    <input type="text" name="newName" id="newName" value="<?=$_GET["firstname"]?>" required />

  
    <label for="newEmail">Enter your new email: </label>
    <input type="email" name="newEmail" id="newEmail" value="<?=$_GET["email"]?>" required />


    <input type="submit" name="subscriber-modification" value="modifier le subscriber" />
  </div>
</form>

<?php

?>


<?php require '../includes/footer.php'; ?>
