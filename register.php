
<?php
$messagestatus = ' ';
$name = '';
    $password = '';
    $phone = '';

$ese = mysqli_connect("localhost", "root", "", "logini");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $settingrecord = "insert into register1 (`Username`, `Password`, `Phone`) value ('$name', '$password', '$phone')";
    mysqli_query($ese,$settingrecord);

    $user='';
          $phone='';
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
                background-color: red;
            }
            form{
                width: 50%;
                text-align: center;
                height: 400px;
                margin-left:25% ;
                border-radius: 0px 40px;
                border: 10px solid black;
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
            #phone{
                width: 500px;
                height: 35px;
                font-size: 30px;
                font-family: ese1;
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
    <form method="POST" action="register.php">
   
         <a id="hi">REGISTER TESLA</a> <br><br>
          <a class="fonts">User-name: </a><br> <input type="text" maxlength="10"  name="name"id="name"><br><br>
         <a class="fonts"> Password: </a><br><input type="password"  name="password"maxlength="7" id="password"><br><br>
         <a class="fonts"> Phone: </a><br><input type="number" maxlength="11" id="phone"  name="phone"><br><br><br>
         <button type="submit" name="submit">REGISTER</button><br>
         <?php echo $messagestatus; ?>      
    </form>
</body>
</html>