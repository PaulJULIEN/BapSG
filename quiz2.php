<?php
require 'inc/header.php';
?>

<body>
	<!-- *** QUIZ 2 PHP array *** -->
	<div id="quiz">
		<div id="quiz-header">
			<h1>QUIZ 2</h1>
			<p class="faded">Société Générale - Thème 2</p>
		</div>
		<div id="quiz-start-screen">
			<p><a href="#" id="quiz-start-btn" class="quiz-button">Démarrer</a></p>
		</div>
	</div>


Faire un quiz avec un array php présenté comme ceci :

$module1[Question1{$Enoncé, Propositions[$Prop1, $Prop2, $Prop3, $Prop4], $Bonne_réponse}, Question2{$Enoncé, Propositions[$Prop1, $Prop2, $Prop3, $Prop4], $Bonne_réponse}]

<?php

$module1 = [
"Question1" => ]