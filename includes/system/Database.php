<?php if (!defined('ROOT_PATH')) exit;
class Database
{
    private static $instance = null;

    private function __construct()
    {
        try {
            $this->db = new Medoo([
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
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
