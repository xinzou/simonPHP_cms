<?php

/* admin/layouts/left.twig */
class __TwigTemplate_9dd5de128c40298f9d160c70b9adc1001c2b3e07bc7fad27284709186475e333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-md-2 bootstrap-admin-col-left\">
    <ul class=\"nav navbar-collapse collapse bootstrap-admin-navbar-side\">
        <!--后台管理-->
        <li>
            <a href=\"\"><i class=\"glyphicon glyphicon-chevron-down\"></i> 后台管理</a>
            <ul class=\"nav navbar-collapse bootstrap-admin-navbar-side\">
                <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("admin/category/index"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> 文章分类管理</a></li>
                <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("admin/article/index"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> 文章管理</a></li>
                <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("admin/setNewStatic"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> 生成前台页面</a></li>
            </ul>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/layouts/left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <div class="col-md-2 bootstrap-admin-col-left">*/
/*     <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">*/
/*         <!--后台管理-->*/
/*         <li>*/
/*             <a href=""><i class="glyphicon glyphicon-chevron-down"></i> 后台管理</a>*/
/*             <ul class="nav navbar-collapse bootstrap-admin-navbar-side">*/
/*                 <li><a href="{{siteUrl('admin/category/index')}}"><i class="glyphicon glyphicon-chevron-right"></i> 文章分类管理</a></li>*/
/*                 <li><a href="{{siteUrl('admin/article/index')}}"><i class="glyphicon glyphicon-chevron-right"></i> 文章管理</a></li>*/
/*                 <li><a href="{{siteUrl('admin/setNewStatic')}}"><i class="glyphicon glyphicon-chevron-right"></i> 生成前台页面</a></li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
