<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/UpdateMdp.css">
        
        <title>UpdateMdp</title>
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
                                                        <div class="column"><a href="ViewCompte2">Compte</a>
                                                                <!-- <ul class="ul1">
                                                                <li class="list2"><a href="MajCompte.php">Maj Compte</a></li>
                                                                </ul> -->
                                                        </div>
                                                        <div class="column"><a href="#">Déconnexion</a></div>
                                                </section>
                <!--DROP DOWN MENU--> 
                                                <section>
                                                        <div class="container">                          
                                                        <div><img id="sectionIcon" src="/NouveauPHP/FILROUGE/LogoGif/DDbar18.png"/> </div>                                                
                                                                <div id="list">
                                                                        <ul class="content">
                                                                                <li class="list"><a href="index.html">Accueil</a></li>
                                                                                <li class="list"><a href="Meubles.php">Meubles</a></li>
                                                                                <li class="list"><a href="Dessins.html">Dessins</a></li>
                                                                                <li class="list"><a href="Dessin sur galets.php">Dessins sur galets</a></li>
                                                                                <li class="list"><a href="ViewCompte.php">Compte</a></div>
                                                                        </ul>
                                                                </div>
                                                        </div>  
                                                </section> 
                                        </nav>  
                </header>           
                        <Form class="form" method="POST" action="ContrCompte.php">
                                <fieldset>
                                    <legend>Modifier Mot De Passe</legend>
                                                <div class="formulaire">

                                                        <div><label class="Label" for="Password">Modifier Mot de passe</label>
                                                        <input class="Password1" type="password" name="mdp_membre" id="Mot de passe" required/></div>
                                                
                                                        <div><label class="Label" for="Password" >Confirmer Mot de Passe</label>
                                                        <input class="Password" type="password" name='mdp_confirm' id="Mot de passe" required/></div>

                                                        <div><input class="Valid" type="submit" value="Valider"></div>

                                                </div>
                                </fieldset>
                        </Form>
                <footer>
                        <div ><a href="Contact2.php">Contact</a></div>
                </footer>
        </body>
</html>