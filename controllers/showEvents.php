<?php
include_once 'connectPDO.php';
session_start();


$data = $pdo->query("SELECT * FROM eventos")->fetchAll();

$_SESSION['eventos'] = $data;




include_once '../views/post_eventos.php';
