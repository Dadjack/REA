<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/Inscription2.css">
        <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/Navphp4.css">
        <title>Inscription</title>
        <!-- <script src="script.js" defer></script> -->
</head>
        <body>
                <header>
                <!--LOGO AND NAVIGATION BAR-->
                        <div id="header">
                                        <nav>    
                                                <section id="section">
                                                        <div class="column2" id="Logo"><img src="/NouveauPHP/FILROUGE/LogoGif/logo3.png" alt="Logo" width="200px;"></div>
                                                        <div class="column"><a href="index.php">Accueil</a></div>
                                                        <div class="column"><a href="Meubles.php">Meubles</a></div>
                                                        <div class="column"><a href="Dessins.php">Dessins</a></div>
                                                        <div class="column"><a href="Dessin sur galets.php">Dessins sur galets</a></div>
                                                        <div class="column"><a href="ViewConn2.php">Connexion</a></div>
                                                        <div class="column"id="column1"><a href="#">Inscription</a></div>
                                                        <div class="column"><a href="ViewCompte.php">Compte</a></div>
                                                </section>
                <!--DROP DOWN MENU--> 
                                                <section>
                                                        <div class="container">                          
                                                        <div><img id="sectionIcon" src="/NouveauPHP/FILROUGE/LogoGif/DDbar18.png"/> </div>                                                
                                                                <div id="list">
                                                                        <ul class="content">
                                                                                <li class="list"><a href="index.php">Accueil</a></li>
                                                                                <li class="list"><a href="Meubles3.php">Meubles</a></li>
                                                                                <li class="list"><a href="Dessins.php">Dessins</a></li>
                                                                                <li class="list"><a href="Dessin sur galets2.php">Dessins sur galets</a></li>
                                                                                <li class="list"><a href="ViewConn2.php">Connexion</a></li>
                                                                                <li class="list"><a href="ViewCompte2.php">Compte</a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>  
                                                </section> 
                                        </nav>  
                </header>           
                        <Form action="ContrInsc2.php" method="POST" >
                                <fieldset>
                                        <legend>Inscription</legend>
                                                <div class="formulaire">

                                                        <div><label class="Label" for="E-mail" >E-mail</label>
                                                        <input class="Mail" type="text" name="mail_membre" placeholder="ex:myname@example.com" id="E-mail" required/></div>
                                        
                                                        <div><label class="Label" for="Password">Mot de passe</label>
                                                        <input class="Password1" type="password" name="mdp_membre" id="Mot de passe" required/></div>
                                                
                                                        <div><label class="Label" for="Password" >Confirmer Mdp</label>
                                                        <input class="Password" type="password" name='mdp_confirm' id="Mot de passe" required/></div>
                                                
                                                        <div class="Valid"><input class="Valid" type="submit" value="Valider"></div>

                                                        <div><input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                                        <label for="agree-term" id="agree-term" class="Label" required>Accepter les conditions d'utilisation</label></div>

                                                </div>  
                                </fieldset>
                        </Form>
                <footer>
                        <div class="column"><a href="Contact.php">Contact</a></div>
                </footer>

        </body>
</html>