
<?php
$msg=$msg2=$msg3=$msg4=$tblname=$dbname=$servername=$username=$password="";

if(isset($_GET['create'])){ 
    $servername = $_GET['dbserv'];
    $username = $_GET['dbuser'];
    $password = $_GET['dbpw'];
    $dbname=$_GET['dbname']; 
    
    if(!empty($dbname)){
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("creation failed: " . $conn->connect_error);
        }
        $req="CREATE DATABASE IF NOT EXISTS cmr_$dbname CHARACTER SET utf8 COLLATE utf8_general_ci";
        mysqli_query($conn,$req);
        $msg= 'base de donnée crée';
        
        $conn=new mysqli($servername, $username, $password, 'cmr_'.$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $msg.= ' et connecter : cmr_'.$dbname;
    } 

}
if(isset($_POST['createtble'])){
    $tblname=$_POST['tblename'];
    $req= 'CREATE TABLE '.$tblname.' ('; 
    foreach ($_POST['champ'] as $field) {
        if(!empty($field)){
            $req.=$field;
        }     
    }
    $req.= ')';
    $msg2= 'Envoyer : '.$req;
    $conn=new mysqli($servername, $username, $password, 'cmr_'.$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn,$req);

} 
if(isset($_POST['show'])){
    $sel=$_POST['sel'];
    $tbl=$_POST['tbl'];
    $conn=new mysqli($servername, $username, $password, 'cmr_'.$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $req2="SELECT $sel FROM $tbl";
//execute (connexion,request)
$result = mysqli_query($conn,$req2);

    
}
if(isset($_POST['request'])){
    $req=$_POST['keyword'];
    $msg3= 'Envoyer : '.$req;
    $conn=new mysqli($servername, $username, $password, 'cmr_'.$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn,$req);
}
?>