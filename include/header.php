
<?php
									try
									{
										// On se connecte à MySQL
										$bdd = new PDO('mysql:host=localhost;dbname=site_2', 'root', '');
									}
									catch(Exception $e)
									{
										// En cas d'erreur, on affiche un message et on arrête tout
										die('Erreur : '.$e->getMessage());
									}
									// Si tout va bien, on peut continuer
									// On récupère tout le contenu de la table titre
									$reponse = $bdd->query('SELECT * FROM titre');
									// On affiche chaque entrée une à une
									while ($donnees = $reponse->fetch())
									{
									?>
									<header id="header">
									<a class="logo" href="index.php"><?php echo $donnees['titre_txt']; ?></a>
									<nav>
										<a href="#menu"><?php echo $donnees['menu_txt']; ?></a>
									</nav>
								</header>
									
									<?php
									}
									$reponse->closeCursor(); // Termine le traitement de la requête


?>