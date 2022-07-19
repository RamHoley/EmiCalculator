<html lang="en">
  
<head>
    <title>EMI Calculator By Ram </title>
  
    <style>
        body {
            background-color: orange;
            font-family: 'Trebuchet MS';
        }
          
        h1 {
            font-size: 35px;
        }
          
        h1 {
            font-size: 21px;
            margin-top: 10px;
        }
          
        .calculator {
            width: 400px;
            height: 450px;
            background-color: Pink;
            position: absolute;
            left: 35%;
            top: 35%;
            transform: translateX(-50%) translateY(-50%);
            padding: 20px 10px 10px 100px;
            border-radius: 50px;
            color: Black;
        }
          
        input {
            padding: 7px;
            width: 70%;
            margin-top: 25px;
        }
        #abc{
            width:150px;
            position: absolute;;
            top:5vh;
            right:5vw;
            display:flex;
            justify-content: space-around;
            
        }
    </style>
</head>
  
<body>
    <form action="" method="">
    <div class="calculator">
        <h1><marquee>EMI Calculator</marquee></h1>
  
        
        <p>Amount (₹)     :
            <input id="amount" type="number" name="amount"
            onchange="Calculate()">
        </p>
  
        <p>Interest Rate  :
            <input id="rate" type="number" name="rate"
            onchange="Calculate()">
        </p>
  
        <p>Months to Pay :
            <input id="months" type="number" name="months" 
            onchange="Calculate()">
        </p>
  
        <h2 id="total" name="total"></h2>
    </div>
    <div id="abc">
      <h1 onclick="login()">Login</h1>
      <h1 onclick="signup()">Sign Up</h1>
    </div>
  
    <script src="app.js"></script>
    </form>
</body>
  
</html>
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
