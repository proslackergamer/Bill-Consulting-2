<!doctype html>
<html lang="en">
  <head>
    <title>Walmart - Register</title>
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
            <div class = "row">
              <div class="col-md-12">
                 <!--<div class="thumbnail">-->
                    
                    <!--<div class="col-md-12">-->
                        <form action = "processregistration.php" method = "post" class = "form-signin" id = "MyForm">
                        
                            
                        <h1 style="text-align:center;">Please fill out the following information: </h1>
                        <p style = "text-align:center;">
                        
                            <label for = "inputFirst" class = "sr-only" style = "box-sizing: border-box; padding: 10px">First name</label>
                            <input type = "text" id = "inputFirst" name = "inputFirst" placeholder = "First Name" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            
                            <label for = "inputLast" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Last Name</label>
                            <input type = "text" id = "inputLast" name = "inputLast" placeholder = "Last Name" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputAddress" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Address Line 1</label>
                            <input type = "text" id = "inputAddress" name = "inputAddress" placeholder = "Address Line 1" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputCity" class = "sr-only" style = "box-sizing: border-box; padding: 10px">City</label>
                            <input type = "text" id = "inputCity" name = "inputCity" placeholder = "City" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputApt" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Apt Num</label>
                            <input type = "text" id = "inputApt" name = "inputApt" placeholder = "Apartment Number" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            
                            <select class="sr" name="inputState" id="inputState"
                                style="box-sizing: border-box; border: 2px solid black; width:190px; height:30px;display:inline;" size="1"tabindex="0">
                            <option value="" selected disabled>State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option> 
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select><br><br>
                        
                            
                            
                            
                            <label for = "inputZip" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Zip</label>
                            <input type = "number" id = "inputZip" name = "inputZip" placeholder = "Zip Code" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            <label for = "inputPhone" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Phone</label>
                            <input type = "number" id = "inputPhone" name = "inputPhone" placeholder = "Phone Number" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            <label for = "inputEmail" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Email</label>
                            <input type = "email" id = "inputEmail" name = "inputEmail" placeholder = "Email Address" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            <label for = "inputPassword" class = "sr-only" style = "box-sizing: border-box; padding: 10px">Password</label>
                            <input type = "password" id = "inputPassword" name = "inputPassword" placeholder = "Create Password" required style = "margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br><br>
                            
                            
                            
                            <input type = "submit" class="btn btn-lg btn-primary" value = "Register"/>
                        
                            
                        </form>
                       
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
