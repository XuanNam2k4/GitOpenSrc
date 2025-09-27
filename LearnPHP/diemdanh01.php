<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm Danh TH-01</title>
</head>
<body>
    <!-- bài tập:Viết hàm tính Ckn,Akn, mà k,n là các số nguyên dương ngẫu nhiên 
 với điều kiện k < n in kết quả ra màn hình chính theo form -->
 <?php
    $n = random_int(1,30);
    $k = random_int(1,$n);
    function giaiThua($n1){
        $giaithua = 1;
      for($i = 1; $i <= $n1; $i++){
        $giaithua *= $i;
      }
      return $giaithua;
    }
   function ChinhHop($k,$n) :int{
            return giaiThua($n)/  giaiThua($n-$k);
   }
   function ToHop($k,$n):int {
            return giaiThua($n)/ (giaiThua($n-$k) *  giaiThua($k ));
   }
    echo "A($n,$k) = ".ChinhHop($k,$n)."<br>";
    echo "C($n,$k) = ".ToHop($k,$n);

 ?>
</body>
</html>
