<html>
<body>
  <h1>

    <?php 
   
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];

 
function show()   //Non Parametrized function definition
     {
        print("<br>Hello");
        print("<br>How are you");
        print("<br>I am fine");
        print("<br>What about you ?");
     }
  function add($x,$y)   // Parametrized function definition
     {
         $z=$x + $y;
         print("<br>Addition is $z");
     }

  show();    //function calling
      add(4,7);
      add($a,$b);
    ?>
  
    </h1>

</body>

</html>