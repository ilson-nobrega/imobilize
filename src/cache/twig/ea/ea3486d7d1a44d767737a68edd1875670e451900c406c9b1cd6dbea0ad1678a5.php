<?php

/* home.twig */
class __TwigTemplate_7ca9f9dbf423608286f6ea2568a1f71d7afc321476bf503a313c574c52e3d479 extends Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Slim 3</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Slim = ";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
<div>a microframework for PHP</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Slim 3</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='{{ base_url() }}/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Slim = {{ name }}</h1>
<div>a microframework for PHP</div>
</body>
</html>", "home.twig", "/Users/ilson.nobrega/Desktop/ProjetoPI/imobilize/src/templates/home.twig");
    }
}
