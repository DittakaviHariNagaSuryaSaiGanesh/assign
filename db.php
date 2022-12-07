<?php
// $content = $_POST;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "threed_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname =$_POST['f_name'];
$lname =$_POST['l_name'];
$password =$_POST['f_pass'];
$email =$_POST['f_email'];
$phone =$_POST['f_pno'];
// $status =$_POST['n_msg'];
echo $fname;
$sql="INSERT INTO `user_data`(`id`, `f_name`, `l_name`, `password`, `email`, `phone`) VALUES ('','".$fname."','".$lname."','".$password."','".$email."','".$phone."')";
// $res = mysqli_query($conn, $sql);
// print_r($sql);exit;

// $body = '<table border="1" cellpadding=10 cellspacing=2 width="720px" align="center">

// <tr>
// <th colspan="2">Call Back Form Details:</th>
// </tr>

// <tr><td>Name:</td><td>' .$fname . '</td></tr>
// <tr><td>Email:</td><td>' . $email . '</td></tr>

// <tr><td>Mobile Number:</td><td>' . $phone . '</td></tr>

// <tr><td>Query:</td><td>' . $message . '</td></tr>

// </table>';
// print_r($body);exit;
// if ($conn->query($sql) === TRUE) {

//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "https://multipliersolutions.com/mail/index.php",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 30,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "POST",
//       CURLOPT_POSTFIELDS => $body,
//       CURLOPT_HTTPHEADER => array(
//         "Content-Type: application/json",
//         "cache-control: no-cache",
//         "from:Manipalhospitals yeshwanthpur<dev@multipliersolutions.in>",
//         "client:dev@multipliersolutions.in",
//         "subject:Manipal Form Details",
//         "mailto: ramyag@multipliersolutions.com, tabassum@multipliersolutions.com",
//       ),
//     ));
//     $response = curl_exec($curl);
//     $err = curl_error($curl);
//      header('Location: https://www.techkneelogy.com/');
//     curl_close($curl);
    
//     header('Location: https://www.techkneelogy.com/');
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>