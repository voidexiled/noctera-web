<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin.visitors.html.twig */
class __TwigTemplate_51de44e2f01258df0638c7114ddcf429 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Users active within last ";
        // line 3
        echo twig_escape_filter($this->env, ($context["config_visitors_counter_ttl"] ?? null), "html", null, true);
        echo " minutes.</h3>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table id=\"tb_visitors\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>IP</th>
\t\t\t\t\t\t<th>Last visit</th>
\t\t\t\t\t\t<th>Page</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 17
        $context["i"] = 0;
        // line 18
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visitors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 19
            echo "\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 20
            echo "\t\t\t\t\t\t<tr role=\"row\" class=\"odd\">
\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "ip", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "lastvisit", [], "any", false, false, false, 22), "H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "page", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "page", [], "any", false, false, false, 24), 0, 50), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function () {
\t\t\$('#tb_visitors').DataTable()
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin.visitors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  80 => 24,  75 => 22,  71 => 21,  68 => 20,  65 => 19,  60 => 18,  58 => 17,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.visitors.html.twig", "/var/www/html/system/templates/admin.visitors.html.twig");
    }
}
