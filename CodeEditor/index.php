<?php
if(isset($_POST['submit'])){
    $code=fopen('./code/code.php','w');
    fwrite($code, $_POST['code']);
    $code=fopen('./code/code.php','r');
    fclose($code);   
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cmrCodeEditor</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="editorBlock">
 
<div id="edit" class="editor" 
contenteditable="true" 
spellcheck="false">
<pre>
&lt;?php

?&gt;
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;meta charset="UTF-8">
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
&lt;title>cmrCodeTester&lt;/title>
&lt;style>&lt;/style>
&lt;/head>
&lt;body>
&lt;header> &lt;/header>
&lt;main>

&lt;/main&gt;
&lt;footer>&lt;/footer>
&lt;script>&lt;/script>
&lt;/body>
&lt;/html>
</pre>
</div>
<div id="cast" class="editor"></div>
<form action="#" method="post">
    
<textarea name="code" id="code"></textarea>

<input type="submit" name="submit" value="envoyer">
</form>
    <iframe id="render" src="./code/code.php" frameborder="1"></iframe>


  </section> 
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

</body>
</html>