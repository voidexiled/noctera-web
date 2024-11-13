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

/* changelog.html.twig */
class __TwigTemplate_f861ae098bed77669f8fa4dfce39c14f extends \Twig\Template
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
        echo "<br/>
<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
\t\t<td width=\"22\"><span class=\"white\"><b>Type</b></span></td>
\t\t<td width=\"22\"><span class=\"white\"><b>Where</b></span></td>
\t\t<td width=\"50\"><span class=\"white\"><b>Date</b></span></td>
\t\t<td><span class=\"white\"><b>Description</b></span></td>
\t</tr>
\t";
        // line 9
        if ((twig_length_filter($this->env, ($context["changelogs"] ?? null)) > 0)) {
            // line 10
            echo "\t\t";
            $context["i"] = 0;
            // line 11
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["changelogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 12
                echo "\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                echo "\">
\t\t\t<td align=\"center\">
\t\t\t\t<img src=\"images/changelog/";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 14), "html", null, true);
                echo ".png\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 14)), "html", null, true);
                echo "\"/>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<img src=\"images/changelog/";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "where", [], "any", false, false, false, 17), "html", null, true);
                echo ".png\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "where", [], "any", false, false, false, 17)), "html", null, true);
                echo "\"/>
\t\t\t</td>
\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "date", [], "any", false, false, false, 19), "j.m.Y"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["log"], "body", [], "any", false, false, false, 20);
                echo "</td>
\t\t</tr>
\t\t";
                // line 22
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 23
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t";
        } else {
            // line 25
            echo "\t<tr>
\t\t<td colspan=\"4\" bgcolor=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 26), "html", null, true);
            echo "\">There are no changelogs for the moment.</td>
\t</tr>
\t";
        }
        // line 29
        echo "
\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t";
        // line 31
        if ((($context["page"] ?? null) > 0)) {
            // line 32
            echo "\t\t<tr><td width=\"100%\" align=\"right\" valign=\"bottom\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()(("changelog/" . (($context["page"] ?? null) - 1))), "html", null, true);
            echo "\" class=\"size_xxs\">Previous Page</a></td></tr>
\t\t";
        }
        // line 34
        echo "\t\t";
        if (($context["next_page"] ?? null)) {
            // line 35
            echo "\t\t<tr><td width=\"100%\" align=\"right\" valign=\"bottom\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()(("changelog/" . (($context["page"] ?? null) + 1))), "html", null, true);
            echo "\" class=\"size_xxs\">Next Page</a></td></tr>
\t";
        }
        // line 37
        echo "\t</table>
</table>";
    }

    public function getTemplateName()
    {
        return "changelog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  125 => 35,  122 => 34,  116 => 32,  114 => 31,  110 => 29,  104 => 26,  101 => 25,  98 => 24,  92 => 23,  90 => 22,  85 => 20,  81 => 19,  74 => 17,  66 => 14,  60 => 12,  55 => 11,  52 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "changelog.html.twig", "/var/www/html/system/templates/changelog.html.twig");
    }
}
