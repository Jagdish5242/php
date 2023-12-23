
<html>
    <body>
        <?php
 	    function showtable($num){
            for ($i=1;$i<=10;$i++)
            {
                echo "$num * $i ".($num*$i)."<br>";

            }   
            echo "<hr>";
        }
 	    $a = $_REQUEST['n1'];
        $b = $_REQUEST['n2'];
        $btn = $_REQUEST['btn'];
        echo "you endered a :$a <br>";
        echo "you entered b :$b<br>";
        echo "you entered btn :$btn<br>";

        switch($btn){
            case "add":
                echo "Addition : ".($a+$b)."<br>";
               break;
            case "sub":
                echo "Subtraction : ".($a-$b)."<br>";
            break;
            case "mul":
                echo "Multiplication : ".($a*$b)."<br>";
                break;
            case "div":
                echo "division : ".($a/$b)."<br>";
                break;
            case "table":
                showtable($a);
                showtable($b);
        
        
            }
        ?> 
        </body>
        </html>




       