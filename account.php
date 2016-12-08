<?php
require 'inc/functions.php';
logged_only();

require 'inc/header.php';
?>

    <div id='wrapper'>

        <center><h1>PROTOTYPE QUIZ PHP <span>SOCIÉTÉ GÉNÉRALE</span></h1></center>
        <center>Réponse A (question 1), réponse B (question 2), réponse C (question 3)</center>
        <br>
        <br>
        <br><br>

        <?php

        $id_case = 1;
        affiche($id_case);

        $answer1= $_POST['answerOne'];
                   $answer2= $_POST['answerTwo'];
                   $answer3= $_POST['answerThree'];
                   $score = 0;
        // Générer un random aux id des quiz
        $rid=rand(1,2);
        echo $rid;

        if ($rid==1){
        echo "

<form action='account.php?id=1' method='post' id='quizForm' id='1'>
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
}
 if ($rid==2){
        echo "

<form action='account.php?id=1' method='post' id='quizForm' id='2'>
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
}

           // Augmenter le score si réponse bonne + phrases si bonne ou mauvaise réponse
           if ($answer1 == "A"){$score++;echo'<p style="background-color:green;color:white;">Bonne réponse</p>';}
           else{echo'<p style="background-color:red;color:white;">Mauvaise réponse</p>';}
           if ($answer2 == "B"){$score++;echo'<p style="background-color:green;color:white;">Bonne réponse</p>';}
           else{echo'<p style="background-color:red;color:white;">Mauvaise réponse</p>';}
           if ($answer3 == "C"){$score++;echo'<p style="background-color:green;color:white;">Bonne réponse</p>';}
           else{echo'<p style="background-color:red;color:white;">Mauvaise réponse</p>';}
           // Afficher le score
           echo "<center><h2>Votre score est <br> $score/3</h2></center>";
           // Ajouter le score dans la bdd
           require_once 'inc/db.php';
           $req = $pdo->prepare("UPDATE users SET score = $score");
           $req->execute([$_POST['score']]);
           $score=$req->fetch();

        ?>
    </div>

    <h3>Voulez vous changer votre mot de passe <?= $_SESSION['auth']->username; ?> ?</h3>

    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>
        </div>
        <button class="btn btn-primary">Changer mon mot de passe</button>
    </form>




<?php require 'inc/footer.php'; ?>
