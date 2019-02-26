<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CmrDB</title>
        <link rel="stylesheet" href="../style.css">
</head>
<body>
        
</body>
</html>
<?php
require_once '../db.php';
$dbname=$_GET['dbname'];
        fconnect('localhost', 'root', '',$dbname);
        $req="SHOW TABLES FROM {$dbname}";
        $result = mysqli_query($conn,$req);
echo"<table>"; 
echo "<tr><th><a href='../index.php'>../</a></th></tr>";
       foreach ($result as $key => $val) { 
               echo "<tr>"; 
        foreach ($val as $k => $value) {   
           echo "<td>{$key} <a href='showTABLE.php?dbname={$dbname}&table={$value}'> ".$value.'</a></td>'; 
        }  
        echo "</tr>"  ;              
        }           
echo"</table>";
?>
