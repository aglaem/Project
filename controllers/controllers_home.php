<?php 
require "../models/data.php" ;
function test ($data){
    $i=1;
    foreach ($data as $tab) {
        echo '<div class="card">';
        echo     '<img src="../assets/img/portrait/perso' . $i++ . '.jpg" alt="Une personne aléatoire">';
        echo     '<h3 class="my_card_text">' . $tab["name"] . '</h3>';
        echo     '<p class="my_card_text">Voici les informations sur cette personne fake :</p>';
        echo     '<ul class="my_card_text">';
        echo         '<li>Téléphone : '. $tab["phone"] .'</li>';
        echo         '<li class="mail">Email : ' . $tab["email"] .'</li>';
        echo         '<li>Code postal : ' . $tab["postalZip"] .'</li>';
        echo         '<li>Région : ' . $tab["region"] .'</li>';
        echo     '</ul>';
        echo '</div>';
}
}


include "../views/home.php";


