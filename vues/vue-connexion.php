<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="utf-8">
		<title>Sanaya Bio Ateliers - Connexion</title>
</head>

<body>
	<h1>Se Connecter</h1>

	<form name="Formulaire" action="../controleurs/ctrl-connecter.php" method="post" onSubmit="return verification()" >
 
      <table border="0" cellpadding="5" cellspacing="10">

		<tr>
			<td><label for="mail">Adresse Electronique : </label></td>
			<td><input type="email" id="mail" name="mail"></td>
        </tr>

        <tr>
            <td><label for="mdp"> Mot de Passe :</label></td>
            <td><input type="password" id="mdp" name="mdp"></td>
        </tr> 

      </table>
       
             <table border="0" cellpadding="0" cellspacing="0">
                    
                   <tr style="height:10px"></tr>
              
                   <tr>                    
                      <td><input type="submit" name="envoi" class="envoi" value="Connexion" style="margin-left: 20px;"/>
                          <input type="reset" name="annule" class="annule" value="Reset"/>
                      </td>
                       
                   </tr>      
              
             </table>
       </table>
 
</form>


</body>


</html>