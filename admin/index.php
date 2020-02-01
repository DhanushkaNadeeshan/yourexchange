<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM user WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      mysqli_close($conn);
      
      // If result matched $myusername and $mypassword, table row must be 1 row		
      if($count == 1) {
         $_SESSION['user'] = $myusername;  
         $_SESSION["request"] = "n/a";   
         header("Location: http://".$_SERVER['HTTP_HOST']."/yourexchange/admin/home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin login</title>
    <style>
        .container {
            margin: auto;
            width: 20%;
            height: 500px;
            padding: 10%;
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2 style="text-align:center">Login</h2>
        <form action="" method="post">
            <p>User Name : <input type="text" style="width: 100%" id="txtUserName"  name="username" /></p>
            <p>Password : <input type="password" style="width: 100%" id="txtPassword" name="password"/></p>
            <input type = "submit" style="width:100%;height:30px" value = "Login"/>
        </form>
    </div>
    <!-- container -->


</body>

</html>