<?php
$page = 'Exercice 3';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher le mois avec l'index 5</div>
<?php
    $monthArray = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
    
?>
<p><?= $monthArray[5]?></p>
</div>
</div>
<?php include '../footer.php'; ?>