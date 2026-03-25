<?php
session_start();

$menu = $_GET['menu'] ?? 'utama';

switch ($menu) {
    case 'utama':
        require 'pages/utama.php';
        break;

    case 'tempah':
        require 'pages/tempah.php';
        break;

    case 'invois':
        require 'pages/invois.php';
        break;

    default:
        require 'pages/404.php';
        break;
}