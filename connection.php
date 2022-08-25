
<?php
 define('HOST','localhost');
 define('USERNAME', 'root');
 define('PASSWORD','');
 define('DB','emicalculator');
 
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 
     $amount = $_POST['amount'];
	 $interest = $_POST['interest'];
     $period = $_POST['period'];
     $start_date = $_POST['start_date'];

//  $sql = "insert into users (username, password) values ('$username','$pass')";
 $sql= "INSERT INTO calculators (amount, interest, period, start_date) VALUES ('$amount', '$interest', '$period','$start_date')";

 
 if(mysqli_query($con, $sql)){

    echo 'success';
   
    
 }
?>

