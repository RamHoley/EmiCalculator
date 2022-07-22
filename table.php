<?php include_once('functions.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">

<style type="text/css">
  body{
    background-color:rgb(255, 255, 255); ;
  }
  .container{
    margin-top:30px;
    
  }
  .box{
    background-color: #D7DBDD;
    padding:10px;
    margin: auto;
    margin-bottom:20px;
    width: 600px;
    padding:5%;
  }
  .form-group{
    margin-bottom:20px;
    margin-top:20px;
  }
  #abc{
            background-color: #4CFBB8;
            width:200px;
            position: absolute;;
            top:5vh;
            right:5vw;
            display:flex;
            justify-content: space-around;
            padding: auto;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            

            
        }
</style>

<?php
  if(isset($_POST['amount'])){
    $_POST['amount'] = str_replace(',','',$_POST['amount']);
    $emi = PMT($_POST['interest'],$_POST['period'],$_POST['amount']);
    $balance = $_POST['amount'];
    $payment_date = $_POST['start_date'];
    $amount=$_POST['amount'];
    $interest=$_POST['interest'];
    $period=$_POST['period'];
    
    $intrest= (($emi * ($period * 12)) - $balance);
    $total_amount= $emi * ($period * 12) ;
    
  }
?>


<div class="container">
  <h1 class="text-center"> EMI Calculator</h1>
  <hr>
  <div class="box">
    <h3 class="text-center">Loan Details</h3>
    <hr>
    <form action="" method="post">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label>Loan Amount</label>
            <input type="text" name="amount" class="form-control" value="<?php echo number_format(@$_POST['amount'],0);?>" required>
          </div>
          <div class="form-group">
            <label>Interest (%)</label>
            <input type="text" name="interest" class="form-control" value="<?php echo @$_POST['interest'];?>" required>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label>Period (Years)</label>
            <input type="text" name="period" class="form-control" value="<?php echo @$_POST['period'];?>" required>
          </div>
          <div class="form-group">
            <label>Start Date</label>
            <input type="date" name="start_date" value="<?php echo @$_POST['start_date'];?>" class="form-control" required>
          </div>
        </div>
      </div>
      <input type="submit" class="btn btn-primary" value="Calculate">
    </form>
  </div>

  <div class="box">
    <div class="row">
      <div class="col-12">
        <div class="alert alert-info" role="alert">
          Months to Pay (EMI) : <?php echo showValue($emi);?><br>
          Total interest to pay : <?php echo showValue($intrest);?> <br>
          Total amounts to pay (interest + principal) : <?php echo showValue($total_amount);?>
        </div>
        <h3 class="text-center">EMI Monthly Schedule</h3>
        <hr>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>SN</th>
              <th>Payment Date</th>
              <th>Monthly EMI</th>
              <th>Interest Paid</th>
              <th>Principal Paid</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i=1;$i<=$_POST['period']*12;$i++){?>
              <?php 
                $interest = (($_POST['interest']/100)*$balance)/12;
                $principal = $emi - $interest;
                $balance = $balance - $principal;
                $payment_date = date('Y-m-d',strtotime("+1 month",strtotime($payment_date)));
                // $intrest= (($_POST['interest']/100)*$balance);
              ?>
              
              <tr>
                <td><?php echo $i;?></td>
                <td><?php showDate($payment_date);?></td>
                <td><?php showValue($emi);?></td>
                <td><?php showValue($interest);?></td>
                <td><?php showValue($principal);?></td>
                <td><?php showValue($balance);?></td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
        <!-- <div id="abc">
      <h3 onclick="login()">Login</h1>
      <h3 onclick="signup()">Sign Up</h1>
    </div> -->
      </div>
    </div>
  </div>
  <div id="abc">
      <h3 onclick="login()">Login</h1>
      <h3 onclick="signup()">SignUp</h1>
    </div>

  <script>
    function login()
{
    window.location.href="login.php"
    
}
function signup()
{
    window.location.href="index.html"
    
}

</script>

