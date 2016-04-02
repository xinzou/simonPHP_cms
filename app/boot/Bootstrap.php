<?php
/**
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-16
 * Time: 上午10:03
 */

namespace boot;

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container as DBContainer;
use Illuminate\Database\Capsule\Manager as Capsule;
use Zend\Session\Config\SessionConfig;
use Zend\Session\Container;
use Zend\Session\SessionManager;

class Bootstrap
{
    //@var $container
    private static $container = null;

    /**
     * 初始化依赖管理器
     * @author simon <1052214395@qq.com>
     */
    public static function initPimple()
    {
        self::$container = new \Pimple\Container();
        self::$container['app_config'] = self::initConfig();
        self::$container['app'] = function(){
            return new \Slim\Slim(self::getConfig('slim'));
        };
        self::initSystemDefine();
        self::$container['capsule'] = self::initCapsule();
        self::$container['sessionManager'] = self::initSessionManager();
        self::$container['sessionContainer'] = self::initSessionContainer();

        self::initMiddleware();
    }

    /**
     * 引导启动整个应用
     * @author simon <1052214395@qq.com>
     */
    public static function start()
    {
        self::initPimple();
        $app = self::getApp();
        $app->configureMode(APPLICATION_ENV, function () {
            error_reporting(-1);
            ini_set('display_erors', 1);
            ini_set('display_startup_errors', 1);
        });

        //初始化视图
        self::initView();
        //载入路由文件
        self::requireRouteFile();
        $app->run();
    }

    /**
     * 获取整个应用
     * @author simon <1052214395@qq.com>
     * @return null|\Slim\Slim
     */
    public static function getApp()
    {
        return self::$container['app'];
    }

    /**
     * 初始化视图
     * @author simon <1052214395@qq.com>
     */
    private static function initView()
    {
        $view = self::getApp()->view();

        $view->parserOptions = self::getConfig('twig');
        $view->parserExtensions = array(
            new \Slim\Views\TwigExtension()
        );
    }

    /**
     * 根据URI包含路由文件
     * @author simon <1052214395@qq.com>
     */
    private static function requireRouteFile()
    {
        foreach (glob(APP_PATH . '/app/routes/*.php') as $filename) {
            require_once $filename;
        }
    }

    /**
     * 获取配置信息
     * @author simon <1052214395@qq.com>
     * @param $key
     * @return mixed|null
     */
    private static function getConfig($key)
    {
        return self::$container['app_config'][$key];
    }

    /**
     * 初始化配置信息
     * @author simon <1052214395@qq.com>
     * @return array
     */
    private static function initConfig()
    {
        $routes = array();
        foreach (glob(APP_PATH . '/app/config/*.php') as $filename) {
            $routes[basename($filename, '.php')] = require $filename;
        }
        return $routes;
    }
    /**
     * 初始化Capsule
     * @author simon <1052214395@qq.com>
     * @return Capsule
     */
    private static function initCapsule()
    {
        $capsule = new Capsule();
        $capsule->addConnection(self::getConfig('database'));
        $capsule->setEventDispatcher(new Dispatcher(new DBContainer()));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }

    /**
     * 初始化sessionManager
     * @author simon <1052214395@qq.com>
     * @return SessionManager
     */
    private static function initSessionManager()
    {
        $config = new SessionConfig();
        $config->setOptions(self::getConfig("session")['manager']);
        $sessionManager = new SessionManager($config);
        $sessionManager->start();
        return $sessionManager;
    }

    /**
     * 初始化sessionContainer
     * @author simon <1052214395@qq.com>
     * @return \Zend\Session\Container
     */
    private static function initSessionContainer()
    {
        $sessionManager = self::getApp()->container->get('sessionManager');
        Container::setDefaultManager($sessionManager);
        $container = new Container(self::getConfig("session")['container']['namespace']);
        return $container;
    }

    /**
     * 获取指定组件名字的对象
     * @author simon <1052214395@qq.com>
     * @param $conponet_name
     * @return mixed
     */
    public static function getPimple($conponet_name)
    {
        return self::$container[$conponet_name];
    }

    /**
     * 初始化cookie
     * @author simon <1052214395@qq.com>
     */
    private static function initCookie()
    {
        self::getApp()->config(self::getConfig('cookie'));
    }

    /**
     * 初始化加载middleware
     * @author simon <1052214395@qq.com>
     */
    private static function initMiddleware()
    {
        foreach (glob(APP_PATH . '/app/middleware/*.php') as $filename) {
            require $filename;
        }
    }
    
    /**
     * 初始化系统常量
     */
    private static function initSystemDefine()
    {
        define("__PUBLIC__", APP_PATH . '/public');
    }
}