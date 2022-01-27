<?php 
require_once("../includes/config.php");
if(!empty($_POST["bookid"])) {
  $bookid=$_POST["bookid"];
  $sql ="SELECT BookName,id FROM tblbooks WHERE ISBNNumber='$bookid'";
$query=mysqli_query($dbh,$sql);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
  while($row = mysqli_fetch_assoc($query)) {?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['BookName']);?></option>
<b>Book Name :</b> 
<?php  
echo htmlentities($row['BookName']);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
 else{?>
  
<option class="others"> Invalid ISBN Number</option>
<?php
 echo "<script>$('#submit').prop('disabled',true);</script>";
}
}



?>
