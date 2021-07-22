<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

Style version: Style01
Open Source Link: https://github.com/GameServersHub
*/
$url = file_get_contents("https://api.battlemetrics.com/servers/ServerKey"); // Replace "ServerKey" with your own dedicated server key from Battlemetrics.
$formated = json_decode($url); // This grabs the data from the URL above and formats it to a readable format for PHP.
$serverType = $formated->data->type; // This will grab the 'servers custom id' section from the decoded JSON and it will display it below inside the echo.
$serverId = $formated->data->id; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverName = $formated->data->attributes->name; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverAddress = $formated->data->attributes->address; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverIp = $formated->data->attributes->ip; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverPort = $formated->data->attributes->port; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverPlayers = $formated->data->attributes->players; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverMaxPlayers = $formated->data->attributes->maxPlayers; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverRank = $formated->data->attributes->rank; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverLocation = $formated->data->attributes->location; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverStatus = $formated->data->attributes->status; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverModIds = $formated->data->attributes->details->modIds; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverModHashes = $formated->data->attributes->details->modHashes; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverMap = $formated->data->attributes->details->map; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverTime = $formated->data->attributes->details->time; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverTimeI = $formated->data->attributes->details->time_i; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverOfficial = $formated->data->attributes->details->official; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverGamemode = $formated->data->attributes->details->gamemode; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverModNames = $formated->data->attributes->details->modNames; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverPve = $formated->data->attributes->details->pve; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverModded = $formated->data->attributes->details->modded; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverCrossplay = $formated->data->attributes->details->crossplay; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverSessionFlags = $formated->data->attributes->details->session_flags; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverSteamId = $formated->data->attributes->details->serverSteamId; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverPrivate = $formated->data->attributes->private; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverCreatedAt = $formated->data->attributes->createdAt; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverUpdatedAt = $formated->data->attributes->updatedAt; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverPortQuery = $formated->data->attributes->portQuery; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverCountry = $formated->data->attributes->country; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.
$serverQueryStatus = $formated->data->attributes->queryStatus; // This will grab the 'XXXXXX' section from the decoded JSON and it will display it below inside the echo.


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

echo "Server Type: $serverType | Server ID: $serverId | Server Name: $serverName | Server Display Address: $serverAddress | Server Dedicated IP: $serverIp | Server Game Port: $serverPort | Server Online Players: $serverPlayers | Server Max Players: $serverMaxPlayers | Server Ranking: $serverRank | Server Location: [$serverLocation[0]] | Server Online Status: $serverStatus | Server Mod IDs: [$serverModIds[0]] | Server Mod Hashes: [$serverModHashes[0]] | Server Map: $serverMap | Server Time: $serverTime | Server Time I: $serverTimeI | Server Official Status: $serverOfficial | Server Gamemode: $serverGamemode | Server Mods: [$serverModNames[0]] | Server PVE Status: $serverPve | Server Modded Status: $serverModded | Server Crossplay Status: $serverCrossplay | Server Session Flags: $serverSessionFlags | Server Owner SteamID: $serverSteamId | Server Private Status: $serverPrivate | Server Creation Date: $serverCreatedAt | Server Last Updated: $serverUpdatedAt | Server Query Port: $serverPortQuery | Server Country: $serverCountry | Server Query Status: $serverQueryStatus |"; // This will display the online total players starting from a minimal of 0.
?>

</body>
</html>