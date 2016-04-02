<?php
namespace controller;
use boot\Bootstrap;

/**
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-19
 * Time: 下午3:36
 */
class Controller
{
    /**
     * 整个应用
     * @var Slim APP $app
     */
    protected $app;

    /**
     * 应用的sessionManager
     * @var mixed
     */
    protected $sessionManager;

    /**
     * 应用的sessionContainer
     * @var
     */
    protected $sessionContainer;

    /**
     * 应用请求参数数组
     * @var
     */
    protected $params;

    /**
     * 控制器构造函数
     *
     * @author simon <1052214395@qq.com>
     */
    public function __construct()
    {
        $this->app = Bootstrap::getApp();
        $this->analyzeRequestParams();
        $this->sessionManager = Bootstrap::getPimple('sessionManager');
        $this->sessionContainer = Bootstrap::getPimple('sessionContainer');
    }

    /**
     * 请求参数处理
     */
    private function analyzeRequestParams()
    {
        $method = $this->app->request()->getMethod();
        $method = strtolower($method);
        $method == 'GET' ? $this->params = $this->app->router()
            ->getCurrentRoute()->getParams() :
            $this->params = $this->app->request()->$method();
        return $this->params;
    }

    /**
     * 根据key获取指定的参数
     *
     * @author simon <1052214395@qq.com>
     * @return mixed
     */
    protected function param($key)
    {
        return (isset($this->params[$key]) ? $this->params[$key] : "");
    }
    
    /**
     * 渲染模板
     * @author simon <1052214395@qq.com>
     * @param $template
     * @param array $data
     * @param null $status
     */
    protected function render($template, $data = array(), $status = null)
    {
        $this->app->render($template, $data, $status);
    }

    /**
     * 渲染模板（重定向）
     * @author simon <1052214395@qq.com>
     * @param $template
     * @param array $data
     * @param null $status
     */
    protected function redirect($url, $status = null)
    {
        $this->app->redirect($url, $status);
    }
    
    /**
     * 获取指定组件名字的对象
     * @author simon <1052214395@qq.com>
     * @param $conponet_name
     * @return mixed
     */
    protected function getPimple($conponet_name)
    {
        return Bootstrap::getPimple($conponet_name);
    }
}
