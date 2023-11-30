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
            .header2button{
                width: 100px; height: 35px;
                border-radius: 10px;
            } 
            .header2button:hover{
            background-color:rgb(0, 121, 121);
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
            <form action="admin_signup_query.php">
            <table border="5" style="text-align:center;">
                <tr><td><input type="text" placeholder="ID" name="t1"></td></tr>
                <tr><td><input type="text" placeholder="NAME" name="t2"></td></tr>
                <tr><td><input type="text" placeholder="EMAIL" name="t3"></td></tr>
                <tr><td><input type="password" placeholder="PASSWORD" name="t4"></td></tr>
                <tr><td><input type="submit" ></td></tr>
            </table>
            </form>
        </div>
        <div class="right"></div>
        <div class="footer">
            This Website Is Create By Tushar
        </div>
    </body>
</html>