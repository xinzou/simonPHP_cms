<?php

/* admin/login.twig */
class __TwigTemplate_934e89df99bc6b47bf0e7caad27efda8d8be28347b26354d5ec6d01c9d987a77 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"bootstrap-admin-vertical-centered\">
<head>
    <title>管理系统</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap-theme.min.css\">

    <!-- Bootstrap Admin Theme -->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/css/bootstrap-admin-theme.css\">

    <!-- Custom styles -->
    <style type=\"text/css\">
        .alert{
            margin: 0 auto 20px;
        }
    </style>
</head>
<body class=\"bootstrap-admin-without-padding\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <form method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/admin/login"), "html", null, true);
        echo "\" class=\"bootstrap-admin-login-form\">
                <h1>管理系统</h1>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" name=\"username\" placeholder=\"Username\">
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"Password\">
                </div>
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">登录</button>
            </form>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/js/jquery-2.0.3.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/assets/admin/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        // Setting focus
        \$('input[name=\"username\"]').focus();

        // Setting width of the alert box
        var alert = \$('.alert');
        var formWidth = \$('.bootstrap-admin-login-form').innerWidth();
        var alertPadding = parseInt(\$('.alert').css('padding'));

        if (isNaN(alertPadding)) {
            alertPadding = parseInt(\$(alert).css('padding-left'));
        }

        \$('.alert').width(formWidth - 2 * alertPadding);
    });
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 40,  71 => 39,  54 => 25,  38 => 12,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="bootstrap-admin-vertical-centered">*/
/* <head>*/
/*     <title>管理系统</title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <!-- Bootstrap -->*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap-theme.min.css">*/
/* */
/*     <!-- Bootstrap Admin Theme -->*/
/*     <link rel="stylesheet" media="screen" href="{{ baseUrl() }}/assets/admin/css/bootstrap-admin-theme.css">*/
/* */
/*     <!-- Custom styles -->*/
/*     <style type="text/css">*/
/*         .alert{*/
/*             margin: 0 auto 20px;*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body class="bootstrap-admin-without-padding">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <form method="post" action="{{ siteUrl('/admin/login') }}" class="bootstrap-admin-login-form">*/
/*                 <h1>管理系统</h1>*/
/*                 <div class="form-group">*/
/*                     <input class="form-control" type="text" name="username" placeholder="Username">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input class="form-control" type="password" name="password" placeholder="Password">*/
/*                 </div>*/
/*                 <button class="btn btn-lg btn-primary" type="submit">登录</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/js/jquery-2.0.3.min.js"></script>*/
/* <script type="text/javascript" src="{{ baseUrl() }}/assets/admin/js/bootstrap.min.js"></script>*/
/* <script type="text/javascript">*/
/*     $(function() {*/
/*         // Setting focus*/
/*         $('input[name="username"]').focus();*/
/* */
/*         // Setting width of the alert box*/
/*         var alert = $('.alert');*/
/*         var formWidth = $('.bootstrap-admin-login-form').innerWidth();*/
/*         var alertPadding = parseInt($('.alert').css('padding'));*/
/* */
/*         if (isNaN(alertPadding)) {*/
/*             alertPadding = parseInt($(alert).css('padding-left'));*/
/*         }*/
/* */
/*         $('.alert').width(formWidth - 2 * alertPadding);*/
/*     });*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
