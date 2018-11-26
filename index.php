<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie4_Exercice 7</title>
</head>
<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme
La fonction doit renvoyer en fonction des paramètres :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas. -->
<body>
  <?php
  $age = rand(1,100); // valeure aléatoire
  $genderList = array('Homme', 'Femme'); // tableau
  $gender = $genderList[rand(0, 1)]; // homme correspond à 0 et femme correspond à 1
  function twoVariable($age, $gender){
    if ($gender == 'Homme' && $age >= 18){
      return 'Vous êtes un homme et vous êtes majeur.'; // retourner la chaine de caractère
    } else if ($gender == 'Homme' && $age < 18){
      return 'Vous êtes un homme et vous êtes mineur.';
    } else if ($gender == 'Femme' && $age >= 18){
      return 'Vous êtes une femme et vous êtes majeure.';
    } else {
      return 'Vous êtes une femme et vous êtes mineure.';
    }
  }
  ?>
  <p><?php
  echo twoVariable($age,$gender);
  ?></p>
  <p><?php
  echo $age .' '. $gender;
  ?></p>
</body>
</html>
