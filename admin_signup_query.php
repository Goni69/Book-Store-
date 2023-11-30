<html>
<head>
    <title>admin signup query</title>
</head>
<body>
    <?php    
    $id=$_GET['t1'];
    $name=$_GET['t2'];
    $email=$_GET['t3'];
    $pass=$_GET['t4'];
    $con=mysqli_connect('localhost','root','tushar','bookzone');
    $q="insert into admindata values('$id','$name','$email','$pass')";
    $rl=mysqli_query($con,$q);
    if($rl)
    {
        echo "valid ";
        echo "<a href='admin_login_page.php'><input type='button' value='Back To Login page'></a>";

    }
    else
    {
        echo "invalid";
    }
    ?>
</body>
</html>