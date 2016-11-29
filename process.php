<?php
####################################################################################################################################################
# PROTOTYPE DE QUIZ POUR LA SCOCITÉ GÉNÉRALE [Thomas Khazem \\ Paul Julien \\ Mathias Knudsen]                                                     #
####################################################################################################################################################
?>

<?php
require 'inc/functions.php';
logged_only();

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

$fid = $_get['id']
?>

	<a class="btn btn-success" href="account.php">Recommencer</a>

</div>

<?php require 'inc/footer.php'; ?>
