<?php

require("naas.php");

?>

<html>
    <head></head>
    <body>
      <?php
      
      $na1='34234234.234234545435435457564846';
      $na2='-9843895745.23439509348543098590425476657673421';
      
      echo 'first number:'.$na1.'<br>'.'second number:'.$na2.'<br><br>';
            
      echo '<b>addision:</b><br>';
      echo 'time: '.microtime().'<hr>';
      $result=$naas->calc(array($na1,$na2),'+');
      echo '<b>result using naas: '.$result['decimal_number'].'</b>';      
      echo '<br><hr>time: '.microtime(); 
      echo '<hr>';
      echo '<b>result using math: '.($na1+$na2).'</b>';   
      echo '<br><hr>time: '.microtime().'<br><hr><br>';
      
      
      echo '<b>subtraction:</b><br>';
      echo 'time: '.microtime().'<hr>';       
      $result=$naas->calc(array($na1,$na2),'-');
      echo '<b>result using naas: '.$result['decimal_number'].'</b>';
      echo '<br><hr>time: '.microtime(); 
      echo '<hr>';
      echo '<b>result using math: '.($na1-$na2).'</b>';   
      echo '<br><hr>time: '.microtime().'<br><hr><br>';
      
      echo '<b>multiplication:</b><br>';
      echo 'time: '.microtime().'<hr>';
      $result=$naas->calc(array($na1,$na2),'*');
      echo '<b>result using naas: '.$result['decimal_number'].'</b>';
      echo '<br><hr>time: '.microtime(); 
      echo '<hr>';
      echo '<b>result using math: '.($na1*$na2).'</b>';    
      echo '<br><hr>time: '.microtime().'<br><hr><br>';
      
      echo '<b>division:</b><br>';
      echo 'time: '.microtime().'<hr>';
      $result=$naas->calc(array($na1,$na2),'/');
      echo '<b>result using naas: '.$result['decimal_number'].'</b>';
      echo '<br><hr>time: '.microtime(); 
       echo '<hr>';
      echo '<b>result using math: '.($na1/$na2).'</b>';    
      echo '<br><hr>time: '.microtime().'<br><hr><br>';
     
      ?>
      
    </body>
</html>
