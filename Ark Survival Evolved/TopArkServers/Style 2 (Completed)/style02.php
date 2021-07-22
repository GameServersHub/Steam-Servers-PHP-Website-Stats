<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <meta name="author" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <title>SERVERNAME | STATS</title> <!-- Make sure you change this to be SEO friendly. This text displays at the very top of the browser tab. -->
        <link href="css/style.css" rel="stylesheet">
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
        $url = file_get_contents("https://toparkservers.com/api/serverdetails/ServerKey"); // Replace "ServerKey" with your own dedicated server key from TopArkServers.
        $formated = json_decode($url); // This grabs the data from the URL above and formats it to a readable format for PHP.
        $serverId = $formated->serverid; // This will grab the 'servers custom id' section from the decoded JSON and it will display it below inside the echo.
        $serverName = $formated->servername; // This will grab the 'servers name' section from the decoded JSON and it will display it below inside the echo.
        $serverIp = $formated->ip; // This will grab the 'display servers ip address' section from the decoded JSON and it will display it below inside the echo.
        $serverQueryPort = $formated->queryport; // This will grab the 'servers dedicated steam query port' section from the decoded JSON and it will display it below inside the echo.
        $serverGamePort = $formated->gameport; // This will grab the 'servers dedicated steam game port' section from the decoded JSON and it will display it below inside the echo.
        $serverMapName = $formated->map; // This will grab the 'servers dedicated map' section from the decoded JSON and it will display it below inside the echo.
        $serverStatus = $formated->status; // This will grab the 'servers online or offline status' section from the decoded JSON and it will display it below inside the echo.
        $serverOnlinePlayers = $formated->players; // This will grab the 'servers online players' section from the decoded JSON and it will display it below inside the echo.
        $serverMaxPlayers = $formated->maxplayers; // This will grab the 'servers total players' section from the decoded JSON and it will display it below inside the echo.
        $serverVotes = $formated->votes; // This will grab the 'servers total player votes' section from the decoded JSON and it will display it below inside the echo.
        
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
        
        Echo "<section>";
        Echo '<img src="img/usa.png" alt="Country Flag">'; // You can change "img/usa.png" to any image source you want displayed, the correct image sizing is 200x105.
        Echo '<h1><span style=""><b>US SERVERS</b></span></h1>'; // You can change this text to anything you want displayed as the first header.
        Echo "<h3>Server Name Heading H3</h3>"; // You can change this text to anything you want displayed as the second header.
        Echo "<b> Server ID</b>: $serverId"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Name</b>: $serverName"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Display IP</b>: $serverIp"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Query Port</b>: $serverQueryPort"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Game Port</b>: $serverGamePort"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Map</b>: $serverMapName"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Status</b>: $serverStatus"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Online Players</b>: $serverOnlinePlayers / $serverMaxPlayers"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Total Players</b>: $serverMaxPlayers"; // This will grab the formatted JSON data and display the results inside this section.
        Echo "<br>";
        Echo "<b>Server Total Votes</b>: $serverVotes"; // This will grab the formatted JSON data and display the results inside this section.
        Echo '<button style="display: none;">Click me!</button>';
        Echo "</section>";
        ?>
    </body>
</html>
