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
          <div class="container">
            <!-- ==============  Row 2 ============================= -->
            
              <div class="col-md-12">
                 <div class="thumbnail">
                    
                    <div class="caption">
                        <h3 class="mycenter">Please fill out the following information</h3>
                        
                        <form>
                            <label for = "inputFirst" class = "sr-only" style = "box-sizing: border-box; padding: 10px">First name</label>
                            <input type = "text" id = "inputFirst" placeholder = "First Name" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            
                            <label for = "inputLast" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Last Name</label>
                            <input type = "text" id = "inputLast" placeholder = "Last Name" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputAddress" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Address Line 1</label>
                            <input type = "text" id = "inputAddress" placeholder = "Address Line 1" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputCity" class = "sr-only" style = "box-sizing: border-box; padding: 10px">City</label>
                            <input type = "text" id = "inputCity" placeholder = "City" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputApt" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Apt Num</label>
                            <input type = "text" id = "inputApt" placeholder = "Apartment Number" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                        
                            <label for = "inputState" class = "sr-only" style = "box-sizing: border-box; padding: 10px">State</label>
                            <input type = "text" id = "inputState" placeholder = "State/Province/Region" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                
                            
                            <label for = "inputZip" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Zip</label>
                            <input type = "number" id = "inputZip" placeholder = "Zip Code" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputPhone" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Phone</label>
                            <input type = "number" id = "inputPhone" placeholder = "Phone Number" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            <label for = "inputEmail" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Email</label>
                            <input type = "email" id = "inputEmail" placeholder = "Email Address" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            <label for = "inputPassword" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Password</label>
                            <input type = "password" id = "inputPassword" placeholder = "Create Password" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            
                        </form>
                        <p>
                            <br>
                            <a href="#" class="btn btn-primary" role="button">Create Account Now >></a>
                            
                        </p>
                    </div>
                </div>
              </div>
              
              </div>
              
           
            </main>
           <!-- ====================================================== -->
           <!-- =================  Row 2 =================================== -->
        
      <!-- ==========================  FOOTER ============================= --> 
      <?php include '../ssi/footer.ssi'; ?> 

      
       <!-- ==========================  JAVASCRIPTS ========================= -->
       <!-- ========================== Custom =============================== -->
       
       <!-- ========================== JQuery, Popper, Bootstrap JS ========= -->
       
       

    </body>
</html>
