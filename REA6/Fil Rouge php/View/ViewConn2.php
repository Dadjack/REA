<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/Connexionphp3.css">
    <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/Navphp4.css">
    <title>Connexion</title>
</head>
            <header>
            <!--LOGO AND NAVIGATION BAR-->
                        <div id="header">
                                        <nav>    
                                            <section id="section">
                                                        <div class="column2" id="Logo"><img src="/NouveauPHP/FILROUGE/LogoGif/logo3.png" alt="Logo" width="200px;"></div>
                                                        <div class="column"><a href="index2.php">Accueil</a></div>
                                                        <div class="column"><a href="Meubles3.php">Meubles</a></div>
                                                        <div class="column"><a href="Dessins.php">Dessins</a></div>
                                                        <div class="column"><a href="Dessin sur galets2.php">Dessins sur galets</a></div>
                                                        <div class="column"><a href="ViewCompte2.php">Mon Compte</a></div>
                                                        <div class="column"id="column1"><a href="Connexion.php">Connexion</a></div>
                                                        <div class="column"><a href="ViewInsc2.php">Inscription</a></div>
                                            </section>
            <!--DROP DOWN MENU--> 
                                            <section>
                                                <div class="container">                          
                                                    <div><img id="sectionIcon" src="/filrougecpt/FilrougeREDIRECT/LogoGif/DDbar16.png"/> </div>                                                
                                                    <div id="list">
                                                        <ul class="content">
                                                                            <li class="list"><a href="index2.html">Accueil</a></li>
                                                                            <li class="list"><a href="Meubles2.php">Meubles</a></li>
                                                                            <li class="list"><a href="Dessins2.php">Dessins</a></li>
                                                                            <li class="list"><a href="Dessin sur galets.php">Dessins sur galets</a></li>
                                                                            <li class="list"><a href="ViewCompte2.php">Compte</a></div>
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </section> 
                                        </nav>  
            </header>  
                    
                    <!--FORM-->
                <Form action="ContrConn.php" name="connexion" method="POST">
                        <fieldset>
                            <legend>Connexion</legend>
                            
                                <div class="formulaire">
                                <div><label class="Label" for="E-mail">E-mail</label>
                                <input class="Mail" type="text" name="mail_membre" placeholder="ex:myname@example.com" id="E-mail"/></div>
                                
                                <div><label class="Label" for="Password">Mot de passe</label>
                                <input class="Password" type="password" name="mdp_membre" id="Mot de passe" required/></br></div>

                                <div ><a href="ViewInsc2.php">Mot de passe oublié ?</a></div>

                                <input id="Valider" class="Valid" type="submit" value="Se connecter" />                                  
                                <div><input class="checkbox" type="checkbox" id="checkbox"/><label for="checkbox">Se souvenir de moi</label></div>

                                    <div class="Compte"><p>Rejoignez-nous ?<a href="Inscription.php">Créer un compte:</a></p></div>
                                </div>
                    </fieldset>
                </Form>
            <!-- <footer>
                <a class="contact" href="Contact.php">Contact</a>
            </footer> -->

    </body>
</html>