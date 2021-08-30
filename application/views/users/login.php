

<html>

<head>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="header" style="margin-left: -190px;">
  <a href="" class="logo">Futuristic Ltd Guest Book Application</a>
 <a href="" class="tdate"> Date: <?php echo date('Y.m.d'); ?></a>
 </div> 
  <div class="main">
    <p class="sign" align="center">Log In</p>
    <form class="form1" method=""action="<?php echo base_url('/users/guest/'); ?>​" >
      <center><label class=".lbl">Username:</label></center>
      <input class="un " type="text" align="center" placeholder="Username" required/>
      <center><label>Password:</label></center>
      <input class="pass" type="password" align="center" placeholder="Password" required/>
      <button class="submit" align="center" type="submit">Login</button>
      <p class="forgot" align="center"><a href="#">Reset Password?</p>
       </form>     
                
    </div>
     
</body>

</html>

