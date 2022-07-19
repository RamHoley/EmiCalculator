<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Login</title>
    
        <style>
            body{
                background-color:#008080 ;

            }
            #Box1{
                background-color: white;
                text-align: left;
                width: 18vw;
                height:40vh;
                padding-left:50px;
                margin:auto;
                margin-top: 20vh;
                border-radius: 10px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                

            }
            input{
                width:230px;
            border:none;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            }
            label{
                color: #008080;
            }
            h3{
                padding-top: 20px;
            }
            #submit
            {
                color:white;
            background-color:#008080 ;
            width:80px;
            height:25px;
            border-radius: 5px;
            border :transparent
            }
            #login{
                margin-left:85px;
            }
            
            button{
                color:#008080 ;
                border-radius: 5px;
                border:transparent;
                font-size: 15px;
                position: absolute;
                bottom:42vh;
                left:48vw
            }
        </style>
</head>
<body>
<div id="Box1">
    <form action="loginconnect.php" method="post" >
        <h3 id="login">Login</h3>
        <label for="username">Username &nbsp;&nbsp;</label>
        <input type="text" placeholder="" id="myusername"
        name="username"> <br><br>
        <label for="password">Password&nbsp;&nbsp; </label>
        <input type="password" id="password" name="password"
        placeholder=""> <br><br>

        <!-- <button type="submit">Login</button> <br><br> -->
        
        <button >Submit</button>

        <div>
            <a href="index.html" target="_blank"> <span>? Sign Up</span></a>
            &nbsp;&nbsp;&nbsp;
         
        </div>
       

    </form>
</div>
</body>
</html>
