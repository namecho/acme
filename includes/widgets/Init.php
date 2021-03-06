<?php
class Init extends WidgetManager
{
    /** 入口函数 */
    public function execute()
    {
        /** 开始会话 */
        session_start();
        /** 监听缓存区 */
        ob_start();
    }
}
