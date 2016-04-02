<?php
namespace controller\admin;

use controller\Controller;
use models\Article;
use models\Category;
class RenewStaticController extends Controller
{
    public function index()
    {
        $this->render('admin/renewstatic/renewstatic.twig');
    }
    
    //一键刷新静态缓存
    public function setNewStatic()
    {
        $this->reNewArticle();
        $this->reNewIndex();
        $this->reNewCategory();
    }
    
    /**
     * 文章静态化
     */
    public function reNewArticle()
    {
        $baseUrl = $this->app->request->getUrl();
        $baseDir = 'static/articles/';
        if (!file_exists($baseDir))
        {
            mkdir ($baseDir);//创建分类目录
        }
        $artlcleList = Article::all();
        delDirAndFile($baseDir);
        foreach ($artlcleList as $val)
        {
            $article_file = $baseDir.'article_'.$val->id.'.html';
            $article = curls($baseUrl.'/article?id='.$val->id);
            file_put_contents($article_file, $article);
        }
    }

    /**
     * 首页静态化
     */
    public function reNewIndex()
    {
        $baseUrl = $this->app->request->getUrl();
        $baseDir = 'static/index/';
        if (!file_exists($baseDir))
        {
            mkdir ($baseDir);//创建分类目录
        }
        delDirAndFile($baseDir);//清空index目录
        $count = Article::count();
        $pageSize = $this->getPimple('app_config')['website']['pagesize'];

        $index_file = $baseDir.'../index.html';
        $index = curls($baseUrl.'?page=1');
        file_put_contents($index_file, $index);
        
        for ($i=1; $i<=ceil($count/$pageSize); $i++)
        {
            $index_file = $baseDir.$i.'.html';
            $index = curls($baseUrl.'?page='.$i);
            file_put_contents($index_file, $index);
        }
    }
    
    /**
     * 分类静态化
     */
    public function reNewCategory()
    {
        $baseUrl = $this->app->request->getUrl();
        $baseDir = 'static/category/';
        if (!file_exists($baseDir))
        {
            mkdir ($baseDir);//创建分类目录
        }
        delDirAndFile($baseDir);//清空目录
        $categoryList = Category::all();
        $pageSize = $this->getPimple('app_config')['website']['pagesize'];
        foreach ($categoryList as $category)
        {
            //分类首页
            $category_index_file = $baseDir.$category->id.'.html';
            $category_index = curls($baseUrl.'/category?id='.$category->id);
            file_put_contents($category_index_file, $category_index);

            if (!file_exists($baseDir.$category->id.'/'))
            {
                mkdir ($baseDir.$category->id.'/');//创建分类目录
            }
            
            //分类，分页
            $count = Article::where('cate_id', $category->id)->count();
            for ($i=1; $i<=ceil($count/$pageSize); $i++)
            {
                $index_file = $baseDir.$category->id.'/'.$i.'.html';
                $index = curls($baseUrl.'/category?id='.$category->id.'&page='.$i);
                file_put_contents($index_file, $index);
            }
        }
        
        
    }
}

?>