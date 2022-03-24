<?php

session_start();

require './connections/class/multi_functions.php';

require './connections/class/c_connection.php';
require './connections/class/c_user.php';
require './connections/class/c_drivers.php';

$db = new Connection();
$login = new Login($db);
$driver = new Drivers($db);