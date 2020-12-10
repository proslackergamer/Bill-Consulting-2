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
        <!-- ============== Open File ====================== --> 
            <?php
              $target_dir = '../files/'; 
              $filename = "sale.txt";
              $filepath = $target_dir . $filename;
              $mode = 'r'; 
              $count=0; 
              // READFILE Function
              $lines = file($filepath);
           
        /*<!-- ============== Open File ====================== --> */
              while($count <=7) {
                  if($count ==1){
                       echo ("<b>$lines[$count]</b>") . "<br />\n";
                  }
                  else if($count ==5){
                       echo ("<b>$lines[$count]</b>") . "<br />\n";
                  }
                  else{
                      echo ($lines[$count]) . "<br />\n";
                  }
                $count++;
                    if($count==4){
                        echo"<br />\n";
                    }
              }
              ?>
        
                  </div>
                    <div class="col-sm-4">
        <!-- ============== Open File ====================== --> 
            <?php
              $target_dir = '../files/'; 
              $filename = "sale.txt";
              $filepath = $target_dir . $filename;
              $mode = 'r'; 
              $count=8; 
              // READFILE Function
              $lines = file($filepath);
           /*<!-- ============== Column Two ====================== -->*/             
              while($count >=8 && $count<=15) {
                  if($count ==9){
                       echo ("<b>$lines[$count]</b>") . "<br />\n";
                  }
                  else if($count ==13){
                       echo ("<b>$lines[$count]</b>") . "<br />\n";
                  }
                  else{
                      echo ($lines[$count]) . "<br />\n";
                  }
                $count++;
                    if($count ==12){
                        echo"<br />\n";
                    }
              }

              ?>
                  
                  </div>
                    <div class="col-sm-4">
            <!-- ============== Open File====================== --> 
            <?php
              $target_dir = '../files/'; 
              $filename = "sale.txt";
              $filepath = $target_dir . $filename;
              $mode = 'r'; 
              $count=16; 
              // READFILE Function
              $lines = file($filepath);
             /*<!-- ============== Column Three ====================== --> */     
              while($count >=16 && $count<=19) {
                    if($count ==17){
                       echo ("<b>$lines[$count]</b>") . "<br />\n";
                  }

                  else{
                      echo ($lines[$count]) . "<br />\n";
                  }
                $count++;}
              ?> 
                  </div>
              </div>
        
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
