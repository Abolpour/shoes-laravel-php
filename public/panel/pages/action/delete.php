<?php 



require('../../../conection.php');
  

  if ($_GET['table']=='products') {
    $data1 = $conn->prepare("DELETE FROM product where id=?");
    header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=products");
    
  } else if ($_GET['table']=='category') {
    $data1 = $conn->prepare("DELETE FROM category where id=?");
    header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=category");
    
  } else if ($_GET['table']=='shops') {
    $data1 = $conn->prepare("DELETE FROM shops where id=?");
    header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=shops");
    
  } else if ($_GET['table']=='users') {
    $data1 = $conn->prepare("DELETE FROM users where id=?");
    header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=users");
    
  }
  $data1->execute([$_GET['id']]);


?>