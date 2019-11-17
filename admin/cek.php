<?php  
session_start();
include "../koneksi/konek.php";

        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $submit = $_POST['submit'];
        
        if($submit) {
         if($user == "" || $pass == "" ) { 
    ?> 
        <script type="text/javascript">alert("Username atau password masih kosong"); window.location.href="login.php"</script> <?php
        } 
        else { 
        $sql = mysql_query("select * from user where username = '$user' and password = md5('$pass') ") or die(mysql_error());
        $data = mysql_fetch_array($sql);
        $cek = mysql_num_rows($sql);
        if($cek >= 1) {
         if($data['role'] == "admin") {
             $_SESSION['admin'] = $data['idus'];
              header("location: index.php");
            } else if($data['role'] == "guru") {
             $_SESSION['guru'] = $data['idus'];
              header("location: guru.php");
           }
        }else {
           ?> 
          <script type="text/javascript">alert("Login Gagal ."); window.location.href="login.php"</script> <?php
            }
            }
      }
 ?>