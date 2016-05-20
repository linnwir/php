<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Bild efter tid!</title>
  </head>

        <body>   

          <?php 
                     
                date_default_timezone_set("Europe/Stockholm");  //Sätter tidzon till vår tid. Viktigt när du är ”live”

                            
                      //lägger aktuell timme i en variabel.
                      $timme = date("H");
                     
                      if ($timme < "12") {
                          echo '<h1><FONT COLOR="blue">God morgon!</FONT></h1>';
                          echo '<img src="img/img1.jpg" alt="MorgonBild">';
                      } else
                     
                      if ($timme >= "12" && $timme < "17") {
                          echo '<h1><FONT COLOR="blue">God eftermiddag!</FONT></h1>'; 
                          echo '<img src="img/afternoon.jpg" alt="Eftermiddagsbild">';
                      } else
                      
                      if ($timme >= "17" && $timme < "22") {
                          echo '<h1><FONT COLOR="blue">God kväll!!!!</FONT></h1>'; 
                          echo '<img src="img/evening.jpg" alt="Eftermiddagsbild">';
                      } else
                    
                      if ($timme >= "22") {
                           echo '<h1><FONT COLOR="blue">God natt!</FONT></h1>'; 
                           echo '<img src="img/night.jpg" alt="NattBild">'; 
                      }


            ?>
         
		    
  </body>
    
</html>
