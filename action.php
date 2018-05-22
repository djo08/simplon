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
    echo $autre;
    echo $loisir;
    echo $adresse;
    echo $choix;
    echo $prenom;
    echo $nom;
    echo $genre;


<?php
     $to      = 'djoandco@gmail.com';
     $subject = 'test';
     $message = $autre.' '.$loisir.' '.$adresse.' '.$choix.' '.$prenom.' '.$nom.' '.$genre.';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>

  }
traitement();





?>
