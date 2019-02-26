<?php

        fconnect('localhost', 'root', '');
        $req="SHOW DATABASES";
        $result = mysqli_query($conn,$req);
        
echo"<table>";
echo "<tr><th><h3>databases</h3></th></tr>";
        foreach ($result as $k => $val) {
            echo "<tr>";
            foreach ($val as $key => $value) {
                echo "<td><a href='./inc/showDB.php?dbname={$value}'> ".$value.'</a></td>';
            } 
            echo "</tr>"  ;         
        }
echo"</table>";