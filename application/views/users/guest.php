

<html>

<head>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Futuristic | Guests</title>
</head>

<body>
  <div class="header" style="margin-left: -190px;">
  <a href="" class="logo">Futuristic Ltd Guest Book Application - Dashboard</a>
 <a href="" class="tdate"> Date: <?php echo date('Y.m.d'); ?></a>
 </div> 
 <a href="<?php echo base_url('/users/logout/'); ?>​" class="home"><i class="fa fa-home" aria-hidden="true"></i>
  Logout</a>
  <div class="dash">
    <form class="form1" method="" action="<?php echo base_url('/users/create/'); ?>​">
        <button class="submit" type="submit"  style=" float: left;height: 45px;margin-left: 30px; margin-top: 110px;">Add New Guest</button>
    </form>
    <form class="form1"  method="" action="<?php echo base_url('/users/view/'); ?>​">
   <button class="submit" type="submit" style=" float: right;height: 45px;margin-top: -45px;margin-right: 30px">View Guest List</button>    
    </form>   
    </div>
     
</body>

</html>

