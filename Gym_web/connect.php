<?php
   
  $username = $_POST['username'];
  $email = $_POST['email'];
  $passsword = $_POST['password'];


  

  $conn = new mysqli('localhost','root','','FITNESS);
  if($conn->connect_error){
      die('Connection failed : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into Signup(username,email,password) values(?,?,?)");
     $stmt->bind_param("sss",$username,$email,$password);
     $stmt->execute();
     echo "Signup succesfull.....";
     $stmt->close();
     $stmt->close();
  }

?>


