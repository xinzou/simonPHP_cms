<?php
namespace controller\website;

use controller\Controller;
use models\Category;
use models\Article;
use models\User;
class IndexController extends Controller
{
    public function index()
    {
        $data['navigationList'] = Category::all();
        $pageSize = $this->getPimple('app_config')['website']['pagesize'];
        $data['articleList'] = Article::skip(($this->param('page')-1)*$pageSize)->take($pageSize)->get();
        foreach ($data['articleList'] as &$val)
        {
            $val->intro = mb_substr(strip_tags($val->content), 0, 400);
        }
        $data['count'] = Article::count();
        $data['page'] = StaticPageDate($pageSize, $data['count'], $pageSize, '/static/index/');
        $this->render('website/index.twig', $data);
    }
    
    public function article()
    {
        $id = $this->param('id');
        $data['article'] = Article::find($id);
        $data['navigationList'] = Category::all();
        $this->render('website/article.twig', $data);
    }
    
    public function category()
    {
        $data['navigationList'] = Category::all();
        $cate_id = $this->param('id');
        $pageSize = $this->getPimple('app_config')['website']['pagesize'];
        $data['articleList'] = Article::where('cate_id', $cate_id)->skip(($this->param('page')-1)*$pageSize)->take($pageSize)->get();
        foreach ($data['articleList'] as &$val)
        {
            $val->intro = mb_substr(strip_tags($val->content), 0, 400);
        }
        $data['cate_name'] = Category::find($cate_id)->cate_name;
        $data['count'] = Article::where('cate_id', $cate_id)->count();
        $data['page'] = StaticPageDate($pageSize, $data['count'], $pageSize, '/static/category/', [['id', $cate_id]]);
        $this->render('website/category.twig', $data);
    }
    
    /**
     * 计数
     */
    public function count()
    {
        $cate_id = $this->param('id');
        $article = Article::find($cate_id);
        $article->num += 1;
        $article->save();
    }
}

?>