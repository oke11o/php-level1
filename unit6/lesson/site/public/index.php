<?php

require_once '../engine/init.php';

$pageH1 = 'Домашняя страница';
$galleryType = 'Домашняя страница';

$search = $_GET['search'] ?? '';
$page = isset($_GET['page']) ? $_GET['page'] : '';

if (!$page) {
    require '../templates/main.php';
} else {
    require '../templates/tmp.php';
}
?>