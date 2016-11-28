<?php
####################################################################################################################################################
# PROTOTYPE DE QUIZ POUR LA SCOCITÉ GÉNÉRALE [Thomas Khazem \\ Paul Julien \\ Mathias Knudsen]                                                     #
####################################################################################################################################################
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Prototype Quiz pour la Société Générale</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800,900" rel="stylesheet">
	<!-- Style du "wrapper" : partie corps du quiz -->
	<style type='text/css'>
	#wrapper {
		width:950px;
		height:auto;
		padding: 13px;
		margin-right:auto;
		margin-left:auto;
		background-color:#fff;
		border-radius: 20px;
		color: #34495E;
		font-family: 'Raleway', sans-serif;
	}
	</style>
</head>


<body bgcolor="#E74C3C">

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

</div>

</body>
</html>
