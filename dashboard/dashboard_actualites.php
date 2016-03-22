<?php include "requetes/import_bdd.php"; ?>
<!DOCTYPE html>
<html>
<?php include "dashboard_head.php"; ?>
<body>
	<?php include "dashboard_navbar.php"; ?>
	<div class="container">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Dashboard - Actualités</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">Ajouter une actualité</div>
						<div class="panel-body">
							<form action="requetes/traitement_actualites.php" method="post">
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
					  <div class="panel-heading">Gestion actualités</div>
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
				    				<?php $appercu_actu = $bdd->query('SELECT id, datecr, titre, contenu FROM actus ORDER BY datecr');
				    				while ($affichage_actu = $appercu_actu->fetch())
				    				{
				    					?>
				    					<tr>
				    						<td><?php echo $affichage_actu['id']; ?></td>
				    						<td><?php echo $affichage_actu['datecr']; ?></td>
				    						<td><?php echo $affichage_actu['titre']; ?></td>
				    						<td><?php echo $affichage_actu['contenu']; ?></td>
				    						<td><a href="#"><i class="fa fa-pencil-square-o"></i> Modifier</a></td>
				    						<td><a href="#"><i class="fa fa-trash-o"></i> Supprimer</a></td>
				    					</tr>
				    					<?php
				    					}
				    					$appercu_actu->closeCursor();
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