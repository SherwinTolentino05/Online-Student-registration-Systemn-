<?
     
      include_once 'connection.php';
      include_once 'logins.php';
  

     
      
      $sql = "SELECT * FROM accounts WHERE firstname = 'sherwin'";
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)) {

          $fname = $row["firstname"];
          $lname = $row["lastname"];
          $Studentnum  = $row["Studentnum"];
          $sID   = $row["StuID"];
          $course= $row["Course"];
          $sDesc = $row["SectionDesc"];
          $email = $row["email"];
          $gender= $row["gender"];

        }
      }
     
 ?>