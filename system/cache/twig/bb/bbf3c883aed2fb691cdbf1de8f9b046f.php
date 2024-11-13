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

/* experience_table.html.twig */
class __TwigTemplate_37d09795b0f300b8cae6fa3fedac71ef extends \Twig\Template
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
        echo "This is a list of the experience points that are required to advance to the various levels.
Remember you can also check the respective skill bar in your skill window of the client to check your progress towards the next level.<br/><br/>

<div class=\"TableContainer\">
  <div class=\"CaptionContainer\">
    <div class=\"CaptionInnerContainer\"> <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> <span class=\"CaptionBorderTop\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span> <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
      <div class=\"Text\">Experience Table</div>
      <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span> <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span> <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> </div>
  </div>
  <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
      <tr>
        <td><div class=\"InnerTableContainer\">
            <table style=\"width:100%;\" id=\"ExperienceTable\">
              <tbody>
                <tr>
\t\t\t\t";
        // line 17
        $context["rows"] = 0;
        // line 18
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "experiencetable_columns", [], "any", false, false, false, 18) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                  <td><div class=\"AdditionalTableShadow\">
                      <table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">
                        <tbody>
                          <tr class=\"AdditionalTableHeadline\">
                            <td><b>Level</b></td>
                            <td><b>Experience</b></td>
                          </tr>
\t\t\t\t\t\t  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((($context["i"] * twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "experiencetable_rows", [], "any", false, false, false, 26)) + 1), ((($context["i"] * twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "experiencetable_rows", [], "any", false, false, false, 26)) + (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "experiencetable_rows", [], "any", false, false, false, 26) + 1)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 27
                echo "\t\t\t\t\t\t  ";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 28
                echo "                          <tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["rows"] ?? null)), "html", null, true);
                echo "\">
                            <td style=\"border: 1px solid #FAF0D7; text-align: right;\">";
                // line 29
                echo twig_escape_filter($this->env, $context["level"], "html", null, true);
                echo "</td>
                            <td style=\"border: 1px solid #FAF0D7; text-align: right;\">";
                // line 30
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["experience"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["level"]] ?? null) : null), "html", null, true);
                echo "</td>
                          </tr>
\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                        </tbody>
                      </table>
                    </div></td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "experience_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  114 => 33,  105 => 30,  101 => 29,  96 => 28,  93 => 27,  89 => 26,  80 => 19,  75 => 18,  73 => 17,  55 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "experience_table.html.twig", "/var/www/html/system/templates/experience_table.html.twig");
    }
}
