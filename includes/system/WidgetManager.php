<?php
class WidgetManager
{
    /**
     * 工厂方法
     *
     * @param string $className 组件名
     * @param mixed $params 传递的参数
     */
    public static function widget($className, $params = null)
    {
        /** 初始化组件 */
        $widget = new $className($params);
        $widget->execute();
        return $widget;
    }

    public function execute()
    {
    }
}
