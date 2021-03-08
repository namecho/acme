<?php if (!defined('ROOT_PATH')) exit ?>
<?php
$func = WidgetManager::widget('Admin');
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>后台管理</title>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <ul class="nav-list">
                <li class="nav-item<?php $func->focus('console') ?>">
                    <a class="nav-link" href="index.php">控制台</a>
                    <ul class="nav-child">
                        <li class="nav-child-item<?php $func->focus('index') ?>">
                            <a class="nav-child-link" href="index.php">概要</a>
                        </li>
                        <li class="nav-child-item<?php $func->focus('themes') ?>">
                            <a class="nav-child-link" href="themes.php">主题</a>
                        </li>
                        <?php pluginManager::trigger('admin_navbar_console') ?>
                    </ul>
                </li>
                <li class="nav-item<?php $func->focus('create') ?>">
                    <a class="nav-link" href="create-post.php">创作</a>
                    <ul class="nav-child">
                        <li class="nav-child-item<?php $func->focus('post') ?>">
                            <a class="nav-child-link" href="create-post.php">创作文章</a>
                        </li>
                        <li class="nav-child-item<?php $func->focus('page') ?>">
                            <a class="nav-child-link" href="./create-page.php">创建页面</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item<?php $func->focus('manage') ?>">
                    <a class="nav-link" href="manage-posts.php">管理</a>
                    <ul class="nav-child">
                        <li class="nav-child-item<?php $func->focus('posts') ?>">
                            <a class="nav-child-link" href="manage-posts.php">文章</a>
                        </li>
                        <li class="nav-child-item<?php $func->focus('pages') ?>">
                            <a class="nav-child-link" href="manage-pages.php">页面</a>
                        </li>
                        <li class="nav-child-item<?php $func->focus('categories') ?>">
                            <a class="nav-child-link" href="manage-categories.php">分类</a>
                        </li>
                        <li class="nav-child-item<?php $func->focus('files') ?>">
                            <a class="nav-child-link" href="manage-files.php">文件</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item<?php $func->focus('options') ?>">
                    <a class="nav-link" href="options-general.php">设置</a>
                    <ul class="nav-child">
                        <li class="nav-child-item<?php $func->focus('general') ?>">
                            <a class="nav-child-link" href="options-general.php">基本设置</a>
                        </li>
                        <li class="nav-child-item<?php $func->focus('smtp') ?>">
                            <a class="nav-child-link" href="options-smtp.php">SMTP 设置</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="operate">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">登出</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">网站</a>
                </li>
            </ul>
        </div>
    </nav>
