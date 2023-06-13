<?php include "components/head.php" ?>

<?php include "components/navbar.php" ?>

<!-- Ceci est ma home page -->

<div class="content">


    <!-- Ne pas oublier d'appeler la fonction si on crée la funtion card($data)  -->
    <?php
    $limit = 9;
    $i = 1;
    foreach ($data as $tab) {
        if ($i > $limit){
            break;
        }?>
        <div class="card">
           <img src="../assets/img/portrait/perso<?= $i++ ?>.jpg" alt="Une personne aléatoire">
           <h3 class="my_card_text"> <?= $tab["name"] ?></h3>
           <p class="my_card_text">Voici les informations sur cette personne fake :</p>
           <ul class="my_card_text">
               <li><b>Téléphone :</b>  <?= $tab["phone"] ?> </li>
               <li class="mail"><b>Email :</b>  <?= $tab["email"] ?> </li>
               <li><b>Code postal :</b>  <?= $tab["postalZip"] ?> </li>
               <li><b>Région :</b>  <?= $tab["region"] ?> </li>
           </ul>
        </div>
    <?php } ?>


</div>

<?php include "components/footer.php" ?>