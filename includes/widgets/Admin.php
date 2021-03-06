<?php
class Admin extends WidgetManager
{
    /** 后台菜单 focus */
    public function focus($current)
    {
        $currentRouteList = explode('-', explode('.', explode('/', $_SERVER['PHP_SELF'])[2])[0]);
        echo in_array($current, $currentRouteList) || (count($currentRouteList) === 1 && $current === 'console') ? ' focus' : '';
    }
}
