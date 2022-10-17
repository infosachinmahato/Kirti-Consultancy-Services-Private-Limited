<?php 
// Error Hide Notice
error_reporting(E_ERROR | E_PARSE);

$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$Database = "career_form_reg";

// Connect Server to Database
$Connect = mysqli_connect($Server_Name,$User_Name,$Password,$Database);

// User Data Store
$Full_Name = $_POST['full_name'];
$Mobile_Number = $_POST['mobile_number'];
$Email_Id = $_POST['email_id'];
$Skill = $_POST['skill'];

// Data Insert
$Insert_Data = "INSERT INTO career_apply(Id,Full_Name,Mobile_Number,Email_Id,Skill)VALUES(NULL,'$Full_Name','$Mobile_Number','$Email_Id','$Skill')";

// Query Pass
$Query = mysqli_query($Connect,$Insert_Data);

if($Query){
    header('location:sucesssms.php');
}else{
    echo "Register Cannot Sucessfull";
}
?>