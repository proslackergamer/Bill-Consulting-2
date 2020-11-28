<!doctype html>
<html lang="en">
  <?php include '../ssi/head.ssi'; ?>  
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
            <!-- ==============  Row 2 ============================= -->
              <h1>Pastries</h1>
            <div class="row">
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img class="mycenter" src="../images/cookies.jpg" alt="..." width="260" height="240"></p>
                    <div class="caption">
                        <h3 class="mycenter">Cookies </h3>
                        <p class = "mycenter">Package of 20</p>
                          <p class = "mycenter">$4.99</p>  

                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail" >
                    <p class="mycenter"><img src="../images/cupcakes.jpg" alt="..."width="260" height="240"></p>
                    <div class="caption">
                        <h3 class="mycenter">Cupcakes</h3>
                        <p class = "mycenter">Package of 12</p>
                            <p class = "mycenter">$5.99</p>  
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="thumbnail">
                    <p class="mycenter"><img src="../images/donuts.jpg" alt="..."width="260" height="240"></p>
                    <div class="caption">
                        <h3 class="mycenter">Donuts</h3>
                        <p class = "mycenter">$1.00/ea</p>
                           <p class = "mycenter">$5.99 per dozen</p> 
                        
                        
                            
                        
                    </div>
                </div>
             </div>
            </div>
            <hr>
           <!-- ====================================================== -->
           <!-- =================  Row 2 =================================== -->
         <div class="row">
            <div class="col-md-6">
               
            </div>
        </div>
            <hr> 
          </div> <!-- /container --> 
        </main>

      <!-- ==========================  FOOTER ============================= --> 
      <?php include '../ssi/footer.ssi'; ?>   

    </body>
</html>
