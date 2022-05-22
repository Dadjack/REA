<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/NouveauPHP/FILROUGE/MesCSS/MajCompte.css">
        
        <title>Mise à Jour Du Compte</title>
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
                                                        <div class="column"><a href="Dessin sur galets.html">Dessins sur galets</a></div>
                                                        <div class="column" id="column1"><a href="ViewCompte.php">Mon Compte</a></div>
                                                        <div class="column"><a href="#">Déconnexion</a></div>
                                                </section>
                <!--DROP DOWN MENU--> 
                                                <section>
                                                        <div class="container">                          
                                                        <div><img id="sectionIcon" src="/NouveauPHP/FILROUGE/LogoGif/DDbar18.png"/> </div>                                                
                                                                <div id="list">
                                                                        <ul class="content">
                                                                                <li class="list"><a href="index.php">Accueil</a></li>
                                                                                <li class="list"><a href="Meubles.php">Meubles</a></li>
                                                                                <li class="list"><a href="Dessins.php">Dessins</a></li>
                                                                                <li class="list"><a href="Dessin sur galets.php">Dessins sur galets</a></li>
                                                                                <div class="list"><a href="ViewCompte2.php">Mon Compte</a></div>
                                                                                <li class="list"><a href="Contact.html">Contact</a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>  
                                                </section> 
                                        </nav>  
                </header>           
                        <Form class="form" method="POST">
                                <fieldset>
                                                <div class="formulaire">
                                                        <label class="Label" for="image">
                                                        <input type="image" class="image2" id="image" alt="Login" src="/NouveauPHP/FILROUGE/LogoGif/pseudo.jpg" width="200">Modifier mon image de compte</label>

                                                        <div><label class="Label" for="E-mail">Changer adresse E-mail</label>
                                                        <input class="Mail" type="text" name="E-mail" placeholder="ex:myname@example.com" id="E-mail"/></div>

                                                        <div><label class="Label" for="Adresse">Adresse</label>
                                                        <input class="Adresse" type="text" id="Adresse"></div>
                                
                                                        <div><label class="Label" for="Login">Changer de pseudo</label>
                                                        <input class="Login" type="text" name="Login" id="Login"/></div>
                                        
                                                
                                                        <div class="Valid"><input class="Valid" type="submit" value="Valider"></div>
                                                                <a href="UpdateMdp.php">Modifier Mot De Passe</a>


                                                </div>
                                                </form>
                                </fieldset>
                        <Form class="form2" method="POST" >
                                <fieldset>
                                                <div class="formulaire2">

                                                        <label class="Label" for="Categorie">Catégorie</label>
                                                        <select class="cat" name="categorie">
                                                                <option value="">--Choisissez une catégorie--</option>
                                                                <option value="Meuble">Meuble</option>
                                                                <option value="Dessin sur galet">Dessin sur galet</option>
                                                                <option value="Dessin">Dessin</option>
                                                                <option value="Autre">Autre</option>
                                                        </select>
                                
                                                        <div><label class="Label" for="photo">Supprimer un produit</label>
                                                        <input class="photo" type="file" name="photo" id="photo"/></div>

                                                        <div><label class="Label" for="description">Description du produit</label>
                                                        <textarea class="desc" type="text" name="desc" rows="7" cols="33"></textarea>

                                                        <div><input class="Valid" type="submit" value="Valider"></div>

                                                </div>
                                </fieldset>
                        </Form>
                <footer>
                        <div><a href="Contact.html">Contact</a></div>
                </footer>
        </body>
</html>