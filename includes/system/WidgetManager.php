<?php if (!defined('ROOT_PATH')) exit;
class WidgetManager
{
    /** widget 对象池 */
    private static $widgetPool = [];

    /**
     * 工厂方法
     *
     * @param string $className 组件名
     * @param mixed $params 传递的参数
     */
    public static function widget($className, $params = null)
    {
        /** 如果类不存在，初始化 */
        if (!isset(self::$widgetPool[$className])) {
            include ROOT_PATH . 'includes/widgets/' . $className . '.php';
            /** 初始化组件 */
            $widget = new $className($params);
            $widget->execute();
            self::$widgetPool[$className] = $widget;
        }
        return self::$widgetPool[$className];
    }

    public function execute()
    {
    }
}
