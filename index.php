<?php
#       $datetime = date ("Y-m-d-H:i:s" , mktime(date('H')+8, date('i'), 
#date('s'), date('m'), date('d'), date('Y')));
#       echo $datetime.'<br>';

        $port = $_SERVER['SERVER_PORT'];
        echo "From Port: ".$port.'<br><br>';

        $publicIP = exec("curl http://169.254.169.254/latest/meta-data/public-ipv4");
        echo "Public IP: ".$publicIP.'<br><br>';

        $hostname = exec("curl http://169.254.169.254/latest/meta-data/instance-id");
        echo "Instance ID: ".$hostname.'<br><br>';

        $datetime = date ("Y-m-d-H:i:s" , mktime(date('H')+8, date('i'), 
date('s'), date('m'), date('d'), date('Y')));
        echo "Time: ".$datetime.'<br><br>';

#       echo '<br>';
#       $port = $_SERVER['SERVER_PORT'];
#       echo $port.'<br>';
?>
