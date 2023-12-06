<html>
    <h1>Your Complaints
    </h1>
    <style>
        body{
            background-color: #07081a;
        }
        h1{
            padding-top: 100px;
            padding-bottom: 50px;
            font-family: cursive;
            font-size: 50px;
            margin-left:580px;
        }
        table
        {
            
            color: white;
            
            background-color: #07081a;
        }
        td{
            padding: 15px;
        }
        </style>
    <body>
    <?php
    
    $con=mysqli_connect("localhost","root","","work");
       if($con===false){
        die("Couldn't connect");
        }
       else
      {
        
        $sql = "SELECT * FROM com";
        $result = mysqli_query($con, $sql);
echo"<table align=center border=1px><tr><th>Product</th><th>Brief</th><th>Location</th><th>zip</th></tr>";
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $product=$row["product"];
            $brief=$row["brief"];
            $location=$row['location'];
            $zip=$row['zip'];
    echo "<tr><td>$product</td><td>$brief</td><td>$location</td><td>$zip</td></tr></table>";
  }
} else {
  echo "0 results";
}

mysqli_close($con);
       }

?>
    </body>
</html>
