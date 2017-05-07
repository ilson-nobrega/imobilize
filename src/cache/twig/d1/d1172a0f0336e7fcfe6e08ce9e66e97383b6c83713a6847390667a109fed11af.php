<?php

/* sidebar.twig */
class __TwigTemplate_910933f0a4a3362a84dd63c49272890f4615043089797f10cb687105ea2ac246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"sidebar-nav navbar-collapse\">
    <ul class=\"nav\" id=\"side-menu\">
        <li class=\"sidebar-search\">
        </li>
        <li>
            <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
        </li>
        <li>
            <a href=\"/admin/proprietarios\"><i class=\"fa fa-key fa-fw\"></i> Proprietários</a>
        </li>
        <li>
            <a href=\"/admin/imoveis\"><i class=\"fa fa-home fa-fw\"></i> Imóveis</a>
        </li>
        <li>
            <a href=\"/admin/inquilinos\"><i class=\"fa fa-user fa-fw\"></i> Inquilinos</a>
        </li>
        <li>
            <a href=\"/admin/alugueis\"><i class=\"fa fa-list-alt fa-fw\"></i> Aluguéis</a>
        </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->
";
    }

    public function getTemplateName()
    {
        return "sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sidebar %}
<div class=\"sidebar-nav navbar-collapse\">
    <ul class=\"nav\" id=\"side-menu\">
        <li class=\"sidebar-search\">
        </li>
        <li>
            <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
        </li>
        <li>
            <a href=\"/admin/proprietarios\"><i class=\"fa fa-key fa-fw\"></i> Proprietários</a>
        </li>
        <li>
            <a href=\"/admin/imoveis\"><i class=\"fa fa-home fa-fw\"></i> Imóveis</a>
        </li>
        <li>
            <a href=\"/admin/inquilinos\"><i class=\"fa fa-user fa-fw\"></i> Inquilinos</a>
        </li>
        <li>
            <a href=\"/admin/alugueis\"><i class=\"fa fa-list-alt fa-fw\"></i> Aluguéis</a>
        </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->
{% endblock sidebar %}", "sidebar.twig", "/home/ilson/Projects/imobilize/src/templates/sidebar.twig");
    }
}
