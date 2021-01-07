<nav>
    <ul>
        <li class="deroulant">
            <a href="compte.php">Mon compte</a>
        </li>
        <li class="deroulant"><a>Open world ▼</a>
            <ul class="sous">
                <!--barre du menu-->
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="9"; ?>">GTA</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="5"; ?>">Watch Dogs 2</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="7"; ?>">Red Dead Redption II</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="12"; ?>">Fallout New Vegas</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="2"; ?>">Fallout 4</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="3"; ?>">Fallout 76</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="14"; ?>">Cyberpunk 2077</a></li>
            </ul>
        </li>
        <li class="deroulant"><a>Action ▼</a>
            <ul class="sous">
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="8"; ?>">Division 2</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="6"; ?>">Call of duty</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="4"; ?>">Five Night at Freddy's</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="13"; ?>">Among Us</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="1"; ?>">The last of us 2</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="11"; ?>">God of War</a></li>
                <li><a href="jeux.php?GameName=<?php echo $_POST['GameName']="10"; ?>">Uncharted</a></li>
            </ul>
        </li>
        <li>

        </li>
        <li>
            <form action="index.php" method="post">
                <p>
                    <input type="submit" name="deco" value="Déconnexion" />
                    <?php
                        //deconection
                        if(isset($_Post["deco"])){
                            $_SESSION["Logged"] = false;
                        }
                    ?>
                </p>
            </form>
        </li>
    </ul>
</nav>