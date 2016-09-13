<?php
    if (!isset($_COOKIE['password']) || $_COOKIE['password'] != 'pw') {
        header('Location: https://yoloswagg.in/login');
    }
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Yolo Swaggin' Radio</title>
        <meta charset = "UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Yoloswaggin\' Radio"/>
        <meta name="keywords" content="internet,radio"/>
        <meta name="author" content="Swag Factory"/>
        <link rel="stylesheet" type="text/css" href="radio.css"/>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel = "icon" href = "res/radio.ico" type = "image/x-icon"/>
    </head>
    <body>
        <div id="content">
            <a id="radioSwitch" onclick="play()">
                <i class="fa fa-refresh fa-5x"></i>
            </a>
            <div id="text">
                <a id = "mute" onclick="mute()"><i class="fa fa-volume-off"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a id = "volumeDown" onmousedown="volume(-.1)"><i class="fa fa-volume-down"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a id = "volumeUp" onmousedown="volume(.1)"><i class="fa fa-volume-up"></i></a>
            </div>
        </div>
        <audio id="radio" controls>
            <source src="https://yoloswagg.in/radio/BSAu6sdo6O96gnSvOhxo.ogg"/>
        </audio>
        <script src="radio.js"></script>
    </body>
</html>