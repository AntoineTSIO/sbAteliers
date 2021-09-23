<?php

  try {
   
    $bd = new PDO(
      'mysql:host=localhost;dbname=sbateliers' ,
      'sanayabio' ,
      'sb2021'
    ) ;

  } catch ( Exception $e ){
    
    echo "Problème de connexion" ;
  
  }

    $civilite = $_POST[ 'civilite' ];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['naissance'];
    $mail = $_POST[ 'mail' ];
    $mdp = $_POST[ 'mdp' ];
    $adresse_postale = $_POST[ 'adresse_postale' ];
    $code_postal = $_POST[ 'code_postal' ];
    $ville = $_POST[ 'ville' ];
    echo $ville ;
    $telephone = $_POST[ 'telephone' ];

    $dernierNumClient = $bd->query("SELECT MAX(numero) FROM `Client`");
    $dernierNumClient = $dernierNumClient->fetchall();
  
    $nouveauNumClient = $dernierNumClient[0][0]+1;
 
    $mailDejaConnu = $bd->query("SELECT numero from `Client` where adresse_electronique IN('" . $mail . "')");
    $mailDejaConnu = $mailDejaConnu->fetchall();
 
    if($mailDejaConnu[0][0]==null){
      $enregistrementClient = $bd->query("INSERT INTO `Client` VALUES(" . $nouveauNumClient . ",'" . $civilite . "', '" 
                                      . $nom . "','" . $prenom . "','" . $naissance . "','" . $mail . "','" . $mdp . "','" 
                                      . $adresse_postale . "'," . $code_postal . ",'" . $ville . "','" . $telephone . "')");
      header('Location: ../');
    
    } else {
    
      header('Location: ..vues/vue-enregistrement-client.php');
    
    }


?>