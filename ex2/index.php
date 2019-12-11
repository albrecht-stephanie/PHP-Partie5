<?php
$page = 'Exercice 1';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher le 3ème mois</div>
<?php
    $monthArray = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
?>
<p><?= $monthArray[2] ?></p>
</div>
</div>
<?php include '../footer.php'; ?>