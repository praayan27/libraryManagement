<?php 
require_once("includes/config.php");
// code user email availablity
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : You did not enter a valid email.";
	}
	else {
		$sql ="SELECT EmailId FROM tblstudents WHERE EmailId=? LIMIT 1";
        $query= $dbh -> prepare($sql);
        $query-> bind_Param("s", $email);
        $query-> execute();
        $query->bind_result($resultEmail);
        $query->store_result();
        $query->fetch();
        $rnum = $query->num_rows;
     
      if($rnum != 0)
         { $query->close();
          echo "<span style='color:red'> Email already exists .</span>";
          echo "<script>$('#submit').prop('disabled',true);</script>";
         } else{
	           $query->close();
	          echo "<span style='color:green'> Email available for Registration .</span>";
              echo "<script>$('#submit').prop('disabled',false);</script>";
             }
        }
		
    }


?>
