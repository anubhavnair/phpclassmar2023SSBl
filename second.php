<html>
<body>
  <h1>

    <?php 
   
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];

     for($i=$a;$i<=$b;$i++)
     {
       if($i % $c==0)
        print($i." ");

     }



    ?>
  
    </h1>

</body>

</html>