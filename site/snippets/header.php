<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $page->title()->html() ?> -
            &#124;&nbsp;<?= $site->title()->html() ?>
        </title>
        <meta name="author" content="<?= $site->author()->html() ?>">
        <? if ($page->description() != ''): ?>
            <meta name="description" content="<?= $page->description()->html() ?>">
            <? else: ?>
                <meta name="description" content="<?= $site->description()->html() ?>">
        <? endif ?>
        <meta name="robots" content="index, follow">
        <link rel="author" href="humans.txt">
        <?= css('assets/css/main.min.css') ?>
        <?= css('assets/css/animate.css') ?>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <? snippet('favicons') ?>
    </head>
    <body class="<?php echo $page->title()->lower() ?>">
            <header></header>
            <? snippet('navbar') ?>
