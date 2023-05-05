<html>
<body>
  <h1>

    <?php 
   
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];

     $i=$a;
     do 
     {
        echo($i*$c." ");
          if($i==25)
            {
               break;
            }
        $i++;
     }
     while($i<=$b);



    ?>
  
    </h1>

</body>

</html>