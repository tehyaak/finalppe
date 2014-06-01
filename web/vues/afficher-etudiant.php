<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PPE14-Etudiants</title>
</head>
<body>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Liste étudiants</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">    
							Ajouter un étudiant (non actif)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<th>Nom</th>
										<th>Prenom</th>
										<th>Specialité</th>
										<th>Email</th>
									</thead>
										<?php 	$depotEtudiant = $entityManager->getRepository('Etudiant');
											$listeEtudiant = $depotEtudiant->findAll();
											foreach($listeEtudiant as $e): ?>
									<tbody>
										<td>
											<?php echo $e->getNom(); ?>
										</td>
										<td>
											<?php echo $e->getPrenom(); ?>
										</td>
										<td>
											<?php echo $e->getSpecialite(); ?>
										</td>
										<td>
											<?php echo $e->getEmail(); endforeach;?>
										</td>
									</tbody>
								</table>
                            </div>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</body>
</html>
