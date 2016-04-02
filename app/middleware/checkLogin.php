<?php
use boot\Bootstrap;
/**
 * 检查是否登录  中间件
 */
function checkLogin()
{
    $sessionContainer = Bootstrap::getPimple('sessionContainer');
    if (!$sessionContainer->user)
    {
        Bootstrap::getApp()->redirect('/admin/login');
    }
}