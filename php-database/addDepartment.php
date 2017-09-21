
  <!DOCTYPE html>
  <html>
  <head>
  <?php 
    $server = 'localhost';
    $con = mysqli_connect($server, "root", "root1");
    
	  mysqli_select_db($con,'company');
  ?>
  </head>
  <body>
    <?php
      $addDeparment = "INSERT INTO department values ("
                      .$_POST['Dname'].","
                      .$_POST['Dnumber'].","
                      .$_POST['Mgr_ssn'].","
                      .$_POST['Mgr_start_date'].
                      ");"; 
      mysqli_query($con,$addDeparment);
    ?>
  </body>
  </html>
  
  
  
