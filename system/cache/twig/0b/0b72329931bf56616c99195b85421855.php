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

/* gesior-shop-system/templates/most-popular.html.twig */
class __TwigTemplate_422a62c5a478781261a90fc33c924caa extends \Twig\Template
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
        echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr style=\"background-color: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 2), "html", null, true);
        echo "; text-align: center\">
\t\t<td class=\"white\" colspan=\"3\">
\t\t\t<strong>The most popular items in Shop!</strong>
\t\t</td>
\t</tr>
\t<tr style=\"background-color: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 7), "html", null, true);
        echo "; text-align: center\">
\t\t<td class=\"white\" style=\"width: 33%\">
\t\t\t<b>#1</b>
\t\t</td>
\t\t<td class=\"white\" style=\"width: 33%\">
\t\t\t<b>#2</b>
\t\t</td>
\t\t<td class=\"white\" style=\"width: 33%\">
\t\t\t<b>#3</b>
\t\t</td>
\t</tr>
\t<tr>
\t";
        // line 19
        $context["i"] = 0;
        // line 20
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 21
            echo "\t\t<td style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
            echo "; text-align: center\">
\t\t\t";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "images", [], "any", false, false, false, 22);
            echo "
\t\t\t<br/><br/>
\t\t\tOffer Name: <b>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</b><br />
\t\t\tPoints: <b>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "points", [], "any", false, false, false, 25), "html", null, true);
            echo "</b><br />
\t\t\t";
            // line 26
            if (($context["logged"] ?? null)) {
                // line 27
                echo "\t\t\t<form action=\"?subtopic=gifts&action=select_player\" method=POST>
\t\t\t\t<input type=\"hidden\" name=\"buy_id\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
\t\t\t\t<input type=\"submit\" value=\"Buy\">
\t\t\t</form>
\t\t\t";
            }
            // line 32
            echo "\t\t</td>
\t\t";
            // line 33
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 34
            echo "\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t\t<td style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
            echo "; text-align: center\" colspan=\"3\">
\t\t\tNothing bought yet.
\t\t</td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</tr>
</table>
<br/>
";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/templates/most-popular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  111 => 35,  106 => 34,  104 => 33,  101 => 32,  94 => 28,  91 => 27,  89 => 26,  85 => 25,  81 => 24,  76 => 22,  71 => 21,  65 => 20,  63 => 19,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/templates/most-popular.html.twig", "/var/www/html/plugins/gesior-shop-system/templates/most-popular.html.twig");
    }
}
