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
            /*.left{
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
                width:350px; height:200px;
                margin-left:290px; margin-top:150px;    
            }
           /* .right{
                background-color: mediumorchid;
                width: 250px;
                position: absolute;
                top: 110px; bottom: 60px;
                right: 25px;
                box-shadow: 0px 0px 5px 8px rgb(0, 121, 121);

            }*/

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
        <div class="left"></div>
        <div class="middle">
            <form method="post" enctype="multipart/form-data" action="admin_add_book_qurey.php">
                    <div class="x">
                        
                            <input type="text" placeholder="Book NO"   name="t1"> 
                            <input type="text" placeholder="Book Name" name="t2"> 
                            <input type="text" placeholder="Author"    name="t3"> 
                            <input type="text" placeholder="Price"     name="t4"> 
                            <input type="text" placeholder="category"  name="t5"> 
                            <input type="file"                         name="x"><br>
                            <input type="submit" value="save" style="margin-left:65px;"> 
                        
                    </div>
                </form>
        </div>
        <div class="right"></div>
        <div class="footer">
            This Website Is Create By Tushar
        </div>
    </body>
</html> 