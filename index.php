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
  #submitb {
    border-color: #E74C3C;
    border-radius: 20px;
    background-color: #fff;
    color: #E74C3C;
    border-style: solid;
    font-size: 20px;
    padding-left: 11px;
    padding-right: 11px;
    margin-left: 23px;
    font-weight: 300;
  }
  </style>
</head>

<body bgcolor='#E74C3C'>

<div id='wrapper'>

<center><h1>PROTOTYPE QUIZ PHP <span>SOCIÉTÉ GÉNÉRALE</span></h1></center>
<center>Réponse A (question 1), réponse B (question 2), réponse C (question 3)</center>
<br>
<br>
<br><br>

<?php

echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>

     <ol>
     <li>
        <h3>Question 1 :</h3>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Réponse A</label>
        </div>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Réponse B</label>
        </div>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Réponse C</label>
        </div>

	   <div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneC'>D) Réponse D</label>
        </div>
        </li>


        <li>
        <h3>Question 2 :</h3>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Réponse A</label>
        </div>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Réponse B</label>
        </div>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Réponse C</label>
        </div>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='D' />
        <label for='answerTwoD'>D) Réponse D</label>
        </div>
        </li>

        <li>
        <h3>Question 3 :</h3>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A) Réponse A</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Réponse B</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) Réponse C</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='D' />
        <label for='answerThreeD'>D) Réponse D</label>
        </div>
        </li>
    </ol>
        <br>
        <input id='submitb' type='submit' value='Valider le quiz' />

</form>";

?>
</div>

</body>
</html>
