<!doctype html>
<html lang="en">
    
    <head>
        <title>Walmart - Error</title>
         <?php include '../ssi/head.ssi'; ?>  
        <style> 
      </style>
    </head>
    
    <body>
      
      <!-- ==========================  TOP MENU =========================== -->
 <?php include '../ssi/nav.ssi'; ?> 
       <!-- ==========================  MAIN CONTENT ====================== -->
     <main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <?php include '../ssi/jumbotron.ssi'; ?> 
            
   <!----------------------  Display Error Message------------------------->
      <div class="container">
        <h2>
          
            <?php
            include 'processLogin.php';
            // THIS PAGE GOES WITH processLogin.php PAGE FOR LOGIN
  
         
            // display custom message
            echo "Welcome, " . $_SESSION['sName'] . '!';
            
            exit();

            ?>
          </h2>
    


  </div>
</main>

      <!-- ==========================  FOOTER ============================= --> 
      <?php include '../ssi/footer.ssi'; ?> 
    </body>
</html>
