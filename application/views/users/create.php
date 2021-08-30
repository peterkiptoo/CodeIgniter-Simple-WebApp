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
  <a href="" class="logo">Futuristic Ltd Guest Book Application - Add Guest</a>
 <a href="" class="tdate"> Date: <?php echo date('Y.m.d'); ?></a>
 </div> 
  <a href="<?php echo base_url('/users/guest/'); ?>​" class="home"><i class="fa fa-home" aria-hidden="true"></i>
  BACK</a>
  <div class="guest" style="float: center;">
       <form class="form1" method="post" action="<?php echo site_url('/users/store/'); ?>​" >
      <input class="un " type="text" name="firstname" align="center" placeholder="First Name" required/>
      <input class="un" type="text" name="lastname" align="center" placeholder="Last Name" required/>
       <input class="un" type="tel" name="phone" align="center" pattern="[0-9]{10}" placeholder="0712345689" required/>
        <input class="un" type="text" name="person" align="center" placeholder="Person To Visit" required/>
        <input class="un" type="text" name="organisation" align="center" placeholder="Organisation" required/>
         <input class="un" type="text" name="reason" align="center" placeholder="Reason To Visit" required/>
          <button class="submit" name="submit" align="center" type="submit">Save</button>
      
       </form>



  </div>
     
</body>

</html>