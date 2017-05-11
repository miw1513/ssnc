<?php
require 'template/header.php';

 ?>

    <script type="text/javascript">
      function printContent(el){
          var gen = window.open();
          var layertext = document.getElementById(el);
          gen.document.write(layertext.innerHTML.replace("Print"));
          gen.document.close();
          gen.print();
          gen.close();
      }
    </script>
<div class="container">
    <div id="div1" class="column">
        <div style="width:550px; height:820px;">
           asdasdasdasdasdasdasd<br>
            asdasdasdasdasdasdasd<br>
             asdasdasdasdasdasdasd<br>
              asdasdasdasdasdasdasd<br>
               asdasdasdasdasdasdasd<br>
                asdasdasdasdasdasdasd<br>
                 asdasdasdasdasdasdasd<br>
                  asdasdasdasdasdasdasd<br>
                   asdasdasdasdasdasdasd<br>
                    asdasdasdasdasdasdasd<br>
                     asdasdasdasdasdasdasd<br>
                      asdasdasdasdasdasdasd<br>
                       asdasdasdasdasdasdasd<br>3
                        asdasdasdasdasdasdasd<br>
                         asdasdasdasdasdasdasd<br>
                          asdasdasdasdasdasdasd<br>
                           asdasdasdasdasdasdasd<br>
                            asdasdasdasdasdasdasd<br>
                             asdasdasdasdasdasdasd<br>
                              asdasdasdasdasdasdasd<br>
                               asdasdasdasdasdasdasd<br>
                                asdasdasdasdasdasdasd<br>
                                 asdasdasdasdasdasdasd<br>
                                  asdasdasdasdasdasdasd<br>
                                   asdasdasdasdasdasdasd<br>
                                    asdasdasdasdasdasdasd<br>
                                     asdasdasdasdasdasdasd<br>
                                      asdasdasdasdasdasdasd<br>
                                       asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                         asdasdasdasdasdasdasd<br>
                                        s  asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>
                                        asdasdasdasdasdasdasd<br>






     </div>



   </div>
    <button type="button" onclick="printContent('div1')">sdsd</button>


  <?php
    if(isset($_GET['printer'])){
    $printer = $_GET['printer'];


    }

    else {
   header('Location:show_bill.php');
    }
   ?>
</div>


  </body>
</html>
