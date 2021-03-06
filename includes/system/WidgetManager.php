<?php
class WidgetManager
{
    // widget对象池
    private static $widgetPool = [];

    /**
     * 工厂方法，将类静态化放置到列表中
     *
     * @param string $alias 组件别名
     * @param mixed $params 传递的参数
     */
    public function Widget($className, $params)
    {
        /** 初始化组件 */
        $widget = new $className($params);

        $widget->execute();
        self::$widgetPool[$className] = $widget;
    }
}
