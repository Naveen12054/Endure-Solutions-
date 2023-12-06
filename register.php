<!DOCTYPE html>
<head>
    <title>Register Page</title>   
    <style>
        body
        {
            margin: 4%;
            padding: 0;
            background-color: #07081a;
            background-size: cover;
        }


        .main_continer img {
            position: absolute;
            width: 840px;
            height: 600px;
            margin-left: 30.05%;
            border-radius: 10px;
        }

        .side_div {
            position: absolute;
            width: 360px;
            height: 600px;
            border-radius: 5px;
            background-color: slategray;
        }

        .side_div img {
            position: relative;
            margin-top: 40%;
            margin-left: 8.5%;
            width: 300px;
            border-radius: 2%;
            height: 300px;
        }




        .feild input {
            border-radius: 6px;
            outline: none;
            width: 250px;
            height: 35px;
            border: 0.5px solid rgba(128, 128, 128, 0.452);
        }
        #loginbtn {
            margin-left: 20%;
            margin-top: 5%;
            position: absolute;
            width: 300px;
            height: 35px;
            cursor: pointer;
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 5px;
            background-color: #aa00ff;
        }
        .feild>p {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            color: rgb(77, 74, 74);
        }
        .head {
            color: white;
            font-size: 50px;
            margin-top: 0px;
            letter-spacing: -8.01px;
            margin-left: 70px;
        }
        .main_continer {
            display: flex;
            width: 1200px;
            height: 600px;
            position: relative;
            border-radius: 10px;
            top: 8%;
            left: 11%;
            background-color: #0d1844;
        }

        .right {
            margin-left: 42%;
            margin-top: -3%;
            position: absolute;
        }

        .feild-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 100%;
            column-gap: 5%;
        }
        .feild-grid p
        {
            color: wheat;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  
  function validateName() {
  var letters = /^[A-Za-z ]*$/;
  var fname = document.getElementById("name").value;
  
  if ((!letters.test(fname) || fname.length <= 2) && fname.length>0) {
    document.getElementById("nc").innerHTML = "Name should only contain alphanumeric and be at least 3 characters long";
        return false;
  } else {
    document.getElementById("nc").innerHTML = "";
        return true;
  }
}


function validateUname() {
    var letters = /^[A-Za-z ]*$/;
  var uname = document.getElementById("name").value;
  
  if ((!letters.test(uname) || uname.length <= 2) && uname.length>0) {
    document.getElementById("lc").innerHTML = "Name should only contain alphanumeric and be at least 3 characters long";
        return false;
  } else {
    document.getElementById("lc").innerHTML = "";
        return true;
  }
}
function validatePwd() {
  var pwd_exp =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
  var pwd = document.getElementById("password").value;
  if (!pwd_exp.test(pwd)){
    document.getElementById("pw").innerHTML = "password contains only Upper case, Lower case, Special character and Numeric letter minimum 5 and maximum 12 letters ";
        return false;
  } else {
    document.getElementById("pw").innerHTML = "";
        return true;
  }
}


function validateCpwd() {
  var cpwd = document.getElementById("cpass").value;
  var pwd = document.getElementById("password").value;
  if (pwd!==cpwd) {
    document.getElementById("cpw").innerHTML = "Password not Matched";
        return false;
  } else {
    document.getElementById("cpw").innerHTML = "";
        return true;
  }
}
function validateNum() {
  var pwd_exp =/^\d{10}$/;
  var pwd = document.getElementById("no").value;
  if (!pwd_exp.test(pwd) ||  !((pwd.length==10))){
    document.getElementById("po").innerHTML = "Phone number should  contains 10 Numeric Digits.";
        return false;
  } else {
    document.getElementById("po").innerHTML = "";
        return true;
  }
}
function validateEmail() {
  var email_exp =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var email = document.getElementById("mail").value;
  if (!email_exp.test(email)) 
  {
    document.getElementById("em").innerHTML = "Invalid Email";
        return false;
  } else {
    document.getElementById("em").innerHTML = "";
        return true;
  }
}




function checkall()
{
  if(validateUname()&&validatePwd()&&validatePhone()&&validateName()&&validateEmail()&&validateCpwd())
  return true;

  return false;
}
        function clearform() {
            document.getElementById("name").value = "";
            document.getElementById("uname").value = "";
            document.getElementById("password").value = "";
            document.getElementById("cpass").value = "";            
            document.getElementById("mail").value = "";
            document.getElementById("no").value = "";
            document.getElementById("confirm").value = "";
        }
</script>
</head>
<body>
<?php
    $conn =mysqli_connect("localhost","root","","work");
    
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
       // echo "connected successfully";
    }
    
    if(isset($_POST['submit']))
    {
    $f_name = $_POST['name'];
    $l_name = $_POST['uname'];
    $password = $_POST['password'];
    $phone = $_POST['no'];
    $email = $_POST['mail'];
    
    $sql = "INSERT INTO user1 (f_name,l_name,password, phone, email) VALUES 
    ('$f_name','$l_name','$password','$phone','$email')";
    
    if (mysqli_query($conn,$sql)) 
    {
     echo "<script>window.location.href='rap.php';</script>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    
    }
    }
    mysqli_close($conn);
    
    ?>
    <div class="main_continer">
        
        <div class="side_div">
            <img src="working.gif" alt="">
        </div>
        <div class="right">
        <form action="" method="POST">
            <div class="head">
                <h2>Endure Solutions</h2>
            </div>
            <div class="feild-grid">
               
                <div class="fld-1 feild">
                    <p>First name</p>
                    <input type="text" id="name" name="name" onkeyup="validateName()" required> <br>
                    <span id="nc" class="span"></span>
                </div>
                <div class="fld-2 feild">
                    <p>Last name</p>
                    <input type="text" id="uname" name="uname" onkeyup="validateUname()" required> <br>
                    <span id="lc" class="span"></span>
                </div>
                <div class="fld-3 feild">
                    <p>Password</p>
                    <input type="password" id="password" name="password" onkeyup="validatePwd()" required> <br>
                    <span id="pw" class="span"></span>
                </div>
                <div class="fld-4 feild">
                    <p>Confirm Password</p>
                    <input type="password" id="cpass" onkeyup="validateCpwd()" required><br>
                    <span id="cpw" class="span"></span>
                </div>
                <div class="fld-5 feild">
                    <p>Phone</p>
                    <input type="text" id="no" name="no" onkeyup="validateNum()" required> <br>
                    <span id="po" class="span"></span>
                </div>
                <div class="fld-6 feild">
                    <p>Email</p>
                    <input type="text" id="mail" name="mail" onkeyup="validateEmail()" required> <br>
                    <span id="em" class="span"></span>

                </div>
            </div>
            <input type="Submit" value="Register" id="loginbtn" name="submit" onclick="create()">
        </form>
        </div>
            
    </div>
   
</body>

</html>