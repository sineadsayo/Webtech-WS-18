<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <?php
function zufallszahl($max,$anzahl, $stellen)
{
  echo "<table class='table table-striped'>";
  echo "<thead>
  <tr>
  <th>Zufallszahlen  </th>";

for($j=1; $j<=$stellen; $j++)
{
  echo "<th>".$j." gerundet </th>";
}
  echo "</tr>
  </thead>
  <tbody>";

  for($i=1; $i<=$anzahl;$i++)
  {
    $zahl=rand(1,$max);
  //  $gerundet1=abschneiden($zahl, 1);
  //  $gerundet2=abschneiden($zahl,2);
  //  $gerundet3= abschneiden($zahl,3);
      echo "<tr>";
      echo "<td>" .$zahl. "</td>";
      for($j=1; $j<= $stellen; $j++)
      {
        echo "<td>".abschneiden($zahl,$j). "</td>";
      }
      echo "</tr>";


    //echo "zahl $gerundet1 $gerundet2 $gerundet3 <br/>"
  }
  echo"</tbody>";
}

function abschneiden ($zahl, $stellen=2)
{
  $base=pow(10,$stellen);
  return $zahl- ($zahl % $base);
}
 ?>

</head>
<body>
<h1> Zufallszahlen</h1>
<div>
<?php zufallszahl (20000,20,3 ); ?>
</div>
</body>
</html>
