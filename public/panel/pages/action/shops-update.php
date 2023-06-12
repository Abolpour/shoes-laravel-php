<?php 
require('../../../conection.php');
  
 $name=$_POST['name'];
 $adress=$_POST['des'];
$id=$_POST['id'];
 

 $data1=$conn->prepare('UPDATE  shops  SET  name=?, adress=?  WHERE id=?;');
  $data1->execute([$name,$adress,$id]);
  
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=shops");
?>