<?php 
require('../../../conection.php');;
  
echo $name=$_POST['name'];
echo $des=$_POST['des'];
if ($name=='' && $name==null ){
    echo "name is empty" ;
}
 if ($des=='' && $des==null) {
    echo "description is empty";
 }
 

 $data1=$conn->prepare('INSERT INTO `category` ( name, des) VALUES (?, ?);');
  $data1->execute([$name,$des]);
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=category");
 
?>