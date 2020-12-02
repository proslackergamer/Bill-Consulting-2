<!-- ============================ SSI/PHP Code for Login Process Page ============================ -->

<!-- start session -->
<?php 
   session_start(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include '../ssi/head.ssi'; ?>
    <title>Walmart Login</title>
  </head>  
    

<body>      
  <!-- ====================================== MENU =================================================== -->
  <?php include '../ssi/nav.ssi'; ?>
      
      
      <!-- ==================================== Content ========================================== -->
      <main>
        <!-- ==========================  JUMBOTRON ====================== -->
        <!-- ======Main jumbotron for primary marketing message ============ -->
          <?php include '../ssi/jumbotron.ssi'; ?>
          
                      
          <div class="container">
              <div class="col-md-12">
                 <div class="thumbnail">
                    
                    <div class="caption">
                        <h3 class="mycenter">Please login</h3>
                        
                        <?php                                 
                            
                            
                            // Variables for form email and password
                            $formEmail = $_POST['inputEmail'];
                            $formPassword = $_POST['inputPassword']; 

                            echo htmlspecialchars($formEmail).' <br />';
                            echo htmlspecialchars($formPassword).' <br />';  
                            
                            // test if email and password are correct
                            if(($formEmail == "student@ferris.edu") && ($formPassword == "bulldogs"))
                            {
                                // set session variables
                                $_SESSION["name"] = $name;
                                $_SESSION["email"] = $formEmail;
                                
                                // store user's first and last name, which requires getting that input
                                $name = readline("Enter your first and last name: ");
                                echo "Thank you, " . $name;
                                 
                                // set member session variable
                                $_SESSION["memeber"] = true;
                                
                                // redirect to member page
                                header("Location: ../ssi/member.php");
                                exit;
                            }
                        
                            else
                            {
                                // I want an alert telling the user they didn't enter the infor correctly
                                <script type="text/javascript">
                                    echo alert("You didn't fill out the form properly and will therefore be redirected to the login page.");
                                </script>
                                
                                // redirect to login page
                                header("Location: ../ssi/login.php");
                                exit;
                            }
                        
                        ?>
                        
                    </div>
                  </div>
              </div>
          </div>
      </main>
      
      
      
      <!-- ========================================  Footer ===================================================== --> 
      <?php include '../ssi/footer.ssi'; ?>
    
    
<?php 
  // end session
  session_destroy();  
?>
    
</body>    
</html>
