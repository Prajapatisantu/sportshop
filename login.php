<?php
session_start();
$server = "localhost";
$username ="root";
$pass = "";
$database ="sport store";


$emailu ="";
$pwdu = "";





$conn = mysqli_connect($server,$username,$pass,$database);

if ($conn) {
	echo "connection success";

}else
{
	die("connection failed".mysql_connect_error());

}
   
	
		if(isset( $_POST["submit"])){
			
			$emailu =   $_POST["Email"];
			$pwdu =   $_POST["Password"]; 
			
		}



	$data = "select * from  regsiter where email = '$emailu' && password = '$pwdu' ";
	 $res= mysqli_query($conn,$data);
	 	
	 $number =  mysqli_num_rows($res);
			 if($number > 0){
					header('location:log.html');
			 }
			 else{
						echo "sigh in failed";
			}
	
	 




	mysqli_close($conn);



	

	
			


	
	


?>