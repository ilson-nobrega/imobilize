<?php

/* /pages/home.twig */
class __TwigTemplate_a640cedd7251b2fd6af884c66eb058def641044c010344b8051d48e3b6fdad52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "/pages/home.twig", 1);
        $this->blocks = array(
            'contentHeader' => array($this, 'block_contentHeader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contentHeader($context, array $blocks = array())
    {
        // line 4
        echo "Dashboard
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<!-- /.row -->
<div class=\"row\">
    <div class=\"col-md-12 col-lg-12\">
        <div class=\"alert alert-warning\">
            Olá ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "nome", array()), "html", null, true);
        echo "! Bem vindo ao Imobilize, confira abaixo os seus relatórios mensais.
        </div>
    </div>
    <div class=\"col-md-12 col-lg-12\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-list-alt fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">26</div>
                            <div>Contratos</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/alugueis\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-user fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">12</div>
                            <div>Inquilinos</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/inquilinos\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-home fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">124</div>
                            <div>Imóveis</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/imoveis\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-key fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">13</div>
                            <div>Proprietários</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/proprietarios\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "                ";
        // line 109
        echo "                    ";
        // line 110
        echo "                ";
        // line 111
        echo "                ";
        // line 112
        echo "                    ";
        // line 113
        echo "                    ";
        // line 114
        echo "                ";
        // line 115
        echo "                ";
        // line 116
        echo "            ";
        // line 117
        echo "        ";
        // line 118
        echo "    ";
        // line 119
        echo "</div>
<div class=\"row\">

</div>
";
    }

    public function getTemplateName()
    {
        return "/pages/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 119,  166 => 118,  164 => 117,  162 => 116,  160 => 115,  158 => 114,  156 => 113,  154 => 112,  152 => 111,  150 => 110,  148 => 109,  146 => 108,  144 => 107,  142 => 106,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.twig\" %}

{% block contentHeader %}
Dashboard
{% endblock contentHeader %}

{% block content %}
<!-- /.row -->
<div class=\"row\">
    <div class=\"col-md-12 col-lg-12\">
        <div class=\"alert alert-warning\">
            Olá {{ data.nome }}! Bem vindo ao Imobilize, confira abaixo os seus relatórios mensais.
        </div>
    </div>
    <div class=\"col-md-12 col-lg-12\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-list-alt fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">26</div>
                            <div>Contratos</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/alugueis\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-user fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">12</div>
                            <div>Inquilinos</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/inquilinos\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-home fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">124</div>
                            <div>Imóveis</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/imoveis\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-key fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">13</div>
                            <div>Proprietários</div>
                        </div>
                    </div>
                </div>
                <a href=\"/admin/proprietarios\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Ver Detalhes</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {#<div class=\"col-md-6\">#}
        {#<div class=\"col-lg-12 col-md-12\">#}
            {#<div class=\"panel panel-default\">#}
                {#<div class=\"panel-heading\">#}
                    {#<i class=\"fa fa-bar-chart-o fa-fw\"></i> Donut Chart Example#}
                {#</div>#}
                {#<div class=\"panel-body\">#}
                    {#<div id=\"morris-donut-chart\"></div>#}
                    {#<a href=\"#\" class=\"btn btn-default btn-block\">View Details</a>#}
                {#</div>#}
                {#<!-- /.panel-body -->#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
</div>
<div class=\"row\">

</div>
{% endblock content %}", "/pages/home.twig", "/home/ilson/Projects/imobilize/src/templates/pages/home.twig");
    }
}
