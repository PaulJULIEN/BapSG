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

    <h2>Voulez vous changer votre mot de passe <?= $_SESSION['auth']->username; ?> ?</h2>

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