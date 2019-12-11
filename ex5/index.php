<?php
$page = 'Exercice 5';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Tableau avec les départements des Hauts de France avec le département en index</div>
<?php
    $departement = [62 => "Pas de Calais", 59 => "Nord", 80 => "Somme", 02 => "Ainsne", 60 => "Oise"];
?>
<p><?=  print_r($departement) ?></p>
</div>
</div>
<?php include '../footer.php'; ?>