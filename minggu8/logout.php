<?php
require_once('app/User.php');
session_start();
session_destroy();
header('location:index.php');