<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" type="text/css" href="../style/bulma.css">
    <link rel="stylesheet" type="text/css" href="../style/fontawesome.css">
    <script src="https://kit.fontawesome.com/a5be86d7bf.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
	<title>Sanaya Bio Ateliers - Connexion</title>
</head>

<body>

<section class="hero is-primary is-fullheight">
  <div class="hero-body">
    <div class="">
      <p class="title">
          Sanaya Bio Ateliers
      </p>
      <p class="subtitle">
          Se Connecter
      </p>
      <div class="field">
        <label for="mail">Adresse Electronique :</label>
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="mail@example.com">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
        </p>
      </div>
      <div class="field">
        <label for="mdp">Mot de Passe :</label>
        <p class="control has-icons-left">
            <input class="input" type="password">
            <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
            </span>
        </p>
      </div>
    </div>
  </div>
</section>

<div class="col-sm">
    <h1 class="text-center">Se Connecter</h1>
    <div class="d-grid gap-2 col-6 mx-auto">
    <form name="Formulaire" action="../controleurs/ctrl-connecter.php" method="post" onSubmit="return verification()" >
        <div class="form-group">
            <label for="mail">Adresse Electronqiue :</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="mail@example.com">
        </div>
        <div class="form-group">
            <label for="mdp">Mot de Passe :</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>
        <div class="form-group">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr style="height:10px"></tr>
                    <tr>                    
                        <td>
                            <input type="submit" name="envoi" class="envoi" value="Connexion" style="margin-left: 20px;"/>
                            <input type="reset" name="annule" class="annule" value="Reset"/>
                        </td>
                    </tr>  
            </table>
        </div>
    </form>
</div>



</body>


</html>