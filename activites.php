<?php include "dashboard/requetes/import_bdd.php"; ?>
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Activités</h4>
		</div>
		<div class="panel-body">
			<?php $activite = $bdd->query('SELECT titre, contenu, dateact FROM activites ORDER BY dateact DESC LIMIT 5'); 
			while ($show_activite = $activite->fetch()) 
			{
			?>
				<h4><?php echo $show_activite['titre']; ?></h4>
				<p><?php echo $show_activite['dateact']; ?></p>
				<p><?php echo $show_activite['contenu']; ?></p>
			<?php
			}
			$reponse->closeCursor();
			?>
		</div>
	</div>
</div>