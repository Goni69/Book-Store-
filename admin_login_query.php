<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin login query</title>
</head>
<body>
    <?php
    $counter=0;
    $u=$_GET['t1'];
    $p=$_GET['t2'];
    $con=mysqli_connect('localhost','root','tushar','bookzone');
    $q="select * from admindata ";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        if($row['name']  == $u && $row['password'] == $p)
        {
            $counter=$counter+1;
        }
    }
    if($counter == 0)
    {
        echo "invalid";
    }
    else{
        echo "<script>
        window.location='aadmin_menu.php'
        </script>";
        session_start();
        $_SESSION['u']=$u;
    }

    ?>
</body>
</html>