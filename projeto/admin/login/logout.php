<?php 
require_once dirname(dirname(__DIR__)).'/include/data/login/db-login.php';

logout();
header('Location:/'.BASEDIR.'admin/login/login.php');	