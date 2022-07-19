<?php
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];

if(!empty($username)&&!empty($password)&&!empty($gender)&&!empty($email)&&!empty($phone)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="emicalculator";

    $conn= mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
        die('connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT="SELECT email From customers Where email=? Limit 1";
        $INSERT="INSERT Into customers (username,password,gender,email,phone) values (?,?,?,?,?)";
        
        $stmt =$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){

            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssi",$username,$password,$gender,$email,$phone);
            $stmt->execute();
        //     echo "New Record inserted Successfully";
        header("Location:login.php");
        exit();
        }
        else {
            echo "someone already register using this email";
        }
        $stmt->close();
        $conn->close();
        
    }
}
else {
    echo"All fields are required";
    die();
}
?>