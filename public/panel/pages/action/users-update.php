<?php 
require('../../../conection.php');
  
 $usernam=$_POST['usernam'];
 $pasword=$_POST['pasword'];
 
$id=$_POST['id'];


 $data1=$conn->prepare('UPDATE  users  SET  usernam=?, pasword=?  WHERE id=?;');
  $data1->execute([$usernam,$pasword,$id]);
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=users");
 
?>