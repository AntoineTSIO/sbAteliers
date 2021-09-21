<?php

if(isset($_POST['insert'])){

  try {
   
    $bd = new PDO(
      'mysql:host=localhost;dbname=sbateliers' ,
      'sanayabio' ,
      'sb2021'
    ) ;

    $reponse = $bd->query("SELECT * FROM client");
    $clients = $reponse->fetchall();
    $last_id = $clients[count($clients) -1]['numero'] +1;

    // récupérer les valeurs 
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

    // Requête mysql pour insérer des données
    $sql = "INSERT INTO `client`(`numero`, `civilite`, `nom`, `prenom`, `date_de_naissance`, `adresse_electronique`, `mot_de_passe`, `adresse_postale`, `code_postal`, `ville`, `numero_de_telephone`) VALUES (:numero,:civilite,:nom,:prenom,:date_de_naissance,:adresse_electronique,:mot_de_passe,:adresse_postale,:code_postal,:ville,:numero_de_telephone)";
    $res = $pdo->prepare($sql);
    $exec = $res->execute(array(
      ":numero"=>$numero,
      "civilite"=>$civilite,
      ":nom"=>$nom,
      ":prenom"=>$prenom,
      ":date_de_naissance"=>$naissance,
      ":adresse_electronique"=>$mail,
      ":mot_de_passe"=>$mdp,
      ":adresse_postale"=>$adresse_postale,
      ":code_postal"=>$code_postal,
      ":ville"=>$ville,
      ":numero_de_telephone"=>$telephone
    ));

    // vérifier si la requête d'insertion a réussi
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