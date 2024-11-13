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

/* houses.view.html.twig */
class __TwigTemplate_111a467c8ed35efc4fe5e85df2e94ee3 extends \Twig\Template
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
        echo "<div class=\"TableContainer\">
    ";
        // line 2
        if ( !twig_test_empty(($context["errors"] ?? null))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "            <p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        <table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
            <div class=\"CaptionContainer\">
                <div class=\"CaptionInnerContainer\">
                    <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 10
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 11
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 12
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
                    <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 13
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
                    <div class=\"Text\" >";
            // line 14
            echo twig_escape_filter($this->env, ($context["houseName"] ?? null), "html", null, true);
            echo "</div>
                    <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 15
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
                    <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 16
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
                    <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 17
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 18
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                </div>
            </div>

            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        <table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
                            <tr style=\"display: inline-flex;\">
                                <td><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["imgPath"] ?? null), "html", null, true);
            echo "\"></td>
                                <td>
                                    ";
            // line 29
            echo twig_escape_filter($this->env, ($context["bedsMessage"] ?? null), "html", null, true);
            echo " and has a size of <b>";
            echo twig_escape_filter($this->env, ($context["houseSize"] ?? null), "html", null, true);
            echo " square meters</b>.

                                    ";
            // line 31
            if ((($context["rentType"] ?? null) != "never")) {
                // line 32
                echo "                                        The ";
                echo twig_escape_filter($this->env, ($context["rentType"] ?? null), "html", null, true);
                echo " is <b>";
                echo twig_escape_filter($this->env, ($context["houseRent"] ?? null), "html", null, true);
                echo " gold</b> and will be debited to the bank account on <b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 32), "serverName", [], "any", false, false, false, 32), "html", null, true);
                echo "</b>.
                                    ";
            }
            // line 34
            echo "                                    <br>

                                    ";
            // line 36
            if ( !twig_test_empty(($context["owner"] ?? null))) {
                // line 37
                echo "                                    The house has been rented by <b>";
                echo ($context["owner"] ?? null);
                echo "</b>.
                                    ";
            } else {
                // line 39
                echo "                                    No one has bought this house yet.
                                    ";
            }
            // line 41
            echo "                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    ";
        }
        // line 49
        echo "
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "houses.view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  150 => 41,  146 => 39,  140 => 37,  138 => 36,  134 => 34,  124 => 32,  122 => 31,  115 => 29,  110 => 27,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  59 => 7,  56 => 6,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "houses.view.html.twig", "/var/www/html/system/templates/houses.view.html.twig");
    }
}
