<?php
session_start();

include('partials/_errors.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');
include('filters/auth_filter.php');










require 'views/books.view.php';
