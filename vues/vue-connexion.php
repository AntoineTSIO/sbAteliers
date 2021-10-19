<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
	<title>Sanaya Bio Ateliers - Connexion</title>
</head>

<body>

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