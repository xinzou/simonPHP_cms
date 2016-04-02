<?php
/**
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-19
 * Time: 上午10:53
 */

$app = \Slim\Slim::getInstance("default");

$app->get("/", "controller\\website\\IndexController:index");
$app->get("/article" , "controller\\website\\IndexController:article");
$app->get("/category" , "controller\\website\\IndexController:category");
$app->get("/article/count" , "controller\\website\\IndexController:count");
$app->get("/article/refreshCount" , "controller\\website\\IndexController:refreshCount");