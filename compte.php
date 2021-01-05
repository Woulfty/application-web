<?php
    session_start();
    include "fonction.php";
    try{
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <link rel="icon" type="image/png" href="../Application/images/" /><!--image dans l'onglets-->
            <link rel="stylesheet" href="CSS/compte.css"><!--CSS pour le compte-->
            <link rel="stylesheet" href="CSS/cssmenu.css"><!--CSS pour la barre menu-->
            <link rel="stylesheet" href="CSS/style.css"><!--CSS pour le styles-->
            <link rel="stylesheet" href="CSS/jeux.css"><!--CSS pour le background-->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mon compte</title>
        </head>
        <body><?php
            if(check()){                                        
                include "menu.php";//barre du menu 
            ?>
            <div id="container">
                <!--formulaire-->
                <form action="" method="post">
                    <h2>Mon compte :</h2>
                    <p>Mot de passe :</p>
                    <p><input type="password" placeholder="Entrer votre ancien mot de passe" name="MDP"></p>
                    <div class="espace40px"></div>
                    <p>Nouveau mot de passe :</p>
                    <p><input type="password" placeholder="Entrer votre nouveau mot de passe" name="NEWMDP"></p>
                    <div class="espace40px"></div>
                    <p>Confirmer votre nouveau mot de passe :</p>
                    <p><input type="password" placeholder="Confirmer le nouveau mot de passe" name="password" id="confirmpassword" /></p>
                    <div class="espace40px"></div>
                    <p>
                        <input type="submit" name='subModif' value="Modifier le mot de passe">
                    </p>
                    <p>
                        <input action="index.php"  type="submit" name='destroy' value="Supprimé le compte">
                    </p>
                    <?php
                        if (isset($_POST["subModif"])) {
                            //comparaison du mot de passe avec l'ancien
                            if($_POST['NEWMDP'] == $_POST['password']) {
                                //mise a jour dans la base du nouveau mot de passe
                                $rep = $MaBase->query("UPDATE `User` SET `MDP`='".$_POST['NEWMDP']."' WHERE id=".$_SESSION['idUser']." ");
                                if($rep){
                                    echo "Mot de passe changé !";
                                } else {
                                    echo "les mots de passe ne correspondent pas...";
                                } 
                            } else {
                                echo "les mots de passe ne correspondent pas...";
                            }
                
                        }
                        if (isset($_POST['destroy'])){
                            //si le boutton "Supprimé le compte" est cliqué, alors le compte est supprimé de la base
                            $rep = $MaBase->query("DELETE FROM `User` WHERE id=".$_SESSION['idUser']." ");
                                if($rep){
                                    header("Location: index.php");
                            }else {
                                echo "une erreur est survenue";
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
        <?php
            }else{
                connection($MaBase);
        }
        }catch(Exception $e){
            echo "J'ai eu un problème erreur :".$e->getMessage();
        }
            ?>
        </body>
    </html>