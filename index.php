<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7/4</title>
  </head>
  <body>
    <p>
      <?php
        function sentence($age, $genre){
          if ($age <= 0) {
            return 'Age incorrect';
          } elseif ($age >= 18 && $genre == 'Homme') {
            return 'Vous êtes un homme et vous êtes majeur';
          } elseif ($age <= 18 && $genre == 'Homme') {
            return 'Vous êtes un homme et vous êtes mineur';
          } elseif ($age >= 18 && $genre == 'Femme') {
            return 'Vous êtes une femme et vous êtes majeur';
          } elseif ($age >= 18 && $genre == 'Femme') {
            return 'Vous êtes une femme et vous êtes mineur';
          } else {
            return 'Veuillez entrer un genre correct';
          }
        }
        echo sentence(50, 'Femme');
      ?>
    </p>
  </body>
</html>
