<?php

session_start();
session_destroy();
header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
exit();