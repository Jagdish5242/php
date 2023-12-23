<?php
session_start();
if($_REQUEST["btn"]=="finish")
{
    session_unset();
    session_destroy();
    print "session destroyed....";

}
else {
if (isset($_SESSION["cnt"]))
    {
        $_SESSION['cnt']+=1;
    }
    else
        {  $_SESSION['cnt']=1;
        
        }
    $c=$_SESSION['cnt'];
    print "you clicked $c times ";
    ?>
    <?php include "firstcounter.php" ?>
<?php }

?>