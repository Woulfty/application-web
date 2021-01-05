<?php
    session_start();
    include "fonction.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/jeux.css"><!--lien pour les pages de jeux-->
    <link rel="stylesheet" href="CSS/cssmenu.css">
    <link rel="stylesheet" href="CSSstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            $_GET['GameName']
        ?>
    </title>
</head>
<body>
    <?php
    if(check()){
            //selection du jeu dans la base via son ID
            $GameResult = $MaBase->query("SELECT * FROM `Game` WHERE `id`='".$_GET['GameName']."'");
            include "menu.php";
        ?>
        <div class="page">
            <div class="img">
                <!--met l'affiche du jeu selectioné dans la base-->
                <img class="Affiche" src="images/<?php echo $_GET['GameName']; ?>/Affiche.jpg" alt="Affiche">
            </div>
            <div class="desc">
                <?php 
                    //$req = $MaBase->query("SELECT * FROM Game `texte` WHERE `nom`='".$_GET['GameName']."'");
                    $donnees = $GameResult->fetch();
                    echo '<h1>'.$donnees['nom'].'</h1>';
                ?>
                <div class="espace40px"></div>
                <?php
                    //affiche une description du jeu
                    echo($donnees['texte']);
                ?>
            </div>
        </div>
        <div class="espace40px"></div>
        
            <!--COMMENTAIRES-->
            <h1 class="left">Commentaires anonymes :</h1>
            <form action="" method="post">
            <h2>Entrez votre commentaire :
            <input type="text" placeholder="Ecriver quelque-chose" name="comm">
            <input type="submit" name='push' value="Poster"></h2>
            </form>
            <?php
                if (isset($_POST["push"])) {
                    //ajoute un commentaire dans la base de la page du jeu selectionné
                    $commentaire = $MaBase->query("INSERT INTO `commentaires`(`commentaire`, `iduser`, `idjeux`) VALUES ('".$_POST['comm']."','".$_SESSION['idUser']."','".$_GET['GameName']."')");

                    if($commentaire){
                            //refresh la page après l'envoie du commentaire
                            echo '<meta http-equiv="refresh" content="0">';
                        } else {
                            echo "Une erreur est survenue.";
                        } 
                    }
                    //selectionne tout les commentaires du jeu et les affiches
                    $CommResult = $MaBase->query("SELECT * FROM `commentaires` WHERE `idjeux`='".$_GET['GameName']."'");
                    While($don = $CommResult->fetch()){
                        ?>
                        <div class="comm">
                            <div class="center">
                                <?php
                                    echo '<h3 class="desct">'.$don['commentaire'].'</h3>';
                                ?>
                            </div>
                        </div>
                        <?php
                        }

                }else{
                    //en cas d'inactivité reconection demandé
                    connection($MaBase);
                }
            ?>
</body>
</html>