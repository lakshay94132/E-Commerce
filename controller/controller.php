<?php 
include'../config/config.php';
if(isset($_REQUEST[''])){
	$customer_name = $_REQUEST['customer_name'];
	$email_id = $_REQUEST['m'];
	$contact_number =$_REQUEST['contact_'];
	

	if(empty($customer_name) && empty($email_id) && empty($contact_number)){
		

		$_SESSION['error'] = "Sorry Please fill the blank field!";
		header("location:".$siteURL."");
	}else{
		$sql = mysqli_query($conn, "SELECT * FRom WHERE email_id='$email_id'");
		
		if(mysqli_num_rows($sql)>0){			

			$_SESSION['error'] = "Your registration already exists!";
			header("location:".$siteURL."");
		}else{
			mysqli_query($conn, "INSERT INT(customer_name , email_id , contact_number)VALUES('$customer_name','$email_id', '$contact_number')");			
			$_SESSION['success'] = "Your registration successfully";
			header("location:".$siteURL."");
		}
	}

}
?>
    