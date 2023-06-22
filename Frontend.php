<!DOCTYPE html>  
<html>  
<head>  
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="style2.css">
<title>Sudent Registration</title> 
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
.clearbtn {  
  background-color: maroon;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.clearbtn:hover {  
  opacity: 1;  
}  

  container1{
    width: 100%; 
    height: 100%; 
    background-color: #3c5077;  
    display: flex;
    align-items: center;
    justify-content: center;
    }
  
  .popup{
    width: 400px; 
    background-color: rgb(138, 27, 27);  
    border-radius:6px;
    position:absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%) scale(0.1);
    align-items: center;
    text-align:center;
    padding: 0 30px 30px;
    color: rgb(243, 237, 237);
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
  }

  .open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
  }
  
  .popup img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }
  
  .popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
  }
  
  .popup button{
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

<form method="POST">  

  <div class="container">  

  <center>  <h1> Student Registration Form</h1> </center> 
  <div class="logo">
    <img src="puplogo.png" width="100">

  </div> 
  <hr>  
<label> Firstname: </label>   
<input type="text" placeholder= "Enter First Name" name="firstname" required>     

<label> Lastname: </label>    
<input type="text" placeholder="Enter Last Name" name="lastname"  required>    

<label>Student Number:</label>
<input type ="text" placeholder= "Enter Student Number" name = "Studentnum" required>

<label>Student ID:</label>
<input type ="text" placeholder= "Enter Student ID" name = "StuID" required>

<label>Course:</label>
<input type ="text" name = "Course" required>   

<label>Section Description:</label>
<input type ="text" name = "SectionDesc"required>

<label>Gender:</label> 
<input type="radio" value="Male" name="gender" value= "m" required> Male   
<input type="radio" value="Female" name="gender" value= "f"required> Female 

<br><br><label>Email:</label>  
<input type="text" placeholder="Enter Email" name="email"required>  

<label>Password:</label>  
<!-- Password field -->
 <input type="password" placeholder="Enter Password" name="pass" id = "myInput"required>

<!-- An element to toggle between password visibility -->
<input type="checkbox" onclick="myFunction()">Show Password


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
 

<button type="submit" name="btnSubmit" class="registerbtn">Submit</button>  
<button type="submit" name="btnClear" class="clearbtn">Clear</button>

</form>

<div class = "popup" id = "msg" >
  <img src = "check1.png">
  <h2>Thank You!</h2>
  <p>Your details has been successfully submitted.Thanks!</p>
  <a href="index.php"><button type= "button" onclick = "closePopup()" name = "pop">OK</button>
</div>

<div class = "msg1" id = "msg2" >
  <img src = "x.png">
  <h2>Sorry</h2>
  <p>The Student number you enter has been used.</p>
    <button type= "button" onclick ="closemsg1()" name ="ok">OK </button>
</div>

<?php

if(isset($_POST['btnSubmit'])){

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $Studentnum = $_POST['Studentnum'];
 $StuID = $_POST['StuID'];
 $Course = $_POST['Course'];
 $SectionDesc = $_POST['SectionDesc'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $password = $_POST['pass'];

if (!empty($firstname) || !empty($lastname) || !empty($Studentnum) || !empty($StuID) || !empty($Course) || !empty($SectionDesc) || !empty($email) || !empty($gender) ||!empty($password)){

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "register";

//connection to sql
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error())
{
	die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}
else 
	{
	$SELECT = "SELECT Studentnum From accounts where Studentnum = ? Limit 1";
	$INSERT = "INSERT Into accounts (firstname, lastname, Studentnum, StuID, Course, SectionDesc, email, gender,pass ) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($SELECT);
$stmt->bind_param("i", $Studentnum);
$stmt->execute();
$stmt->bind_result($Studentnum);
$stmt->store_result();
$rnum = $stmt->num_rows;
	}
	if ($rnum == 0 )
		{
			$stmt -> close();
		
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("ssiisssss", $firstname, $lastname, $Studentnum, $StuID, $Course, $SectionDesc, $email, $gender,$password);
$stmt->execute();

	?>
  <script>
  let popup = document.getElementById("msg");
  popup.classList.add("open-popup");
  </script>
  <?php
} 
else {
  ?>
  <script>
  let msg1 = document.getElementById("msg2");
  msg1.classList.add("open-msg1");
  </script>
  <?php
	}
}
}

if(isset($_POST['btnClear'])){
 
}

?>
<script>
  function closePopup(){
  popup.classList.remove("open-popup");
  }

  function closemsg1(){
  msg1.classList.remove("open-msg1");
  }

</script>

</body>  
</html>  