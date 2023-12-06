
        <?php

$con=mysqli_connect("localhost","root","","work");

 if(isset($_POST['submit'])){
  $username=$_POST['mail'];
  $password=$_POST['pass'];
   if($con===false){
    echo("Failed");
    die("Couldn't connect");
    }
   else
  {    
          
          $sql = "select *from user1 where email = '$username' and password = '$password'"; 
          
          echo "$username $password" ;
          $result = mysqli_query($con, $sql);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $count = mysqli_num_rows($result); 
            
          if($count == 1){  
              echo "<script>window.location.href='index.php';</script>";  
          }  
          else{  
              echo "<script>alert('Enter valid User Details')</script>";  
          }     
      }}
    ?>   
<html>
    <head>
        <title>Login-Endure Solutions</title>
        <script>
            
        </script>
        <style>
            body
            {
                background-color: 07081a;
            }

            .whole
            {
                display: flex;
                margin-left: 160px;
                margin-top: 90px;
            }
             .head h1
            {
                color: black;
                font-family: cursive;
                font-size: 55px;
            }
            
           .left
            {
                width: 585px;
                height: 555px;
                background-color: #07081a;
                color: white;
        
            }
            .pop3
            {
                margin-top: 50px;
                display: flex;
            }
            .pop3 img
            {
                margin-top: 30px;
            }
            .pop3 h1
            {
                font-size: 50px;
                font-family: cursive;
            }
            p
            {
            font-size: 20px;
            font-family: cursive;  
            color: white;  
            margin-left: 100px;
            margin-top: 90px;
            line-height: 1.6;
            }
            .right
            {
                width: 455px;
                height: 465px;
                padding-left: 180px;
                padding-top: 90px;
                background-color: white;
                border-color: aqua;
                border-radius: 60%;
            }
           .right h1{
            padding-left: -15px;
            padding-top: -40px;
            font-size: 50px;
           }
           form
           {
            margin-left: 60px;
            border-width: 1px;
            border: #07081a;
            border-radius: 1%;
            }
            input
            {
                margin: 5px;
                width: 250px;
                height: 40px;
                margin-left: -30px;
            }
            #loginbtn
            {
                margin-left: 20px;
                margin-top: 25px;
                background-color: #07081a;
                border-radius: 5%;
                width: 140px;
                color: white;
            }
           .rio 
           {
            padding: 20px;
            margin-left: -30px;
            width: 200px;
            color: #07081a;
            font-size: 20px;
            background-color: white;
           }
        </style>
    </head>
    <body>
        
        <div class="whole">
            <div class="left">
                <div class="pop3">
                <img src="papertray.png" height="80px" width="80px">  
                <h1>Endure Solutions</h1>
                </div>
                <p>
                    <b><i>WHEN YOU SUPPORT A SMALL<br> BUSINESS,YOU ARE<br> SUPPORTING A DREAM</i></b>
                </p>
            </div>
                <div class="right">
                    <div class="head">
                        <h1>User Login</h1>
                    </div>
                <form method="post">
                        <div class="rio">
                            
                        <div class="feild-grid">
                            <div class="fld-6 feild">
                                <input type="text" id="mail"placeholder="Enter the registered email id" name="mail">
                            </div>                       
                        
                            </div>
                            <div class="fld-3 feild">
                                <input type="password" id="password" name="pass" placeholder="Enter the password">
                            </div>
                            <input type="submit" value="Login" id="loginbtn" name="submit" >
                        </div> 
                    </form>
                </div>
        </div>
      </body>
</html>




