<!doctype html>
<!-- ============================ PHP Code for Login Page ============================ -->
<html lang="en">
  <head>
    <?php include '../ssi/head.ssi'; // '../ssi/loginHead.ssi' ?>
    <title>Walmart Login</title>
      
      
<!-- =========================== Styles for this specific page ================================= -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }     
    </style>
  </head>
    

<body>      
  <!-- ====================================== MENU =================================================== -->
  <?php include '../ssi/nav.ssi'; ?>
      
      
      <!-- ==================================== Content ========================================== -->
      <main>
        <!-- ==========================  JUMBOTRON ====================== -->
        <!-- ======Main jumbotron for primary marketing message ============ -->
          <?php include '../ssi/login.ssi'; // '../ssi/loingJumbotron.ssi' ?>
          
                      
          <div class="container">
              <div class="col-md-12">
                 <div class="thumbnail">
                    
                    <div class="caption">
                        <h3 class="mycenter">Please login</h3>
                        
                        <form class="form-login" action="processLogin.php" method="post" id="myForm">
                            
                            <label for="inputName" class="sr-only" style="box-sizing: border-box; padding: 10px">First and Last Name</label>
                            <input type="text" id="inputName" name="inputName" placeholder="First and last name" required autofocus style="margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br>
                            
                            <label for="inputEmail" class="sr-only" style="box-sizing: border-box; padding: 10px">Email address</label>
                            <input type="email" id="inputEmail" name="inputEmail" placeholder="Email address" required style="margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br>
                            
                            <label for="inputPassword" class="sr-only" style="box-sizing: border-box; padding: 10px">Password</label>
                            <input type="password" id="inputPassword" name="inputPassword" placeholder="Password" required style="margin-bottom: 10px; border-top-left-radius: 0; border-top-right-radius: 0;">
                            
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                        <p>
                            <!-- <button class="btn btn-primary" style="height: auto; width: auto">Login</button> -->
                            <input type="submit" class="btn btn-primary" style="height: auto; width: auto" value="Login" onclick="processForm()" />
                        </p>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </main>
      
      
      
      <!-- ========================================  Footer ===================================================== --> 
      <?php include '../ssi/footer.ssi'; ?>
    
    
    <!-- =============== Script Code =========== -->
    <!-- <script>
       function validate() {
          var $valid = true;
          document.getElementById("userInfo").innerHTML = "";
          document.getElementById("passwordInfo").innerHTML = "";
        
          var email = document.getElementById("inputEmail").value;
          var password = document.getElementById("inputPassword").value;
          if(userName == "student@ferris.edu") 
          {
              document.getElementById("userInfo").innerHTML = "required";
        	  $valid = false;
          }
          if(password == "bulldogs") 
          {
        	  document.getElementById("passwordInfo").innerHTML = "required";
              $valid = false;
          }
          return $valid;
       }
    </script> -->
    
  </body>    
</html>
