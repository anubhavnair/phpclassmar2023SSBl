<html>
<body>
  <h1>

    <?php 
   
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];

   if($a>$b && $a>$c)
      print($a ." is greater ");
  else if($b>$a && $b>$c)
      print($b ." is greater ");
  else if($c>$a && $c>$b)
      print($c ." is greater ");



    ?>
  
    </h1>

</body>

</html>