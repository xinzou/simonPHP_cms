<?php
namespace models;

use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    protected $table = 'article';
    
    /**
     * 关联Category模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function articleCategory()
    {
        return $this->belongsTo('models\Category', 'cate_id', 'id');
    }
}

?>