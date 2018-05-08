<?
if(isset($_POST['requete']) && $_POST['requete'] != NULL)
{
	mysql_connect('localhost','root','');
	mysql_select_db('bdd');

	$requete = htmlspecialchars($_POST['requete']);
	$query = mysql_query("SELECT * FROM fonctions WHERE name LIKE '%$requete%' ORDER BY name DESC") or die (mysql_error()); 

	$nb_resultats = mysql_num_rows($query); 

	if($nb_resultats != 0) // si le nombre de résultats est supérieur à 0, on continue
	{
		
		?>
		<h3>Résultats de votre recherche.</h3>
		<p>Nous avons trouvé <?php echo $nb_resultats; // on affiche le nombre de résultats 
		if($nb_resultats > 1)
		{ 
			echo 'résultats';
		} 
		else 
		{
			echo 'résultat';
		}
		?>
		dans notre base de données. Voici le(s) vaisseau(x) que nous avons trouvées :<br/>
		<br/>
		<?
		while($donnees = mysql_fetch_array($query)) 
		{
			?>
			<a href="*"><? echo $donnees['nom_fonction']; ?></a><br/>
			<?
		}
		?>
		<br/>
		<br/>
		<a href="rechercher.php">Faire une nouvelle recherche</a></p>
		<?
	} 


	else
	{
		?>
		<h3>Pas de résultats</h3>
		<p>Nous n'avons trouvé aucun résultat pour votre requête "<? echo $_POST['requete']; ?>". <a href="index.php?action=searchShip">Réessayez</a> avec autre chose.</p>
		<?
	}
	mysql_close();
}
else
{ 
	?>
	<p>Vous allez faire une recherche avec un nom de vaisseau. Tapez une requête pour réaliser une recherche.</p>
	<form action="index.php?action=searchShip" method="Post">
		<input type="text" name="requete" size="10">
		<input type="submit" value="Ok">
	</form>
	<?
}
?>
