<?php
    function addword($wrd)
    {
        $fp=fopen("text2.txt","a");
        fwrite($fp,"\n$wrd");
        fclose($fp);
    }
    $wrd="jayesh";
    #$wrd=$_REQUEST["wrd"]
    $arr=file("text2.txt");
    print_r($arr);
    $flag=false;
    #cheack wether word in the file 
    foreach($arr as $w)
    {
        print strlen($w);
        print ("$w------>$wrd<br>");
        if(trim($w) == $wrd)
        {
            print ("word exist");
            $flag=true;
            break;
        }
    }
    if(!$flag)
    {
        print ("word not found ");
        addword($wrd);
    }
?>