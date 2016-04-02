<?php

/* admin/layouts/master.twig */
class __TwigTemplate_a8623f3dead8e363576dcdbfe8edd9ff8c00f90b55ff1cab48614ffa8971edc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap Docs -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/docs.min.css\" rel=\"stylesheet\" media=\"screen\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap-theme.min.css\">

    <!-- Bootstrap Admin Theme -->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap-admin-theme.css\">
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap-admin-theme-change-size.css\">

    <!-- Datatables -->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/DT_bootstrap.css\">
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/js/jquery-2.0.3.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/js/bootstrap.min.js\"></script>
    <!-- Custom styles -->
    <style type=\"text/css\">
        @font-face {
            font-family: Ubuntu;
            src: url('fonts/Ubuntu-Regular.ttf');
        }

        .bs-docs-masthead {
            background-color: #6f5499;
            background-image: linear-gradient(to bottom, #563d7c 0px, #6f5499 100%);
            background-repeat: repeat-x;
        }

        .bs-docs-masthead {
            padding: 0;
        }

        .bs-docs-masthead h1 {
            color: #fff;
            font-size: 40px;
            margin: 0;
            padding: 34px 0;
            text-align: center;
        }

        .bs-docs-masthead a:hover {
            text-decoration: none;
        }

        .meritoo-logo a {
            background-color: #fff;
            border: 1px solid rgba(66, 139, 202, 0.4);
            display: block;
            font-family: Ubuntu;
            padding: 22px 0;
            text-align: center;
        }

        .meritoo-logo a,
        .meritoo-logo a:hover,
        .meritoo-logo a:focus {
            text-decoration: none;
        }

        .meritoo-logo a img {
            display: block;
            margin: 0 auto;
        }

        .meritoo-logo a span {
            color: #4e4b4b;
            font-size: 18px;
        }

        .row-urls {
            margin-top: 4px;
        }

        .row-urls .col-md-6 {
            text-align: center;
        }

        .row-urls .col-md-6 a {
            font-size: 14px;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"js/html5shiv.js\"></script>
    <script type=\"text/javascript\" src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"bootstrap-admin-with-small-navbar\">
<!-- small navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-left bootstrap-admin-theme-change-size\">
                        <li class=\"text\">Change size:</li>
                        <li><a class=\"size-changer small\">Small</a></li>
                        <li><a class=\"size-changer large active\">Large</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-hover=\"dropdown\"> <i
                                        class=\"glyphicon glyphicon-user\"></i>simon<i
                                        class=\"caret\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/admin/logout"), "html", null, true);
        echo "\">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- main / large navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small\"
     role=\"navigation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                            data-target=\".main-navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\"
                       href=\"\">后台管理系统</a>
                </div>
                <div class=\"collapse navbar-collapse main-navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                         <li class=\"active\"><a href=\"\">后台管理</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
    </div><!-- /.container -->
</nav>

";
        // line 150
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "
        <!-- footer -->
<div class=\"navbar navbar-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <footer role=\"contentinfo\">
                    <p class=\"left\">管理系统v1.0</p>

                    <p class=\"right\">&copy; 2015 <a href=\"https://github.com/xinzou\" target=\"_blank\">simon</a></p>
                </footer>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/js/twitter-bootstrap-hover-dropdown.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/js/bootstrap-admin-theme-change-size.js\"></script>
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "后台管理";
    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/layouts/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 150,  234 => 4,  226 => 169,  222 => 168,  204 => 152,  202 => 150,  162 => 113,  67 => 21,  63 => 20,  59 => 19,  53 => 16,  49 => 15,  43 => 12,  39 => 11,  33 => 8,  26 => 4,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{% block title %}后台管理{% endblock %}</title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <!-- Bootstrap Docs -->*/
/*     <link href="{{ baseUrl() }}/assets/admin/css/docs.min.css" rel="stylesheet" media="screen">*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap-theme.min.css">*/
/* */
/*     <!-- Bootstrap Admin Theme -->*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap-admin-theme.css">*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap-admin-theme-change-size.css">*/
/* */
/*     <!-- Datatables -->*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/DT_bootstrap.css">*/
/*     <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/js/jquery-2.0.3.min.js"></script>*/
/*     <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/js/bootstrap.min.js"></script>*/
/*     <!-- Custom styles -->*/
/*     <style type="text/css">*/
/*         @font-face {*/
/*             font-family: Ubuntu;*/
/*             src: url('fonts/Ubuntu-Regular.ttf');*/
/*         }*/
/* */
/*         .bs-docs-masthead {*/
/*             background-color: #6f5499;*/
/*             background-image: linear-gradient(to bottom, #563d7c 0px, #6f5499 100%);*/
/*             background-repeat: repeat-x;*/
/*         }*/
/* */
/*         .bs-docs-masthead {*/
/*             padding: 0;*/
/*         }*/
/* */
/*         .bs-docs-masthead h1 {*/
/*             color: #fff;*/
/*             font-size: 40px;*/
/*             margin: 0;*/
/*             padding: 34px 0;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .bs-docs-masthead a:hover {*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         .meritoo-logo a {*/
/*             background-color: #fff;*/
/*             border: 1px solid rgba(66, 139, 202, 0.4);*/
/*             display: block;*/
/*             font-family: Ubuntu;*/
/*             padding: 22px 0;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .meritoo-logo a,*/
/*         .meritoo-logo a:hover,*/
/*         .meritoo-logo a:focus {*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         .meritoo-logo a img {*/
/*             display: block;*/
/*             margin: 0 auto;*/
/*         }*/
/* */
/*         .meritoo-logo a span {*/
/*             color: #4e4b4b;*/
/*             font-size: 18px;*/
/*         }*/
/* */
/*         .row-urls {*/
/*             margin-top: 4px;*/
/*         }*/
/* */
/*         .row-urls .col-md-6 {*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .row-urls .col-md-6 a {*/
/*             font-size: 14px;*/
/*         }*/
/*     </style>*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="js/html5shiv.js"></script>*/
/*     <script type="text/javascript" src="js/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="bootstrap-admin-with-small-navbar">*/
/* <!-- small navbar -->*/
/* <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="collapse navbar-collapse">*/
/*                     <ul class="nav navbar-nav navbar-left bootstrap-admin-theme-change-size">*/
/*                         <li class="text">Change size:</li>*/
/*                         <li><a class="size-changer small">Small</a></li>*/
/*                         <li><a class="size-changer large active">Large</a></li>*/
/*                     </ul>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown">*/
/*                             <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i*/
/*                                         class="glyphicon glyphicon-user"></i>simon<i*/
/*                                         class="caret"></i></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ siteUrl('/admin/logout') }}">退出</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- main / large navbar -->*/
/* <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small"*/
/*      role="navigation">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                             data-target=".main-navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand"*/
/*                        href="">后台管理系统</a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse main-navbar-collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                          <li class="active"><a href="">后台管理</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div>*/
/*         </div>*/
/*     </div><!-- /.container -->*/
/* </nav>*/
/* */
/* {% block content %}*/
/* {% endblock %}*/
/* */
/*         <!-- footer -->*/
/* <div class="navbar navbar-footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <footer role="contentinfo">*/
/*                     <p class="left">管理系统v1.0</p>*/
/* */
/*                     <p class="right">&copy; 2015 <a href="https://github.com/xinzou" target="_blank">simon</a></p>*/
/*                 </footer>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/js/twitter-bootstrap-hover-dropdown.min.js"></script>*/
/* <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/js/bootstrap-admin-theme-change-size.js"></script>*/
/* </body>*/
/* </html>*/
/* */
