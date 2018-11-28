<?php
session_start();
include('filters/auth_filter.php');
include('partials/_errors.php');
require('config/database.php');
require('includes/functions.php');


require ('views/books.view.php');