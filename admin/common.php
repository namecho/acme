<?php
define('ROOT_PATH', dirname(__DIR__) . '/');

/** 加载引导程序 */
include ROOT_PATH . 'includes/bootstrap.php';

/** 组件初始化 */
WidgetManager::widget('Init');

/** 初始化插件 */
PluginManager::init();
