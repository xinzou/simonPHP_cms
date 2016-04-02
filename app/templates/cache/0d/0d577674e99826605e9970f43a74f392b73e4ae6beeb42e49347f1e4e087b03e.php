<?php

/* admin/article/index.twig */
class __TwigTemplate_548d87eb48c6350d798ac7c155ed3ddda2a0182a6b2f3a05f9c84cdcd8b306a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layouts/master.twig", "admin/article/index.twig", 1);
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
        echo "文章列表";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/vendors/teninedialog/jquery/jquery.bootstrap.teninedialog.v3.min.js\"></script>
    <script type=\"text/javascript\">
        function deleteContent(url,title)
        {
            \$.teninedialog({
                title: '系统提示',
                content: '确认删除文章【'+title+'】?',
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
        // line 31
        $this->loadTemplate("admin/layouts/left.twig", "admin/article/index.twig", 31)->display($context);
        // line 32
        echo "                    <!-- content -->
            <div class=\"col-md-10\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-header\">
                            <h1>文章列表</h1>
                        </div>
                    </div>
                </div>
                <div style=\"margin-bottom:10px;text-align:right;\">
                    <button class=\"btn btn-danger\" onclick=\"window.location.href='";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/admin/article/create"), "html", null, true);
        echo "'\">+ 增加文章</button>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <div class=\"text-muted bootstrap-admin-box-title\">文章</div>
                            </div>
                            <div class=\"bootstrap-admin-panel-content\">
                                <table class=\"table table-striped table-bordered\" id=\"example\">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>标题</th>
                                        <th>创建时间</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleList"]) ? $context["articleList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                                        <tr>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "created_at", array()), "html", null, true);
            echo "</td>
                                            <td class=\"center\" style=\"width:70px;\">
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-mini btn-primary dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding:2px 10px;\">操作<span class=\"caret\"></span></button>
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/admin/article/edit"), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">编辑</a></li>
                                                        <li>
                                                            <a href=\"javascript:void(0);\" onclick=\"deleteContent('";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("admin/article/destroy"), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "')\">删除</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "admin/article/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 79,  135 => 72,  128 => 70,  120 => 65,  116 => 64,  112 => 63,  109 => 62,  105 => 61,  83 => 42,  71 => 32,  69 => 31,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layouts/master.twig" %}*/
/* {% block title %}文章列表{% endblock %}*/
/* {% block content %}*/
/*     <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/vendors/teninedialog/jquery/jquery.bootstrap.teninedialog.v3.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         function deleteContent(url,title)*/
/*         {*/
/*             $.teninedialog({*/
/*                 title: '系统提示',*/
/*                 content: '确认删除文章【'+title+'】?',*/
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
/*                             <h1>文章列表</h1>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div style="margin-bottom:10px;text-align:right;">*/
/*                     <button class="btn btn-danger" onclick="window.location.href='{{siteUrl('/admin/article/create')}}'">+ 增加文章</button>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="text-muted bootstrap-admin-box-title">文章</div>*/
/*                             </div>*/
/*                             <div class="bootstrap-admin-panel-content">*/
/*                                 <table class="table table-striped table-bordered" id="example">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <th>ID</th>*/
/*                                         <th>标题</th>*/
/*                                         <th>创建时间</th>*/
/*                                         <th>操作</th>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for item in articleList %}*/
/*                                         <tr>*/
/*                                             <td>{{item.id}}</td>*/
/*                                             <td>{{item.title}}</td>*/
/*                                             <td>{{item.created_at}}</td>*/
/*                                             <td class="center" style="width:70px;">*/
/*                                                 <div class="btn-group">*/
/*                                                     <button class="btn btn-mini btn-primary dropdown-toggle" data-toggle="dropdown" style="padding:2px 10px;">操作<span class="caret"></span></button>*/
/*                                                     <ul class="dropdown-menu">*/
/*                                                         <li><a href="{{siteUrl('/admin/article/edit')}}?id={{item.id}}">编辑</a></li>*/
/*                                                         <li>*/
/*                                                             <a href="javascript:void(0);" onclick="deleteContent('{{ siteUrl('admin/article/destroy') }}?id={{item.id}}','{{item.title}}')">删除</a>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
