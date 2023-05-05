<html>
<body>
  <h1>

    <?php 
   
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];

     $i=$a;
     while($i<=$b)
     {
         echo($i."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

         $i=$i+$c;

     }



    ?>
  
    </h1>

</body>

</html>