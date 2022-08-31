<?php
    include "koneksi.php";
    // $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    $db = new Database();
    $conn = $db->getCon();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $PDO = "Select * from yamaha.tbl_user WHERE username = :username AND password = :password ";
    $statement = $conn->prepare($PDO);
    $statement->execute(array(':username' => $username, ':password' => $password));

    $row = $statement->fetch(PDO::FETCH_ASSOC);


    if(isset($row['username'])){
      
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];

            if($row['status']=="Administrator"){
                echo "<script>
                    alert('Login Success');
                    window.location.href = '../Administrator/index.php';
                </script>";
            } else if($row['status']=="Pengunjung") {
                echo "<script>
                    alert(Login Success);
                    window.location.href = '../Pengunjung/index.php';
                </script>";
            }   
       
    }else{
        echo "<script>
                    alert(Login Success);
                    window.location.href = '../login/login.php';
                </script>";
    }
?>