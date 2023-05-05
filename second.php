<html>
<body>
  <h1>

    <?php 
   
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];

    if($a>$b)
    {
        if($a>$c)
         {
            print("$a is greater");
         }
         else 
         {
            echo("$c is greater");
         }

    }
    else 
    {
       if($b>$c)
         echo("$b is greater");
       else 
         echo("$c is greater");
    }




    ?>
  
    </h1>

</body>

</html>