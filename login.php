<?php
 $sever ="localhost";
 $Username = "root";
 $Password = "";
 $dbname ="test";

  $conn = mysqli_connect($sever, $Username, $Password,$dbname);

  if(!$con)
  {
    echo "not connected";
  }
  
  $Username =$_POST['Username'];
  $Password =$_POST['Password'];

  $sql = "INSERT INTO `test`(`Username`, `Password`) VALUES ('$Username','$Password')"
  
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