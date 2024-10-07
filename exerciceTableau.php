#Exercice Créez un tableau associatif contenant votre nom, prénom et âge. Utilisez une boucle foreach pour > afficher toutes les valeurs.
<?php
  $identite = [
      'nom' => 'Ben M Barek', 
      'prenom' => 'Mayssa', 
      'age' => 21, 
      'estEtudiant' => true
  ];

  foreach($identite as $valeur) {  
    echo $valeur ,'<br/>';
  }

?>