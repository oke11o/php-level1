<?php

require_once '../engine/funcs.php';

$config = require '../config/config.php';

$mysqli = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);