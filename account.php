<?php
require 'inc/functions.php';
require 'inc/header.php';


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
?>



    <div id='wrapper'>

    <center><h1>PROTOTYPE QUIZ PHP <span>SOCIÉTÉ GÉNÉRALE</span></h1></center>
    <center>Réponse A (question 1), réponse B (question 2), réponse C (question 3)</center>
    <br>
    <br>
    <br><br>

        <?php
        // Générer un random aux id des quiz
        $rid=rand(1,2);
        echo $rid;

        if ($rid==1){
        echo "

<form action='process.php?id=1' method='post' id='quizForm' id='1'>
    <?php

    echo "
<form action='process.php?id=1' method='post' id='quizForm 1'>

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

<form action='process.php?id=1' method='post' id='quizForm' id='2'>
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


    $points = 5;
    $id_case = 1;

function ajout_score () {

    if (isset ($_POST['points']) && isset($_POST['id_case'])) {

        // on prépare la requête pour récupérer les points
        $sql = 'SELECT score FROM users WHERE score = "'.$_POST['points'].'"';



        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());


        // on récupère le résultat sous forme d'un tableau
        $data = mysql_fetch_array($req);

        // on libère l'espace mémoire alloué pour cette interrogation de la base
        mysql_free_result ($req);

        // on insère et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
        $sql = ' INSERT INTO users VALUES("'.$data['score'].'", "'.$_POST['points'].'", "'.$_POST['id_case'].'")';

        mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

        // on ferme la connexion à la base
        mysql_close();

        echo 'Nous venons d\'insérer : '.$_POST['id_case'].' de '.$_POST['points'];
    }
    else {
        echo 'Les variables du formulaire ne sont pas déclarées';
    }


}


    ?>

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


    <div id='wrapper'>


<?php require 'inc/footer.php'; ?>





    </div>

<?php require 'inc/footer.php'; ?>