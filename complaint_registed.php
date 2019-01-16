<?php
$nm=$_POST['name'];
$brh=$_POST['brh'];
$yr=$_POST['yr'];
$sub=$_POST['Subject'];
$comp=$_POST['issue'];
$r1=$_POST['r1'];  
 
$con = mysqli_connect("127.0.0.1","root","","ComplaintBox");

 mysqli_select_db($con, "ComplaintBox");

$sql ="select MAX(Sr_no)as ID from complaint_table";
$res = mysqli_query($con,"$sql");
      $row =mysqli_fetch_array($res, MYSQLI_ASSOC);

$mid = $row['ID'];
$mid =$mid+1;
$sql1 = "INSERT INTO complaint_table(Sr_no, Name, Year, Branch, Complaint_against, Subject, Complaint_detail) VALUES ($mid,'$nm','$yr','$brh','$r1','$sub','$comp')";
mysqli_query($con,"$sql1");

echo" Dear $nm ,";
echo "<br>     You complaint is register successfully. Your complaint ID is $mid you will get respond within week .<br>";
echo"Thank you.<br>";



?>