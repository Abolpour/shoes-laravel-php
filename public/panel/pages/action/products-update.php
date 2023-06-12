<?php 
require('../../../conection.php');
  
 $name=$_POST['name'];
 $des=$_POST['des'];
 $price=$_POST['price'];
 $img=$_POST['img'];
 $category=$_POST['category'];
 $shop=$_POST['shop'];
 $id=$_POST['id'];



 $data1=$conn->prepare('UPDATE  product  SET  name=?, des=?,price=?,img=? ,category=?,shop=?  WHERE id=?;');
  $data1->execute([$name,$des,$price,$img,$category,$shop,$id]);
  
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=products");
?>