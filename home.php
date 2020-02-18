<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body style="background-color:darkkhaki;">
    <center><h1> <font color ="white" style="font-family: 'Courier New', Courier, monospace;">FORM LOG IN </h1></font>
    </center>
<?php 
if(isset($_GET['pesan'])){
if($_GET['pesan']=="gagal"){
    echo"Login gagal! Username dan password anda salah!";
    }elseif($_GET['pesan']=="logout"){
        echo"Anda telah berhasil logout";
    }
    }
    ?>
    <br>
    <br>
    <form action="ceklogin.php" method="POST">
        <table>
            <tr>
                <td>ID</td> 
                    <td>;</td>
                    <td><input type="text" name="id"></td>
                 </tr>
            <tr>
                <td>Username</td>
                    <td>;</td>
                    <td><input type="text" name="username"></td>
                 </tr>
            <tr>
                 <td>Password</td>
                 <td>;</td>
                    <td><input type="text" name="password"></td>
            </tr>
            <tr>
           <td></td>
           <td></td>
           <td><input type="submit" value="LOG IN"></td>
           </tr>
            
        </table>
    </form>
    </body>
</html>