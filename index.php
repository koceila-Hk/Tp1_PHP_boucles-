<?php 

// 1/ Construire en PHP le triangle suivant :

// *
// **
// ***
// ****
// *****
// ******

// $et="*";
// for ($i = 6; $i > 0; $i--) {
//     echo str_repeat($et,$i) . "\n";
// }

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";
}


//             -------------------------------  
            
// 2/ Construire en PHP le triangle suivant :

// ******
// *****
// ****
// ***
// **
// *

for ($i = 6; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";
}

//             -------------------------------  

// 3/ Construire en PHP le triangle suivant :

// *
// **
// * *
// *  *
// *   *
// ******
for ($i = 0; $i < 6; $i++) {
    if($i==0){
        echo "*"."\n";
    } 
    elseif($i==1){
        echo "**"."\n";

    }
    elseif($i==2){
        echo "* *"."\n";

    }
    elseif($i==3){
        echo "*  *"."\n";

    }
    elseif($i==4){
        echo "*   *"."\n";

    }

    elseif($i==5){
        echo "******"."\n";

    }
}
//             -------------------------------  

// 4/ Ecrire une fonction qui calcule la factorielle d'un nombre.
// Exemple d'utilisation : echo factorielle(7);


function fac($a){
    if($a < 0){
        echo "non non non";
}elseif($a === 0){
    echo 1;
}else{
    $acc=1;
    for ($i = 1; $i <= $a; $i++) {
        $acc = $acc * $i;
    }
    echo $acc;
}
}

fac(7);


//             -------------------------------  

// 5/ Ecrire une fonction qui prend deux tableaux et renvoie un 3e tableau, 
// qui contient dans chacune de ses cases la somme des cases correspondantes des deux premiers tableaux.

// Par exemple : [1, 2, 3] et [4, 5, 6] ===> [(1+4), (2+5), (3+6)] ===> [5, 7, 9]

// Exemple d'utilisation : 
// 	print_r(
// 		somme_tableaux(
//         	[1, 2, 3], 
//         	[4, 5, 6]
//         )
// 	);
    
//                 -------------------------------  

// 6/ Ecrivez une fonction qui prend un tableau (en 2 dimensions) et renvoie la position du trésor.
// Le trésor est matérialisé par le booléen `true`.

// Pour tester, voici de quoi créer un tableau avec un trésor aléatoire : 
// $tableau = array_fill(0, 10, array_fill(0, 10, false));
// $tableau[rand(0, 9)][rand(0, 9)] = true;

//             -------------------------------  

// BONUS - 6 / Affichez (en HTML) une carte au trésor.
// La carte serait le tableau, et le trésor serait marqué d'une croix (&times;) à son emplacement.

//             -------------------------------  

// 7/ Ecrire une fonction qui prend un tableau de nombres et renvoie le tableau trié.

// Pour tester, voici de quoi avoir un tableau mélangé :
// $tableau = array(1, 2, 3, 4, 5, 5, 5, 7, 8, 12, 14, 42, 1337, 18, 6357, 61384, 973, 16897);
// shuffle($tableau);

// Exemple d'utilisation : print_r(trier($tableau));

// N.B. : Interdiction d'utiliser des fonctions de tri déjà faites en PHP.

//             -------------------------------  

// 8/ Dans *Le Bourgeois Gentilhomme*, de Molière, 
// le héros, Monsieur Jourdain, veut connaître toutes les manières "galantes" d'écrire un billet.

// Il part d'une phrase, qui est :
// "Belle Marquise, vos beaux yeux, me font mourir d'amour."

// Il cherche, dans sa quête, à connaître toutes les variantes de cette phrase.
// Par exemple : 
// "Vos beaux yeux, belle Marquise, d'amour me font mourir."
// "Vos beaux yeux, me font mourir, belle Marquise, d'amour."
// "Vos beaux yeux, me font mourir d'amour, belle Marquise."
// etc.
 
// Écrivez une fonction qui génèrera toutes les variantes de la phrase 
// "Belle Marquise, vos beaux yeux, me font mourir d'amour."

// Par variante, on entend des "permutations" de la phrase.
// Autrement dit, toutes les combinaisons possibles avec les bouts de phrase :
// "belle Marquise", "d'amour", "me font mourir" et "vos beaux yeux"


?>