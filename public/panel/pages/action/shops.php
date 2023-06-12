<?php 
require('../../../conection.php');
  
echo $name=$_POST['name'];
echo $adress=$_POST['adress'];
if ($name=='' && $name==null ){
    echo "shop Name is empty" ;
}
 if ($adress=='' && $adress==null) {
    echo "shop Adress is empty";
 }
 

 $data1=$conn->prepare('INSERT INTO `shops` ( name,adress) VALUES (?,?);');
  $data1->execute([$name,$adress]);
  
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=shops");
?>