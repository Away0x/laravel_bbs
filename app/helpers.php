<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function category_nav_active($category_id)
{
    /**
     * active_class 函数是 hieu-le/active 提供的
     *
     * 如果 $condition 不为 True 即会返回字符串 `active`
     *
     * @param        $condition
     * @param string $activeClass
     * @param string $inactiveClass
     *
     * @return string
     */
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}
