<?php
 session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    


    $db = new PDO("mysql:host=localhost;dbname=sekolah11", 'root', '');

 $query = $db->query("select * from user where username='$username' AND password='$password'");
 $data = $query->fetch();
 if($query->rowCount() > 0){
      if($data['role']=="admin"){
      $_SESSION['username'] = $username;
      header("Location:index.php");
   }
   else if($data['role']=="user"){
      $_SESSION['username'] = $username;
      header("Location:index.php");
  }
}else{
  header("Location:form.php");
}  