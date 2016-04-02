<?php

/* admin/category/index.twig */
class __TwigTemplate_43783890a5c0423cf8998631eef0a44847eb2f4e5d0bd18436bf592c33c42c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layouts/master.twig", "admin/category/index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layouts/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "文章分类列表";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/vendors/teninedialog/jquery/jquery.bootstrap.teninedialog.v3.min.js\"></script>
    <script type=\"text/javascript\">

        function deleteContent(url,cate_name)
        {
            \$.teninedialog({
                title: '系统提示',
                content: '确认删除文章分类【'+cate_name+'】?',
                //url:'1.txt',
                showCloseButton: true,
                otherButtons: [\"确定\"],
                otherButtonStyles: ['btn-primary', 'btn-primary'],
                bootstrapModalOption: {
                    keyboard: true
                },
                clickButton: function(sender, modal, index) {
                    if (index == 0) {
                    \twindow.location.href = url;
                    }
                    \$(this).closeDialog(modal);
                }
            });
        }
    </script>
    <div class=\"container\">
        <!-- left, vertical navbar & content -->
        <div class=\"row\">
            <!-- left, vertical navbar -->
            ";
        // line 32
        $this->loadTemplate("admin/layouts/left.twig", "admin/category/index.twig", 32)->display($context);
        // line 33
        echo "                    <!-- content -->
            <div class=\"col-md-10\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-header\">
                            <h1>文章分类列表</h1>
                        </div>
                    </div>
                </div>
                <div style=\"margin-bottom:10px;text-align:right;\">
                    <button class=\"btn btn-danger\" onclick=\"window.location.href='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/admin/category/create"), "html", null, true);
        echo "'\">+ 增加文章分类</button>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <div class=\"text-muted bootstrap-admin-box-title\">文章分类</div>
                            </div>
                            <div class=\"bootstrap-admin-panel-content\">
                                <table class=\"table table-striped table-bordered\" id=\"example\">
                                    <thead>
                                    <tr>
                                        <th>分类名称</th>
                                        <th>创建时间</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cate_name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "as_name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t        <td class=\"center\" style=\"width:70px;\">
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-mini btn-primary dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding:2px 10px;\">操作<span class=\"caret\"></span></button>
                                                    <ul class=\"dropdown-menu\">
                                                        <li>
                                                            <a href=\"javascript:void(0);\" onclick=\"deleteContent('";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("admin/category/destroy"), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cate_name", array()), "html", null, true);
            echo "')\">删除</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
\t\t\t\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   ";
    }

    public function getTemplateName()
    {
        return "admin/category/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 78,  126 => 71,  117 => 65,  113 => 64,  110 => 63,  106 => 62,  84 => 43,  72 => 33,  70 => 32,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layouts/master.twig" %}*/
/* {% block title %}文章分类列表{% endblock %}*/
/* {% block content %}*/
/*     <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/vendors/teninedialog/jquery/jquery.bootstrap.teninedialog.v3.min.js"></script>*/
/*     <script type="text/javascript">*/
/* */
/*         function deleteContent(url,cate_name)*/
/*         {*/
/*             $.teninedialog({*/
/*                 title: '系统提示',*/
/*                 content: '确认删除文章分类【'+cate_name+'】?',*/
/*                 //url:'1.txt',*/
/*                 showCloseButton: true,*/
/*                 otherButtons: ["确定"],*/
/*                 otherButtonStyles: ['btn-primary', 'btn-primary'],*/
/*                 bootstrapModalOption: {*/
/*                     keyboard: true*/
/*                 },*/
/*                 clickButton: function(sender, modal, index) {*/
/*                     if (index == 0) {*/
/*                     	window.location.href = url;*/
/*                     }*/
/*                     $(this).closeDialog(modal);*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/*     <div class="container">*/
/*         <!-- left, vertical navbar & content -->*/
/*         <div class="row">*/
/*             <!-- left, vertical navbar -->*/
/*             {% include 'admin/layouts/left.twig' %}*/
/*                     <!-- content -->*/
/*             <div class="col-md-10">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="page-header">*/
/*                             <h1>文章分类列表</h1>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div style="margin-bottom:10px;text-align:right;">*/
/*                     <button class="btn btn-danger" onclick="window.location.href='{{siteUrl('/admin/category/create')}}'">+ 增加文章分类</button>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         */
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="text-muted bootstrap-admin-box-title">文章分类</div>*/
/*                             </div>*/
/*                             <div class="bootstrap-admin-panel-content">*/
/*                                 <table class="table table-striped table-bordered" id="example">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <th>分类名称</th>*/
/*                                         <th>创建时间</th>*/
/*                                         <th>操作</th>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* 										{% for item in category %}*/
/* 										<tr>*/
/* 									        <td>{{ item.cate_name}}</td>*/
/* 									        <td>{{ item.as_name}}</td>*/
/* 									        <td class="center" style="width:70px;">*/
/*                                                 <div class="btn-group">*/
/*                                                     <button class="btn btn-mini btn-primary dropdown-toggle" data-toggle="dropdown" style="padding:2px 10px;">操作<span class="caret"></span></button>*/
/*                                                     <ul class="dropdown-menu">*/
/*                                                         <li>*/
/*                                                             <a href="javascript:void(0);" onclick="deleteContent('{{ siteUrl('admin/category/destroy') }}?id={{item.id}}','{{item.cate_name}}')">删除</a>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </td>*/
/* 									    </tr>*/
/* 									    {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*    {% endblock %}*/
