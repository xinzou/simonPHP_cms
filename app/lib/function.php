<?php
/**
 * 常用函数的文件
 * Created by PhpStorm.
 * @author simon <1052214395@qq.com>
 * Date: 16-1-16
 * Time: 上午10:37
 */

if (! function_exists('getConfig')) {
    /**
     * 获取配置信息
     * @author simon <1052214395@qq.com>
     * @param $key
     * @return mixed|null
     */
    function getConfig($key)
    {
        $file = APP_PATH . '/app/config/'.$key.'.php';
        if(file_exists($file))
        {
            return require_once APP_PATH . '/app/config/'.$key.'.php';
        }

        return null;
    }
}

if (! function_exists('dump')) {
    /**
     * 格式化输出调试（有断点）
     * @author simon <1052214395@qq.com>
     * @param $data
     * @return mixed|null
     */
    function dump($data = array())
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die;
    }
}

if (! function_exists('StaticPageDate')) {
    /**
     * 分页（静态化）
     * @param unknown $num
     * @param unknown $count    总记录数
     * @param unknown $pageSize 每页记录数
     * @param unknown $basePath 静态模板路径（用于生成url）
     * @param array $params 分页查询条件参数
     * @return string
     */
    function StaticPageDate($num, $count, $pageSize, $basePath, $params=array())
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $maxPage = $count==0?1:ceil($count/$pageSize);
        $length = 5;
        $paramStr = $basePath;
        foreach ($params as $v)
        {
            $paramStr .= $v[1].'/';
        }
        $prePage = $page-1;
        $nextPage = $page+1;
        $pageStr = "";

        $pageStr .= "<div style='text-align:center;padding;right:10px;'>
            <ul class='pagination'><li";

        if($page==1)
        {
            $pageStr .= " class='disabled'";
            $prePage = 1;
        }
        $pageStr .= " >
        <a href='{$paramStr}$prePage.html' >&laquo;</a></li>";
        for($i=1;$i<=$maxPage;$i++)
        {
            $pageStr .= " <li";
            if($page==$i)
            {
                $pageStr .= " class='active'";
            }
            $pageStr .= " ><a href='{$paramStr}$i.html' >$i</a></li>";
        }

        $pageStr .= " <li";
        if($page==$maxPage)
        {
            $pageStr .= " class='disabled'";
            $nextPage = $page;
        }
        $pageStr .= "><a href='{$paramStr}$nextPage.html";
        $pageStr .= "'>&raquo;</a></li>
						</ul>
                    </div>";
        return $pageStr;
    }
}

if (! function_exists('PageDate')) {
    /**
     * 分页
     * @author simon <1052214395@qq.com>
     * @param $data
     * @return mixed|null
     */
    function PageDate($num, $count, $pageSize, $params=array())
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $maxPage = ceil($count/$pageSize);
        $length = 5;
        $paramStr = '?';
        foreach ($params as $v)
        {
            $paramStr .= $v[0].'='.$v[1].'&';
        }
        $prePage = $page-1;
        $nextPage = $page+1;
        $pageStr = "";
        
        $pageStr .= "<div style='text-align:center;padding;right:10px;'>
            <ul class='pagination'><li";
        
        if($page==1)
        {
            $pageStr .= " class='disabled'";
            $prePage = 1;
        }
        $pageStr .= " >
            <a href='{$paramStr}page=$prePage' >&laquo;</a></li>";
        for($i=1;$i<=$maxPage;$i++)
        {
            $pageStr .= " <li";
            if($page==$i)
            {
                $pageStr .= " class='active'";
            }
            $pageStr .= " ><a href='{$paramStr}page=$i' >$i</a></li>";
        }
        
        $pageStr .= " <li";
        if($page==$maxPage)
        {
            $pageStr .= " class='disabled'";
            $nextPage = $page;
        }
        $pageStr .= "><a href='{$paramStr}page=".$nextPage;
        $pageStr .= "'>&raquo;</a></li>
						</ul>
                    </div>";
        return $pageStr;
    }
}

if (! function_exists('delDirAndFile')) {
    /**
     * 删除目录及目录下所有文件或删除指定文件
     * @param str $path   待删除目录路径
     * @param int $delDir 是否删除目录，1或true删除目录，0或false则只删除文件保留目录（包含子目录）
     * @return bool 返回删除状态
     */
    
    function delDirAndFile($path, $delDir = FALSE) {
        if (is_array($path)) {
            foreach ($path as $subPath)
                delDirAndFile($subPath, $delDir);
        }
        if (is_dir($path)) {
            $handle = opendir($path);
            if ($handle) {
                while (false !== ( $item = readdir($handle) )) {
                    if ($item != "." && $item != "..")
                        is_dir("$path/$item") ? delDirAndFile("$path/$item", $delDir) : unlink("$path/$item");
                }
                closedir($handle);
                if ($delDir)
                    return rmdir($path);
            }
        } else {
            if (file_exists($path)) {
                return unlink($path);
            } else {
                return FALSE;
            }
        }
        clearstatcache();
    }
}

if (! function_exists('curls')) {
    /**
     * curl 访问url
     */
    
    function curls($url, $timeout = '10')
    {
        // 1. 初始化
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // 3. 执行并获取HTML文档内容
        $info = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);

        return $info;
    }
}

if (! function_exists('staticRequest')) {
    /**
     * 静态请求过滤
     */

    function staticRequest()
    {
        $index = APP_PATH.'/public/static/index.html';
        if ($_SERVER['REQUEST_URI']=='/' && file_exists($index))
        {
            require $index;
            exit;
        }
    }
}
