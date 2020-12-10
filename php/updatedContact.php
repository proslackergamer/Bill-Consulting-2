<!-- Has a form to contact the web site company -->
<!-- ========================== Code for Contact Page ================================ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Walmart - Contact</title>
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
    

      
  <!-- ====================================== MENU =================================================== -->
  <?php include '../ssi/nav.ssi'; ?> 
      
      <!-- ==================================== Content ========================================== -->
      <main>
      <body>
        <!-- ==========================  JUMBOTRON ====================== -->
        <!-- ======Main jumbotron for primary marketing message ============ -->
          <?php include '../ssi/jumbotron.ssi'; ?>  
        
          
          
        <form class="form-contact">                
          <div class="container">
              <div class="col-md-12">
                 <div class="thumbnail">
                    
                    <div class="caption">
                        <h3 class="mycenter">Enter your info</h3><br>
                        
                        <form>
                            <p style = "text-align:center;font-size:16pt;">
                            <label for="inputName" class="sr-only" style="box-sizing: border-box; padding: 10px">Name</label>
                            <input type="name" id="inputName" placeholder="Name" required style="margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br>

                            <label for="inputEmail" class="sr-only" style="box-sizing: border-box; padding: 10px">Email address</label>
                            <input type="email" id="inputEmail" placeholder="Email address" required autofocus style="margin-bottom: -1px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;"><br>
                                
                            <div class = "mycenter">
                                <p style = "text-align:center;font-size:16pt;">
                                   <textarea class="input100" style = "width:245px; height: 100px; border-box; border: 2px solid black; " name="message" placeholder="Your Message" required></textarea><br> 
                                </p>
                            </div>
                          
                        </form>
                        <p>
                            
                            <p style = "text-align:center;font-size:16pt;">
                            <button class="btn btn-lg btn-primary" style="height:auto; width: auto" type="submit">Send Email</button>   
                        </p>                        
                        <div class="contact100-more">
                            <br>
                            <p style = "text-align:center;font-size:16pt;">
				            Contact our 24/7 call center: <span class="contact100-more-highlight">+1 800 123 4567</span>
			            </div>
                    </div>
                  </div>
              </div>
          </div>
        </form>
        </body>
    </main>
      
      
      
      <!-- ========================================  Footer ===================================================== --> 
    <?php include '../ssi/footer.ssi'; ?>   
            
</html>
