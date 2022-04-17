<nav>
    <div class="logo">
        <h1>MatchUs</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="#about-us">About us</a></li>
            <li><a href="/game.php">Find your teammate</a></li>
            <li><a href="#">Gamers list</a></li>
        </ul>
    </div>

    <div class="logowanie">
        <?php
            if(isset($_SESSION['steamid'])) { ?>
                <div class="log">
                    <p>
                        <img src="<?php echo $steamprofile['avatar'];?>" alt="">
                        <?php echo $steamprofile['personaname'];?>
                    </p>
                    <?php 
                        logoutbutton(); 
                    ?> 
                </div>
            <?php
            }  else {
                loginbutton();
            }   
        ?>
    </div>
</nav>