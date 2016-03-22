<?php include "requetes/import_bdd.php"; ?>
<!DOCTYPE html>
<html>
<?php include "dashboard_head.php"; ?>
<body>
	<?php include "dashboard_navbar.php"; ?>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Dashboard</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-green">
						<div class="panel-heading">
							<strong>Actualités récentes</strong>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>Ajouté le</th>
											<th>Titre</th>
											<th>Contenu</th>
										</tr>
									</thead>
									<tbody>
									<?php $appercu_actu = $bdd->query('SELECT titre, contenu, datecr FROM actus ORDER BY datecr DESC LIMIT 5'); 
									while ($affichage_actu = $appercu_actu->fetch())
									{
										?>
										<tr>
											<td><?php echo $affichage_actu['datecr']; ?></td>
											<td><?php echo $affichage_actu['titre']; ?></td>
											<td><?php echo $affichage_actu['contenu']; ?></td>
										</tr>
										<?php
									}
									$appercu_actu->closeCursor();
									?>
									</tbody>
								</table>
							</div>
							<div class="text-right">
								<a href="dashboard_actualites.php">Voir & Gérer toutes les actualités <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="panel panel-orange">
						<div class="panel-heading">
							<strong>Activités & Actions récentes</strong>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>Ajouté le</th>
											<th>Type</th>
											<th>Titre</th>
											<th>Contenu</th>
										</tr>
									</thead>
									<tbody>
									<?php $appercu_acti = $bdd->query('SELECT titre, contenu, dateact FROM activites ORDER BY dateact DESC LIMIT 5');
									while ($affichage_acti = $appercu_acti->fetch())
									{
										?>
										<tr>
											<td><?php echo $affichage_acti['dateact']; ?></td>
											<td>exemple</td>
											<td><?php echo $affichage_acti['titre']; ?></td>
											<td><?php echo $affichage_acti['contenu']; ?></td>
										</tr>
										<?php
									}
									$appercu_acti->closeCursor();
									?>
									</tbody>
								</table>
							</div>
							<div class="text-right">
								<a href="activites.php">Voir & Gérer toutes les activités et actions <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="panel panel-red">
						<div class="panel-heading">
							<strong>Example Panel</strong>
						</div>
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio laborum dolorem, facilis fugit vero quas laudantium, asperiores perferendis deserunt non necessitatibus voluptates consectetur, soluta ratione placeat aliquid culpa maiores fugiat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</body>
</html>