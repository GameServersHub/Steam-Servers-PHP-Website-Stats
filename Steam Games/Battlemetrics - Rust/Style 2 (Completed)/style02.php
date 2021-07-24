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
        /*
        Hello everyone! Welcome to the "PHP" section of this website configuration file.
        This section is designed to give you complete control over displaying live data on your
        server community websites. One of the most significant requested features in server communities is
        being able to communicate in real-time stats directly on your websites; by doing this, you dramatically
        increase the website traffic you get, and it provides an incentive for players to use your website
        when you offer custom features such as this addon! This "PHP" script was created by https://gameservershub.com/forums/ (CEO: MrOwlSky)
        
        Style version: Style02
        Open Source Link: https://github.com/GameServersHub
        */
        $url = json_decode(file_get_contents("https://api.battlemetrics.com/servers/ServerKey")); // Replace "ServerKey" with your own dedicated server key from Battlemetrics.
        $serverType = $url->data->type; // This will grab the 'servers custom id' section from the decoded JSON and it will display it below inside the echo.
        $serverId = $url->data->id; // This will grab the 'servers assigned ID number' section from the decoded JSON and it will display it below inside the echo.
        $serverName = $url->data->attributes->name; // This will grab the 'servers display name' section from the decoded JSON and it will display it below inside the echo.
        $serverAddress = $url->data->attributes->address; // This will grab the 'servers display address' section from the decoded JSON and it will display it below inside the echo.
        $serverIp = $url->data->attributes->ip; // This will grab the 'servers dedicated IP' section from the decoded JSON and it will display it below inside the echo.
        $serverPort = $url->data->attributes->port; // This will grab the 'servers game port' section from the decoded JSON and it will display it below inside the echo.
        $serverPlayers = $url->data->attributes->players; // This will grab the 'servers online players' section from the decoded JSON and it will display it below inside the echo.
        $serverMaxPlayers = $url->data->attributes->maxPlayers; // This will grab the 'servers total players' section from the decoded JSON and it will display it below inside the echo.
        $serverRank = $url->data->attributes->rank; // This will grab the 'servers current ranking' section from the decoded JSON and it will display it below inside the echo.
        $serverLocation = $url->data->attributes->location; // This will grab the 'servers hardware location' section from the decoded JSON and it will display it below inside the echo.
        $serverStatus = $url->data->attributes->status; // This will grab the 'servers online/offline status' section from the decoded JSON and it will display it below inside the echo.
        $serverModIds = $url->data->attributes->details->modIds; // This will grab the 'servers dedicated modIDs' section from the decoded JSON and it will display it below inside the echo.
        $serverModHashes = $url->data->attributes->details->modHashes; // This will grab the 'servers dedicated modHashes' section from the decoded JSON and it will display it below inside the echo.
        $serverMap = $url->data->attributes->details->map; // This will grab the 'servers map name' section from the decoded JSON and it will display it below inside the echo.
        $serverTime = $url->data->attributes->details->time; // This will grab the 'servers local time' section from the decoded JSON and it will display it below inside the echo.
        $serverTimeI = $url->data->attributes->details->time_i; // This will grab the 'servers international time format' section from the decoded JSON and it will display it below inside the echo.
        $serverOfficial = $url->data->attributes->details->official; // This will grab the 'servers official status' section from the decoded JSON and it will display it below inside the echo.
        $serverGamemode = $url->data->attributes->details->gamemode; // This will grab the 'servers current gamemode' section from the decoded JSON and it will display it below inside the echo.
        $serverModNames = $url->data->attributes->details->modNames; // This will grab the 'servers list of modnames' section from the decoded JSON and it will display it below inside the echo.
        $serverPve = $url->data->attributes->details->pve; // This will grab the 'servers PVE mode status' section from the decoded JSON and it will display it below inside the echo.
        $serverModded = $url->data->attributes->details->modded; // This will grab the 'servers modded status' section from the decoded JSON and it will display it below inside the echo.
        $serverCrossplay = $url->data->attributes->details->crossplay; // This will grab the 'servers crossplay status' section from the decoded JSON and it will display it below inside the echo.
        $serverSessionFlags = $url->data->attributes->details->session_flags; // This will grab the 'servers sessions flags' section from the decoded JSON and it will display it below inside the echo.
        $serverSteamId = $url->data->attributes->details->serverSteamId; // This will grab the 'servers owner steamID' section from the decoded JSON and it will display it below inside the echo.
        $serverPrivate = $url->data->attributes->private; // This will grab the 'servers password protected status' section from the decoded JSON and it will display it below inside the echo.
        $serverCreatedAt = $url->data->attributes->createdAt; // This will grab the 'servers creation date' section from the decoded JSON and it will display it below inside the echo.
        $serverUpdatedAt = $url->data->attributes->updatedAt; // This will grab the 'servers last updated date' section from the decoded JSON and it will display it below inside the echo.
        $serverPortQuery = $url->data->attributes->portQuery; // This will grab the 'servers query port' section from the decoded JSON and it will display it below inside the echo.
        $serverCountry = $url->data->attributes->country; // This will grab the 'servers country origin' section from the decoded JSON and it will display it below inside the echo.
        $serverQueryStatus = $url->data->attributes->queryStatus; // This will grab the 'servers last successful query status' section from the decoded JSON and it will display it below inside the echo.
        
        // Servers online/offline status text placeholders.
        $statusString01 = $serverStatus;
        $patterns01 = array();
        $patterns01[1] = '/online/';
        $patterns01[0] = '/offline/';
        $replacements01 = array();
        $replacements01[1] = '<small class="bg-gradient bg-success border border-success rounded shadow text-center">Server is online</small>';
        $replacements01[0] = '<small class="bg-gradient bg-danger border border-danger rounded shadow text-center">Server is offline</small>';
        $replaceStatus = preg_replace($patterns01, $replacements01, $statusString01);

        /*
        F.A.Q SECTION:

        Question: How do I get my "server api key" from https://www.battlemetrics.com/?
        Reply: The server key is the last numbers on each server URL link.

        Question: What exactly do I change or modify on this?
        Reply: You only need to replace "ServerKey" in the $url section above you don't need to edit anything else unless you want to add custom modifications.

        Question: Will this website code be open source?
        Reply: Yes! You can find the open source files always located on our github https://github.com/GameServersHub

        Question: How do I add this to my current website?
        Reply: You only need to copy and paste this code into the section you want it displayed on your website. Websites like "wordpress" have the "shortcode" options.
        */
        
        ?>

        <section>
        <img src="img/usa.png" alt="Country Flag"> <!-- You can change "img/usa.png" to any image source you want displayed, the correct image sizing is 200x105. -->
        <h1><span style=""><b>US SERVERS</b></span></h1> <!-- You can change this text to anything you want displayed as the first header. -->
        <h3>Placeholder Text (Add your text here)</h3> <!-- You can change this text to anything you want displayed as the second header. -->
        <b> Server Type</b>: <?php echo $serverType; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
		<b> Server ID</b>: <?php echo $serverId; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Name</b>: <?php echo $serverName; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Address</b>: <?php echo $serverAddress; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server IP</b>: <?php echo $serverIp; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Game Port</b>: <?php echo $serverPort; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Online Players</b>: <?php echo $serverPlayers; ?> | <?php echo $serverMaxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Max Slots</b>: <?php echo $serverMaxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Ranking</b>: <?php echo $serverRank; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Location</b>: [<?php echo $serverLocation[0]; ?>] <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Online Status</b>: <?php echo $replaceStatus; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server ModIDS</b>: [<?php echo $serverModIds[0]; ?>] <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Mod Hashes</b>: [<?php echo $serverModHashes[0]; ?>] <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Map</b>: <?php echo $serverMap; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Local Time</b>: <?php echo $serverTime; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server International Time</b>: <?php echo $serverTimeI; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Official Status</b>: <?php echo $serverOfficial; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Gamemode Status</b>: <?php echo $serverGamemode; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Mod Names</b>:  <!-- This will create an array of mod names in a listing format structure (Special credit to Vas). -->
        <div class="col-lg-4">
        <?php foreach ($serverModNames as $modNames):?>
              <li><?php echo $modNames; ?></li>
        <?php endforeach ?>
        </div>
        <b> Server PVE Status</b>: <?php echo $serverPve; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Modded Status</b>: <?php echo $serverModded; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Crossplay Status</b>: <?php echo $serverCrossplay; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Session Flags</b>: <?php echo $serverSessionFlags; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Owner SteamID</b>: <?php echo $serverSteamId; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Password Protected</b>: <?php echo $serverPrivate; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Creation Date</b>: <?php echo $serverCreatedAt; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Last Update Date</b>: <?php echo $serverUpdatedAt; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Query Port</b>: <?php echo $serverPortQuery; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Country</b>: <?php echo $serverCountry; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Query Status</b>: <?php echo $serverQueryStatus; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
