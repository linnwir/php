<?php 

$database = "u166970561_books"; //Databasen
$password = "password";


try {
		$dbh = new PDO('mysql:host=mysql.hostinger.se;dbname='.$database, 'u166970561_linnb', $password); //Försöker ansluta
} catch (PDOExeption $exeption) {
		echo "Connection error: " . $exeption->getMessage();
}



if (!empty($_POST['search'])) { //Om sökrutan inte är tom
    $name = $_POST["search"];
    if ($name != '*')
        $sql = "SELECT * FROM books WHERE author LIKE '%$name%' OR title LIKE '%$name%' OR genre LIKE '%$name%'";
    else
        $sql = "SELECT * FROM books";
}
else{                       //Om sökrutan är tom
    $sql = "";
}


$smtp = $dbh -> prepare($sql); //Förbereder att utföra SQL.

$smtp -> execute(); //Kör SQL



	  
     echo '<tbody>';

foreach($smtp as $bilar){
     echo '<tr style="border-bottom: 1px solid red;">'; 
     echo '<td>',$bilar['author'],'</td>';    
     echo '<td>',$bilar['title'],'</td>';          
     echo '<td>',$bilar['modell'],'</td>';
     echo '</tr>'; 
      
}        
     
     echo '</tbody>'; 

/*	  
     echo '<tbody>';

foreach($smtp as $books){
     echo '<tr style="border-bottom: 1px solid red;">';
     echo '<th scope="row" class="text-center"><img class="img img-thumbnail text-center" src="img/', $books['image'], '" alt="Sports"></th>';         
     echo '<td>',$books['author'],'</td>';    
     echo '<td>',$books['title'],'</td>';          
     echo '<td>',$books['genre'],'</td>';
     echo '<td class="text-right">', $books['price'],' kr</td>';
     echo '<td class="text-center">', $books['yearpublish'],'</td>';                  
     echo '<td>',$books['description'],'</td>';
     echo '</tr>';   
}        
     
     echo '</tbody>'; */

     ?>                      
