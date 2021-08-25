

<?php
// CONNEXION A LA BASE DE DONNEE
mysql_connect("localhost","root","") or die("Erreur");
mysql_select_db("inscription") or die("La base de donnee est introuvable");
if($_POST){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $repeatpassword = $_POST["repeatpassword"];
   if(!empty($pseudo) and !empty($password)){
      mysql_query("insert into inscription(pseudo,mot de passe, confirmation mdp) values ($username,$password,$repeatpassword)")or die('Erreur:' .mysql_error());
    echo "ok";
   }
   else echo "Erreur il manque";
}


?>

<form method = "POST"action="registre.php">
<p>Votre pseudo :</p>
<input type="text"name="username">
<p>Votre password :</p>
<input type="password"name="password">
<p>Repetez votre password :</p>
<input type="password"name="repeatpassword"> <br> <br>
<input type="submit" value="S'inscrire" name="submit">
</form>