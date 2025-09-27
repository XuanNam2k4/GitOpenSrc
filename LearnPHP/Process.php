<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT Form Đăng Ký</title>
    <style>
    *{
        margin: 0;
        border: 0;
        box-sizing: border-box;
    }
    body{
         display: flex;
        justify-content: center;
        align-items: center;
        width:100%;
        height: 800px;
        background: 
        linear-gradient(90deg, #6DB6F1, #9375D8);  
    }
    .container{
        background-color: white;
        padding: 20px;
    }
    ul li{
        padding: 10px;
        font-size: 17px;
         background: linear-gradient(90deg, #266599ff, #815cd6ff);
        -webkit-background-clip: text; 
        -webkit-text-fill-color: transparent;
        font-weight: 600;
    }
    h2,span i{
        background: linear-gradient(90deg, #266599ff, #815cd6ff);
        -webkit-background-clip: text; 
        -webkit-text-fill-color: transparent;
        font-weight: 600;
    }
    </style>
</head>
<body>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET['btnsend'])){
             $fullname = $_GET['Fullname'];
             $username = $_GET['Username'];
             $email = $_GET['Email'];
             $phonenumber = $_GET['Phone'];
             $password = $_GET['Password'];
             $confirmpassword  = $_GET['Confirmpassword'];
             $sex = $_GET['Sex'];
             if($password  == $confirmpassword){
                echo "<div class ='container'>";
                echo "<h2>Welcome to PHP: $fullname</h2>";
                echo "<ul style='list-style: none;'>";
                echo "<li>Username is: $username</li>";
                echo "<li>Phone number is: $phonenumber</li>";
                echo "<li>Email is: $email</li>";
                echo "<li>Gender is: $sex</li>";
                echo "</ul>";
                echo "</div>";
             }else{
                echo "<div class ='container'>";
                echo "<h2>Incorrect confirm password</h2>";
                echo "<span><i>Please try again</i></span>";
                echo "</div>";
             }
        }
    ?>
</body>
</html>