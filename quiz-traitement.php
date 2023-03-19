<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $score = 0;

  $reponses_correctes = array(
    "q1" => "c",
    "q2" => "a",
    "q3" => "c",
    "q4" => "a",
    "q5" => "d",
    "q6" => "e",
    "q7" => "a",
    "q8" => "a",
    "q9" => "b",
    "q10" => "d"
  );

  foreach ($reponses_correctes as $question => $reponse_correcte) {
    if ($_POST[$question] == $reponse_correcte) {
      $score++;
    }
  }

  echo "<h2>Résultat du quiz :</h2>";
  echo "<p>Vous avez obtenu un score de $score / 9</p>";

}

?>