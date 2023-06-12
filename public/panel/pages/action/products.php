<?php 
require('../../../conection.php');
  
echo $name=$_POST['name'];
echo $des=$_POST['des'];
echo $price=$_POST['price'];
echo $img=$_POST['img'];
echo $category=$_POST['category'];
echo $shop=$_POST['shop'];

if ($name=='' && $name==null ){
    echo "name is empty" ;
}
 if ($des=='' && $des==null) {
    echo "description is empty";
 }
 if ($price=='' && $price==null) {
    echo "price is empty";
 }
 if ($img=='' && $img==null) {
    echo "image is empty";
 }
 

 $data1=$conn->prepare('INSERT INTO `product` ( name, des, price , img,category,shop) VALUES (?,?,?,?,?,? );');
  $data1->execute([$name,$des,$price,$img,$category,$shop]);
  
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=products");
?>