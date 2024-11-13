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

/* faq.html.twig */
class __TwigTemplate_23eaad068b721df32bfcf3c3fa00874c extends \Twig\Template
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
        echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t<tr class=\"white\" bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<b>FAQ</b>
\t\t</td>
\t\t<td align=\"right\">
\t\t\t<a href=\"#\" onclick=\"toggleAll(); return false;\">Toggle all</a>
\t\t</td>
\t\t";
        // line 9
        if (($context["canEdit"] ?? null)) {
            // line 10
            echo "\t\t<td style=\"width: 300px\">
\t\t\tOptions
\t\t</td>
\t\t";
        }
        // line 14
        echo "\t</tr>
\t";
        // line 15
        $context["i"] = 0;
        // line 16
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 17
            echo "\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 18
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
            echo "\">
\t\t<td colspan=\"2\" style=\"cursor: pointer;\" onclick=\"toggleVisibility('faq_";
            // line 19
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "'); return false;\">
\t\t\t<b>";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 20);
            echo "</b>

\t\t\t<div id=\"faq_";
            // line 22
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\" style=\"display: none;\">";
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 22);
            echo "</div>
\t\t</td>
\t\t";
            // line 24
            if (($context["canEdit"] ?? null)) {
                // line 25
                echo "\t\t\t<td>
\t\t\t\t<a href=\"?subtopic=faq&action=edit&id=";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t\t<a id=\"delete\" href=\"?subtopic=faq&action=delete&id=";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t\t</a>
\t\t\t\t<a href=\"?subtopic=faq&action=hide&id=";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" title=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["faq"], "hidden", [], "any", false, false, false, 32) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t<img src=\"images/";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["faq"], "hidden", [], "any", false, false, false, 33) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if ((twig_get_attribute($this->env, $this->source, $context["faq"], "hidden", [], "any", false, false, false, 33) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 34
                echo "\t\t\t\t</a>
                ";
                // line 35
                if ((($context["i"] ?? null) != 1)) {
                    // line 36
                    echo "\t\t\t\t\t<a href=\"?subtopic=faq&action=moveup&id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t\t\t</a>
                ";
                }
                // line 40
                echo "                ";
                if ((($context["i"] ?? null) != ($context["last"] ?? null))) {
                    // line 41
                    echo "\t\t\t\t\t<a href=\"?subtopic=faq&action=movedown&id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t\t\t</a>
                ";
                }
                // line 45
                echo "\t\t\t</td>
\t\t";
            }
            // line 47
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</table>

<script type=\"text/javascript\">
\tvar expanded = false;

\tfunction toggleVisibility(id)
\t{
\t\tvar tmp = document.getElementById(id);
\t\tif(tmp)
\t\t\ttmp.style.display = tmp.style.display == 'none' ? '' : 'none';
\t}

\tfunction toggleAll()
\t{
\t\tfor(i = 1; i < ";
        // line 63
        echo twig_escape_filter($this->env, (($context["i"] ?? null) + 1), "html", null, true);
        echo "; i++)
\t\t{
\t\t\tdocument.getElementById('faq_' + i).style.display = expanded ? 'none' : '';
\t\t}

\t\texpanded = !expanded;
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 63,  166 => 49,  159 => 47,  155 => 45,  147 => 41,  144 => 40,  136 => 36,  134 => 35,  131 => 34,  119 => 33,  109 => 32,  103 => 29,  97 => 26,  94 => 25,  92 => 24,  85 => 22,  80 => 20,  76 => 19,  71 => 18,  68 => 17,  63 => 16,  61 => 15,  58 => 14,  52 => 10,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "faq.html.twig", "/var/www/html/system/templates/faq.html.twig");
    }
}
