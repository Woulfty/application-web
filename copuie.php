<!--jeux.php-->
<?php
    session_start();
    check();
    include "fonction.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/jeux.css"><!--lien pour les pages de jeux-->
    <link rel="stylesheet" href="CSS/cssmenu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            echo $_GET['GameName']
        ?>
    </title>
</head>
<body>
    <?php
      echo 'id est : '.$_GET['GameName'];
            $GameResult = $MaBase->query("SELECT * FROM `Game` WHERE `nom`='".$_GET['GameName']."'");
        include "menu.php";
    ?>
    <div class="page">
        <div class="img">
            <img class="Affiche" src="images/<?php echo $_GET['GameName']; ?>/Affiche.jpg" alt="Affiche">
        </div>
        <div class="desc">
            <?php 
                $req = $MaBase->query("SELECT * FROM Game `texte` WHERE `nom`='".$_GET['GameName']."'");
                while($donnees = $req->fetch()){
                    echo($donnees['texte']);
                }
            ?>
        </div>
    </div>
    <div class="espace40px"></div>
    <?php
        if(!isset($_GET['Commentaires'])){
            echo "<h3> Il y a aucun commentaires à afficher </h3>";
            }else{
            }
    ?>
</body>
</html>




action="index.php"




<!--delete-->
<form action="" method="post">

        <?php
        while($tab=$GamesResult->fetch()){
            echo '<p><a href="jeux.php?GameName='.$tab["id"].'">'.$tab["nom"].' </a>';

            ?>

            <input type="checkbox" id="Game_<?php echo $tab["id"]?>" name="Games[]" value="<?php echo $tab["id"]?>">


            <?php

            echo "</p>";
        }

        //TTRAITEMENT SUPPRESSION
        if (isset($_POST['supp'])){
            
            //NE PAS METTRE []
            foreach($_POST["Games"] as $check)
            {
                if( !isset($checkoptions) ){ 
                    $checkoptions = $check; 
                }
                else{ 
                    $checkoptions .= ",".$check; 
                }
            }
            
            echo  "DELETE FROM `User` WHERE Id IN(".$checkoptions.")";

        }

    ?>
        <input type="submit"  name="supp" value="suppre ca"/> 
        </form>