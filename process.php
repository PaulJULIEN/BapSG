<?php
####################################################################################################################################################
# PROTOTYPE DE QUIZ POUR LA SCOCITÉ GÉNÉRALE [Thomas Khazem \\ Paul Julien \\ Mathias Knudsen]                                                     #
####################################################################################################################################################
?>

<?php
require 'inc/functions.php';
logged_only();
if(!empty($_POST)){

	if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
		$_SESSION['flash']['danger'] = "Les mots de passes ne correspondent pas";
	}else{
		$user_id = $_SESSION['auth']->id;
		$password= password_hash($_POST['password'], PASSWORD_BCRYPT);
		require_once 'inc/db.php';
		$pdo->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$password, $user_id]);
		$_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
	}

}
require 'inc/header.php';
?>




<div id="wrapper">

<center><h1>SCORE</h1></center>
<br />
<br />
<!-- Récupérer les données du formulaire et ajouter le score en fonction des réponses -->
<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$score = 0;

	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	echo "<center><h2>Votre score est <br> $score/3</h2></center>";

?>

	<button style="border-radius: 20%;" href="account.php">Revenez sur votre profil</button>

</div>

<?php require 'inc/footer.php'; ?>
