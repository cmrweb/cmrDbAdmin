
<?php
session_start();
if (isset($_COOKIE['color'])) {
    $bgclr = $_COOKIE['color'][0];
    $txtclr = $_COOKIE['color'][1];
    $inbgclr = $_COOKIE['color'][2];
    $intxtclr = $_COOKIE['color'][3]; 
   
}else{
    $bgclr = '#040d1f';
    $txtclr = '#ffffff';
    $inbgclr = '#060416';
    $intxtclr = '#9fd1d1'; 
}
if(isset($_POST['saveClr'])){
  setcookie("color[0]", $_POST['bgclr'], strtotime( '+30 days' ));
  setcookie("color[1]", $_POST['txtclr'], strtotime( '+30 days' ));
  setcookie("color[2]", $_POST['inbgclr'], strtotime( '+30 days' ));
  setcookie("color[3]", $_POST['intxtclr'], strtotime( '+30 days' )); 
  header('location: ./');
}
if(isset($_POST['defclr'])){ 
  setcookie("color[0]", '#040d1f', strtotime( '+30 days' ));
  setcookie("color[1]", '#ffffff', strtotime( '+30 days' ));
  setcookie("color[2]", '#060416', strtotime( '+30 days' ));
  setcookie("color[3]", '#9fd1d1', strtotime( '+30 days' )); 
}
//variable
$msg=$msg2=$msg3=$msg4=$tblname=$dbname=$servername=$username=$password="";
//connexion pour creation de base de donnée
function fconnect($servername, $username, $password){
    $GLOBALS['conn'] = new mysqli($servername, $username, $password);
    if ($GLOBALS['conn']->connect_error) {
        die("creation failed: " . $GLOBALS['conn']->connect_error);
    }
}
//connexion
function connect($servername, $username, $password,$dbname){
    $GLOBALS['conn']=new mysqli($servername, $username, $password, 'cmr_'.$dbname);
    if ($GLOBALS['conn']->connect_error) {
        die("Connection failed: " . $GLOBALS['conn']->connect_error);
    }
}
/*
*   Base de donée
*/
if(isset($_GET['create'])){ 
    $servername = $_GET['dbserv'];
    $username = $_GET['dbuser'];
    $password = $_GET['dbpw'];
    $dbname=$_GET['dbname']; 
    
    if(!empty($dbname)){
        fconnect($servername, $username, $password);
        $req="CREATE DATABASE IF NOT EXISTS cmr_$dbname CHARACTER SET utf8 COLLATE utf8_general_ci";
        mysqli_query($conn,$req);
        $msg= 'base de donnée crée';     
        connect($servername, $username, $password,$dbname);
        $msg.= ' et connecter : cmr_'.$dbname;
    }else{
        $msg= 'entrer un nom de base de donnée';
    }
}
/*
*   Table
*/
if(isset($_POST['createtble'])){
     $tblname=$_POST['tblename'];
    if(!empty($tblname)&& !empty($_POST['champ'])){
        $req= 'CREATE TABLE '.$tblname.' ('; 
        foreach ($_POST['champ'] as $field) {
            if(!empty($field)){
                $req.=$field;
            }     
    }
    $req.= ')';
    $msg2= 'Envoyer : '.$req;
    connect($servername, $username, $password,$dbname);
    mysqli_query($conn,$req);  
    }else{
        $msg2= 'Veuillez remplir les champs';
    }
}
/*
*   Requete
*/
if(isset($_POST['request'])){
    $req=$_POST['keyword'];
    if(!empty($req)){
        $msg3= $req;
        connect($servername, $username, $password,$dbname);
        mysqli_query($conn,$req);   
    }else{
        $msg3='Veuillez insérer une requete';
    }   
} 
/*
*   SELECT - FROM
*/
if(isset($_POST['show'])){
        $sel=$_POST['sel'];
        $tbl=$_POST['tbl'];
    if(!empty($sel)&& !empty($tbl)){
        connect($servername, $username, $password,$dbname);
        $req2="SELECT $sel FROM $tbl";
        $result = mysqli_query($conn,$req2);  
    }else{
        $msg3= 'Veuillez remplir les champs';
    }  
}
?>