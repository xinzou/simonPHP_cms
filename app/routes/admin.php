<?php
/**
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-2-25
 * Time: 上午10:53
 */
$app = \Slim\Slim::getInstance("default");
$app->group('/admin', function () use ($app) {
    $app->get('/login', "controller\\admin\\LoginController:getLogin");
    $app->post('/login', "controller\\admin\\LoginController:postLogin");
    
    $app->group('', 'checkLogin', function () use ($app) {
        $app->get('/logout', "controller\\admin\\LoginController:logout");
        $app->get('/category/index', "controller\\admin\\CategoryController:index");
        $app->get('/category/create', "controller\\admin\\CategoryController:create");
        $app->post('/category/store', "controller\\admin\\CategoryController:store");
        $app->get('/category/destroy', "controller\\admin\\CategoryController:destroy");
        

        $app->get('/article/index', "controller\\admin\\ArticleController:index");
        $app->get('/article/create', "controller\\admin\\ArticleController:create");
        $app->post('/article/store', "controller\\admin\\ArticleController:store");
        $app->get('/article/edit', "controller\\admin\\ArticleController:edit");
        $app->post('/article/update', "controller\\admin\\ArticleController:update");
        $app->get('/article/destroy', "controller\\admin\\ArticleController:destroy");

        $app->get('/setNewStatic', "controller\\admin\\RenewStaticController:index");
        $app->post('/setNewStatic', "controller\\admin\\RenewStaticController:setNewStatic");
    });
});