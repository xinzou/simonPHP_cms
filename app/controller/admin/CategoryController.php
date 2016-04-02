<?php
namespace controller\admin;

use controller\Controller;
use models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data['category'] = Category::all();
        $this->render('admin/category/index.twig', $data);
    }
    
    public function create()
    {
        $this->render('admin/category/create.twig');
    }
    
    public function store()
    {
        $category = new Category();
        $category->cate_name = $this->param('cate_name');
        $category->as_name = $this->param('as_name');
        if($category->save())
        {
            $this->redirect('index');
        }
        $this->redirect('create');
    }
    
    public function destroy()
    {
        $id = $this->param('id');
        Category::destroy($id);
        $this->redirect('index');
    }
}

?>