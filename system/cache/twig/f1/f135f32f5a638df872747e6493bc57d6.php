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

/* gesior-shop-system/templates/gifts.html.twig */
class __TwigTemplate_abd84f077eec9b02a7b74b7dea395b24 extends \Twig\Template
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
        echo "<style>
\t.offer_container {
\t\ttext-align: center;
\t}

\t.offer_type {
\t\tpadding: 5px 5px 1px 5px;
\t\tmargin: 5px 1px 0 1px;
\t\tbackground-color: #303030;
\t\tcolor: #FFFFFF !important;
\t}

\t.offer_table {
\t\tmargin-left: auto;
\t\tmargin-right: auto;
\t}

\t.offer_table tr td {
\t\ttext-align: center;
\t}
</style>

<div class=\"offer_container\">
\t";
        // line 24
        if (array_key_exists("warning", $context)) {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
\t";
        }
        // line 27
        echo "
\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offer_categories"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 29
            echo "\t\t<a class=\"offer_type\" href=\"?subtopic=gifts&offercat=";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if ((($context["get_offer_category"] ?? null) == $context["id"])) {
                echo " style=\"background-color: #505050\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t<table class=\"offer_table\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" width=\"550\">
\t\t<tr width=\"650\" bgcolor=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
\t\t\t<td colspan=\"4\"></td>
\t\t</tr>

\t\t<tr bgcolor=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
\t\t\t<td width=\"50\"><b>Picture</b></td>
\t\t\t<td width=\"350\" style=\"text-align: left\"><b>Description</b></td>
\t\t\t<td width=\"50\"><b>Points</b></td>
\t\t\t<td width=\"100\"><b>Select product</b></td>
\t\t</tr>

\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers_fetch"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["offer"], "category_id", [], "any", false, false, false, 44) == ($context["get_offer_category"] ?? null))) {
                // line 45
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
\t\t\t\t<td>
\t\t\t\t\t";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["offer"], "images", [], "any", false, false, false, 47);
                echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t<b>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 50), "html", null, true);
                echo "</b><br/>
\t\t\t\t\t";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 51);
                echo "
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "points", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 55
                if (($context["logged"] ?? null)) {
                    // line 56
                    echo "\t\t\t\t\t\t<form action=\"?subtopic=gifts&action=select_player\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"buy_id\" value=\"";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Buy\">
\t\t\t\t\t\t</form>
\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t\t<b>Login to buy</b>
\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 66
            echo "\t\t\t";
            if ((($__internal_compile_0 = ($context["offer_categories"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["get_offer_category"] ?? null)] ?? null) : null)) {
                // line 67
                echo "\t\t\t\t<td style=\"text-align: left\" colspan=\"4\">There is no offer here.</td>
\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t<td style=\"text-align: left\" colspan=\"4\">This offer type doesn't exist. Please specify different id.</td>
\t\t\t";
            }
            // line 71
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/templates/gifts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 72,  180 => 71,  176 => 69,  172 => 67,  169 => 66,  161 => 63,  157 => 61,  150 => 57,  147 => 56,  145 => 55,  140 => 53,  135 => 51,  131 => 50,  125 => 47,  119 => 45,  113 => 44,  103 => 37,  96 => 33,  92 => 31,  77 => 29,  73 => 28,  70 => 27,  64 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/templates/gifts.html.twig", "/var/www/html/plugins/gesior-shop-system/templates/gifts.html.twig");
    }
}
