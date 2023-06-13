<?php
require "../models/data.php";
// function card($data , $limit = 9)
// {
//     $limit =9;
//     $i = 1;
//     foreach ($data as $tab) {
//         if ($i > $limit){
//             break;
//         }
//         echo '<div class="card">';
//         echo     '<img src="../assets/img/portrait/perso' . $i++ . '.jpg" alt="Une personne aléatoire">';
//         echo     '<h3 class="my_card_text">' . $tab["name"] . '</h3>';
//         echo     '<p class="my_card_text">Voici les informations sur cette personne fake :</p>';
//         echo     '<ul class="my_card_text">';
//         echo         '<li><b>Téléphone :</b> ' . $tab["phone"] . '</li>';
//         echo         '<li class="mail"><b>Email :</b> ' . $tab["email"] . '</li>';
//         echo         '<li><b>Code postal :</b> ' . $tab["postalZip"] . '</li>';
//         echo         '<li><b>Région :</b> ' . $tab["region"] . '</li>';
//         echo     '</ul>';
//         echo '</div>';
//     }
// }


include "../views/home.php";
