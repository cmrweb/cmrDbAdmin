<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CmrTable</title>
        <link rel="stylesheet" href="../style.css">
</head>
<body>
        
</body>
</html>
<?php
require_once '../db.php';

$dbname=$_GET['dbname'];
$table=$_GET['table'];
        connect('localhost', 'root', '',$dbname);
        $req="SELECT * FROM $table";
        $result = mysqli_query($conn,$req); 
        $sql = "SHOW COLUMNS FROM $table";
        $resql = mysqli_query($conn,$sql);  
echo"<table>";
echo "<tr><td><a href='showDB.php?dbname={$dbname}'>../</a></td></tr>";
echo'<tr>'; 
while($row = mysqli_fetch_array($resql)){
    echo "<th>".$row['Field']."</th>";
}
echo'</tr>'; 
foreach ($result as $k=> $val) { 
echo "<tr>"; 
 foreach ($val as $key=> $value) {   
    echo "<td>".$value."</td>";     
    }     
    echo "</tr>"  ; 
    }        
echo"</table>";
