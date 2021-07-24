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
        $serverType = $url->data->type; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverId = $url->data->id; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverName = $url->data->attributes->name; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverAddress = $url->data->attributes->address; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverIp = $url->data->attributes->ip; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverGamePort = $url->data->attributes->port; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverOnlinePlayers = $url->data->attributes->players; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverMaxPlayers = $url->data->attributes->maxPlayers; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRanking = $url->data->attributes->rank; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverLocation = $url->data->attributes->location; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverStatus = $url->data->attributes->status; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverOfficial = $url->data->attributes->details->official; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustType = $url->data->attributes->details->rust_type; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverMap = $url->data->attributes->details->map; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverEnvironment = $url->data->attributes->details->environment; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustBuild = $url->data->attributes->details->rust_build; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustEntCntI = $url->data->attributes->details->rust_ent_cnt_i; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustFps = $url->data->attributes->details->rust_fps; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustAverageFps = $url->data->attributes->details->rust_fps_avg; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustGcCl = $url->data->attributes->details->rust_gc_cl; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustGcMb = $url->data->attributes->details->rust_gc_mb; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustHash = $url->data->attributes->details->rust_hash; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustHeaderImage = $url->data->attributes->details->rust_headerimage; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustMemPv = $url->data->attributes->details->rust_mem_pv; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustMemWs = $url->data->attributes->details->rust_mem_ws; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverPve = $url->data->attributes->details->pve; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustUptime = $url->data->attributes->details->rust_uptime; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustUrl = $url->data->attributes->details->rust_url; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustWorldSeed = $url->data->attributes->details->rust_world_seed; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustWorldSize = $url->data->attributes->details->rust_world_size; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustSeed = $url->data->attributes->details->rust_maps->seed; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustSize = $url->data->attributes->details->rust_maps->size; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverUrl = $url->data->attributes->details->rust_maps->url; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverThumbnailUrl = $url->data->attributes->details->rust_maps->thumbnailUrl; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverMonuments = $url->data->attributes->details->rust_maps->monuments; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverBarren = $url->data->attributes->details->rust_maps->barren; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $severRustDescription = $url->data->attributes->details->rust_description; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustModded = $url->data->attributes->details->rust_modded; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustQueuedPlayers = $url->data->attributes->details->rust_queued_players; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustLastWipe = $url->data->attributes->details->rust_last_wipe; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustLastWipeEnt = $url->data->attributes->details->rust_last_wipe_ent; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverOwnerSteamId = $url->data->attributes->details->serverSteamId; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustPrivate = $url->data->attributes->private; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustCreatedAt = $url->data->attributes->createdAt; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverRustUpdatedAt = $url->data->attributes->updatedAt; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverQueryPort = $url->data->attributes->portQuery; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverCountry = $url->data->attributes->country; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        $serverQueryStatus = $url->data->attributes->queryStatus; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
        
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
        <b> Server Display Address</b>: <?php echo $serverAddress; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Dedicated IP</b>: <?php echo $serverIp; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Game Port</b>: <?php echo $serverGamePort; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Online Players</b>: <?php echo $serverOnlinePlayers; ?> | <?php echo $serverMaxPlayers; ?><br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Max Slots</b>: <?php echo $serverMaxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Ranking</b>: <?php echo $serverRanking; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Location</b>: <?php echo $serverLocation[0]; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Online Status</b>: <?php echo $statusString01; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Official Status</b>: <?php echo $serverOfficial; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Type</b>: <?php echo $serverRustType; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Map</b>: <?php echo $serverMap; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Environment</b>: <?php echo $serverEnvironment; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Build</b>: <?php echo $serverRustBuild; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust ENT/CNT I</b>: <?php echo $serverRustEntCntI; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust FPS</b>: <?php echo $serverRustFps; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Average FPS</b>: <?php echo $serverRustAverageFps; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust GC C1</b>: <?php echo $serverRustGcCl; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust GC MB</b>: <?php echo $serverRustGcMb; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Hash</b>: <?php echo $serverRustHash; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Header Image</b>: <?php echo $serverRustHeaderImage; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Mem PV</b>: <?php echo $serverRustMemPv; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Mem WS</b>: <?php echo $serverRustMemWs; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server PVE Mode</b>: <?php echo $serverPve; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Uptime</b>: <?php echo $serverRustUptime; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Website URL</b>: <?php echo $serverRustUrl; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server World Seed</b>: <?php echo $serverRustWorldSeed; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server World Size</b>: <?php echo $serverRustWorldSize; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Seed</b>: <?php echo $serverRustSeed; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Size</b>: <?php echo $serverRustSize; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust URL</b>: <?php echo $serverUrl; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Thumbnail URL</b>: <?php echo $serverThumbnailUrl; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Monuments</b>: <?php echo $serverMonuments; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Barren</b>: <?php echo $serverBarren; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Description</b>: <?php echo $severRustDescription; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Modded</b>: <?php echo $serverRustModded; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Rust Queued Players</b>: <?php echo $serverRustQueuedPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Last Wipe</b>: <?php echo $serverRustLastWipe; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Last Wipe ENT</b>: <?php echo $serverRustLastWipeEnt; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Owner SteamID</b>: <?php echo $serverOwnerSteamId; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Password Protected</b>: <?php echo $serverRustPrivate; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Created At</b>: <?php echo $serverRustCreatedAt; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Updated Last</b>: <?php echo $serverRustUpdatedAt; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Query Port</b>: <?php echo $serverQueryPort; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Country</b>: <?php echo $serverCountry; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server Query Status</b>: <?php echo $serverQueryStatus; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
