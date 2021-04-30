<?php if (!defined('ROOT_PATH')) exit ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php $this->stylesheet('css/bootstrap.min.css'); ?>
    <?php $this->stylesheet('css/style.css'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="">ACME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->url() ?>">首页</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">分类</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->url('login') ?>">登录</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->url('register') ?>">注册</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
