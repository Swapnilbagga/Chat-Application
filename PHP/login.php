<?php
    session_start();
    include_once "config.php";
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    if(!empty($email) && !empty($password)){
        // let us check email is valid or not
        $sql=mysqli_query($conn,"SELECT * FROM users where email='{$email}' AND password ='{$password}'");
        if(mysqli_num_rows($sql)>0){ //if email already exist
           $row=mysqli_fetch_assoc($sql);
           $status="Active now";
           $sql2=mysqli_query($conn,"UPDATE users SET STATUS='{$status}' WHERE unique_id={$row['unique_id']}");
           if($sql2){
                $_SESSION['unique_id']=$row['unique_id'];
                echo "success";
           }
        }
        else{
            echo "Email or Pasword incorrect!";
        }
    }    
    else{
        echo "All input fields are required!";
    }

?>