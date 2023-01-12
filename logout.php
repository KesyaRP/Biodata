<?php
session_start();
session_destroy();

header("Location: uts_web.php")
?>