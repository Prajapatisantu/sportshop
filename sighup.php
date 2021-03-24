<?php
session_start();


$server = "localhost";
$username ="root";
$pass = "";
$database ="sport store";

$name ="";
$email ="";
$pwd = "";
$confirm = "";	




$conn = mysqli_connect($server,$username,$pass,$database);

if ($conn) {
	echo "connection success";

}else
{
	die("connection failed".mysql_connect_error());

}
   
	
		if(isset( $_POST["submit"])){
			$name =  $_POST["Name"];
			$email =   $_POST["Email"];
			$pwd =   $_POST["Password"]; 
			$confirm =  $_POST["Pass"]; 
		}



	$userdata = "select * from regsiter where username ='$name' && email = '$email' && password = '$pwd' && c_pwd = '$confirm'";
	$result= mysqli_query($conn,$userdata);

	$num =  mysqli_num_rows($result);
	if($num > 0){
		 header('location:val.php');
	}
	else{
		 $ins = "insert into regsiter(username,email,password,c_pwd) values('$name','$email','$pwd','$confirm');";
		 	mysqli_query($conn , $ins);
		 	header('location:index.html');
	}

	mysqli_close($conn);

	



	

	
			


	
	


?>