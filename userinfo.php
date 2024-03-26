<?php

$con = mysqli_connect('localhost','root');

if($con) {
    echo "Connection Successful";
} else {
    echo "No Connection";
}


mysqli_select_db($con, 'krishnatourdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into ktourdata (user, email, mobile, comment) values('$user', '$email', '$mobile', '$comment')  ";

mysqli_query($con, $query);

header('location: index.php'); //to redirect you on the same page  (home page) after successfuly submission.












// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------






// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "krishnatourdata";

// // Create connection
// $con = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }



// $user = $_POST['user'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $comment = $_POST['comment'];




// $sql = "INSERT INTO `ktourdata` (`user`, `email`, `mobile`, `comment`) VALUES ('$user', '$email', '$mobile', '$comment');";

// // $time = time();
// // $sql  = "INSERT INTO trip (name, age, gender, email, phone, other, dt) VALUES ($name, $age, $gender, $email, $phone, $desc, $time);";





// if (mysqli_query($con, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($con);
//   }



?>


