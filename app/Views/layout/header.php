<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title><?= esc($title) ?></title>

<link rel="stylesheet" href="<?= base_url('css/app.css') ?>">

</head>

<body class="bg-gray-100">

<div class="flex">

<?= view('layouts/sidebar') ?>

<div class="flex-1">

<?= view('layouts/topbar') ?>

<div class="p-8">