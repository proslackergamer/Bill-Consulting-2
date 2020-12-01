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
              <h1>Sale</h1>
              <div style="text-align: center" class="row">
                    <div class="col-sm-4">
            <?php
              $target_dir = '../files/'; 
              $filename = "sale.txt";
              $filepath = $target_dir . $filename;
              $mode = 'r'; 
              $count=0; 
              // READFILE Function
              $lines = file($filepath);
                       
              while($count <=7) {
                echo ($lines[$count]) . "<br />\n";
                $count++;
                    if($count==4){
                        echo"<br />\n";
                    }}
                        

              ?>
                  
                  </div>
                    <div class="col-sm-4">
            <?php
              $target_dir = '../files/'; 
              $filename = "sale.txt";
              $filepath = $target_dir . $filename;
              $mode = 'r'; 
              $count=8; 
              // READFILE Function
              $lines = file($filepath);
                       
              while($count >=8 && $count<=15) {
                echo ($lines[$count]) . "<br />\n";
                $count++;
                    if($count ==12){
                        echo"<br />\n";
                    }
              }

              ?>
                  
                  </div>
                    <div class="col-sm-4">
            <?php
              $target_dir = '../files/'; 
              $filename = "sale.txt";
              $filepath = $target_dir . $filename;
              $mode = 'r'; 
              $count=16; 
              // READFILE Function
              $lines = file($filepath);
                       
              while($count >=16 && $count<=19) {
                echo ($lines[$count]) . "<br />\n";
                $count++;}
              ?>
                  
                  
                  </div>
              </div>
              

           <!-- ====================================================== -->
           <!-- =================  Row 2 =================================== -->
         <div class="row">
            <div class="col-md-6">
               
            </div>
        </div>

          </div> <!-- /container --> 
        </main>

      <!-- ==========================  FOOTER ============================= --> 
      <?php include '../ssi/footer.ssi'; ?>   

    </body>
</html>
