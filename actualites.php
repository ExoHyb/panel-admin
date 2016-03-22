<?php include "dashboard/requetes/import_bdd.php"; ?>
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Actualités</h4>
		</div>
		<div class="panel-body">
			<?php $reponse = $bdd->query('SELECT titre, contenu, datecr FROM actus  ORDER BY datecr DESC LIMIT 5'); 
			while ($donnees = $reponse->fetch()) 
			{
			?>
				<h4><?php echo $donnees['titre']; ?></h4>
				<p><?php echo $donnees['datecr']; ?></p>
				<p><?php echo $donnees['contenu']; ?></p>
			<?php
			}
			$reponse->closeCursor();
			?>
		</div>
	</div>
</div>