<?php
/*     $cars = array(
        array("Audi" ,"Gjermani ", 20),
        array("Lamborghini","Itali" , 200),
        array("Mercedes" ,"Gjermani ", 20)
    );
    echo $cars[0][0]. "Origjina: " . $cars[0][1] . " Kosto: ". $cars[0][2]. "<br>";
    echo $cars[1][0]. "Origjina: " . $cars[1][1] . " Kosto: ". $cars[1][2]. "<br>";
    echo $cars[2][0]. "Origjina: " . $cars[2][1] . " Kosto: ". $cars[2][2]. "<br>";
    for ($row=0; $row <3 ; $row++) { 
        echo "<p> Row Number $row </p>";
        echo"<ul>";
        for ($col=0; $col <3 ; $col++) { 
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
        $phones = array(
        array("Iphone 14" ,20 , 10),
        array("Iphone 13" ,20 , 20),
        array("Iphone 12" ,20 , 25),
        array("Iphone 11" ,25 , 40),

    );
    for ($row=0; $row <4 ; $row++) { 
        echo "<table>";
        
        for ($col=0; $col <4; $col++) { 
            echo . <tr> $phones[$row][$col]  ;
        }
        echo "</table>";
    }
     */
    $table = array(
        array(1,2,3),
        array(1,2,3),
        array(1,2,3)
    );
    for($i=1; $i<4; $i++){
        for($j=1; $j<4; $j++){
            echo "Array: $i Element:$j <br>";
        }
    }


?>