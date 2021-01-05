<?php
    session_start();
    include "fonction.php";
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <link rel="stylesheet" href="CSS/style.css"><!--CSS pour le styles-->
            <link rel="stylesheet" href="CSS/menu.CSS"><!--lien vers la page CSS du menu-->
            <link rel="stylesheet" href="CSS/cssmenu.css"><!--lien pour le menu-->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inscription</title>
        </head>
        <body>
            <div id="container">
                <!--formulaire de connection-->
                <form action="" method="post">
                    Enter votre pseudo :<input type="text" placeholder="Entrer votre nom d'utilisateur" name="nom">
                    Crée votre mot de passe :<input type="password" placeholder="Entrer votre mot de passe" name="MDP">
                    Confirmer votre mot de passe :<input type="password" placeholder="Confirmer le mot de passe" name="password" id="confirmpassword" value="" />
                    <input type="submit" name='submit' value="S'inscrire">
                </form>
                <a class="color" href="index.php">Retour a la connection</a>
            </div>
    <?php
    try{
        if (isset($_POST["submit"])) {
            $exist = $MaBase->query("SELECT COUNT(*) FROM User WHERE nom ='".$_POST['nom']."'");
            $exist = $exist->fetch();
            if ($exist["COUNT(*)"] > 0) {
                echo '<h3 class="desct">Cet utilisateur existe déjà...</h3>';
                return;
            } else {
                if($_POST['MDP'] == $_POST['password']) {
                    $insert = $MaBase->query("INSERT INTO User(nom, MDP) VALUES('".$_POST['nom']."','".$_POST['MDP']."')");
                    if($insert->rowCount()>=1)
                        header("Location: index.php");
                    
                }else
                    echo '<h3 class="desct">Les mots de passe ne corespondes pas...</h3>';
            }
        }
    }catch(Exception $e){
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
    ?>
    </body>
</html>