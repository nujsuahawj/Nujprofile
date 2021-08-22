<?php
include('admin/db.php');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$text=$_POST['text'];

$sql = "INSERT INTO customer (name,email,subject,text)
 VALUES('$name','$email','$subject','$text')";
 $result = mysqli_query($con, $sql) ;
  mysqli_close($con);

  $url = "https://nriavtushlubplogteb.000webhostapp.com/";

if($result){
 echo "<script type='text/javascript'>";
 echo "alert('thanks');";
 echo "window.location = '$url'; ";
 echo "</script>";
 }
 else{
 echo "<script type='text/javascript'>";
 echo "alert('Error plase try again');";
 echo "window.location = '$url'; ";
 echo "</script>";
}
?>