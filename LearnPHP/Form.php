<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT Form Đăng Ký</title>
</head>
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
        background: linear-gradient(to right, #6DB6F1, #9375D8);
    }
    .container{
         width: fit-content;
        background-color: white;
        align-items: center;
        padding: 20px;
    }
    h1{
        padding: 20px 0px;
    }
    tr,td{
        padding: 7px;
    }
    input[type="email"],input[type="text"],input[type="password"]{
            border: solid 2px transparent;
          width: 250px;
          padding: 10px;
          border-radius: 6px;
          background: linear-gradient(white, white) padding-box,
                linear-gradient(90deg, #6DB6F1, #9375D8) border-box;
    }
    .title-name{
        font-size: 17px;
        font-weight: 600;
    }
    input[type="submit"]{
        width:100%;
        padding: 10px;
        font-size: 17px;
        border: 2px solid transparent;
        background: linear-gradient(90deg, #6DB6F1, #9375D8) border-box;
        color: white;
    }
</style>
<body>
   <div class="container">
     <h1>Registration</h1>
    <form action="Process.php" method="get">
        <table>
            <tr>
                <td><label for="fullname" class="title-name">Full Name</label></td>
               <td><label for="Username" class="title-name">User Name</label></td>
            </tr>
            <tr>
                <td><input type="text" name="Fullname" value="<?php if(isset($_GET['Fullname'])) echo $_GET['Fullname'];?>"
                required></td>
                <td><input type="text" name="Username" value="<?php if(isset($_GET['Username'])) echo $_GET['Username'];?>" required>
            </td>
            </tr>
             <tr>
                <td><label for="email" class="title-name">Email</label></td>
               <td><label for="phone" class="title-name">Phone Number</label></td>
            </tr>
            <tr>
                <td><input type="email" name="Email" value="<?php if(isset($_GET['Email'])) echo $_GET['Email'];?>"
            required></td>
                <td><input type="text" name="Phone" value="<?php if(isset($_GET['Phone'])) echo $_GET['Phone'];?>"
                required></td>
            </tr>
             <tr>
                <td><label for="password" class="title-name">Password</label></td>
               <td><label for="confirmpassword" class="title-name">Confirm Password</label></td>
            </tr>
            <tr>
                <td><input type="password" name="Password" value="" required></td>
                <td><input type="password" name="Confirmpassword" value="" required></td>
            </tr>
            <tr>
                <td colspan="2"><label for="gender" class="title-name">Gender</label></td>
            </tr>
            <tr>
                <td colspan="2">
                   <div style="display:flex; justify-content: space-between; width: 70%;">
                     <input  type="radio" name="Sex" value="male" required checked > Male
                     <input  type="radio" name="Sex" value="female" required> Female
                      <input  type="radio" name="Sex" value="other" required> Prefer not to say
                   </div>
                </td>           
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="btnsend" value="Register">
                </td>
            </tr>
        </table>
    </form>
   </div>
</body>
</html>
