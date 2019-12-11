<?php
$page = 'Exercice8';
include '../header.php';
$monthArray = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
$result = " ";?>
<div class="card-header font-weight-bold bg-info col-sm-12">Tableau avec les mois de l'année</div>
<?php
    foreach($monthArray as $key => $value){
      echo "$key => $value <br>";
    }?>
</div>
</div>
<?php include '../footer.php'; ?>