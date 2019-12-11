<?php
$page = 'Exercice 6';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher la valeur de l'index 59</div>
<?php
    $departement = [62 => "Pas de Calais", 59 => "Nord", 80 => "Somme", 02 => "Ainsne", 60 => "Oise"];
?>
<p><?= $departement[59] ?></p>
</div>
</div>
<?php include '../footer.php'; ?>