<?php 
require('../../../conection.php');
  
 $usernam=$_POST['usernam'];
 $pasword=$_POST['pasword'];


if ($usernam=='' && $usernam==null ){
    echo "username is empty" ;
}
 if ($pasword=='' && $pasword==null) {
    echo "password is empty";
 }


 $data1=$conn->prepare('INSERT INTO `users` ( usernam, pasword) VALUES (?, ?);');
  $data1->execute([$usernam,$pasword]);
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=users");
 
?>