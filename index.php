<<?php
/*
vraag 1 en 2
$arrayName = $klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
print_r($arrayName);
foreach ($arrayName as $value) {
  echo $value . PHP_EOL;
}
*/
// combinatie opdracht
$bucketlist = array("");
$hoeveelheid_activiteiten = readline(" Hoeveel activiteiten wilt u toevoegen aan uw bucketlist? ");

for ($i=0; $i < $hoeveelheid_activiteiten ; $i++) {
  $activity = readline(" Welke activiteit wilt u toevoegen aan uw bucketlist? ");
array_push($bucketlist, $activity);
}
print_r($bucketlist);
foreach ($bucketlist as  $value) {
  echo $value . PHP_EOL;
}
//vraag 6 lukt me niet voor nu v1.0


 ?>
