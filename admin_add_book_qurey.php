<html>
    <head>
    </head>
    <body>
        <?php
        $Book_no=$_POST['t1'];
        $Book_Name=$_POST['t2'];
        $Author=$_POST['t3'];
        $Price=$_POST['t4']; 
        $category=$_POST['t5'];
        $tn=$_FILES['x']['tmp_name'];
        $n=$_FILES['x']['name'];
        if(move_uploaded_file($tn,"img/$n"))
    {
        $con=mysqli_connect('localhost','root','tushar','bookzone');
        $q="insert into book_details values('$Book_no','$Book_Name','$Author','$Price','$category','$n')";
        $rl=mysqli_query($con,$q);
        if($rl)
        {
            echo "save";
            echo"<a href='admin_menu.php'><input type='button' value='back to admin menu'></a>";
        }
        else{
            echo "error";
        }
    }
    else
    {
        echo "error while uploade";
    }
        ?>
    </body>
</html>