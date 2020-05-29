
<?php

$con = mysqli_connect('localhost','root','root');

if($con){

	echo "connection successfull";

}
else{
	echo"connection failed";
}

// mysqli_select_db($con,'register');


// $email = $_POST['email'];
// $password = $_POST['password'];

// $query = "insert into  joi (email,password)
// values($email','$password')";

// mysqli_query($con,$query);

// header('location:index.php');





?>




