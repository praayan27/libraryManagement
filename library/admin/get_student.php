<?php 
require_once("../includes/config.php");
if(!empty($_POST["studentid"])) {
  $studentid= strtoupper($_POST["studentid"]);
 
    $sql ="SELECT FullName,Status FROM tblstudents WHERE StudentId='$studentid'";
$query= mysqli_query($dbh,$sql);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
while ($result=mysqli_fetch_assoc($query)) {
if($result['Status']==0)
{
echo "<span style='color:red'> Student ID Blocked </span>"."<br />";
echo "<b>Student Name-</b>" .$result['FullName'];
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else {
?>


<?php  
echo htmlentities($result['FullName']);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
 else{
  
  echo "<span style='color:red'> Invaid Student Id. Please Enter Valid Student id .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
}
}



?>
