<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <meta name="author" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <title>SERVERNAME | STATS</title> <!-- Make sure you change this to be SEO friendly. This text displays at the very top of the browser tab. -->
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
        $url = json_decode(file_get_contents("https://toparkservers.com/api/serverdetails/ServerKey")); // Replace "ServerKey" with your own dedicated server key from TopArkServers.
        $serverId = $url->serverid; // This will grab the 'servers custom id' section from the decoded JSON and it will display it below inside the echo.
        $serverName = $url->servername; // This will grab the 'servers name' section from the decoded JSON and it will display it below inside the echo.
        $serverIp = $url->ip; // This will grab the 'display servers ip address' section from the decoded JSON and it will display it below inside the echo.
        $serverQueryPort = $url->queryport; // This will grab the 'servers dedicated steam query port' section from the decoded JSON and it will display it below inside the echo.
        $serverGamePort = $url->gameport; // This will grab the 'servers dedicated steam game port' section from the decoded JSON and it will display it below inside the echo.
        $serverMapName = $url->map; // This will grab the 'servers dedicated map' section from the decoded JSON and it will display it below inside the echo.
        $serverStatus = $url->status; // This will grab the 'servers online or offline status' section from the decoded JSON and it will display it below inside the echo.
        $serverOnlinePlayers = $url->players; // This will grab the 'servers online players' section from the decoded JSON and it will display it below inside the echo.
        $serverMaxPlayers = $url->maxplayers; // This will grab the 'servers total players' section from the decoded JSON and it will display it below inside the echo.
        $serverVotes = $url->votes; // This will grab the 'servers total player votes' section from the decoded JSON and it will display it below inside the echo.
        
        // Servers online/offline status text placeholders.
        $statusString01 = $serverStatus;
        $patterns01 = array();
        $patterns01[1] = '/online/';
        $patterns01[0] = '/offline/';
        $replacements01 = array();
        $replacements01[1] = '<small class="bg-gradient bg-success border border-success rounded shadow text-center">Server is online</small>';
        $replacements01[0] = '<small class="bg-gradient bg-danger border border-danger rounded shadow text-center">Server is offline</small>';
        $replaceStatus = preg_replace($patterns01, $replacements01, $statusString01);

        // Servers total votes text placeholders.
        $statusString02 = $serverVotes;
        $patterns02 = array();
        $patterns02[0] = '/0/';
        $replacements02 = array();
        $replacements02[0] = 'No votes';
        $replaceVotes = preg_replace($patterns02, $replacements02, $statusString02);

        /*
        F.A.Q SECTION:
        
        Question: How do I get my "server api key" from https://toparkservers.com/?
        Reply: Once you add a server to this website you can locate the API key inside the "manage/edit" section of your server that is uploaded on the website.
        
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
        <b>Server ID</b>: <?php echo $serverId; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Name</b>: <?php echo $serverName; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Display IP</b>: <?php echo $serverIp; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Game Port</b>: <?php echo $serverGamePort; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Query Port</b>: <?php echo $serverQueryPort; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Map</b>: <?php echo $serverMapName; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Status</b>: <?php echo $replaceStatus; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Online Players</b>: <?php echo $serverOnlinePlayers; ?> | <?php echo $serverMaxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Max Slots</b>: <?php echo $serverMaxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b>Server Total Votes</b>: <?php echo $replaceVotes; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
