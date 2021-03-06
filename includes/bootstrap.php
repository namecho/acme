<?php
include ROOT_PATH . 'config.php';
include ROOT_PATH . 'includes/libraries/Medoo.php';
try {
    $db = new Medoo([
        'database_type' => 'mysql',
        'database_name' => DB_NAME,
        'server' => DB_SERVER,
        'username' => DB_USERNAME,
        'password' => DB_PASSWORD,
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
        'port' => DB_PORT,
        'prefix' => DB_PREFIX
    ]);
} catch (Exception $e) {
    exit('数据库连接失败，请检查数据库配置');
}

include ROOT_PATH . 'includes/Plugin.php';

$plugin = new Plugin();
