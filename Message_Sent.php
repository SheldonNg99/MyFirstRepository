<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
      /*Change the image here*/
    background-image: url("Images/Wallpaper_For_Desktop.jpg");
    background-image: cover;
    background-repeat: no-repeat;
    overflow: hidden;
  }
  .login-box{
    padding:8px 16px;
    width:400px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    color:black;
    background-color:#f44336;
    border-radius: 16px;
    box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
  }
  .login-box h1{
    font-size:40px;
    border-bottom:6px solid #f44336;
    margin-bottom: 10px;
    padding:13px 0;
  }
  .textbox{
    width:100%;
    overflow: hidden;
    font-size:20px;
    padding:8px 0;
    margin:15px 0;
    border-bottom:2px solid #f44336;
  }
  .textbox input{
    border :none;
    outline: none;
    background: inherit;
    color: black;
    width:80%;
    margin:10px 0px 0px 10px;
    font-size: 20px;
  }
  ::placeholder{
    font-size: 20px;
    color: #000000;
  }
  #Loginbtn{
    margin-top: 10px;
    width:100%;
    height:50px;
    background-color:	#f44336;
    border: 2px solid #f44336;
    padding: 5px;
    font-size:20px;
    border-radius: 16px;
    cursor: pointer;
    color: #000;
    z-index: 99;
  }
  .reset{
    margin-top: 15px;
    font-size: 13px;
  }
  #note{
    text-align: center;
    color: #f44336;
  }
  .back_link{
    color: #fff;
  }
  @media screen and (max-width:700px){
    body {
      margin:0;
      padding:0;
      font-family: sans-serif;
      /*Change the image here*/
      background-image: url("Images/Wallpaper_For_Phone.jpg");
      background-image: cover;
      background-repeat: no-repeat;
    }
    .title{
      font-size: 30px!important;
    }
    .login-box{
      padding:8px 16px;
      width:80%;
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      color:black;
      background-color:rgba(255,255,255,0.5);
      border-radius: 16px;
      box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    }
    .textbox{
      overflow: hidden;
      font-size:20px;
      padding:8px 0;
      margin:10px 0;
      border-bottom:2px solid #f44336;
    }
  }
  </style>
  <body>
    <div class="login-box">
      <h1>Startup</h1>
      <!--LOGO come from icons8.com-->
      <h2>Thank you for messaging us.We will get back to you soon.</h2>
      <p><a href="Startup.php">Back Here</a></p>
    </div>
  </body>
</html>
