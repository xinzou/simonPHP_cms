<?php

/* website/article.twig */
class __TwigTemplate_a40fe37120973805a2273214261f27ee24925d4a18f4dacd2012a69f3ad451d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("website/layouts/master.twig", "website/article.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'count' => array($this, 'block_count'),
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
        echo "    <div class=\"jumbotron\">
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h1><br/>
        <p><i class=\"icon-calendar icon-x\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "created_at", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "intro", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"container col-xs-offset-1\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"row\" style=\"padding: 10px 40px 10px 5px;font-size: 14px;\">
                    <p>
                    ";
        // line 14
        echo "                    ";
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array());
        echo "
                    ";
        // line 16
        echo "                    </p>
                    <div class=\"bdsharebuttonbox\"><a href=\"#\" class=\"bds_more\" data-cmd=\"more\"></a><a href=\"#\" class=\"bds_qzone\" data-cmd=\"qzone\" title=\"分享到QQ空间\"></a><a href=\"#\" class=\"bds_tsina\" data-cmd=\"tsina\" title=\"分享到新浪微博\"></a><a href=\"#\" class=\"bds_tqq\" data-cmd=\"tqq\" title=\"分享到腾讯微博\"></a><a href=\"#\" class=\"bds_renren\" data-cmd=\"renren\" title=\"分享到人人网\"></a><a href=\"#\" class=\"bds_weixin\" data-cmd=\"weixin\" title=\"分享到微信\"></a></div>
                    <script>window._bd_share_config={\"common\":{\"bdSnsKey\":{},\"bdText\":\"\",\"bdMini\":\"2\",\"bdMiniList\":false,\"bdPic\":\"\",\"bdStyle\":\"1\",\"bdSize\":\"16\"},\"share\":{},\"image\":{\"viewList\":[\"qzone\",\"tsina\",\"tqq\",\"renren\",\"weixin\"],\"viewText\":\"分享到：\",\"viewSize\":\"16\"},\"selectShare\":{\"bdContainerClass\":null,\"bdSelectMiniList\":[\"qzone\",\"tsina\",\"tqq\",\"renren\",\"weixin\"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                </div>
            </div>
        </div>
    </div>
    
";
    }

    // line 25
    public function block_count($context, array $blocks = array())
    {
        // line 26
        echo "\t<script type=\"text/javascript\">
   \t\t\$(document).ready(function(){ 
   \t\t    \$.get(\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("article/count"), "html", null, true);
        echo "\", { id: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo " } );
    \t}); 
\t</script>
";
    }

    public function getTemplateName()
    {
        return "website/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  73 => 26,  70 => 25,  58 => 16,  53 => 14,  43 => 6,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "website/layouts/master.twig" %}*/
/* {% block content %}*/
/*     <div class="jumbotron">*/
/*         <h1>{{ article.title }}</h1><br/>*/
/*         <p><i class="icon-calendar icon-x"></i> {{article.created_at}}</p>*/
/*         <p>{{ article.intro }}</p>*/
/*     </div>*/
/*     <div class="container col-xs-offset-1">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="row" style="padding: 10px 40px 10px 5px;font-size: 14px;">*/
/*                     <p>*/
/*                     {% autoescape true %}*/
/*                     {{ article.content|raw }}*/
/*                     {% endautoescape %}*/
/*                     </p>*/
/*                     <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>*/
/*                     <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* {% block count %}*/
/* 	<script type="text/javascript">*/
/*    		$(document).ready(function(){ */
/*    		    $.get("{{ siteUrl('article/count') }}", { id: {{article.id}} } );*/
/*     	}); */
/* 	</script>*/
/* {% endblock %}*/
