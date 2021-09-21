<?php

if(isset($_POST['insert'])){

  try {
   
    $bd = new PDO(
      'mysql:host=localhost;dbname=sbateliers' ,
      'sanayabio' ,
      'sb2021'
    ) ;

    $reponse = $bd->query("SELECT * FROM Client");
    $clients = $reponse->fetchall();
    $last_id = $clients[count($clients) -1]['numero'] +1;

    $numero = $last_id ;
    $civilite = $_POST[ 'civilite' ];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['date_de_naissance'];
    $mail = $_POST[ 'adresse_electronique' ];
    $mdp = $_POST[ 'mot_de_passe' ];
    $adresse_postale = $_POST[ 'adresse_postale' ];
    $code_postal = $_POST[ 'code_postal' ];
    $ville = $_POST[ 'ville' ];
    $telephone = $_POST[ 'numero_de_telephone' ];

    $bd->query( " INSERT INTO Client VALUES (`$numero`,`$civilite`,`$nom`,`$prenom`,`$naissance`,`$mail`,`$mdp`,`$adresse_postale`,`$code_postal`,`$ville`,`$telephone`) " ) ;

    if($exec){
      header( 'Location: ../vues/vue-connexion.php' ) ;
    }else{
      header( 'Location: ../vues/vue-enregistrement-client.php?echec=1' ) ;
    }
  }
  catch( PDOException $e ){

		header( 'Location: ../vues/vue-enregistrement-client.php?echec=0' ) ;

	}
}
?>