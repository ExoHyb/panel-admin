<?php include "requetes/import_bdd.php"; ?>
<!DOCTYPE html>
<html>
<?php include "dashboard_head.php"; ?>
<body>
	<?php include "dashboard_navbar.php"; ?>
	<div class="container-fluid">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Dashboard - Activités</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">Ajouter une activité</div>
						<div class="panel-body">
							<form action="requetes/traitement_activites.php" method="post">
								<input name="titre" type="text" class="form-control" placeholder="Titre">
								<br>
								<textarea class="ckeditor" name="editeur" id="editeur" cols="80" rows="10"></textarea>
								<br>
								<div class="pos-button text-right">
									<button type="reset" class="btn btn-warning">Vider les champs</button>
									<button type="submit" class="btn btn-success">Ajouter</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Gestion des activités</div>
				 		 <div class="panel-body">
				    		<div class="table-responsive">
				    			<table class="table table-bordered table-hover table-striped">
				    				<thead>
				    					<tr>
				    						<th>id</th>
				    						<th>Ajouté le</th>
				    						<th>Titre</th>
				    						<th>Contenu</th>
				    						<th>Modifier</th>
				    						<th>Supprimer</th>
				    					</tr>
				    				</thead>
				    				<tbody>
				    				<?php $appercu_acti = $bdd->query('SELECT id, dateact, titre, contenu FROM activites ORDER BY dateact');
				    				while ($affichage_acti = $appercu_acti->fetch())
				    				{
				    					?>
				    					<tr>
				    						<td><?php echo $affichage_acti['id']; ?></td>
				    						<td><?php echo $affichage_acti['dateact']; ?></td>
				    						<td><?php echo $affichage_acti['titre']; ?></td>
				    						<td><?php echo $affichage_acti['contenu']; ?></td>
				    						<td><a href="#"><i class="fa fa-pencil-square-o"></i> Modifier</a></td>
				    						<td><a href="#"><i class="fa fa-trash-o"></i> Supprimer</a></td>
				    					</tr>
				    					<?php
				    					}
				    					$appercu_acti->closeCursor();
				    					?>
				    				</tbody>
				    			</table>
				    		</div>
				  		</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</body>
</html>