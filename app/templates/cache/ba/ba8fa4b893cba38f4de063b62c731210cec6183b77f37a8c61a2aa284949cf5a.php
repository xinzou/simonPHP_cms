<?php

/* admin/article/create.twig */
class __TwigTemplate_870b2a781f71abec69dccb0d3f48992cdac2c163f1ad04c510a5ddcbf039c5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layouts/master.twig", "admin/article/create.twig", 1);
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
        echo "新增文章";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <!-- left, vertical navbar & content -->
        <div class=\"row\">
            <!-- left, vertical navbar -->
            ";
        // line 8
        $this->loadTemplate("admin/layouts/left.twig", "admin/article/create.twig", 8)->display($context);
        // line 9
        echo "                    <!-- content -->
            <div class=\"col-md-10\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-header\">
                            <h1>新增文章</h1>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default bootstrap-admin-no-table-panel\">
                            <div class=\"panel-heading\">
                                <div class=\"text-muted bootstrap-admin-box-title\">文章</div>
                            </div>
                            <div class=\"bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in\">
                                <form class=\"form-horizontal\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("admin/article/store"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-2 control-label\" for=\"title\">文章标题</label>
                                            <div class=\"col-lg-4\">
                                                <input class=\"form-control\" id=\"title\" name=\"title\" type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-2 control-label\" for=\"cate_id\">所属分类</label>
                                            <div class=\"col-lg-4\">
                                                <select id=\"cate_id\" name=\"cate_id\" class=\"form-control\" style=\"width: 150px\">
                                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "cate_name", array()), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-2 control-label\" for=\"tags\">标签</label>
                                            <div class=\"col-lg-8\">
                                                <input class=\"form-control\" id=\"tags\" name=\"tags\" type=\"text\">
                                            </div>
                                            <p class=\"text-info\">可以设置多个标签，请以“,”间隔。如：a,b</p>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-2 control-label\" for=\"pic\">封面图片</label>
                                            <div class=\"col-lg-4\">
                                                <input type=\"file\" id=\"pic\" name=\"pic\">
                                            </div>
                                            <p class=\"text-info\">格式为\"gif\", \"png\", \"jpg\",\"jpeg\"</p>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-2 control-label\" for=\"content\">内容</label>
                                            <div class=\"col-lg-10\">
                                                <textarea id=\"content\" name=\"content\" ></textarea>
                                            </div>
                                        </div>
                                        <div style=\"padding-left:90px;\">
                                            <button type=\"submit\" class=\"btn btn-primary\">保存</button>
                                            <button type=\"reset\" class=\"btn btn-default\">取消</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/plugins/tinymce/tinymce.min.js\"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            language: 'zh_CN',
            language_url: '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/plugins/tinymce/langs/zh_CN.js',
            height: 500,
            theme: 'modern',
            plugins: [
                'filemanager advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image filemanager',
            toolbar2: 'print preview media | forecolor backcolor emoticons | fullscreen codesample',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            relative_urls : false
        });

        function selectTags()
        {
            var selectTag = '';
            if(\$(\"#tags\").val() === '')
            {
                selectTag = \$(\"#tagList\").find(\"option:selected\").text();
            }
            else {
                selectTag = \",\"+\$(\"#tagList\").find(\"option:selected\").text();
            }
            \$(\"#tags\").val(\$(\"#tags\").val()+selectTag);
        }
    </script>
    <style>
        div.mce-fullscreen{
            top:80px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "admin/article/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 82,  133 => 77,  95 => 41,  84 => 39,  80 => 38,  65 => 26,  46 => 9,  44 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layouts/master.twig" %}*/
/* {% block title %}新增文章{% endblock %}*/
/* {% block content %}*/
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
/*                             <h1>新增文章</h1>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="panel panel-default bootstrap-admin-no-table-panel">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="text-muted bootstrap-admin-box-title">文章</div>*/
/*                             </div>*/
/*                             <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">*/
/*                                 <form class="form-horizontal" action="{{ siteUrl('admin/article/store') }}" method="post" enctype="multipart/form-data">*/
/*                                     <fieldset>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-lg-2 control-label" for="title">文章标题</label>*/
/*                                             <div class="col-lg-4">*/
/*                                                 <input class="form-control" id="title" name="title" type="text">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-lg-2 control-label" for="cate_id">所属分类</label>*/
/*                                             <div class="col-lg-4">*/
/*                                                 <select id="cate_id" name="cate_id" class="form-control" style="width: 150px">*/
/*                                                     {% for category in categoryList %}*/
/*                                                         <option value="{{category.id}}">{{category.cate_name}}</option>*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-lg-2 control-label" for="tags">标签</label>*/
/*                                             <div class="col-lg-8">*/
/*                                                 <input class="form-control" id="tags" name="tags" type="text">*/
/*                                             </div>*/
/*                                             <p class="text-info">可以设置多个标签，请以“,”间隔。如：a,b</p>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-lg-2 control-label" for="pic">封面图片</label>*/
/*                                             <div class="col-lg-4">*/
/*                                                 <input type="file" id="pic" name="pic">*/
/*                                             </div>*/
/*                                             <p class="text-info">格式为"gif", "png", "jpg","jpeg"</p>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-lg-2 control-label" for="content">内容</label>*/
/*                                             <div class="col-lg-10">*/
/*                                                 <textarea id="content" name="content" ></textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div style="padding-left:90px;">*/
/*                                             <button type="submit" class="btn btn-primary">保存</button>*/
/*                                             <button type="reset" class="btn btn-default">取消</button>*/
/*                                         </div>*/
/*                                     </fieldset>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript" src="{{ baseUrl() }}/plugins/tinymce/tinymce.min.js"></script>*/
/*     <script>*/
/*         tinymce.init({*/
/*             selector: 'textarea',*/
/*             language: 'zh_CN',*/
/*             language_url: '{{ baseUrl() }}/plugins/tinymce/langs/zh_CN.js',*/
/*             height: 500,*/
/*             theme: 'modern',*/
/*             plugins: [*/
/*                 'filemanager advlist autolink lists link image charmap print preview hr anchor pagebreak',*/
/*                 'searchreplace wordcount visualblocks visualchars code fullscreen',*/
/*                 'insertdatetime media nonbreaking save table contextmenu directionality',*/
/*                 'emoticons template paste textcolor colorpicker textpattern imagetools codesample'*/
/*             ],*/
/*             toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image filemanager',*/
/*             toolbar2: 'print preview media | forecolor backcolor emoticons | fullscreen codesample',*/
/*             image_advtab: true,*/
/*             templates: [*/
/*                 { title: 'Test template 1', content: 'Test 1' },*/
/*                 { title: 'Test template 2', content: 'Test 2' }*/
/*             ],*/
/*             relative_urls : false*/
/*         });*/
/* */
/*         function selectTags()*/
/*         {*/
/*             var selectTag = '';*/
/*             if($("#tags").val() === '')*/
/*             {*/
/*                 selectTag = $("#tagList").find("option:selected").text();*/
/*             }*/
/*             else {*/
/*                 selectTag = ","+$("#tagList").find("option:selected").text();*/
/*             }*/
/*             $("#tags").val($("#tags").val()+selectTag);*/
/*         }*/
/*     </script>*/
/*     <style>*/
/*         div.mce-fullscreen{*/
/*             top:80px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
