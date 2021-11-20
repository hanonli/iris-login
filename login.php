<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM account WHERE email='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // header("Location: index.php?error=pass");
            // exit();
            if ($row['email'] === $uname && $row['password'] === $pass) {
                //printf("%s %s\n", $row["email"], $row["password"]);
                echo "Logged in!";
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}