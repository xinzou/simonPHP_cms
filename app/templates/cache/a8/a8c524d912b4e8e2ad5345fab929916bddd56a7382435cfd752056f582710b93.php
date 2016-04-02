<?php

/* website/category.twig */
class __TwigTemplate_ba1035a223b106634d1f9ed3ab3fb32bcfac10bd48b6ffaf08658a3fca5edf9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("website/layouts/master.twig", "website/category.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "website/layouts/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "CMS-";
        echo twig_escape_filter($this->env, (isset($context["cate_name"]) ? $context["cate_name"] : null), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/css/index.css\">
    <div class=\"container col-xs-offset-1\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"row\" style=\"padding: 10px 40px 10px 5px;font-size: 14px;\">
                    <ul>
                    \t<li style=\"border-bottom: 1px solid #eee;padding-top: 20px;\">当前位置：首页  > ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["cate_name"]) ? $context["cate_name"] : null), "html", null, true);
        echo "</li>
                    \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleList"]) ? $context["articleList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "\t                        <li style=\"border-bottom: 1px solid #eee;padding: 20px 0px 10px 0px;\">
\t                        \t<div class=\"row\">
\t                        \t\t<div class=\"col-xs-2\">
\t                        \t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "pic", array()), "html", null, true);
            echo "\" width=\"180px\" height=\"132px\" />
                        \t\t\t</div>
\t                        \t\t<div class=\"col-xs-10\">
\t                        \t\t\t<h3 style=\"margin-top: 0px;margin-bottom: 2px;\"><a style=\"color:blue\" href=\"/static/articles/article_";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
\t                        \t\t\t<p class=\"keys\"><b>关键词：";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "tags", array()), "html", null, true);
            echo "</b>日期：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_at", array()), "html", null, true);
            echo "   被围观：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "num", array()), "html", null, true);
            echo "</p>
\t                        \t\t\t<p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "intro", array()), "html", null, true);
            echo "   <a style=\"color:blue\" href=\"/static/articles/article_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo ".html\">详细</a></p>
\t                        \t\t</div>
\t                        \t</div>
\t                        </li>
                    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </ul>
                    ";
        // line 27
        echo "                    ";
        echo (isset($context["page"]) ? $context["page"] : null);
        echo "
                    ";
        // line 29
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "website/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  99 => 27,  96 => 25,  83 => 20,  75 => 19,  69 => 18,  62 => 15,  57 => 12,  53 => 11,  49 => 10,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "website/layouts/master.twig" %}*/
/* {% block title %}CMS-{{cate_name}}{% endblock %}*/
/* {% block content %}*/
/* 	<link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/website/css/index.css">*/
/*     <div class="container col-xs-offset-1">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="row" style="padding: 10px 40px 10px 5px;font-size: 14px;">*/
/*                     <ul>*/
/*                     	<li style="border-bottom: 1px solid #eee;padding-top: 20px;">当前位置：首页  > {{cate_name}}</li>*/
/*                     	{% for article in articleList %}*/
/* 	                        <li style="border-bottom: 1px solid #eee;padding: 20px 0px 10px 0px;">*/
/* 	                        	<div class="row">*/
/* 	                        		<div class="col-xs-2">*/
/* 	                        			<img src="{{baseUrl()}}{{article.pic}}" width="180px" height="132px" />*/
/*                         			</div>*/
/* 	                        		<div class="col-xs-10">*/
/* 	                        			<h3 style="margin-top: 0px;margin-bottom: 2px;"><a style="color:blue" href="/static/articles/article_{{article.id}}.html">{{ article.title }}</a></h3>*/
/* 	                        			<p class="keys"><b>关键词：{{ article.tags }}</b>日期：{{ article.created_at }}   被围观：{{ article.num }}</p>*/
/* 	                        			<p>{{article.intro}}   <a style="color:blue" href="/static/articles/article_{{article.id}}.html">详细</a></p>*/
/* 	                        		</div>*/
/* 	                        	</div>*/
/* 	                        </li>*/
/*                     	{% endfor %}*/
/*                     </ul>*/
/*                     {% autoescape true %}*/
/*                     {{ page|raw }}*/
/*                     {% endautoescape %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
