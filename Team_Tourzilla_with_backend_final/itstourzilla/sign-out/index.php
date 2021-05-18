<?php

session_start();

echo "Logging you out... please wait";
session_unset();
session_destroy();
header("location: /itstourzilla/index.php?logout=true");
exit();

?>