<?php

/* admin.twig */
class __TwigTemplate_08de2785e0e37ee1444bd90d03e4dfa8c99a631697ab71f81e43f28fa021b8b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'customCss' => array($this, 'block_customCss'),
            'sidebar' => array($this, 'block_sidebar'),
            'contentHeader' => array($this, 'block_contentHeader'),
            'content' => array($this, 'block_content'),
            'customJs' => array($this, 'block_customJs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Imobilize - Sistema de Gestão de Aluguéis</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"../vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../dist/css/sb-admin-2.css\" rel=\"stylesheet\">
    ";
        // line 22
        $this->displayBlock('customCss', $context, $blocks);
        // line 24
        echo "
    <!-- Morris Charts CSS -->
    <link href=\"../vendor/morrisjs/morris.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"../vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<div id=\"wrapper\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Imobilize</a>
        </div>
        <!-- /.navbar-header -->

        <ul class=\"nav navbar-top-links navbar-right\">
            <!-- /.dropdown -->
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-user\">
                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> MInha conta</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li><a href=\"/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class=\"navbar-default sidebar\" role=\"navigation\">
            ";
        // line 77
        $this->displayBlock('sidebar', $context, $blocks);
        // line 80
        echo "        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 87
        $this->displayBlock('contentHeader', $context, $blocks);
        echo "</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"../vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>

";
        // line 107
        $this->displayBlock('customJs', $context, $blocks);
        // line 109
        echo "<!-- Custom Theme JavaScript -->
<script src=\"../dist/js/sb-admin-2.js\"></script>

</body>

</html>
";
    }

    // line 22
    public function block_customCss($context, array $blocks = array())
    {
        // line 23
        echo "    ";
    }

    // line 77
    public function block_sidebar($context, array $blocks = array())
    {
        // line 78
        echo "                ";
        $this->loadTemplate("sidebar.twig", "admin.twig", 78)->display($context);
        // line 79
        echo "            ";
    }

    // line 87
    public function block_contentHeader($context, array $blocks = array())
    {
        echo " ";
    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 107
    public function block_customJs($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 107,  176 => 91,  170 => 87,  166 => 79,  163 => 78,  160 => 77,  156 => 23,  153 => 22,  143 => 109,  141 => 107,  124 => 92,  122 => 91,  115 => 87,  106 => 80,  104 => 77,  49 => 24,  47 => 22,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Imobilize - Sistema de Gestão de Aluguéis</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"../vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../dist/css/sb-admin-2.css\" rel=\"stylesheet\">
    {% block customCss %}
    {% endblock customCss %}

    <!-- Morris Charts CSS -->
    <link href=\"../vendor/morrisjs/morris.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"../vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<div id=\"wrapper\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Imobilize</a>
        </div>
        <!-- /.navbar-header -->

        <ul class=\"nav navbar-top-links navbar-right\">
            <!-- /.dropdown -->
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-user\">
                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> MInha conta</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li><a href=\"/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class=\"navbar-default sidebar\" role=\"navigation\">
            {% block sidebar %}
                {% include 'sidebar.twig' %}
            {% endblock sidebar %}
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% block contentHeader %} {% endblock contentHeader %}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        {% block content %} {% endblock content %}
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"../vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>

{% block customJs %}
{% endblock customJs %}
<!-- Custom Theme JavaScript -->
<script src=\"../dist/js/sb-admin-2.js\"></script>

</body>

</html>
", "admin.twig", "/home/ilson/Projects/imobilize/src/templates/admin.twig");
    }
}
