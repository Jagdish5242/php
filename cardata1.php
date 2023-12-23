<html>
    <body>
        <?php
            $car = array("volvo","bmw","porche","bently");
            $cnm =$_GET["cname"];
            print ("you entered : ".$_GET["cname"]."<br>");
            print ("you entered : ".$_REQUEST["cname"]."<br>");
            $flag=1;
            
            foreach($car as $val)
            {
                if ($val == $cnm)
                {
                    $flag=0;
                    print ("<h3>car found </h3>");
                    break;
                }
            }
            if ($flag==1)
            {
                echo " car not found and car add succefully !!!<br> ";
                #add car in array
                array_push($car,$cnm);
                for($i=0;$i<count($car);$i++)
                {
                    print $car[$i]."<br>";

                }
            }
        ?>
</html>    
</body>