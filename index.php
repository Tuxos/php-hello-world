<?php
echo "<h1>Hallo OpenShift! LinuxLand Event 19.09.2017<h1>";
echo "Grüß Gott:";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
