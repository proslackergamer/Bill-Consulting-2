<?php 
   // start session
   session_start();


   if (!empty($_POST['inputEmail']) && !empty($_POST['inputPassword']))
   {
      // Variables for form email and password
      $email = $_POST['inputEmail'];
      $password = $_POST['inputPassword'];
      $name = $_POST['inputName'];

       
      // test if email and password are correct
      if(($email == "student@ferris.edu") && ($password == "bulldogs"))
      {
       // set session variables      
       $_SESSION['sName'] = $name;
       $_SESSION['sEmail'] = $email;
          
           
       // set member session variable
       $_SESSION['member'] = true;
      
          
       // tell user they'll be directed to member page      
       echo <<< memberPg
       <html><head>
       <script>
           window.location = "../php/member.php";
       </script>
       </head>
       <body>Test</body>
       </html>
       memberPg; 
      }
       
      else
      {
          //echo " Invalid credentials. You will now be redirected to the login page. ";  
     
          // tell user they entered info wrong and will be directed to login page
          echo <<< theEnd
          <html><head>
          <script>
             alert("Invalid credentials. You will now be redirected to the login page.");
             
             window.location = "../pages/login.html";
          </script>
          </head>
          <body>Test</body>
          </html>
          theEnd;
          
      }
       
   }

  

?>

     
                        
                            
                        
 
                        
