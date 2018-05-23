<?php
function age (){
$agemax = 99;
$agemini = 1;
  while ($agemini <= $agemax){
  echo '<option value="'.$agemini.'">'.$agemini.'</option>';
  $agemini++;
  }
}



function traitement (){
  if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
  }
  if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    }
    if (isset($_POST['prenom'])) {
      $prenom = $_POST ['prenom'];
    }
    if (isset($_POST['choix'])) {
      $choix = $_POST ['choix'];
    }
    if (isset($_POST['adresse'])) {
      $adresse = $_POST['adresse'];
    }
    if (isset($_POST['loisir'])) {
      $loisir = $_POST['loisir'];
    }
    if (isset($_POST['autre'])) {
      $autre = $_POST['autre'];
    }
}
$to      = 'djoandco@gmail.com';
$subject = 'test';

$message = $autre.'<br/>';
$message .= $loisir.'<br/>';
$message .= $adresse.'<br/>';
$message .= $choix.'<br/>';
$message .= $prenom.'<br/>';
$message .= $nom.'<br/>';
$message .= $genre.'<br/>';

$headers = "Content-Type:text/html;charset=UTF-8";

mail($to, $subject, $message, $headers );


traitement();


?>
