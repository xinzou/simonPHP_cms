# simonPHP_cms
1、开发环境
Wamp
2、开发思路与技术
利用slim，pimple，twig等搭建了一个基础的mvc框架，使用了laravel的Eloquent ORM做模型层，利于操作。
5、框架目录说明
App-应用目录
-boot -启动文件
-config - 项目配置
-controller -控制器
-lib -函数
-log 错误日志
-middleware -中间件
-models -模型
-routes -路由
-temples -模板
Public-入口
-asset -资源
-plugins js插件
-static -静态文件
-upload -上传文件
Vender-php包

6、使用说明
请将根目录的sql文件导入数据库
修改app/config/database.php中的数据库连接信息
服务器访问配置为public，从public/index.php启动项目