<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <section class="top-page">
            <header>
                <img src="images/GSB.png" alt="Logo du site">
                <nav class="nav">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="connexion2.php">Connexion</a></li>
                    <li><a href="fiche de frais.html">Fiche de frais</a></li>
                    <li><a href="consulter.html">Voir ces fiches</a></li>
                </nav>
            </header>
        </section>
        <section class="connexion">
            <div id="container">
                <!-- zone de connexion -->
            
                <form action="verification.php" method="POST">
                    <h1>Connexion</h1>
                
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text1" placeholder="Entrer le nom d'utilisateur" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        
                    <input type="submit" id='submit' value='LOGIN' >

                    <?php
                    if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                </form>
            </div>
        </section>
    </body>
    <body style='background:#fff;'>
        <div id="content">
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                if($_SESSION['username'] !== "")
                    {
                        $user = $_SESSION['username'];
                        // afficher un message
                        echo "Bonjour $user, vous êtes connecté";
                    }
                }
            ?>
            
        </div>
    </body>
</html>