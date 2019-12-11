<?php
$page = 'Exercice 1';
include '../header.php';
$result = " ";?>
<div class="card-header font-weight-bold bg-info col-sm-12">Tableau avec les mois de l'année</div>
<?php
    $monthArray = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
    $result = print_r($monthArray);
?>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>