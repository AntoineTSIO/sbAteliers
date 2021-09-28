<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="/sbateliers/style/style.css">
    <meta charset="utf-8">
	<title>Sanaya Bio Ateliers - Connexion</title>
</head>

<body>

<div class="mx-center col-sm text-center">
    <h1>Se Connecter</h1>

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