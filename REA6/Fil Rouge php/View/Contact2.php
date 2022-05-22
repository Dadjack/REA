<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./MesCSS/Contact.css">
    <link rel="stylesheet" href="./MesCSS/Nav.css">
    <title>Contact</title>
</head>
    <body>
        <header>
            <!--LOGO AND NAVIGATION BAR-->
                <div id="header">
                    <nav>    
                        <section id="section">
                                <div class="column2" id="Logo"><img src="./LogoGif/logo2.png" alt="Logo" width="200px;"></div>
                                <div class="column"><a href="Menu.html">Accueil</a></div>
                                <div class="column"><a href="Meubles.html">Meubles</a></div>
                                <div class="column"><a href="Dessin sur galets.html">Dessins sur galets</a></div>
                                <div class="column"><a href="Dessins.html">Dessins</a></div>
                                <div class="column"><a href="Connexion.php">Connexion</a></div>
                                <div class="column"><a href="Inscription.php">Inscription</a></div>
                                <div class="column"id="column1"><a href="Contact.php">Contact</a></div>
                        </section>
            <!--DROP DOWN MENU--> 
                        <section>
                                <div class="container">                          
                                        <div><img id="sectionIcon" src="C:/Users/David/OneDrive/Bureau/Projet complet Fil Rouge/Fil rouge/Images/DDbar16.png"/> </div>                                                
                                        <div id="list">
                                                <ul class="content">
                                                        <li class="list"><a href="Menu.html">Accueil</a></li>
                                                        <li class="list"><a href="Meubles.html">Meubles</a></li>
                                                        <li class="list"><a href="Dessin sur galet.html">Dessins sur galets</a></li>
                                                        <li class="list"><a href="Dessins.html">Dessins</a></li>
                                                        <li class="list"><a href="Connexion.php">Connexion</a></li>
                                                        <li class="list"><a href="Inscription.php">Inscription</a></li>
                                                        <li class="list"><a href="Contact.php">Contact</a></li>
                                                </ul>
                                        </div>
                                </div>  
                        </section> 
                    </nav>  
        </header>             
                    <Form name="contact" method="POST" action="NewFormulaire.html">
                        <fieldset>

                            <legend>Formulaire de contact</legend>

                            <div class="formulaire"> 
                                <div><label class="Label" for="Nom">Nom<span>*</span>:</label>
                                <input class="Nom" type="text" name="Nom" id="Nom"/></div>

                                <div><label class="Label" for="Prenom">Prénom<span>*</span>:</label>
                                <input class="Prenom" type="text" name="Prenom" id="Prenom"/></div>

                                <div><label class="Label" for="E-mail">E-mail<span>*</span>:</label>
                                <input class="Mail" type="text" name="E-mail" placeholder="ex:myname@example.com" id="E-mail"/></div>
                                
                                <div><label class="Label" for="Subject">Sujet :</label>
                                <input class="Subject" type="text" name="Sujet" id="Sujet"/></div>
                                          
                                <textarea name="Comment" id="Com" placeholder="Ecrivez votre message" cols="70" rows="25"></textarea>
                                <input class="Envoi" type="submit" value="Envoyer">
                            
                            </div>

                    </fieldset>
                    </Form>
                    <footer>

                    </footer>
    </body>
</html>