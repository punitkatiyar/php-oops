<?php
class unitbook{
function head($title)
{
    echo "Hello ";
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo "<title> {$title} Template Engine</title>";
        echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <header>
            <ul>
                <li id="logo"><i class="fas fa-dragon"></i> </li>';
                echo "<li id='title'> {$title}</li>";
            echo '    
            </ul>
            <ul>
                <li><a href="./"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="page1.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="page2.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="page3.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="page4.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="page5.php"><i class="fas fa-home"></i> Home</a></li>
            </ul>
        </header>';
}
}
$temp=new unitbook();

?>