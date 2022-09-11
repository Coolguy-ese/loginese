
<?php
$messagestatus = "";
$name = "";
$password = "";

$ese1 = mysqli_connect("localhost", "root", "", "login1");
if(isset($_POST['all'])){
     $name= $_POST['name'];
     $password = $_POST['password'];

     $settingrecord = "insert into login (`Username`, `Password`) value ('$name', '$password')";
     mysqli_query($ese1,$settingrecord);


     $name='';
     $password='';
$messagestatus= 'Successful';
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <title>Document</title>
        <style>
            body{
                margin-top: 40px;
            }
            form{
                width: 50%;
                border-radius: 0px 40px;
                text-align: center;
                height: 300px;
                margin-left:25% ;
                background:linear-gradient(grey, red) ;
            }
            #hi{
                font-size: 50px;
                font-family: ese;
            }
            @font-face {
                font-family: ese;
                src: url('TESLA.ttf');
            }
            @font-face {
                font-family: ese1;
                src: url('SpeedBeast FREE.ttf');
            }
            #name{
                width: 500px;
                height: 35px;
                text-transform: uppercase;
                font-size: 30px;
                font-family: ese1;
                border-radius: 0px 10px;
            }
            #password{
                width: 500px;
                height: 35px;
                border-radius: 0px 10px;
            }
            .fonts{
                font-family: mine;
                font-size: 30px;
            }
            @font-face {
                font-family: mine;
                src: url('BrightnessBook.ttf');
            }
        </style>
</head>
<body>
    <form method="POST" action="login.php">
       
         <a id="hi">LOGIN</a> <br><br>
          <a class="fonts">User-name: </a><br> <input type="text" maxlength="10" id="name"  name="name"><br><br>
         <a class="fonts"> Password: </a><br><input type="password" maxlength="7" id="password"  name="password"><br><br>
         <br>
         <button type="submit" name="all">LOGIN</button>
         <?php echo $messagestatus; ?>
    </form>
    

</body>
</html>