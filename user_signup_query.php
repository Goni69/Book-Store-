<html>
    <head>
</head>
<body>
    <?php
    $name=$_GET['t1'];
    $mobile=$_GET['t2'];
    $password=$_GET['t3'];
    $con=mysqli_Connect('localhost','root','tushar','bookzone');
    $q="insert into userdata value('$name','$mobile','$password ')";
    $rl=mysqli_query($con ,$q);
    if($rl)
    {
        echo "save";
        echo "<a href='user_login_page.php'><input type='button' value='Back To LoginPage'></a>";
    }
    else{
        echo "error";
    }
    
    ?>
</body>
    </html>