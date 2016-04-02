<?php
/**
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-20
 * Time: 下午3:20
 */

namespace models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    
    /**
     * 检查用户
     * @param string $userName
     * @param string $password
     * @return boolean
     */
    public function checkUser($userName, $password)
    {
        $user = self::where('username', $userName)->first();
        if ($user && $password == $user->password)
        {
            return $user;
        }
        return false;
    }
}