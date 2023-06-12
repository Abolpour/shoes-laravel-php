<?php 
require('../../../conection.php');
  
 $name=$_POST['name'];
 $des=$_POST['des'];

 $id=$_POST['id'];

 $data1=$conn->prepare('UPDATE  category  SET  name=?, des=? WHERE id=?;');
  $data1->execute([$name,$des,$id]);
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=category");
 
?>