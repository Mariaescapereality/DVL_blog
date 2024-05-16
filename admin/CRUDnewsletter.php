<?php
require '../includes/header.php';
require_once '../includes/functions/login.php';
redirect_if_not_connected('../pages/login.php');
?>
<br>

<table>
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">person</th>
      <th scope="col">edit</th>
      <th scope="col">erase</th>
    </tr>
  </thead>
  <?php
$subscribers = newsletter_reach();


foreach($subscribers as $b) :
?>
  <tbody>
    <th scope="row"><?=$b->email?> </th>
    <th scope="row"><?=$b->firstname?></th>  
    <th scope="row">
    <a class="btn btn-primary btn-sm mr-2" href='./editFromNewsletter.php?id=<?=$b->id?>&amp;email=<?=$b->email?>&amp;firstname=<?=$b->firstname?>'>éditer le subscriber</a>
    </th>  
    <th scope="row">
    <a class="btn btn-danger btn-sm" href='./deleteFromNewsletter.php?id=<?=$b->id?>'>effacer le subscriber</a>   
    </th>  
   </tbody>
<?php endforeach ?>

</table>


<?php require '../includes/footer.php'; ?>