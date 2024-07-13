<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Work610-36</title>
</head> 
<body>
    <h4>ข้อที่ 1</h4>
    <?php
        $a = 3 ;
        $b = 4 ;
        $c = $a+$b;
        echo 'ค่าของ $a คือ '.$a."<br>";
        echo 'ค่าของ $b คือ '.$b."<br>";
        echo 'ผลรวมของ $a และ $b คือ '.$c."<br>";
    ?>

    <h4>ข้อที่ 2</h4>
    <?php
        $A = 20.5 ;
        $B = $A ;
        echo '$A=B'."<br>";
        echo '$$A='.$A."<br>";
        echo '$B='.$B."<br>";
    ?>
</body>
</html>