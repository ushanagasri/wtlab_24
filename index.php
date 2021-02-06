  
<?php 
  
 
$user = 'root'; 
$password = '';  
$dbhost = 'localhost';
   
  
$database = 'books_db';  
  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  

if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  

$sql = "SELECT * FROM userdata"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>BOOK CATALOGUE</title> 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1>LIBRARY</h1> 
       
        <table> 
            <tr> 
                <th>BOOK NAME</th> 
                <th>PRICE</th> 
                <th>QUANTITY</th> 
                <th>AMOUNT</th> 
            </tr> 
             
            <?php  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                
                <td><?php echo $rows['bookname'];?></td> 
                <td><?php echo $rows['price'];?></td> 
                <td><?php echo $rows['quantity'];?></td> 
                <td><?php echo $rows['amount'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 
