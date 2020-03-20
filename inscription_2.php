<?php session_start(); ?>


<!DOCTYPE html>

<html>
    <head>
		<title>Inscription</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href=".css" />
    </head>
<body>



<nav>
        <ul id="menu_navigation">

            <li><a href="accueil.html">Accueil</a></li>
            

            <li><a href="inscription 2.php">Note de frais</a></li>

            <li><a href="login.html">Connexion</a></li>
             <li><a href="Gestion des frais.html">Gestion des frais</a></li>


        
        </ul>
    </nav>







<body style="background-color:#5B109A;">
</body>





<div id="contenu">
	 <center><h1>Inscription</h1></center>
    <form method="post">
        <table border="0" align="center" width="70%">
                <tr>
                        <td><label>Adresse e-mail : </label></td>
                        <td><input type="text" name="user_email" value="<?php if(isset($_POST['user_email'])){echo $_POST['user_email'];} ?>" /></td>
                </tr>
                <tr>
                        <td><label>Mot de passe : </label></td>
                        <td><input type="password" name="user_mdp" value="<?php if(isset($_POST['user_mdp'])){echo $_POST['user_mdp'];} ?>" /></td>
                </tr>
                <tr>
                        <td><label>Confirmation du mot de passe :</label></td>
                        <td><input type="password" name="user_mdp2" /></td>
                </tr>
                <tr>
                        <td><label>Prénom : </label></td>
                        <td><input type="text" name="user_prenom" value="<?php if(isset($_POST['user_prenom'])){echo $_POST['user_prenom'];} ?>" /></td>
                </tr>
                <tr>
                        <td><label>Nom : </label></td>
                        <td><input type="text" name="user_nom" value="<?php if(isset($_POST['user_nom'])){echo $_POST['user_nom'];} ?>" /></td>
                </tr>
                <tr>
                        <td><label>Téléphone : </label></td>
                        <td><input type="text" name="user_tel" value="<?php if(isset($_POST['user_tel'])){echo $_POST['user_tel'];} ?>" /></td>
                </tr>
                <tr>
                        <td><label>Rue : </label></td>
                        <td><input type="text" name="user_rue" value="<?php if(isset($_POST['user_rue'])){echo $_POST['user_rue'];} ?>" /></td>
                </tr>
                <tr>
                        <td><label>Code Postal : </label></td>
                        <td><input type="text" name="user_cp" value="<?php if(isset($_POST['user_cp'])){echo $_POST['user_cp'];} ?>" maxlength="5" /></td>
                </tr>
                <tr>
                        <td><label>Ville : </label></td>
                        <td><input type="text" name="user_ville" value="<?php if(isset($_POST['user_ville'])){echo $_POST['user_ville'];} ?>" /></td>
                </tr>
                <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                </tr>
                <tr>
                        <td></td>
                        <td><input type="submit" value="inscription" name="inscription" /></td>
                </tr>
                <tr>
                        <td colspan="2"><?php if(isset($erreur)){echo $erreur;} ?></td>
                </tr>
        </table>
    </form>
</div>



</body>
</html>



