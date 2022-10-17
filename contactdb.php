<?php 
//Error Hide Notice
error_reporting(E_ERROR | E_PARSE);


$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$Database = "contact_reg_form";

//Connect Server to Database
$Connect = mysqli_connect($Server_Name,$User_Name,$Password,$Database);

// User Data Store
$Full_Name = $_POST['full_name'];
$Mobile_Number = $_POST['mobile_number'];
$Email_Id = $_POST['email_id'];
$Users_Sms = $_POST['users_sms'];

// Data Insert
$Insert_Data = "INSERT INTO contact_apply(Id,Full_Name,Mobile_Number,Email_Id,User_Sms)VALUES(NULL,'$Full_Name','$Mobile_Number','$Email_Id','$Users_Sms')";

// Query Pass
$Query = mysqli_query($Connect,$Insert_Data);

if($Query){
    header('location:sucesssms.php');
}else{
    echo "Register Cannot Sucessfull";
}

?>