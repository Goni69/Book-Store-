<html >
<head>
    <title>User login query</title>
</head>           
<body>
    <?php
    $counter=0;
    $u=$_GET['t1'];
    $p=$_GET['t2'];
    $con=mysqli_connect('localhost','root','sonig','bookzone');
    $q="select * from userdata";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        if($row['mobile']  == $u && $row['password'] == $p)
        {
            $counter=$counter+1;
            $n=$row['name'];
            $m=$row['mobile'];
            $p=$row['password'];
            /*echo "Name:-$row[name]<br>
                    mobile:-$row[mobile]<br>";*/
        
        }
        

    }
    if($counter == 0) 
    {
        echo "invalid";
    }
    else{
        echo "<script>window.location='user_confirm_page.php'</script>";
        session_start();
        $_SESSION['n']=$n;
        $_SESSION['m']=$m;
        $_SESSION['p']=$p;        
    }

    ?>
</body>
</html>