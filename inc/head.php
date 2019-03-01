<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cmrWebAdmin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div>
            <form action="#" method="post">
                <div>
                    <p>background </p>
                    <input type="color" value="<?= $bgclr ?>" name="bgclr" id="bgclr">
                    <input type="color" value="<?= $txtclr ?>" name="txtclr" id="txtclr">
                    <p>input </p>
                    <input type="color" value="<?= $inbgclr ?>" name="inbgclr" id="inbgclr">
                    <input type="color" value="<?= $intxtclr ?>" name="intxtclr" id="intxtclr">
                </div>
                <input type="submit" name="saveClr" value="save">
                <input type="submit" name="defclr" value="par defaut">
            </form>
        </div>
        
    </header>