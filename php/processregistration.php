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
         <div class = "container">
              <div class = "row">
                  <!--<div class = "col-md-3"></div>-->
                  <div class = "col-md-12">
          <h1 style = "text-align:center;">Welcome</h1>
                      
        <p style = "text-align:center;font-size:16pt;">
           <?php echo $_POST["inputFirst"]; ?>
           <?php echo $_POST["inputLast"]; ?><br>
                          
           <p style = "text-align:center;font-size:16pt;">You have been registered successfully with the following information: </p>
        <hr>
            <p style = "text-align:center;font-size:16pt;">
               Address: <?php echo $_POST["inputAddress"]; ?><br>
               City: <?php echo $_POST["inputCity"]; ?><br>
               Apartment Number: <?php echo $_POST["inputApt"]; ?><br>
               State: <?php echo $_POST["inputState"]; ?><br>
               Zip Code: <?php echo $_POST["inputZip"]; ?><br>
               Phone Number: <?php echo $_POST["inputPhone"]; ?><br>
               Email: <?php echo $_POST["inputEmail"]; ?><br>
               Password: <?php echo $_POST["inputPassword"]; ?><br>
             </p>         
          <hr>
                      
        
         
      <?php include '../ssi/footer.ssi'; ?> 
                     
                  
</div>
                  
             </div>
             
             </div>
           
      </main>
    </body>
</html>
