<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Chương 2 - PHP</title>
</head>
<body>
    <div class="container">
        <?php 
            $N = rand(1, 100);
            echo "<h3>Số nguyên dương ngẫu nhiên: $N</h3>";
        ?>

        <p><strong>Bài 1:</strong>In ra các ước số</p>
        <?php
        echo "<p>Các ước số của $N là:</p>";
        for($i = 1; $i <= $N; $i++){
            if($N % $i == 0){
                 echo $i . " ";
            }
        }
        ?>

        <p><strong>Bài 2:</strong> Kiểm tra N có phải số nguyên tố không?</p>
        <?php
            function SoNguyenTo($n): bool {
                if($n < 2) return false;
                for($i = 2; $i <= sqrt($n); $i++){
                    if($n % $i == 0)
                        return false;
                }
                return true;
            }

            if(SoNguyenTo($N)){
                echo "<p>$N là số nguyên tố.</p>";
            }else{
                echo "<p>$N không là số nguyên tố.</p>";
            }
        ?>

        <p><strong>Bài 3:</strong> Tính tổng các số nguyên tố từ 1 đến N:</p>
        <?php 
            function SumSNT($n): int {
                $sum = 0;
                for($i = 2; $i <= $n; $i++){
                    if(SoNguyenTo($i)){
                        $sum += $i;
                    }
                }
                return $sum;
            }
            
            echo "<p>Tổng số nguyên tố từ 1 đến $N là: " . SumSNT($N) . "</p>";
        ?>

        <p><strong>Bài 4:</strong> Kiểm tra N có phải là số chính phương không?</p>
        <?php
            function SCP($n): bool {
                $sq = sqrt($n);
                return ($sq == floor($sq));
            }

            if(SCP($N)){
                echo "<p>$N là số chính phương.</p>";
            }else{
                echo "<p>$N không là số chính phương.</p>";
            }
        ?>
    </div>
</body>
</html>
