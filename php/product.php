<!doctype html>
<html lang="en">
    <head>
         <?php include '../ssi/head.ssi'; ?>  
        
        <style> 

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
          <div class="container">
            <!-- ============== Title ============================= -->
              <h1>Pastries</h1>
            <div class="row">
        <!-- ============== Item 1 ============================= -->
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img class="mycenter" src="../images/cookies.jpg" alt="Picture of Delicious Cookies" width="260" height="240"></p>
                    <div class="caption">
                        <h3 class="mycenter">Cookies </h3>
                        <p class = "mycenter">Package of 20</p>
                          <p class = "mycenter">$4.99</p>  

                    </div>
                </div>
              </div>
                <!-- ============== Item 2 ============================= -->
              <div class="col-md-4">
                <div class="thumbnail" >
                    <p class="mycenter"><img src="../images/cupcakes.jpg" alt="Picture of Tantalizing Cupcakes" width="260" height="240"></p>
                    <div class="caption">
                        <h3 class="mycenter">Cupcakes</h3>
                        <p class = "mycenter">Package of 12</p>
                            <p class = "mycenter">$5.99</p>  
                    </div>
                </div>
              </div>
                <!-- ============== Item 3============================= -->
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img src="../images/donuts.jpg" alt="Picture of Appetizing Donuts" width="260" height="240"></p>
                    <div class="caption">
                        <h3 class="mycenter">Donuts</h3>
                        <p class = "mycenter">$1.00/ea</p>
                           <p class = "mycenter">$5.99 per dozen</p> 
                        
                        
                    </div>
                </div>
             </div>
            </div>
          </div> 
        </main>

      <!-- ==========================  FOOTER ============================= --> 
      <?php include '../ssi/footer.ssi'; ?>   

    </body>
</html>
