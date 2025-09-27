<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // in ra ước số N
    function uocso(int $n){
        for($i = 1; $i <= $n; $i++){
            if($n % $i == 0){
                echo $i . " ";
            }
        }
    }
     $N = random_int(-100,100);
    
        echo "Các ước số của N là:".uocso($N); 
    
     
    ?>
</body>
</html>