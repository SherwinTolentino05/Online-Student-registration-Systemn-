
<?php
      include_once 'connection.php'; 
      session_start();

      $id = $_SESSION['id'] ;
  
      
      $sql = "SELECT * FROM accounts WHERE ID= '$id'";
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)) {
          $fname = $row["firstname"];
          $lname = $row["lastname"];
          $snum = $row["Studentnum"];
          $sID   = $row["StuID"];
          $course= $row["Course"];
          $sDesc = $row["SectionDesc"];
          $email = $row["email"];
          $gender= $row["gender"];

        }
      }
     
 ?>

<!DOCTYPE html>  
<html>  
<head>  
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Sudent Registration</title>
<style> 

body{  
  font-family: 'Trebuchet MS', sans-serif;  
  background-image: url("school.jpg");
  background-size: cover;
}

.wrapper{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1000px;
    display: flex;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08)
}

.wrapper .left{
    width: 35%;
    background: linear-gradient(to right, maroon, maroon);
    padding: 30px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
    color: #fff;
}

.wrapper .left img{
    margin-bottom: 10px;
    border-radius: 5px;
}

.wrapper .left h2{
    margin-bottom: 10px;
}

.wrapper .left p{
    font-size: 20px;
}

.wrapper .right{
    width: 80;
    background: #fff;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    padding: 30px 25px;
}

.wrapper .right .info,
.wrapper .right .schoolinfo{
    margin-bottom: 50px;
    margin-left: 70px;
}

.wrapper .right .info h3,
.wrapper .right .schoolinfo h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    font-weight: 900;
    color: black;
    text-transform: uppercase;
    letter-spacing: 5px;
}

.wrapper .right .info_data ,
.wrapper .right .schoolinfo_data{
    display: flex;
    justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .schoolinfo_data .data{
    width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .schoolinfo_data .data h4{
    font-weight: 900;
    color: black;
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .schoolinfo_data .data p{
    font-size: 13px;
    margin-bottom: 10px;
    color: black;
}
.wrapper button{
  background-color: white;  
  color: maroon;  
  cursor: pointer;
  border: none;
}
.wrapper button:hover{
  color: yellow;
}


</style>  
</head>  
<body>  

<div class="wrapper">
    <div class="left">
        <img src="profile.png" width="100">
        <h2>Student Name</h2>
        <p><?php echo $fname ;?></p>
        <p>Batch<br>2020-2024</p>
        <a href="index.php"><button type = button>Log Out</button></a>
    </div>
    <div class="right">

      <div class="info">
        <h3><b>Student Info:</b></h3>
        <div class="info_data">
          <div class="data">
          <h4>Full Name:&nbsp;&nbsp;&nbsp;&nbsp;</h4>
          <p><?php echo $fname ." ". $lname ;?>&nbsp;&nbsp;&nbsp;&nbsp;</P>
        </div>
          <div class="data">
          <h4>Email:&nbsp;&nbsp;&nbsp;&nbsp;</h4>
          <p><?php echo $email ;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</P>
        </div>
        <div class="data">
          <h4>Gender:&nbsp;&nbsp;&nbsp;&nbsp;</h4>
          <p><?php echo $gender;?>&nbsp;&nbsp;&nbsp;&nbsp;</P>
        </div>
        </div>
      </div>

      <div class="schoolinfo">
        <h3>Student School Info:</h3>
        <div class="schoolinfo_data">
          <div class="data">
          <h4>Course:</h4>
          <p><?php echo $course;?></P>
        </div>
          <div class="data">
          <h4>Year:</h4>
          <p>3rd Yr</P>
        </div>
        <div class="data">
          <h4>Section:</h4>
          <p><?php echo $sDesc;?></P>
        </div>
        <div class="data">
          <h4>Student Number:</h4>
          <p><?php echo $snum;?></P>
        </div>
        <div class="data">
          <h4>No. of Subjects</h4>
          <p>7</P>
        </div>
        </div>
      </div>

    
</body>  
</html>  