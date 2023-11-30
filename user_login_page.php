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
                /*background-color:blue;*/
                width:250px; height:200px;
                margin-left:240px; margin-top:150px;
                
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
                <td><a href="first_page.html" style="text-decoration: none; font-size: 24px; color: rgb(90, 0, 0);">BOOKZONE</a></td></tr>
        </table>
        </div>
        <div class="header2">
            <h2 style="padding-left: 100px;">Welcome To Bookshop</h2>
        </div>
        <div class="blankdiv"></div>
        <div class="left"></div>
        <div class="middle">
            <form action="user_login_query.php">
                <div class="x">
                <table style="text-align:center;">
                    <tr><td><input type="text" placeholder="mobile No" class="textbox" name="t1"><td></tr>
                    <tr><td><input type="text" placeholder="password" class="textbox" name="t2"><td></tr>
                    <tr><td><input type="submit"><td></tr>
                </table>
                <a href="user_signup_page.php" style="text-decoration:none;">is you are not register</a>
                </div>
            </form>
        </div>
        <div class="right"></div>
        <div class="footer">
            This Website Is Create By Tushar
        </div>
    </body>
</html>