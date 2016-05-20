<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Koppla till databas</title>
  </head>

       <body>  

            <table width="100%" border="1" bordercolor="#006699" background="img/droppar.jpg" style= "color: white">
              <thead style="color: yellow">
                <tr>
                  <th>Hjälte</th>
                  <th>Spelserie</th>
                  <th>Titel</th>
                  <th>Kommentar</th>
                </tr>
              </thead>

    	   <?php 

          try {
                $dbh = new PDO('mysql:host=localhost;dbname=spel', 'root', 'Magnus70'); 
              } catch (PDOExeption $exeption) {
                    echo "Connection error: " . $exeption->getMessage();
              }

              $sql = "SELECT heroes.hero, heroes.gameSeries, games.title, games.comment FROM heroes INNER JOIN games ON heroes.ID = games.ID";


              $smtp = $dbh -> prepare($sql); //Förbereder att utföra SQL.

              $smtp -> execute(); //Kör SQL


              foreach($smtp as $heroData){
                      echo '<tbody>';
                      echo '<tr>';
                      echo '<td align="center">',$heroData['hero'],'</td>'; 
                      echo '<td align="center">',$heroData['gameSeries'],'</td>';
                      echo '<td align="center">',$heroData['title'],'</td>';
                      echo '<td align="center">',$heroData['comment'],'</td>';
                      echo '</tr>';   
                      echo '</tbody>';
              }

      ?>

      </table>
		<body>
  
  </body>
    
</html>
