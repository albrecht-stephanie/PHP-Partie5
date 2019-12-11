<?php
$page = 'Exercice 9';
include '../header.php';
$departement = [62 => "Pas de Calais", 59 => "Nord", 80 => "Somme", 02 => "Ainsne", 60 => "Oise"];
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Tableau avec les départements des Hauts de France avec le département en index</div>
<?php
    foreach($departement as $key => $value){
        echo '"Le département "' . $value . '" a le numéro "' . $key . '"<br />'; 
  }
 ?>   
</div>
</div>
<?php include '../footer.php'; ?>