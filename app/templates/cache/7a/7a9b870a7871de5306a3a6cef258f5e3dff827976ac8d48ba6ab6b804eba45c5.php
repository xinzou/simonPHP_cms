<?php

/* admin/renewstatic/renewstatic.twig */
class __TwigTemplate_100536954118f025146d63ed65f5e18b51918366b221994657f25edca1d73052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layouts/master.twig", "admin/renewstatic/renewstatic.twig", 1);
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
        $this->loadTemplate("admin/layouts/left.twig", "admin/renewstatic/renewstatic.twig", 8)->display($context);
        // line 9
        echo "                    <!-- content -->
            <div class=\"col-md-10\">
                <button type=\"button\" id=\"myButton\" data-loading-text=\"Loading...\" class=\"btn btn-primary\" autocomplete=\"off\">
\t\t\t\t \t一键刷新静态缓存
\t\t\t\t</button>
\t\t\t\t
\t\t\t\t<script>
\t\t\t\t  \$('#myButton').on('click', function () {
\t\t\t\t    var \$btn = \$(this).button('loading')
\t\t\t\t    \$.post(\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/admin/setNewStatic"), "html", null, true);
        echo "\", function(data){
\t\t\t\t\t    \$btn.button('reset')
\t\t\t        });
\t\t\t\t  })
\t\t\t\t</script>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/renewstatic/renewstatic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  46 => 9,  44 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
/*                 <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">*/
/* 				 	一键刷新静态缓存*/
/* 				</button>*/
/* 				*/
/* 				<script>*/
/* 				  $('#myButton').on('click', function () {*/
/* 				    var $btn = $(this).button('loading')*/
/* 				    $.post("{{ siteUrl('/admin/setNewStatic') }}", function(data){*/
/* 					    $btn.button('reset')*/
/* 			        });*/
/* 				  })*/
/* 				</script>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
