<!doctype html>
<html lang="en">
  <head>
    <title>Walmart - Registration</title>
    <?php include '../ssi/head.ssi'; ?>
    <!-- ===================== Custom styles for this page only ============ -->
      <style> 
          h1{
              padding-left:25px;
              
          }
      </style>
   </head>
    
  <body>  
    <?php include '../ssi/nav.ssi'; ?> 
      <!-- ==========================  MAIN CONTENT ====================== -->
       <main> 
        <?php include '../ssi/jumbotron.ssi'; ?> 
           <!-- ============== Main Container ====================== --> 
          <div class="container">
            <!-- ==============  Row 1 ============================= -->
                <div class="row">
                    
                    <div class="col-md-12">  
                      <h1 style = "text-align:center;">Welcome</h1>
                        <p style = "text-align:center;font-size:16pt;">
                            <?php 
                                //Get the values
                                $formFirst = $_POST['inputFirst'];
                                $formLast = $_POST['inputLast'];
                                $formAddress = $_POST['inputAddress'];
                                $formCity = $_POST['inputCity'];
                                $formApt = $_POST['inputApt'];
                                $formState = $_POST['inputState'];
                                $formZip = $_POST['inputZip'];
                                $formPhone = $_POST['inputPhone'];
                                $formEmail = $_POST['inputEmail'];
                                $formPassword = $_POST['inputPassword'];
                            
                                //hardcoded statements
                                $statement = "You have been registered successfully with the following information>> ";
                                $address = "Address: ";
                                $city = "City: ";
                                $apartment = "Apartment: ";
                                $state = "State: ";
                                $zip = "Zip Code: ";
                                $phone = "Phone Number: ";
                                $email = "Email: ";
                                $password = "Password: ";
                            
                                
                                
                                
                                if(($formEmail == "student@ferris.edu") && ($formPassword == "bulldogs")) {
                                  echo htmlspecialchars($formFirst).' ';
                                  echo htmlspecialchars($formLast).' <br> <br/>';
                                  echo htmlspecialchars($statement).' <br><br />';
                                
                                echo htmlspecialchars($address). ' ';
                                  echo htmlspecialchars($formAddress).' <br />';
                                echo htmlspecialchars($city). ' ';
                                  echo htmlspecialchars($formCity).' <br />';
                                echo htmlspecialchars($apartment). ' ';
                                  echo htmlspecialchars($formApt).' <br />';
                                echo htmlspecialchars($state). ' ';
                                  echo htmlspecialchars($formState).' <br />';
                                echo htmlspecialchars($zip). ' ';
                                  echo htmlspecialchars($formZip).' <br />';
                                echo htmlspecialchars($phone). ' ';
                                  echo htmlspecialchars($formPhone).' <br />';
                                echo htmlspecialchars($email). ' ';
                                  echo htmlspecialchars($formEmail).' <br />';
                                echo htmlspecialchars($password). ' ';
                                  echo htmlspecialchars($formPassword).' <br />';
     
                                  
                                }
                                else
                                {   
                                  echo 'You did not fill out the form correctly. <br />';
                                }
                            ?> 
                        </p>
                    </div>
                </div>    
            </div> <!-- /container -->  
        </main>
      
       <!-- ==========================  FOOTER ============================= --> 
       <?php include '../ssi/footer.ssi'; ?>
    
  </body>  
    
</html>
