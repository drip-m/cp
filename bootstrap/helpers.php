<?php
function nav_active($fun, $param_id = '')
{
    return active_class((if_route($fun) && if_route_param($fun, $param_id)), 'menu_current');
}

function nav_current($fun, $param_id = '')
{
    return active_class((if_route($fun) && if_route_param($fun, $param_id)), 'nav_menu_current');
}