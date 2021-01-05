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
            <title>Welcome</title>
        </head>
        <body>
    <?php
    try{
        //fonction de connection
        if(connection($MaBase)){
                if(check()){
                include "menu.php";
            ?>
            <div class="espace80px"></div>
            <?php
                }else{
                    //en cas d'inactivité reconection demandé
                    connection($MaBase);
                }
        }
    }

    catch(Exception $e){
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
    ?>
    </body>
</html>
