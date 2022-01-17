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
        
        Style version: Style03
        Open Source Link: https://github.com/GameServersHub
        */
        $url = json_decode(file_get_contents("https://arkservers.net/api/query/IP:PORT")); // Replace "IP:PORT" with your own dedicated server IP:PORT from (ArkServers.net).
        $protocol = $url->info->Protocol; // This will grab the 'Protocol' section from the decoded JSON and it will display it below inside the echo.
        $hostName = $url->info->HostName; // This will grab the 'HostName' section from the decoded JSON and it will display it below inside the echo.
        $map = $url->info->Map; // This will grab the 'Map' section from the decoded JSON and it will display it below inside the echo.
        $modDir = $url->info->ModDir; // This will grab the 'ModDir' section from the decoded JSON and it will display it below inside the echo.
        $modDesc = $url->info->ModDesc; // This will grab the 'ModDesc' section from the decoded JSON and it will display it below inside the echo.
        $appID = $url->info->AppID; // This will grab the 'AppID' section from the decoded JSON and it will display it below inside the echo.
        $players = $url->info->Players; // This will grab the 'Players' section from the decoded JSON and it will display it below inside the echo.
        $maxPlayers = $url->info->MaxPlayers; // This will grab the 'MaxPlayers' section from the decoded JSON and it will display it below inside the echo.
        $bots = $url->info->Bots; // This will grab the 'Bots' section from the decoded JSON and it will display it below inside the echo.
        $dedicated = $url->info->Dedicated; // This will grab the 'Dedicated' section from the decoded JSON and it will display it below inside the echo.
        $os = $url->info->Os; // This will grab the 'Os' section from the decoded JSON and it will display it below inside the echo.
        $password = $url->info->Password; // This will grab the 'Password' section from the decoded JSON and it will display it below inside the echo.
        $secure = $url->info->Secure; // This will grab the 'Secure' section from the decoded JSON and it will display it below inside the echo.
        $version = $url->info->Version; // This will grab the 'Version' section from the decoded JSON and it will display it below inside the echo.
        $extraDataFlags = $url->info->ExtraDataFlags; // This will grab the 'ExtraDataFlags' section from the decoded JSON and it will display it below inside the echo.
        $gamePort = $url->info->GamePort; // This will grab the 'GamePort' section from the decoded JSON and it will display it below inside the echo.
        $steamID = $url->info->SteamID; // This will grab the 'SteamID' section from the decoded JSON and it will display it below inside the echo.
        $gameTags = $url->info->GameTags; // This will grab the 'GameTags' section from the decoded JSON and it will display it below inside the echo.
        $gameID = $url->info->GameID; // This will grab the 'GameID' section from the decoded JSON and it will display it below inside the echo.
        $ALLOWDOWNLOADCHARS_i = $url->rules->ALLOWDOWNLOADCHARS_i; // This will grab the 'ALLOWDOWNLOADCHARS_i' section from the decoded JSON and it will display it below inside the echo.
        $ALLOWDOWNLOADITEMS_i = $url->rules->ALLOWDOWNLOADITEMS_i; // This will grab the 'ALLOWDOWNLOADITEMS_i' section from the decoded JSON and it will display it below inside the echo.
        $ClusterId_s = $url->rules->ClusterId_s; // This will grab the 'ClusterId_s' section from the decoded JSON and it will display it below inside the echo.
        $CUSTOMSERVERNAME_s = $url->rules->CUSTOMSERVERNAME_s; // This will grab the 'CUSTOMSERVERNAME_s' section from the decoded JSON and it will display it below inside the echo.
        $DayTime_s = $url->rules->DayTime_s; // This will grab the 'DayTime_s' section from the decoded JSON and it will display it below inside the echo.
        $GameMode_s = $url->rules->GameMode_s; // This will grab the 'GameMode_s' section from the decoded JSON and it will display it below inside the echo.
        $HASACTIVEMODS_i = $url->rules->HASACTIVEMODS_i; // This will grab the 'HASACTIVEMODS_i' section from the decoded JSON and it will display it below inside the echo.
        $LEGACY_i = $url->rules->LEGACY_i; // This will grab the 'LEGACY_i' section from the decoded JSON and it will display it below inside the echo.
        $MATCHTIMEOUT_f = $url->rules->MATCHTIMEOUT_f; // This will grab the 'MATCHTIMEOUT_f' section from the decoded JSON and it will display it below inside the echo.
        $MOD0_s = $url->rules->MOD0_s; // This will grab the 'MOD0_s' section from the decoded JSON and it will display it below inside the echo.
        $MOD1_s = $url->rules->MOD1_s; // This will grab the 'MOD1_s' section from the decoded JSON and it will display it below inside the echo.
        $MOD2_s = $url->rules->MOD2_s; // This will grab the 'MOD2_s' section from the decoded JSON and it will display it below inside the echo.
        $MOD3_s = $url->rules->MOD3_s; // This will grab the 'MOD3_s' section from the decoded JSON and it will display it below inside the echo.
        $ModId_l = $url->rules->ModId_l; // This will grab the 'ModId_l' section from the decoded JSON and it will display it below inside the echo.
        $Networking_i = $url->rules->Networking_i; // This will grab the 'Networking_i' section from the decoded JSON and it will display it below inside the echo.
        $NUMOPENPUBCONN = $url->rules->NUMOPENPUBCONN; // This will grab the 'NUMOPENPUBCONN' section from the decoded JSON and it will display it below inside the echo.
        $OFFICIALSERVER_i = $url->rules->OFFICIALSERVER_i; // This will grab the 'OFFICIALSERVER_i' section from the decoded JSON and it will display it below inside the echo.
        $OWNINGID = $url->rules->OWNINGID; // This will grab the 'OWNINGID' section from the decoded JSON and it will display it below inside the echo.
        $OWNINGNAME = $url->rules->OWNINGNAME; // This will grab the 'OWNINGNAME' section from the decoded JSON and it will display it below inside the echo.
        $P2PADDR = $url->rules->P2PADDR; // This will grab the 'P2PADDR' section from the decoded JSON and it will display it below inside the echo.
        $P2PPORT = $url->rules->P2PPORT; // This will grab the 'P2PPORT' section from the decoded JSON and it will display it below inside the echo.
        $SEARCHKEYWORDS_s = $url->rules->SEARCHKEYWORDS_s; // This will grab the 'SEARCHKEYWORDS_s' section from the decoded JSON and it will display it below inside the echo.
        $ServerPassword_b = $url->rules->ServerPassword_b; // This will grab the 'ServerPassword_b' section from the decoded JSON and it will display it below inside the echo.
        $SERVERUSESBATTLEYE_b = $url->rules->SERVERUSESBATTLEYE_b; // This will grab the 'SERVERUSESBATTLEYE_b' section from the decoded JSON and it will display it below inside the echo.
        $SESSIONFLAGS = $url->rules->SESSIONFLAGS; // This will grab the 'SESSIONFLAGS' section from the decoded JSON and it will display it below inside the echo.
        $SESSIONISPVE_i = $url->rules->SESSIONISPVE_i; // This will grab the 'SESSIONISPVE_i' section from the decoded JSON and it will display it below inside the echo.

        /*
        F.A.Q SECTION:

        Question: How do I get my "server api key" from https://www.arkservers.net/?
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
        <b> Server protocol</b>: <?php echo $protocol; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
		<b> Server host Name</b>: <?php echo $hostName; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server map name</b>: <?php echo $map; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod directory</b>: <?php echo $modDir; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod description</b>: <?php echo $modDesc; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server AppID</b>: <?php echo $appID; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server online players</b>: <?php echo $players; ?> | <?php echo $maxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server max slots</b>: <?php echo $maxPlayers; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server bots</b>: <?php echo $bots; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server dedicated</b>: <?php if($dedicated == "d") echo "dedicated"; else echo "non-dedicated"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server online status</b>: <?php if($os == "w") echo "online"; else echo "offline"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server password protected</b>: <?php if($password == true) echo "true"; else echo "false"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server secure</b>: <?php if($secure == "1") echo "secured"; else echo "non-protected"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server version</b>: <?php echo $version; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server extra data flags</b>: <?php echo $extraDataFlags; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server game port</b>: <?php echo $gamePort; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server owner steamid</b>: <?php echo $steamID; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server game tags</b>: <?php echo $gameTags; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server game ids</b>: <?php echo $gameID; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <br>
        <h3>Placeholder Text (Add your text here)</h3> <!-- You can change this text to anything you want displayed as the second header. -->
        <b> Server allows downloadable characters</b>: <?php if($ALLOWDOWNLOADCHARS_i == "1") echo "Yes"; else echo "No"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server allows downloadable items</b>: <?php if($ALLOWDOWNLOADITEMS_i == "1") echo "Yes"; else echo "No"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server clusterID</b>: <?php echo $ClusterId_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server display server name</b>: <?php echo $CUSTOMSERVERNAME_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server current day time</b>: <?php echo $DayTime_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server current gamemode</b>: <?php echo $GameMode_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server has mods installed</b>: <?php if($HASACTIVEMODS_i == "1") echo "Yes"; else echo "No"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server running legacy mode</b>: <?php if($LEGACY_i == "1") echo "Yes"; else echo "No"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server login timeout timer</b>: <?php echo $MATCHTIMEOUT_f; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod hash data 01</b>: <?php echo $MOD0_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod hash data 02</b>: <?php echo $MOD1_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod hash data 03</b>: <?php echo $MOD2_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod hash data 04</b>: <?php echo $MOD3_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server mod hash data 05</b>: <?php echo $ModId_l; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server networking</b>: <?php if($Networking_i == "1") echo "True"; else echo "False"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server total connections</b>: <?php echo $NUMOPENPUBCONN; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server is official</b>: <?php if($OFFICIALSERVER_i == "0") echo "No"; else echo "Yes"; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server game owner ID 01</b>: <?php echo $OWNINGID; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server game owner ID 02</b>: <?php echo $OWNINGNAME; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server p2p display address</b>: <?php echo $P2PADDR; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server p2p game port</b>: <?php echo $P2PPORT; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server keywords</b>: <?php echo $SEARCHKEYWORDS_s; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server is password protected</b>: <?php echo $ServerPassword_b; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server battle eye enabled</b>: <?php echo $SERVERUSESBATTLEYE_b; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server session flags</b>: <?php echo $SESSIONFLAGS; ?> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <b> Server is pve</b>: <?php if($SESSIONISPVE_i == "1") echo "Yes"; else echo "No"; ?> <br> <br> <!-- This will grab the formatted JSON data and display the results inside this section. -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
