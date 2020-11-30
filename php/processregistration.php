<!doctype html>
<html lang="en">
  <head>
    <?php include '../ssi/head.ssi'; ?>  
      <!-- ===================== Custom styles for this page only ============ -->
      <style> 
          h1{
              padding-left:25px;
              
          }
      </style>
    
  </head>
  <body>
      
      <!-- ==========================  TOP MENU =========================== -->
      <?php include '../ssi/nav.ssi'; ?>
       <!-- ==========================  MAIN CONTENT ====================== -->
       <main> 
       <!-- ==========================  JUMBOTRON ====================== -->
       <!-- Main jumbotron for a primary marketing message or call to action -->
          <?php include '../ssi/jumbotron.ssi'; ?> 
       <!-- ============== Main Container ====================== --> 
          Welcome <?php echo $_POST["inputFirst"]; ?>
           <?php echo $_POST["inputLast"]; ?><br>
           <p>You have been registered successfully with the following information: </p>
           Address: <?php echo $_POST["inputAddress"]; ?><br>
           City: <?php echo $_POST["inputCity"]; ?><br>
           Apartment Number: <?php echo $_POST["inputApt"]; ?><br>
           State: <?php echo $_POST["inputState"]; ?><br>
           Zip Code: <?php echo $_POST["inputZip"]; ?><br>
           Phone Number: <?php echo $_POST["inputPhone"]; ?><br>
           Email: <?php echo $_POST["inputEmail"]; ?><br>
           Password: <?php echo $_POST["inputPassword"]; ?><br>
          
        
         
      <?php include '../ssi/footer.ssi'; ?> 

      
       
       
      </main>
    </body>
</html>
