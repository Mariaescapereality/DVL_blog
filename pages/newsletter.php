<?php
$title = "Subscribe to our newsletter";
require '../includes/header.php';

?>
<br>

<script src="/assets/script.js"></script> 
  <p class="lead" style="text-align: center;">Merci de remplir le formulaire ci-dessous pour vous inscrire à notre newsletter et être informé à chaque fois que nous publions un nouvel article.</p>
  <div class="row mt-5">
    <div class="col-md-6  mb-5">
      <?= newsletter_submit(); ?>
      <form action="newsletter.php" method="POST">
        <div class="form-group">
          <label for="firstname"><b>Prénom</b></label>
          <input type="text" class="form-control" name="firstname" placeholder="John">
        </div>
        <div class="form-group">
          <label for="email"><b>Email</b></label>
          <input type="email" class="form-control" name="email" onkeyup="validate()" placeholder="johndoe@gmail.com">
          <small id="emailInfo" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
        </div>
        <button type="submit" class="btn btn-primary">S'abonner</button>
      </form>
    </div>
  </div>
<br>


<?php require '../includes/footer.php'; ?>