<?php
namespace controller;
use model\User;

/**
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-19
 * Time: 下午3:10
 */
class Home extends Controller
{
    /**
     * 测试模板映射
     * @author simon <1052214395@qq.com>
     */
    public function index()
    {
        $this->render('base.php', array(
            'time' => date('Y-m-d')
        ));
    }

    /**
     * 测试orm
     * @author simon <1052214395@qq.com>
     */
    public function Capsule()
    {
        dump(User::all());
    }

    /**
     * 测试session
     * @author simon <1052214395@qq.com>
     */
    public function Session()
    {
//        setcookie('aaa','dddd');
        $this->app->setCookie('aaa','aaa');
        $this->app->setCookie('bbb', 'bbb');
        dump($this->app->getCookie('aaa'));
////        dump($this->app->getCookie('aaa'));
//        $sessionObj = Bootstrap::getPimple('sessionContainer');
////        $sessionObj->name = 'zx';
////        $sessionObj->sex = '男';
//        dump($sessionObj->name);
    }

    /**
     * 测试重定向
     * @author simon <1052214395@qq.com>
     */
    public function testRedirect()
    {
        $this->redirect('/getUser');
    }
}