<html>
    <head>

    </head>
    <body>
    
    <?php
    session_start();
    $user_name=$_SESSION['n'];
    $user_mobile=$_SESSION['m'];
    $product_id=$_SESSION['product-id'];
    $product_name=$_SESSION['product-name'];
    $con=mysqli_Connect('localhost','root','tushar','bookzone');
    $q="insert into cart values('$user_name','$user_mobile','$product_id','$product_name')";
    $rl=mysqli_query($con,$q);
    if($rl)
    {
        echo "save";
    }
    else
    {
        echo "error";
    }

    ?>

    </body>
    </html>