<?php

session_start();

require './connections/class/multi_functions.php';

require './connections/class/c_connection.php';
require './connections/class/c_user.php';
require './connections/class/c_drivers.php';
require './connections/class/c_que.php';
require './connections/class/c_toda.php';
require './connections/class/c_incident.php';

$db = new Connection();
$login = new Login($db);
$driver = new Drivers($db);
$queue = new Queue($db);
$toda = new Toda($db);
$incident = new Incident($db);