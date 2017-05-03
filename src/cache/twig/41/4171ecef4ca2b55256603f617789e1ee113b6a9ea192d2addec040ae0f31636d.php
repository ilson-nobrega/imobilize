<?php

/* login.twig */
class __TwigTemplate_2724f4c831dc7f6568857878e4fdad6874d261f2d0cb81ad4bfd77b27f4f9012 extends Twig_Template
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

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Entre com seus dados de acesso</h3>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "message", array())) {
            // line 46
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "message", array()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 48
        echo "                    <form role=\"form\" method=\"POST\" action=\"/login\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Usuário\" name=\"usuario\" type=\"text\" autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Senha\" name=\"senha\" type=\"password\" value=\"\">
                            </div>
                            <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" value=\"Entrar\">
                            <div class=\"form-group text-center\">
                                ou <a href=\"/register\">registre-se</a>.
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src=\"../vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"../dist/js/sb-admin-2.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 48,  67 => 46,  65 => 45,  19 => 1,);
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

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Entre com seus dados de acesso</h3>
                </div>
                <div class=\"panel-body\">
                    {% if(error.message) %}
                        <div class=\"alert alert-danger\">{{ error.message }}</div>
                    {% endif %}
                    <form role=\"form\" method=\"POST\" action=\"/login\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Usuário\" name=\"usuario\" type=\"text\" autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Senha\" name=\"senha\" type=\"password\" value=\"\">
                            </div>
                            <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" value=\"Entrar\">
                            <div class=\"form-group text-center\">
                                ou <a href=\"/register\">registre-se</a>.
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src=\"../vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"../dist/js/sb-admin-2.js\"></script>

</body>

</html>
", "login.twig", "/Users/ilson.nobrega/Desktop/ProjetoPI/imobilize/src/templates/login.twig");
    }
}
