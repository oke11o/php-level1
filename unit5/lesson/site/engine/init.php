<?php

require_once '../engine/funcs.php';
require_once '../engine/repositories.php';

$config = require '../config/config.php';

$mysqliConnect = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);