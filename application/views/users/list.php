    
  <html>

<head>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Futuristic | Guests</title>
</head>

<body>
  <div class="header" style="margin-left:-190px;">
  <a href="" class="logo">Futuristic Ltd Guest Book Application - List of Guests</a>
 <a href="" class="tdate"> Date: <?php echo date('Y/m/d'); ?></a>

 </div> 
   <a href="<?php echo base_url('/users/guest/'); ?>​" class="home"><i class="fa fa-home" aria-hidden="true"></i>
  BACK</a>
<div class="guest">
      <table class="table table-bordered">
      <thead>
          <tr>
              <th>Date Time</th>              
               <th>First
                  Name</th>
              <th>Last
                  Name</th>
              <th>Mobile
                  Phone</th>
              <th>Person To
                 Visit</th>
              <th>Organisation</th>
              <th>Reason
               To Visit</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach ($data as $d) { ?>      
          <tr>
              <td><?php echo $d->time_visit; ?></td> 
               <td><?php echo $d->firstname; ?></td>
              <td><?php echo $d->lastname; ?></td>
               <td><?php echo $d->phone; ?></td>
              <td><?php echo $d->person; ?></td> 
              <td><?php echo $d->organisation; ?></td> 
               <td><?php echo $d->reason; ?></td>                   
          </tr>
          <?php } ?>
      </tbody>
    </table>
  
    </div>
     
</body>

</html>

