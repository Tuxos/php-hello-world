<?php
echo "<h1>Hallo OpenShift! LinuxLand Wiesn Event<h1>";
echo "Grüß Gott:";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
