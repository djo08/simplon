<!DOCTYPE html>
<html>

<body>

  <?php
  include('action.php');
echo date("Y") - "1983"." ans";

  ?>

  <form action="action.php" method="post">
<input type="radio" name="genre" value="Femme"> une femme
<input type="radio" name="genre" value="Homme"> un Homme
 <p>Votre nom : <input type="text" id="nom" name="nom" /></p>
 <p>Votre prenom : <input type="text" id="prenom" name="prenom" /></p>
 <p>Votre âge :
 <select name="choix">

  <?php age(); ?>

</select>

 <p>votre adresse : <input type="text" id="adresse" name="adresse" /></p>
 <p>loisir :<input type="text" id="loisir" name="loisir" /></p>
 <p>autre :<textarea name="autre"
   rows="10" cols="50">
  Vous pouvez écrire quelque
  chose ici.
</textarea>
 <div style="text-align: middle;"><input type="submit" value="Envoyer le formulaire !" /></div>
</form>



<?php include("header.php"); ?>
<?php include("photo.php"); ?>
<?php include("content.php");?>
</body>
</html>
