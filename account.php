<?php
require 'inc/functions.php';
logged_only();

require 'inc/header.php';
?>
    <!-- Contenu du plateau du jeu hors éléments de connexion -->
    <div id='wrapper'>
        <center><h1>PROTOTYPE QUIZ PHP <span>SOCIÉTÉ GÉNÉRALE</span></h1></center>
        <br>
        <br>
        <br><br>

        <?php
        // *** Lancer la function affichage ***
        $id_case = 1;
        affiche($id_case);
        ?>
        <!-- *** LES CASES [Plateau du jeu] *** -->
        <div id="case1" class="case">
            <center><p><a href="quiz1.php" class="case-button">Quiz 1 [Case 1]</a></p></center>
        </div>
        <div id="case2" class="case">
            <center><p><a href="#" class="case-button">Quiz 2 [Case 2]</a></p></center>
        </div>
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
