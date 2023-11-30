<html>
    <head>
        <style>
            body{
                margin: 0px;
            }
            .blankdiv{
                clear: both;
            }
            .header1{
                background-color:cyan;
                width: 20%; height: 77px;
                float: left;
            }
            .header2{
                background-color: cyan;
                width: 80%; height: 77px;
                float: left;
            }
           /* .left{
                background-color: chocolate;
                position: absolute;
                top: 110px; bottom: 60px;
                left: 25px;
                width: 250px;
                box-shadow: 0px 0px 5px 8px rgb(0, 121, 121);
            }*/
            .middle{
                background-color: dimgrey;
                width: 750px; 
                position: absolute;
                top: 110px; bottom: 60px;
                left: 300px;
                box-shadow: 0px 0px 5px 8px rgb(0, 121, 121);

            }
            .x{
                /*background-color:blue;*/
                width:250px; height:200px;
                margin-left:240px; margin-top:150px;
                
            }
           .right{
                background-color: mediumorchid;
                width: 250px;
                position: absolute;
                top: 110px; bottom: 60px;
                right: 25px;
                box-shadow: 0px 0px 5px 8px rgb(0, 121, 121);

            }

            .footer{
                background-color: rgb(12, 73, 73);
                position: absolute;
                bottom: 0px; 
                width: 100%; height: 25px;
                text-align: center;
                padding-top: 10px;
                font-size: 20px;
                
            }
        </style>
    </head>
    <body>
        <div class="header1">
         <table style="margin: 0px;">
            <tr>
                <td><img src="header_image.jpg" width="70px" height="70px"></td>
                <td><a href="user_interface.php" style="text-decoration: none; font-size: 24px; color: rgb(90, 0, 0);">BOOKZONE</a></td></tr>
        </table>
        </div>
        <div class="header2">
            <h2 style="padding-left: 100px;">Welcome To Bookshop</h2>
        </div>
        <div class="blankdiv"></div>
        <div class="left">

        </div>
        <div class="middle">
                <div class="x">
                <?php

                    session_start();
                    $product_name=$_SESSION['product_name'];

        
                    $con=mysqli_Connect('localhost','root','tushar','dummy');
                    $q="select * from product where product_name='$product_name' ";
                    $rl=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($rl)){

                        $pid=$row['product_id'];
                        $pname=$row['product_name'];
                        echo "<img src='$row[product_photo]'><br>";
                        echo "
                               product_id :- $row[product_id]<br>
                               Name:-   $row[product_name]<br>
                               price:-   $row[product_price]<br>
                               description:- $row[product_description]
                             ";   
                            
                    }

        ?>
            </div>
        </div>
        <div class="right">

        <?php
            $_SESSION['product-id']=$pid;
            $_SESSION['product-name']=$pname;
            $a=$_SESSION['n'];
            $d=$_SESSION['m'];
            echo $a;
            echo "<br>";
            echo $d;
            echo "<br>";
        ?>
        <a href="user_confirm_query_page.php"><input type="button" value="confirm"></a>
        </div>
        <div class="footer">
            This Website Is Create By Tushar
        </div>
    </body>
</html> 
    