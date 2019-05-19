<?php
$auth = "xxxxx";
$fp = fsockopen("staging.api.xxxxx.com", 80, $errno, $errstr, 1);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
        $auth = "xxxxxx";
        $path = "/get_token/".$auth."/".intval(microtime(true))."000";
        $data = "http://images.xxxxxx.com/is/image/DotCom/x/xxxxxxxxxxxx.jpg";
        $out = "POST " . $path . " HTTP/1.0\r\n";
        $out .= "Content-Length: " . strlen($data) . "\r\n";
        $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $out .= "\r\n";
        $out .= $data;

        fwrite($fp, $out);
        //for ($x=0;$x<100;$x++){
        //        fwrite($fp, $out);
        //        echo ".";
        //}
        //while (!feof($fp)) {
        //      echo fgets($fp, 128);
        //}
        fclose($fp);



        echo ".";
}
?>
