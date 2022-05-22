<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/Compte3.css"> 
        
        <title>Compte</title>
</head>
        <body>
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
                                                        <div class="column"id="column1"><a href="#">Mon Compte</a>
                                                                <ul class="ul">
                                                                        <li class="list"><a href="MajCompte2.php">Modifier Profil</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="column"><a href="#">Déconnexion</a></div>
                                                </section>
                <!--DROP DOWN MENU--> 
                                                <section>
                                                        <div class="container">                          
                                                        <div><img id="sectionIcon" src="/NouveauPHP/FILROUGE/LogoGif/DDbar18.png"/> </div>                                                
                                                                <div id="list">
                                                                        <ul class="content">
                                                                                <li class="list"><a href="index2.php">Accueil</a></li>
                                                                                <li class="list"><a href="Meubles3.php">Meubles</a></li>
                                                                                <li class="list"><a href="Dessins.html">Dessins</a></li>
                                                                                <li class="list"><a href="Dessin sur galets2.php">Dessins sur galets</a></li>
                                                                                <li class="list"><a href="ViewCompte2.php">Compte</a></div>
                                                                        </ul>
                                                                </div>
                                                        </div>  
                                                </section> 
                                        </nav>  
                </header>           
                        <Form class="form" method="POST" action="ContrCompte.php">
                                <fieldset>
                                        <legend>Mon Compte</legend>
                                                <div class="formulaire">
                                                        <label class="Label" for="image">
                                                        <input type="image" class="image2" id="image" alt="Login" src="/NouveauPHP/FILROUGE/LogoGif/pseudo.jpg" width="200">Ajouter une image de compte</label>
                                        
                                                        <div><label class="Label" for="Nom">Nom</label>
                                                        <input class="Nom" type="text" name="Nom" id="Nom"/></div>
                                
                                                        <div><label class="Label" for="Prenom">Prénom</label>
                                                        <input class="Prenom" type="text" name="Prenom" id="Prenom"/></div>

                                                        <div><label class="Label" for="Login">Pseudo</label>
                                                        <input class="Login" type="text" name="Login" id="Login"/></div>

                                                        <div><label class="Label" for="E-mail">Adresse E-mail</label>
                                                        <input class="Mail" type="text" name="E-mail" placeholder="ex:myname@example.com" id="E-mail"/></div>

                                                        <label class="Label" for="Categorie">Adresse</label>
                                                        <select class="cat" name="categorie">
                                                                <option value="">--Choisissez une catégorie--</option>
                                                                <option value="Domicile">Domicile</option>
                                                                <option value="Travail">Travail</option>
                                                                <option value="Autre">Autre</option>
                                                        </select>
                                                        
                                                
                                                        <div class="Valid"><input class="Valid" type="submit" value="Valider"></div>
                                                                <a href="MajCompte2.php">Mettez à jour votre profil</a>

                                                </div>
                                                </form>
                                </fieldset>
                        <Form class="form2" method="POST" >
                                <fieldset>
                                        <legend>Mes Réalisations</legend>
                                                <div class="formulaire2">

                                                        <label class="Label" for="Categorie">Catégorie</label>
                                                        <select class="cat" name="categorie">
                                                                <option value="">--Choisissez une catégorie--</option>
                                                                <option value="Meuble">Meuble</option>
                                                                <option value="Dessin sur galet">Dessin sur galet</option>
                                                                <option value="Dessin">Dessin</option>
                                                                <option value="Autre">Autre</option>
                                                        </select>
                                
                                                        <div><label class="Label" for="photo">Ajouter un produit</label>
                                                        <input class="photo" type="file" name="photo" id="photo"/></div>

                                                        <div><label class="Label" for="description">Description du produit</label>
                                                        <textarea class="desc" type="text" name="desc" rows="7" cols="33"></textarea>

                                                        <div><input class="Valid" type="submit" value="Valider"></div>

                                                </div>
                                </fieldset>
                        </Form>
                <footer>
                        <!-- <a class="contact" href="Contact.php">Contact</a> -->
                </footer>
        </body>
</html>