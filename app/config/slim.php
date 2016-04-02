<?php
/**
 * slim 配置项
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-16
 * Time: 上午11:10
 */

return array(
    'controller.param_prefix' => 'prefix',
    'mode' => APPLICATION_ENV,
    'templates.path' => APP_PATH . '/app/templates',
    'log.level' => Slim\Log::ERROR,
    'log.enabled' => true,
    'view' => new \Slim\Views\Twig(),
    "routes.case_sensitive" => "true",
    'debug' => true,
    "slim.errors" => APP_PATH . "/app/log/error.log",
    'log.writer' => new \Slim\LogWriter(@fopen(APP_PATH . "/app/log/error.log", "w")),
);