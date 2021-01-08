
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
									// On récupère tout le contenu de la table nav
									$reponse = $bdd->query('SELECT * FROM nav');
									// On affiche chaque entrée une à une
									while ($donnees = $reponse->fetch())
									{
									?>
									<nav id="menu">
									<ul class="links">
										<li><a href="index.php"><?php echo $donnees['nav1']; ?></a></li>
										<li><a href="elements.php"><?php echo $donnees['nav2']; ?></a></li>
										<li><a href="generic.php"><?php echo $donnees['nav3']; ?></a></li>
									</ul>
								</nav>
									
									<?php
									}
									$reponse->closeCursor(); // Termine le traitement de la requête


?>







