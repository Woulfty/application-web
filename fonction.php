<?php
//connection a la base
$MaBase = new PDO('mysql:host=192.168.65.206; dbname=utilisateurs; charset=utf8','root', 'root');
//fonction pour vérifier si l'utilisateur est bien connecter
function check() {
    if ($_SESSION["Logged"] !== true) {
      return false;
    }else{
        return true;
    }
}
//fonction pour se déconncter
function logout() {
    ?>
    <form class="right" method="POST">
        <p>
            <input type="submit" name="deco" value="Déconnexion"/>
        </p>
    </form>
    <?php
        
}
//connection 
function connection($MaBase){

    if(isset($_POST['nom'])){
       //selection des users 
        $Result = $MaBase->query("SELECT * FROM `User` WHERE `nom`='".$_POST['nom']."' AND `MDP` = '".$_POST['MDP']."'");
        if($Result->rowCount()>0){
            $tab = $Result->fetch();
            //si il existe et que le mot de passe correspond -> connection
            $_SESSION["Logged"] = true;
            $_SESSION["idUser"] = $tab['id'];
            //réponse a la connection
            return true;
        }else{
            //sinon affiche un msg d'erreur
            echo `<h3 class="desct">Le mot de passe ou le nom d'utilisateur est incorect</h3>`;
        };
    }

    ?>
    <!--formulaire-->
    <div id="container">
        <form action="" method="post">
                Identifiant<input type="text" placeholder="Entrer le nom d'utilisateur" name="nom">
                Mot de passe<input type="password" placeholder="Entrer le mot de passe" name="MDP">
                <input type="submit" id='submit' value="Connection">
            </form>
            <a class="color" href="inscription.php">S'inscrire</a>
        </div>
    </div>    
    <?php
} 
?>
