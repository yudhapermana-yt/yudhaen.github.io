<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"vless://$username@162.159.134.42:80?path=%2Fbuy-vless-ws-pm-telegram-at-synricha&security=none&encryption=none&host=cpanel.iptunnels.com&type=ws#0012+Cpanel+vless-ws");
    fwrite($file, "\n");
        fwrite($file,"vless://$username2@162.159.134.42:80?path=%2Fbuy-vless-ws-pm-telegram-at-synricha&security=none&encryption=none&host=cpanel.iptunnels.com&type=ws#0012+Cpanel+vless-ws");
    fwrite($file, "\n");
    fclose($file);
    header("location: index.php");
 ?>
