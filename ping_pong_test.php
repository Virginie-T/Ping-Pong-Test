<!DOCTYPE html>
<html>
<head>
    <link href="css/main.css" type="text/css" rel="stylesheet"></link>
    <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great|Cabin+Sketch|Fontdiner+Swanky' rel='stylesheet' type='text/css'>
    <title>PING PONG test</title>
</head>
<body>
    <h1>Ping Pong test !</h1>
    <ul>
    <?php

    $y = $_GET["y"];

    for ($counter=1; $counter <= $y; $counter++){
        if( $counter % 3 == 0 && $counter % 5 == 0) {
            echo "<li>" . "PiNg PoNg" . "</li>";
        } 
        elseif ($counter % 3 == 0) {
            echo "<li>" . "PING" . "</li>";
        } 
        elseif( $counter % 5 == 0 ) {
                echo "<li>" . "PONG" . "</li>";
        }
        else {
        echo "<li>" . $counter . "</li>";}
    }

    ?>
    </ul>

</body>
</html>