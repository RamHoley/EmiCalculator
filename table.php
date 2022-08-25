<?php include_once('functions.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style type="text/css">
    body{
           background-color:rgba(255, 255, 255, 0.926); 
       }
   .container{
           margin-top:30px;
           
    
       }
   .box{
          background-color: #eee;
           padding:10px;
           margin: auto;
           margin-bottom:20px;
           width:1000px;
           padding:5%;
           border-style:dashed;
           border padding: 50px;
           border-color: rgba(255, 255, 255, 0.926);
           
       }

   .form-group{
         display:block;
          }
       .sidebar .widget:first-child {
    margin: 0 0 30px!important;
    margin-top: 0px !important;
    margin-right: 0px !important;
    margin-bottom: 30px !important;
    margin-left: 0px !important;
     }
   .relative .box{
          background-color: white;
          position: relative;
          width: 400px;
          float:left;
          height: 350px;
          box-sizing: border-box;
          margin: 15px;
          overflow:hidden;
          border-radius:10px;
      }
      .sidebar .widget:first-child {
    margin: 0 0 30px!important;
    margin-top: 0px !important;
    margin-right: 0px !important;
    margin-bottom: 30px !important;
    margin-left: 0px !important;
}
   #piechart{
          background-color: #eee;
          width: 400px;
          position: relative;
          margin-left: 400px;
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
        .sidebar {
           height:400px; 
           margin :82px;
           margin-top:0px;
           position:relative;
          width:280px;
          color: #333;
         padding: 0 5px;
          left:80px
            border-color: #a9a9a9	;
            border-width:1px; 
        }
    .sidebar .widget:first-child {
    margin: 0 0 30px!important;
    margin-top: 0px !important;
    margin-right: 0px !important;
    margin-bottom: 30px !important;
    margin-left: 0px !important;
    }

ul {
    list-style-type: disc;
}
          
        
   #navb{
          background-color: blue;
        }
   .table table-striped table-bordered thead tr{
         background-color: blue;
        }
    .widget nav_menu-5 widget_nav_menu
       {
        order-bottom: 3px double #ccc!important;
        border-bottom-width: 3px !important;
        border-bottom-style: double !important;
        border-bottom-color: rgb(204, 204, 204) !important;
       } 
       a {
    color: #0072aa;
    text-decoration: none;
    text-decoration-line: none;
    text-decoration-thickness: initial;
    text-decoration-style: initial;
    text-decoration-color: initial;
    background-color: transparent;
}
.sidebar .widget_nav_menu, .sidebar .widget_recent_entries {
    background: #eee!important;
    border: 1px solid #ccc!important;
    border-top-color: rgb(204, 204, 204) !important;
    border-top-style: solid !important;
    border-top-width: 1px !important;
    border-right-color: rgb(204, 204, 204) !important;
    border-right-style: solid !important;
    border-right-width: 1px !important;
    border-bottom-color: rgb(204, 204, 204) !important;
    border-bottom-style: solid !important;
    border-bottom-width: 1px !important;
    border-left-color: rgb(204, 204, 204) !important;
    border-left-style: solid !important;
    border-left-width: 1px !important;
    border-image-source: initial !important;
    border-image-slice: initial !important;
    border-image-width: initial !important;
    border-image-outset: initial !important;
    border-image-repeat: initial !important;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
    
}
 a:-webkit-any-link {
    color: black;
    cursor: pointer;
    text-decoration: none;
    
  }
  .button{
   cursor:pointer;
}
.button:hover{
    background:red;
}
.logo{
  margin-left :50px;
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

<div id="navb">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black ">
    <div class="logo"><img src="emilogo.png" width="80px" height="80px"  alt=""></div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CALCULATORS 
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">calculators</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">EMI CALCULATOR WIDGET </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ARTICLES</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">PRODUCT REVIEWS <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">NEWS & OPINION </a>
      </li>

    </ul>
   </div>
  </nav>
</div>
<div class="container">
  <h1 class="text-center"> EMI Calculator For Home loan, Car Loan & Personal Loan In India</h1>
  <hr>
  <div class="box">
   <form action="" method="post">
      
     <?php include_once('functions.php');?>
      <div class="row">
         <div class="col-6">
          <div>
            <a href="C:\xampp\htdocs\ram\table.php">
          <button style="background-color:dark ; height:50px; weight:500px; font-family: system-ui; font-size:18px; border-radius:8px;border-color:#eee"><h6>Home Loan</h6></button> </a>
            <a href="C:\xampp\htdocs\ram\table.php"><button style="background-color:dark ; height:50px; weight:500px; font-family: system-ui;border-radius:8px;border-color:#eee"><h6>Car Loan</h6>
            </button></a>
            <a href="C:\xampp\htdocs\ram\table.php"><button style="background-color:dark ; height:50px; weight:500px;font-family: system-ui;border-radius:8px;border-color:#eee"><h6>Personal Loan</h6></button></a>
           
          </div><hr>
              <div class="form-group">
               <label><h6>Loan Amount</h6></label>
               <input type="text" name="amount" id="amount" class="form-control" value="<?php echo number_format(@$_POST['amount']);?>" required>
              </div> <br>
              <div class="form-group">
                 <label><h6>Interest (%)</h6></label>
                 <input type="text" name="interest" id="interest" class="form-control" value="<?php echo @$_POST['interest'];?>" required>
              </div><br>
              <div class="form-group">
                <label><h6>Period (Years)</h6></label>
                <input type="text" name="period" id="period" class="form-control" value="<?php echo @$_POST['period'];?>" required>
             </div><br>
             <div class="form-group">
               <label><h6>Start Date</h6></label>
               <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo @$_POST['start_date'];?>" required >
             </div><br>
             <div style="display:none">
              <input type="text" name="emic" value="<?php echo ($emi);?>">
              <input type="text" name="total_interest" value=" <?php echo ($intrest);?>">
              <input type="text" name="total_payment" value=" <?php echo ($total_amount);?>">
              </div>
                <input type="submit" class="btn btn-primary text-center" value="Calculate" >
         </div>
         <div class="sidebar col-sm-4">
          <section class="widget nav_menu-5 widget_nav_menu"><h3>Featured Calculators &amp; Articles</h3><hr>
          <div class="menu-featured-calculators-articles-container"><ul id="menu-featured-calculators-articles" class="menu"><li id="menu-item-3293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3293">
            <a href="C:\xampp\htdocs\ram\table.php">Home Loan EMI Calculator with Prepayments, Taxes &amp; Insurance</a></li><hr>
            <li id="menu-item-3009" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3009"><a href="C:\xampp\htdocs\ram\table.php">Loan Calculator — Calculate EMI, Affordability, Tenure &amp; Interest Rate</a></li><hr>
            <li id="menu-item-6733" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-6733"><a href="C:\xampp\htdocs\ram\table.php">How to Structure a Home Loan?</a></li><hr>
            <li id="menu-item-6757" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-6757"><a href="C:\xampp\htdocs\ram\table.php">New RBI Guidelines on Digital Loans: Know Your Rights</a></li><hr>
            <li id="menu-item-6741" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-6741"><a href="C:\xampp\htdocs\ram\table.php">SBI Overdraft Facility against Bank Fixed Deposit</a></li></ul></div></section>
         </div>
      </div>
    </form>
  </div>
  <?php
         error_reporting(0); 
         define('HOST','localhost');
         define('USERNAME', 'root');
         define('PASSWORD','');
         define('DB','emicalculator');
 
         $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 
         $amount = $_POST['amount'];
	       $interest = $_POST['interest'];
         $period = $_POST['period'];
         $start_date = $_POST['start_date'];
         $emic =   $_POST['emic'];
         $total_interest = $_POST['total_interest'];
         $total_payment = $_POST['total_payment'];
          

         $sql= "INSERT INTO calculators (amount, interest, period, start_date, emic, total_interest, total_payment) VALUES ('$amount', '$interest', '$period','$start_date','$emic', '$total_interest','$total_payment')";
             if(mysqli_query($con, $sql)){
                  echo '';
             }
    ?>
    <div class="box">
     <div class="row">
      <div class="col-12">
        <div class="relative" role="alert">
          <div class="box">
            Loan EMI <br> <h5>₹ <?php echo showValue($emi);?></h5>  <hr> 
            Total Interest Payable  <br> <h5> ₹ <?php echo showValue($intrest);?></h5> <hr>
            Total Payments <br>(Interest + Principal) <br> <h5>₹ <?php echo showValue($total_amount);?></h5>
          </div> 
          <div class="box">

            <?php
            
              $dataPoints = array( 
                array("label"=>"Principle Loan Amount", "y"=>$amount),
                array("label"=>"Total Interest", "y"=>$intrest)
                
              )
              
            ?>
            <!DOCTYPE HTML>
            <html>
                      <head>
                            <script>
                                    window.onload = function() {
                                      
                          
                                      var chart = new CanvasJS.Chart("chartContainer", {
                                      theme: "light2",
                                      animationEnabled: true,
                                      title: {
                                        text: "Pie Chart "
                                      },
                                      data: [{
                                        type: "pie",
                                        indexLabel: "{y}",
                                        yValueFormatString: "#,##0.00\"₹\"",
                                        indexLabelPlacement: "inside",
                                        indexLabelFontColor: "#36454F",
                                        indexLabelFontSize: 18,
                                        indexLabelFontWeight: "bolder",
                                        showInLegend: true,
                                        legendText: "{label}",
                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                      }]
                                    });
                                    chart.render();
                                      
                                    }
                            </script>
                       </head>
                       <body>
                          <div id="chartContainer" style="height: 330px; width: 100%; margin-bottom:50px;"></div>
                          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          </div> 
       </div> <br><br>
                                  
                                  
                                  <h3 class="text-center">EMI Monthly Schedule</h3>
                                  <hr>
                                  <table class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>SN</th>
                                        <th background-color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month</th>
                                        <th> &nbsp;&nbsp;&nbsp;&nbsp; Principal <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (A)</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;Interest <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(B)</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Payment <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(A+B)</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Balance</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php for($i=1;$i<=($_POST['period']*12);$i++){?>
                                        <?php 
                                          $interest = (($_POST['interest']/100) *$balance)/12;
                                          $principal  = $emi - $interest ;
                                          $balance = $balance - $principal;
                                          // $payment_date = date('Y-m-d',strtotime("+1 month",strtotime($payment_date)));
                                          
                                        ?>
                                        
                                        <tr>
                                          
                                          <td>&nbsp;<?php echo $i;?></td>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php showDate($payment_date);?></td>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php showValue($principal  );?></td>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php showValue($interest );?></td>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php showValue($emi);?></td>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php showValue($balance);?></td>
                                         
                                        </tr>
                                      <?php } ?>
                                    
                                    </tbody>
                                  </table>
      </div>
      
    </div>
  </div>
            
