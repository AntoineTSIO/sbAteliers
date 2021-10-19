<?php

  $lf = fopen("/var/log/sbateliers/err_input.log", "a+");
  $lf1 = fopen("/var/log/sbateliers/access.log", "a+");

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
    $mdp = $_POST[ 'mdp' ];
    $adresse_postale = $_POST[ 'adresse_postale' ];
    $ville = $_POST[ 'ville' ];
    if(preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/", $_POST[ 'mail' ])) {
      $mail = $_POST[ 'mail' ];
    } else {
      $journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." Inscription-client "." Adresse Mail "." ".$_POST['mail']." "."\n" ;
      fwrite($lf, $journal);
      fclose($lf);
      header('Location: ../vues/vue-enregistrement-client.php?err=2');
      exit;
    }
    if(preg_match("/^(06|07)[0-9][0-9]{4}/", $_POST[ 'telephone' ])) {
      $telephone = $_POST[ 'telephone' ];
    } else {
      $journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." Inscription-client "." Téléphone "." ".$_POST['telephone']." "."\n" ;
      fwrite($lf, $journal);
      fclose($lf);
      header('Location: ../vues/vue-enregistrement-client.php?err=3');
      exit;
    }
    if(preg_match("/[0-9]{5}|2[A]|[B][0-9]{3}/", $_POST[ 'code_postal' ])) {
      $code_postal = $_POST[ 'code_postal' ];
    } else {
      $journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." Inscription-client "." Code Postal "." ".$_POST['code_postal']." "."\n" ;
      fwrite($lf, $journal);
      fclose($lf);
      header('Location: ../vues/vue-enregistrement-client.php?err=4');
      exit;
    }

    $dernierNumClient = $bd->query("SELECT MAX(numero) FROM `Client`");
    $dernierNumClient = $dernierNumClient->fetchall();
  
    $nouveauNumClient = $dernierNumClient[0][0]+1;
 
    $mailDejaConnu = $bd->query("SELECT numero from `Client` where adresse_electronique IN('" . $mail . "')");
    $mailDejaConnu = $mailDejaConnu->fetchall();
 
    if($mailDejaConnu[0][0]==null){
      $enregistrementClient = $bd->query("INSERT INTO `Client` VALUES(" . $nouveauNumClient . ",'" . $civilite . "', '" 
                                      . $nom . "','" . $prenom . "','" . $naissance . "','" . $mail . "','" . $mdp . "','" 
                                      . $adresse_postale . "'," . $code_postal . ",'" . $ville . "','" . $telephone . "')");
      
      
      $journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Inscription Ok\n" ;
      fwrite($lf1, $journal);
      fclose($lf1);
      header('Location: ../');
    
    } else {
      
      $journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Inscription Nok\n" ;
		  fwrite($lf1, $journal);
      fclose($lf1);
      header('Location: ../vues/vue-enregistrement-client.php');
    
    }


?>