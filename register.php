<?php
 $sever ="localhost";
 $Username = "root";
 $Password = "";
 $dbname ="register";

  $conn = mysqli_connect($sever, $Fullname, $Password,$dbname);

  if(!$con)
  {
    echo "not connected";
  }
  
  $Fullname =$_POST['Fullname'];
  $Email = $_POST['Email'];
  $Password =$_POST['Password'];

  $sql = "INSERT INTO `register`(`Fullname`,'Email `Password`) VALUES ('$Fullname','$Email',$Password')"
  
  $result = mysqli_query( $conn, $sql );
    
  if($result)
  {
    echo "submited";
  }
  else
  {
    echo "failed";
  }
  ?>