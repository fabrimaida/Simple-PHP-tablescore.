<!-- PHP using MAMP: -->


<!-- Creiamo un array contenente le partite di baseball di un'ipotetica tappa del
calendario.Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e ospite. Stampiamo a schermo tutte le partite con questo schema.
Golden State Cosenza - New York Yankee \ 145-100.

 -->

<!-- Let's create an array with all the match of a season of a baseball team.
Each array will have one home team and the host team, and the relative points of each team.
Then we print all the matches on screen using this pattern:
Golden State Cosenza - New York Yankee \ 145.100 -->


<?php
  $matches = [
    [
    'home_team' => 'Golden State Cosenza',
    'host_team' => 'New York Yankee',
    'home_score' => 145,
    'host_score' => 100,
  ],
  [
  'home_team' => 'Sibari Warriors',
  'host_team' => 'Vibo-Valentia Angles',
  'home_score' => 90,
  'host_score' => 55,
],
[
  'home_team' => 'Los Angeles Clippers',
  'host_team' => 'Syracusan Cannuolis',
  'home_score' => 90,
  'host_score' => 55,
],
[
  'home_team' => 'Bologna Squatters',
  'host_team' => 'Milan BusinessMen',
  'home_score' => 190,
  'host_score' => 45,
],
[
  'home_team' => 'Florence and the MachineGun',
  'host_team' => 'Foggia Corners',
  'home_score' => 12,
  'host_score' => 67,
],
[
  'home_team' => 'Cagliari Golden State',
  'host_team' => 'Messina Torpedos',
  'home_score' => 90,
  'host_score' => 55,
],
];

// var_dump($matches);

// Let's see with a var_dump
// foreach ($matches as $match) {
//   var_dump($match);
// }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/master.css">
     <title>Matches</title>
   </head>
   <body>
     <ul>
       <!-- Now we must show the result of the match like this
      Golden State Cosenza - New York Yankee \ 145.100-->
       <?php foreach ($matches as $match) { ?>
          <li>
            <?php echo $match['home_team'] ?> - <?php echo $match['host_team'] ?> \
            <?php echo $match['home_score'] ?> - <?php echo $match['host_score'] ?>
          </li>
       <?php  } ?>
     </ul>

   </body>
 </html>
