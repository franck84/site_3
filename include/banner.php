
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
									// On récupère tout le contenu de la table banner
									$reponse = $bdd->query('SELECT * FROM banner');
									// On affiche chaque entrée une à une
									while ($donnees = $reponse->fetch())
									{
									?>
									<section id="banner">
									<div class="inner">
										<h1><?php echo $donnees['text1']; ?></h1>
										<p><?php echo $donnees['text1']; ?><br />
										 <a href="#">ICI</a> <?php echo $donnees['text1']; ?></p>
									</div>
									<video autoplay loop muted playsinline src="images/banner.mp4"></video>
								</section>
									
									<?php
									}
									$reponse->closeCursor(); // Termine le traitement de la requête


?>






