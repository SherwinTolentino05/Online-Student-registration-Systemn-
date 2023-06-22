<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In Form</title>
<style>
body{
  font-family: 'Times New Roman', Arial, sans-serif;
  background-color: maroon;
}
.container {
    padding: 50px;
  background-color: white;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: lightcyan;
}

hr {
  border: 1px solid gray;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
.cancelbtn {
  background-color: maroon;
  color: white;
  padding: 10px 18px;
  margin: 10px 5px;
  border: none;
  cursor: pointer;
  width: auto;
  opacity: 0.9;
}

.asdbtn {
  background-color: maroon;
  color: white;
  padding: 10px 18px;
  margin: 10px 5px;
  border: none;
  cursor: pointer;
  width: auto;
  opacity: 0.9;
}
.cancelbtn:hover {
  opacity: 1;
}
.msg1{
    width: 400px; 
    background-color: rgb(138, 27, 27);  
    border-radius:6px;
    position:absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%) scale(1);
    align-items: center;
    text-align:center;
    padding: 0 30px 30px;
    color: rgb(243, 237, 237);
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
  }

  .msg1 img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }

  .msg1 h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
  }

  .msg1 button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #6fd649;
    color:#fff;
    border:0;
    outline:none;
    font-size:18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px 5px rgba(0,0,0,0.2);
  }

  .open-msg1{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
  }
</style>
</head>
<body>
<form method="POST" >
  <div class="container">
  <center>  <h1> Log In Form</h1> </center> 
  <div class="logo">
    <img src="puplogo.png" width="100">
  </div> 
  <hr>

<label>Email:</label>
<input type ="text" placeholder= "Enter Email" name = "email" id="Email" required>
<label>Password:</label>
<input type ="password" placeholder= "Enter Student ID" name = "pass" required>

<button type="submit" name="submit" value="LOGIN" class="registerbtn">Log in</button>

<a href="index.php"><button type="button" class="cancelbtn">Cancel</button>
<a href="frontend.php"><button type="button" class="asdbtn">Register</button></a>

<div class = "msg1" id = "msg2" >
  <img src = "x.png">
  <h2>Sorry</h2>
  <p>The Email or Password is incorrect.</p>
  <a href="LogIn.php"><button type= "button" onclick ="closemsg1()" name ="ok">OK </button>
</div>
</form>
<?php

require_once ('connection.php');

if(isset($_POST['submit'])){

$email = $pass = '';
$email= $_POST['email']; 
$pass = $_POST['pass'];
$sql = "SELECT * FROM accounts WHERE email='$email' AND pass='$pass'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row["ID"];
        $email = $row["email"];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        header('Location: studentprofile.php');
        
    }
}
else
{
    ?>
    <script>
    let msg1 = document.getElementById("msg2");
    msg1.classList.add("open-msg1");
    </script>
    <?php
}
}

?>
</body>
</html>