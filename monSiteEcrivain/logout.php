<?php
session_start();
session_destroy();

$_SESSION = [];
require('includes/functions.php');
redirect('login.php');

