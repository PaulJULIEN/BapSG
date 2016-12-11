<?php
require 'inc/functions.php';
logged_only();

require 'inc/header.php';
?>

<body>
  <!-- *** QUIZ 1 relié aux fichiers .js "quiz1.js" pour les éléments de questions/réponses et "quiz.js" pour les paramètres *** -->
  <div id="quiz">
  <div id="quiz-header">
    <h1>QUIZ 1</h1>
    <p class="faded">Société Générale - Thème 1</p>
  </div>
  <div id="quiz-start-screen">
    <p><a href="#" id="quiz-start-btn" class="quiz-button">Démarrer</a></p>
  </div>
</div>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/quiz.js"></script>
  <script src="js/quiz1.js"></script>

<?php require 'inc/footer.php'; ?>
