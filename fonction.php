<?php
$MaBase = new PDO('mysql:host=192.168.65.206; dbname=utilisateurs; charset=utf8','root', 'root');

function check() {
    if ($_SESSION["Logged"] !== true) {
      return false;
    }else{
        return true;
    }
}

function logout() {
    ?>
    <form class="right" method="POST">
        <p>
            <input type="submit" name="deco" value="Déconnexion"/>
        </p>
    </form>
    <?php
        
}

function connection($MaBase){

    if(isset($_POST['nom'])){
       
        $Result = $MaBase->query("SELECT * FROM `User` WHERE `nom`='".$_POST['nom']."' AND `MDP` = '".$_POST['MDP']."'");
        if($Result->rowCount()>0){
            $tab = $Result->fetch();
            $_SESSION["Logged"] = true;
            $_SESSION["idUser"] = $tab['id'];
            
            return true;
        }else{
            echo "Le mot de passe ou le nom d'utilisateur est incorect";
        };
    }

    ?>
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
