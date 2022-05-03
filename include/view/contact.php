<?php

include ('include/classe/SendMail.php');


?>
<div id="BoxContact" class="d-flex flex-column Color-bg-darkBlue p-5">

<h1 class="m-3">Vous désirez me contacter ?</h1>
<!-- Formulaire -->
    <div id="BoxForm" class="Color-bg-ciel Color-darkBlue ">
    <form class="d-flex flex-column"  method="post" action="contact.php" >
        <div class="d-flex flex-column mb-2 justify-content-center">
            <label class="form-label fw-bold">Votre Nom</label><br>
            <input class="form-control" type="text" name="nom" required>
        </div>
        <div class="d-flex flex-column mb-2 justify-content-center">
            <label class="form-label fw-bold">Votre Prenom</label><br>
            <input class="form-control" type="text" name="prenom" required>
        </div>
        <div class="d-flex flex-column mb-2 justify-content-center">
            <label class="form-label fw-bold">Votre Société</label><br>
            <input class="form-control" type="text" name="societe">
        </div>
        <div class="d-flex flex-column mb-2 justify-content-center">
            <label class="form-label fw-bold">Votre Numero de téléphone</label><br>
            <input class="form-control" type="number" name="phone">
        </div>
        <div class="d-flex flex-column mb-2 justify-content-center">
            <label class="form-label fw-bold">Votre email</label><br>
            <input class="form-control" type="email" name="email" required>
        </div>
        <br>
        <div class="d-flex flex-column mb-2 justify-content-center">
            <textarea rows="10" cols="30" name="message" placeholder="Tapez votre message ici"></textarea>
        </div>
        <div class="flexB buttonContainer">
            <input class="btn btn-primary" type="submit" value="Envoyer">
        </div>
    </form>
    </div>
</div>
<div class="bubble rounded-circle Color-bg-gray "></div>
<div class="bubble rounded-circle Color-bg-ciel"></div>
<div class="bubble rounded-circle Color-bg-darkBlue"></div>
<div class="bubble rounded-circle Color-bg-lightBlue"></div>
<div class="bubble rounded-circle Color-bg-lightGreen"></div>
    <?php
    
if (isset($_POST['nom']))
{
    $send = new SendMail();
    $send->envoieMail();
}
    ?>