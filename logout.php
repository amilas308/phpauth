<?php
session_start();
session_destroy();
header("Location: /series/index2.php");
exit();
