<?php

/* website/layouts/master.twig */
class __TwigTemplate_cf5b6b99f37a0a703c6d074b224b9b46b294070f98bccd740251de7a44592a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'count' => array($this, 'block_count'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"author\" content=\"simon\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/css/index.css\">

    <style type=\"text/css\">
        body { padding-top: 50px; }
    </style>
</head>
<body>

";
        // line 18
        $this->loadTemplate("website/layouts/nav.twig", "website/layouts/master.twig", 18)->display($context);
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        $this->loadTemplate("website/layouts/footer.twig", "website/layouts/master.twig", 21)->display($context);
        // line 22
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/js/jquery-2.0.3.min.js\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/website/js/bootstrap.min.js\"></script>
";
        // line 24
        $this->displayBlock('count', $context, $blocks);
        // line 26
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "CMS";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    // line 24
    public function block_count($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "website/layouts/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  81 => 19,  75 => 7,  70 => 26,  68 => 24,  64 => 23,  59 => 22,  57 => 21,  55 => 19,  53 => 18,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-CN">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="author" content="simon">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}CMS{% endblock %}</title>*/
/*     <link href="{{ baseUrl() }}/assets/website/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link rel="stylesheet" href="{{ baseUrl() }}/assets/website/css/font-awesome.css">*/
/*     <link rel="stylesheet" href="{{ baseUrl() }}/assets/website/css/index.css">*/
/* */
/*     <style type="text/css">*/
/*         body { padding-top: 50px; }*/
/*     </style>*/
/* </head>*/
/* <body>*/
/* */
/* {% include 'website/layouts/nav.twig' %}*/
/* {% block content %}*/
/* {% endblock %}*/
/* {% include 'website/layouts/footer.twig' %}*/
/* <script src="{{ baseUrl() }}/assets/website/js/jquery-2.0.3.min.js"></script>*/
/* <script src="{{ baseUrl() }}/assets/website/js/bootstrap.min.js"></script>*/
/* {% block count %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
