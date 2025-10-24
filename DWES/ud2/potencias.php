<?php
  function pot($n, $p = 2) {
    $r=1;
    for ($i=1; $i <= $p; $i++){
      $r*=$n;
    }
    echo "$r<br>";
  }

  pot(2);
  pot(2,3);
  pot(3,4);
  pot(34,5);
  pot(212,53);