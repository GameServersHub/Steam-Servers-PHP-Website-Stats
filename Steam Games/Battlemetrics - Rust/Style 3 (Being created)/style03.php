<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <meta name="author" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <title>SERVERNAME | STATS</title> <!-- Make sure you change this to be SEO friendly. This text displays at the very top of the browser tab. -->
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <?php

	    // Minecraft Server
        $url01 = json_decode(file_get_contents("https://api.battlemetrics.com/servers/5873087")); // Replace "ServerKey" with your own dedicated server key from Battlemetrics.
        $serverOnlinePlayers01 = $url01->data->attributes->players; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.

        // Rust Server
        $url02 = json_decode(file_get_contents("https://api.battlemetrics.com/servers/6324892")); // Replace "ServerKey" with your own dedicated server key from Battlemetrics.
        $serverOnlinePlayers02 = $url02->data->attributes->players; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.

        // 7 Days To Die Server
        $url03 = json_decode(file_get_contents("https://api.battlemetrics.com/servers/11939496")); // Replace "ServerKey" with your own dedicated server key from Battlemetrics.
        $serverOnlinePlayers03 = $url03->data->attributes->players; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
	 
        // Total Players
        $onlinePlayers = $serverOnlinePlayers01+$serverOnlinePlayers02+$serverOnlinePlayers03;
	 
		echo "Server Total Players: $onlinePlayers<br>";

        ?>

        <section>
        <b> Online Players</b>: <?php echo $onlinePlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
