<?php
require('inc/all-classes.php');

session_destroy();
echo '<h1 style="text-align: center">You have been logged out</h1>';
header('refresh:3; url=index.php');