<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <meta name="author" content=""> <!-- Use "SEO" friendly tags/keywords here to improve your google search ranking. -->
        <title>SERVERNAME | STATS</title> <!-- Make sure you change this to be SEO friendly. This text displays at the very top of the browser tab. -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<div class="wrapper">
        <div class="container">
            <div class="row">
<?php

// Replace XXXXXX by your server id on battlemetrics.com
$server_id = array("7178840","12187331","4658189","7169205","7178897","7159762","10544184","4658430","7254441","11703557");

foreach ($server_id as $key => $value) {
  
// Execute curl and get server informations
$url="https://api.battlemetrics.com/servers/".$value;
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=json_decode(curl_exec($ch), true);
curl_close($ch);
//print_r($result);

if ($result){
 ?>

                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img alt="..." class="card-img-top" src="/arkmaps/<?php echo $result['data']['attributes']['details']['map']; ?>.webp">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result['data']['attributes']['name']; ?></h5>
                            <h6><?php  echo $result['data']['attributes']['ip']; echo ":"; echo $result['data']['attributes']['port']; ?></h6>
                            <p class="card-text"><strong>Players:</strong> <?php echo $result['data']['attributes']['players']; echo "/"; echo $result['data']['attributes']['maxPlayers'];?> <br />
                            	<strong>BM Rank:</strong> <?php echo $result['data']['attributes']['rank']; ?>
                            </p>
                            <div class="socials">
                                <a href="steam://connect/<?php  echo $result['data']['attributes']['ip']; echo ":"; echo $result['data']['attributes']['portQuery']; ?>"><i class="fa fa-steam"></i></a> 
                        
                            </div>
                        </div>
                    </div>
                </div>
            

<?php
} else {
  echo "server not found 1";
}

}

?>
</div>
        </div>
    </div>
</body>
</html>