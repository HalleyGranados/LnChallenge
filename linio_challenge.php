<?php
$i = 1;
  while ($i <= 100){
      $prod3 = $i % 3;
      $prod5 = $i % 5;
      if($prod3 == 0 && $prod5 == 0){
          echo "<li style='font-weight:bold'>Linianos</li>";
          $i++;
          continue;
      }
      switch ($prod3){
          case 0:
              echo "<li>Linio</li>";
               $i++;
          continue 2;
      }
      switch ($prod5){
          case 0:
              echo "<li>IT</li>";
               $i++;
          continue 2;
      }
       echo "<li>".$i."</li>";
      $i++;
  }

?>