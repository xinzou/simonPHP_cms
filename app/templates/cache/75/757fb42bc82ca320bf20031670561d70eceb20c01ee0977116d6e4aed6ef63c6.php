<?php

/* website/index.twig */
class __TwigTemplate_c4ed1710408cef852e38c9ad55d3913f01e9835a4a116edae86f894d2e98d609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("website/layouts/master.twig", "website/index.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/css/index.css\">
    <div class=\"container col-xs-offset-1\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"row\" style=\"padding: 10px 40px 10px 5px;font-size: 14px;\">
                    <ul>
                    \t<li style=\"border-bottom: 1px solid #eee;padding-top: 20px;\">当前位置：首页 </li>
                    \t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleList"]) ? $context["articleList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t                        <li style=\"border-bottom: 1px solid #eee;padding: 20px 0px 10px 0px;\">
\t                        \t<div class=\"row\">
\t                        \t\t<div class=\"col-xs-2\">
\t                        \t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "pic", array()), "html", null, true);
            echo "\" width=\"180px\" height=\"132px\" />
                        \t\t\t</div>
\t                        \t\t<div class=\"col-xs-10\">
\t                        \t\t\t<h3 style=\"margin-top: 0px;margin-bottom: 2px;\"><a style=\"color:blue\" href=\"/static/articles/article_";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
\t                        \t\t\t<p class=\"keys\"><b>关键词：";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "tags", array()), "html", null, true);
            echo "</b>日期：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_at", array()), "html", null, true);
            echo "   被围观：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "num", array()), "html", null, true);
            echo "</p>
\t                        \t\t\t<p>";
            // line 19
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
        // line 24
        echo "                    </ul>
                    ";
        // line 26
        echo "                    ";
        echo (isset($context["page"]) ? $context["page"] : null);
        echo "
                    ";
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "website/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  88 => 26,  85 => 24,  72 => 19,  64 => 18,  58 => 17,  51 => 14,  46 => 11,  42 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "website/layouts/master.twig" %}*/
/* {% block content %}*/
/* 	<link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/website/css/index.css">*/
/*     <div class="container col-xs-offset-1">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="row" style="padding: 10px 40px 10px 5px;font-size: 14px;">*/
/*                     <ul>*/
/*                     	<li style="border-bottom: 1px solid #eee;padding-top: 20px;">当前位置：首页 </li>*/
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
