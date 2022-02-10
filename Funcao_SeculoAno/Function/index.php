<?php
  function seculoAno($ano){
    echo 'Século:'.intdiv($ano, 100)+1;
  }
  
  seculoAno(2021)
?>