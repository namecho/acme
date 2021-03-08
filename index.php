<?php
define('ROOT_PATH', __DIR__ . '/');

/** 引导程序 */
include ROOT_PATH . 'includes/bootstrap.php';

/** 初始化组件 */
WidgetManager::widget('Init');

/** 初始化插件 */
PluginManager::init();

/** 开始路由分发 */
Router::dispatch();
