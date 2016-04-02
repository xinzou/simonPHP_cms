<?php
namespace controller\admin;

use controller\Controller;
use models\User;
class LoginController extends Controller
{
    /**
     * 登录
     * @author simon <1052214395@qq.com>
     */
    public function getLogin()
    {
        $this->render('admin/login.twig');
    }
    
    /**
     * 登录处理
     * @author simon <1052214395@qq.com>
     */
    public function postLogin()
    {
        $userObj = new User();
        $username = $this->param('username');
        $password = $this->param('password');
        $sessionContainer = $this->getPimple('sessionContainer');
        if($user = $userObj->checkUser($username, $password))
        {
            $sessionContainer->user = $user;
            $this->redirect('category/index');
        }
        $this->redirect('login');
    }
    
    /**
     * 退出登录
     */
    public function logout()
    {
        $sessionManager = $this->getPimple('sessionManager');
        $sessionManager->destroy();
        $this->redirect('login');
    }
    public function test() 
    {
        $category = new Category();
    }
}

?>