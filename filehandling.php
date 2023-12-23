<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fp=fopen("text.txt","r");
        $ws=0;
        while(!feof($fp))
        {
            $s=fgets($fp);
            print "$s------>";
            $str=explode(" ",$s);
            print count($str)."<br>";
            $ws=$ws+count($str);

        }
        fclose($fp);
        print "<br>total words are : $ws ";
    ?>
</body>
</html>