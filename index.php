<!DOCTYPE html>
<html>
    <head>
        <body>
            <?php
            $a=16;
            echo"<h3>$a</h3>";
            define ("hHAYYYY","FGGHRH");
            echo"FGGHRH";
            echo sqrt($a) . "<br>";
           function sum ($x,$y){

             if($x<$y){
                return pow($x,2)+pow($y,2);
            } 
           
                return($x-$y);

            }
            echo sum (5,10);
            for($i=1000;$i<2000;$i++)
                if($i%21==0)
                echo $i.'<br>';
            //function getInitials($fullName){
               // $fullName=trim($fullName);
                //$words=explode(".",$fullName);
              //  $initials="";
               // foreach($words as $word){
                  //  if ($word !=""){
                       // $initials .=strtoupper(substr($word,0,10)).".";
                  //  }
                //}
              //  return $initials;
            //}
              // echo getInitials("Jone smith")."<br.";//  

              session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
            ?>
        </body>                                                                         
    </head>
</html>