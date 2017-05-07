<?php

/* /pages/proprietario/home.twig */
class __TwigTemplate_98503fe0d5b9d53658b7d47b1412df76fbf979eeb0725101445c02e1584d7d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "/pages/proprietario/home.twig", 1);
        $this->blocks = array(
            'customCss' => array($this, 'block_customCss'),
            'contentHeader' => array($this, 'block_contentHeader'),
            'content' => array($this, 'block_content'),
            'customJs' => array($this, 'block_customJs'),
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
    public function block_customCss($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"../vendor/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet\">
<link href=\"../vendor/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_contentHeader($context, array $blocks = array())
    {
        // line 9
        echo "    Proprietários
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"panel-body\">
        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"proprietarios\">
            <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Identidade</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["proprietario"]) {
            // line 27
            echo "                <tr class=\"odd gradeX\">
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietario"], "cpf", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietario"], "nome", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietario"], "rg", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietario"], "telefone", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietario"], "email", array()), "html", null, true);
            echo "</td>
                    <td>X</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proprietario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 41
    public function block_customJs($context, array $blocks = array())
    {
        // line 42
        echo "<script src=\"../vendor/datatables/js/jquery.dataTables.min.js\"></script>
<script src=\"../vendor/datatables-plugins/dataTables.bootstrap.min.js\"></script>
<script src=\"../vendor/datatables-responsive/dataTables.responsive.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#proprietarios').DataTable({
            responsive: true,
            language: {
                url: \"../dist/js/ptbr.datatable.json\"
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "/pages/proprietario/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  106 => 41,  99 => 36,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  70 => 27,  66 => 26,  51 => 13,  48 => 12,  43 => 9,  40 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.twig\" %}

{% block customCss %}
<link href=\"../vendor/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet\">
<link href=\"../vendor/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet\">
{% endblock customCss %}

{% block contentHeader %}
    Proprietários
{% endblock contentHeader %}

{% block content %}
    <div class=\"panel-body\">
        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"proprietarios\">
            <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Identidade</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            {% for proprietario in data %}
                <tr class=\"odd gradeX\">
                    <td>{{ proprietario.cpf }}</td>
                    <td>{{ proprietario.nome }}</td>
                    <td>{{ proprietario.rg }}</td>
                    <td>{{ proprietario.telefone }}</td>
                    <td>{{ proprietario.email }}</td>
                    <td>X</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock content %}

{% block customJs %}
<script src=\"../vendor/datatables/js/jquery.dataTables.min.js\"></script>
<script src=\"../vendor/datatables-plugins/dataTables.bootstrap.min.js\"></script>
<script src=\"../vendor/datatables-responsive/dataTables.responsive.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#proprietarios').DataTable({
            responsive: true,
            language: {
                url: \"../dist/js/ptbr.datatable.json\"
            }
        });
    });
</script>
{% endblock customJs %}", "/pages/proprietario/home.twig", "/home/ilson/Projects/imobilize/src/templates/pages/proprietario/home.twig");
    }
}
