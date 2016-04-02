<?php
namespace controller\admin;

use controller\Controller;
use models\Article;
use models\Category;
use models\FileUpload;
use boot\Bootstrap;
class ArticleController extends Controller
{
    public function index()
    {
        $data['articleList'] = Article::all();
        $this->render('admin/article/index.twig', $data);
    }
    
    public function create()
    {
        $data['categoryList'] = Category::all();
        $this->render('admin/article/create.twig', $data);
    }
    
    public function store()
    {
        $articleObj = new Article();
        $sessionContainer = Bootstrap::getPimple('sessionContainer');
        $articleObj->cate_id = $this->param('cate_id');
        $articleObj->user_id = $sessionContainer->user->user_id;
        $articleObj->title = $this->param('title');
        $articleObj->content = $this->param('content');
        $articleObj->tags = $this->param('tags');
        if($_FILES['pic'])
        {
            //上传文件
            $up = new FileUpload();
            $up -> set("path", "./upload/img");
            $up -> set("maxsize", 2000000);
            $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
            $up -> set("israndname", false);
            if(!$up -> upload("pic"))
            {
                $this->redirect('edit');//文件上传失败
            }
            $articleObj->pic = '/upload/img/'.$up->getFileName();
        }
        if($articleObj->save())
        {
            $this->redirect('index');
        }
        $this->redirect('create');
    }
    
    public function edit()
    {
        $data['categoryList'] = Category::all();
        $data['article'] = Article::find($this->param('id'));
        $this->render('admin/article/edit.twig', $data);
    }
    
    public function update()
    {
        $articleObj = Article::find($this->param('id'));
        $sessionContainer = Bootstrap::getPimple('sessionContainer');
        $articleObj->cate_id = $this->param('cate_id');
        $articleObj->title = $this->param('title');
        $articleObj->content = $this->param('content');
        $articleObj->tags = $this->param('tags');
        if($_FILES['pic'])
        {
            //上传文件
            $up = new FileUpload();
            $up -> set("path", "./upload/img");
            $up -> set("maxsize", 2000000);
            $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
            $up -> set("israndname", false);
            if(!$up -> upload("pic"))
            {
                $this->redirect('edit');//文件上传失败
            }
            $articleObj->pic = '/upload/img/'.$up->getFileName();
        }
       
        if($articleObj->save())
        {
            $this->redirect('index');
        }
        $this->redirect('edit');
    }
    
    public function destroy()
    {
        $id = $this->param('id');
        Article::destroy($id);
        $this->redirect('index');
    }
}

?>