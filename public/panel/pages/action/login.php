<?php 
session_start();
if (isset($_POST)) {
  require('../../../conection.php');
 
  $data1=$conn->prepare('SELECT * FROM users WHERE usernam=? AND pasword=?');







  $data1->execute([$_POST['usernam'],sha1($_POST['pasword'])]);
  $data1=$data1->fetch();
  if($data1){
    $_SESSION['user'] = $data1['usernam'];
  }
  
  header("location:http://localhost:8080/ninja/admin/pages/list/data.php?info=category");
}
?>