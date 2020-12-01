<!-- This page will eventually allow users to log into the web site -->
<!-- ============================ Code for Login Page ============================ -->
<!doctype html>
<html lang="en">
  <head>
<?php include '../ssi/head.ssi'; ?>

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
    <?php include '../ssi/nav.ssi'; ?> 
      
      <!-- ==================================== Content ========================================== -->
      <main>
      <body>
        <!-- ==========================  JUMBOTRON ====================== -->
        <!-- ======Main jumbotron for primary marketing message ============ -->
          <div class="jumbotron">
            <div class="container">
              <h1 class="display-3">Login</h1>
            </div>
          </div> 
          
       
        <form class="form-login">                
          <div class="container">
              <div class="col-md-12">
                 <div class="thumbnail">
                    
                    <div class="caption">
                        <h3 class="mycenter">Please login</h3>
                        
                        <form>
                            <label for="inputEmail" class="sr-only" style="box-sizing: border-box; padding: 10px">Email address</label>
                            <input type="email" id="inputEmail" placeholder="Email address" required autofocus style="margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br>
                            
                            <label for="inputPassword" class="sr-only" style="box-sizing: border-box; padding: 10px">Password</label>
                            <input type="password" id="inputPassword" placeholder="Password" required style="margin-bottom: 10px; border-top-left-radius: 0; border-top-right-radius: 0;">
                            
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                        </form>
                        <p>
                            <button class="btn btn-primary" style="height: auto; width: auto">Login</button>                            
                        </p>
                    </div>
                  </div>
              </div>
          </div>
        </form>
        </body>
      </main>
    <?php include '../ssi/footer.ssi'; ?> 
</html>
