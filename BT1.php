<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện Tích HCN</title>
</head>
<style>
    *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
       
            body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }

    .container {
        padding: 10px;
        align-items: center;
    }

    .title{
         padding: 10px;
        text-align: center;
        font-size: 17px;
        font-weight: bold;
        background-color:rgb(255, 228, 196);
        color: rgb(165, 42, 42);
    }
    table{
        background-color:rgb(255, 250, 207) ;
        color:black;
        border-collapse: collapse;
        width: 400px;
    }
    tr,td{
        padding: 5px;
    }
    .btn-button{
        padding: 3px 10px;
        margin-top: 7px;
        background-color: rgb(220, 220, 220);
    }
     input[type="text"]
    {
        width: 200px;
        height: 30px;
     
        border: 1px solid #ccc;
        padding-left: 10px;
    }
    input[type="submit"]
    {
        margin-right: 70px;   
        border: 1px solid;
        padding: 5px 10px ;
        font-size: 15px;
    }
</style>
<body>
    <?php
        if (isset($_POST['btnsubmit'])) {
    $cd = $_POST['chieudai'];
    $cr = $_POST['chieurong'];
    if (is_numeric($cd) and is_numeric($cr)) {
        if ($cd > 0 and $cr > 0) {
            if ($cd >= $cr)
                $dt = $cd * $cr;
            else
                $dt = "Chiều dài không được bé hơn chiều rộng";
        } else
            $dt = "Chiều dài và chiều rộng không được <= 0";
    } else
        $dt = "Chiều dài hoặc chiều rộng không phải là số";
}
    ?>
    <div class="container">
        <form action="BT1.php" method="post">
        <table>
            <tr>
                <th colspan="2" class="title">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="chieudai" value="<?php echo isset($_POST['chieudai']) ? $_POST['chieudai'] : ""; ?>"></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="chieurong" value="<?php echo isset($_POST['chieurong']) ? $_POST['chieurong'] : "";?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dt" value="<?php if(isset($dt)) echo $dt ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><input type="submit" name="btnsubmit" class="btn-button"  value="Tính"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>