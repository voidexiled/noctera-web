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

/* team.html.twig */
class __TwigTemplate_8f3305b370b0b69a86e3cb9b81741396 extends \Twig\Template
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
        echo "<div style=\"text-align: -webkit-center !important;\">
\t<table>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/headline-bracer-left.gif\"></td>
\t\t\t\t<td style=\"text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;\">Staff Team</td>
\t\t\t\t<td><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/headline-bracer-right.gif\"></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>

<br>

";
        // line 15
        $context["godMembersExist"] = false;
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 17
            echo "    ";
            if ( !($context["godMembersExist"] ?? null)) {
                // line 18
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 18)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 18) == "god"))) {
                    // line 19
                    echo "            ";
                    $context["godMembersExist"] = true;
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        if (($context["godMembersExist"] ?? null)) {
            // line 24
            echo "
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
\t<div class=\"CaptionInnerContainer\">
\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 28
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 29
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 30
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 31
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 32
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 33
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<div class=\"Text\" style=\"min-height: 17px\"><div style=\"float: left\">Administrator</div> </div>
\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 35
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 36
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\"></span>
\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 38
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t</div>
</div>
  
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" align=\"\" style=\"border: 1px solid #505050;box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)\">
\t<tbody>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableContent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent \" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 56)) {
                echo "<td style=\"width: 5%;\"><b>#</b></td>";
            }
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Group</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"30%\"><b>Name</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Status</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Last Login</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>World</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Country</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 65)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 65) == "god"))) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 66)));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                        echo "\" style=\"height: 64px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 69
                        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 69)) {
                            // line 70
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"position: absolute; margin-top: ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "player", [], "any", false, false, false, 70), "looktype", [], "any", false, false, false, 70), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "outfit", [], "any", false, false, false, 70), "html", null, true);
                            echo "\" alt=\"player outfit\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 72
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><b><font style=\"font-family: Verdana; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"red\">Administrator</font><b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 74
                        echo twig_get_attribute($this->env, $this->source, $context["member"], "link", [], "any", false, false, false, 74);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 76)) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"green\"> Online </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"red\"> Offline </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 84)) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 85), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin-left: 5px; margin-top: -1px; position: absolute; border: none; border-top: 1px dotted black; width: 88%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNot connected yet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 92
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 92)) {
                            // line 93
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 93), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["lua"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["serverName"] ?? null) : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 99
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 99)) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 100);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo Flag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table></div>
<br><br>
";
        }
        // line 124
        echo "

";
        // line 126
        $context["cmMembersExist"] = false;
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 128
            echo "    ";
            if ( !($context["cmMembersExist"] ?? null)) {
                // line 129
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 129)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 129) == "community manager"))) {
                    // line 130
                    echo "            ";
                    $context["cmMembersExist"] = true;
                    // line 131
                    echo "        ";
                }
                // line 132
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        if (($context["cmMembersExist"] ?? null)) {
            // line 135
            echo "
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
\t<div class=\"CaptionInnerContainer\">
\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 139
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 140
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 141
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 142
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 143
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 144
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<div class=\"Text\" style=\"min-height: 17px\"><div style=\"float: left\">Community Manager</div> </div>
\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 146
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 147
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\"></span>
\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 149
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t</div>
</div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" align=\"\" style=\"border: 1px solid #505050;box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)\">
\t<tbody>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableContent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent \" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 166
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 166)) {
                echo "<td style=\"width: 5%;\"><b>#</b></td>";
            }
            // line 167
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Group</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"30%\"><b>Name</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Status</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Last Login</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>World</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Country</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 175)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 175) == "community manager"))) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 176)));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                        echo "\" style=\"height: 64px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"position: absolute; margin-top: ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "player", [], "any", false, false, false, 180), "looktype", [], "any", false, false, false, 180), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "outfit", [], "any", false, false, false, 180), "html", null, true);
                            echo "\" alt=\"player outfit\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><b><font style=\"font-family: Verdana; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"chocolate\">Community Manager</font><b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["member"], "link", [], "any", false, false, false, 184);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"green\"> Online </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 189
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"red\"> Offline </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 194
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 194)) {
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 195), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin-left: 5px; margin-top: -1px; position: absolute; border: none; border-top: 1px dotted black; width: 88%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNot connected yet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 202
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 203), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 205
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["config"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["lua"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["serverName"] ?? null) : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 209
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 209)) {
                            // line 210
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 210);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 212
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo Flag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 214
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table></div>
<br><br>
";
        }
        // line 234
        echo "
";
        // line 235
        $context["gmMembersExist"] = false;
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 237
            echo "    ";
            if ( !($context["gmMembersExist"] ?? null)) {
                // line 238
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 238)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 238) == "gamemaster"))) {
                    // line 239
                    echo "            ";
                    $context["gmMembersExist"] = true;
                    // line 240
                    echo "        ";
                }
                // line 241
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        if (($context["gmMembersExist"] ?? null)) {
            // line 244
            echo "
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
\t<div class=\"CaptionInnerContainer\">
\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 248
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 249
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 250
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 251
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 252
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 253
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<div class=\"Text\" style=\"min-height: 17px\"><div style=\"float: left\">GameMaster</div> </div>
\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 255
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 256
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\"></span>
\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 258
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t</div>
</div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" align=\"\" style=\"border: 1px solid #505050;box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)\">
\t<tbody>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableContent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent \" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 275
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 275)) {
                echo "<td style=\"width: 5%;\"><b>#</b></td>";
            }
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Group</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"30%\"><b>Name</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Status</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Last Login</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>World</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Country</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 284)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 284) == "gamemaster"))) {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 285)));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 286
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                        echo "\" style=\"height: 64px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 288
                        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 288)) {
                            // line 289
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"position: absolute; margin-top: ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "player", [], "any", false, false, false, 289), "looktype", [], "any", false, false, false, 289), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "outfit", [], "any", false, false, false, 289), "html", null, true);
                            echo "\" alt=\"player outfit\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 291
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><b><font style=\"font-family: Verdana; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"royalblue\">GameMaster</font><b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 293
                        echo twig_get_attribute($this->env, $this->source, $context["member"], "link", [], "any", false, false, false, 293);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 295
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 295)) {
                            // line 296
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"green\"> Online </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 298
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"red\"> Offline </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 300
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 303
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 303)) {
                            // line 304
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 304), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin-left: 5px; margin-top: -1px; position: absolute; border: none; border-top: 1px dotted black; width: 88%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 307
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNot connected yet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 311
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 311)) {
                            // line 312
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 312), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 314
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["config"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["lua"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["serverName"] ?? null) : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 316
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 318
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 318)) {
                            // line 319
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 319);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 321
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo Flag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 323
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 326
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table></div>
<br><br>
";
        }
        // line 343
        echo "
";
        // line 344
        $context["seniorMembersExist"] = false;
        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 346
            echo "    ";
            if ( !($context["seniorMembersExist"] ?? null)) {
                // line 347
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 347)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 347) == "senior tutor"))) {
                    // line 348
                    echo "            ";
                    $context["seniorMembersExist"] = true;
                    // line 349
                    echo "        ";
                }
                // line 350
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (($context["seniorMembersExist"] ?? null)) {
            // line 353
            echo "
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
\t<div class=\"CaptionInnerContainer\">
\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 357
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 358
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 359
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 360
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 361
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 362
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<div class=\"Text\" style=\"min-height: 17px\"><div style=\"float: left\">Senior Tutor</div> </div>
\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 364
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 365
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\"></span>
\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 367
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t</div>
</div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" align=\"\" style=\"border: 1px solid #505050;box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)\">
\t<tbody>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableContent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent \" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 384
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 384)) {
                echo "<td style=\"width: 5%;\"><b>#</b></td>";
            }
            // line 385
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Group</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"30%\"><b>Name</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Status</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Last Login</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>World</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Country</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 392
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 393
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 393)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 393) == "senior tutor"))) {
                    // line 394
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 394)));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 395
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 396
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                        echo "\" style=\"height: 64px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 397
                        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 397)) {
                            // line 398
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"position: absolute; margin-top: ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "player", [], "any", false, false, false, 398), "looktype", [], "any", false, false, false, 398), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "outfit", [], "any", false, false, false, 398), "html", null, true);
                            echo "\" alt=\"player outfit\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 400
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><b><font style=\"font-family: Verdana; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"seagreen\">Senior Tutor</font><b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 402
                        echo twig_get_attribute($this->env, $this->source, $context["member"], "link", [], "any", false, false, false, 402);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 404
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 404)) {
                            // line 405
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"green\"> Online </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 407
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"red\"> Offline </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 409
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 412
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 412)) {
                            // line 413
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 413), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin-left: 5px; margin-top: -1px; position: absolute; border: none; border-top: 1px dotted black; width: 88%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 416
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNot connected yet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 418
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 420
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 420)) {
                            // line 421
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 421), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 423
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["config"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["lua"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["serverName"] ?? null) : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 425
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 427
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 427)) {
                            // line 428
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 428);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 430
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo Flag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 432
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 435
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 436
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table></div>
<br><br>
";
        }
        // line 452
        echo "
";
        // line 453
        $context["tutorMembersExist"] = false;
        // line 454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 455
            echo "    ";
            if ( !($context["tutorMembersExist"] ?? null)) {
                // line 456
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 456)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 456) == "tutor"))) {
                    // line 457
                    echo "            ";
                    $context["tutorMembersExist"] = true;
                    // line 458
                    echo "        ";
                }
                // line 459
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 461
        if (($context["tutorMembersExist"] ?? null)) {
            // line 462
            echo "
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
\t<div class=\"CaptionInnerContainer\">
\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 466
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 467
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 468
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 469
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 470
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 471
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<div class=\"Text\" style=\"min-height: 17px\"><div style=\"float: left\">Tutor</div> </div>
\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 473
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 474
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t<span class=\"CaptionEdgeLeftBottom\"></span>
\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 476
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t</div>
</div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" align=\"\" style=\"border: 1px solid #505050;box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)\">
\t<tbody>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableContent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent \" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 493
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 493)) {
                echo "<td style=\"width: 5%;\"><b>#</b></td>";
            }
            // line 494
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Group</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"30%\"><b>Name</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Status</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Last Login</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>World</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><b>Country</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 501
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 502
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 502)) && (twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 502) == "tutor"))) {
                    // line 503
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "members", [], "any", false, false, false, 503)));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 504
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 505
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                        echo "\" style=\"height: 64px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 506
                        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "team_display_outfit", [], "any", false, false, false, 506)) {
                            // line 507
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img style=\"position: absolute; margin-top: ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "player", [], "any", false, false, false, 507), "looktype", [], "any", false, false, false, 507), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "outfit", [], "any", false, false, false, 507), "html", null, true);
                            echo "\" alt=\"player outfit\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 509
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><b><font style=\"font-family: Verdana; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"forestgreen\">Tutor</font><b></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 511
                        echo twig_get_attribute($this->env, $this->source, $context["member"], "link", [], "any", false, false, false, 511);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 513
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 513)) {
                            // line 514
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"green\"> Online </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 516
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b><font style=\"font-family: Verdana; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);\" color=\"red\"> Offline </font><b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 518
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 521
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 521)) {
                            // line 522
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_login", [], "any", false, false, false, 522), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin-left: 5px; margin-top: -1px; position: absolute; border: none; border-top: 1px dotted black; width: 88%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 525
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNot connected yet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 527
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 529
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 529)) {
                            // line 530
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "world_name", [], "any", false, false, false, 530), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 532
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, (($__internal_compile_8 = (($__internal_compile_9 = ($context["config"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["lua"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["serverName"] ?? null) : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 534
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"position: relative; text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 536
                        if (twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 536)) {
                            // line 537
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["member"], "flag_image", [], "any", false, false, false, 537);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 539
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo Flag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 541
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 544
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 545
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 546
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table></div>
<br><br>
";
        }
    }

    public function getTemplateName()
    {
        return "team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1251 => 546,  1245 => 545,  1242 => 544,  1234 => 541,  1230 => 539,  1224 => 537,  1222 => 536,  1218 => 534,  1212 => 532,  1206 => 530,  1204 => 529,  1200 => 527,  1196 => 525,  1189 => 522,  1187 => 521,  1182 => 518,  1178 => 516,  1174 => 514,  1172 => 513,  1167 => 511,  1163 => 509,  1151 => 507,  1149 => 506,  1144 => 505,  1141 => 504,  1136 => 503,  1133 => 502,  1129 => 501,  1120 => 494,  1116 => 493,  1096 => 476,  1091 => 474,  1087 => 473,  1082 => 471,  1078 => 470,  1074 => 469,  1070 => 468,  1066 => 467,  1062 => 466,  1056 => 462,  1054 => 461,  1047 => 459,  1044 => 458,  1041 => 457,  1038 => 456,  1035 => 455,  1031 => 454,  1029 => 453,  1026 => 452,  1009 => 437,  1003 => 436,  1000 => 435,  992 => 432,  988 => 430,  982 => 428,  980 => 427,  976 => 425,  970 => 423,  964 => 421,  962 => 420,  958 => 418,  954 => 416,  947 => 413,  945 => 412,  940 => 409,  936 => 407,  932 => 405,  930 => 404,  925 => 402,  921 => 400,  909 => 398,  907 => 397,  902 => 396,  899 => 395,  894 => 394,  891 => 393,  887 => 392,  878 => 385,  874 => 384,  854 => 367,  849 => 365,  845 => 364,  840 => 362,  836 => 361,  832 => 360,  828 => 359,  824 => 358,  820 => 357,  814 => 353,  812 => 352,  805 => 350,  802 => 349,  799 => 348,  796 => 347,  793 => 346,  789 => 345,  787 => 344,  784 => 343,  767 => 328,  761 => 327,  758 => 326,  750 => 323,  746 => 321,  740 => 319,  738 => 318,  734 => 316,  728 => 314,  722 => 312,  720 => 311,  716 => 309,  712 => 307,  705 => 304,  703 => 303,  698 => 300,  694 => 298,  690 => 296,  688 => 295,  683 => 293,  679 => 291,  667 => 289,  665 => 288,  660 => 287,  657 => 286,  652 => 285,  649 => 284,  645 => 283,  636 => 276,  632 => 275,  612 => 258,  607 => 256,  603 => 255,  598 => 253,  594 => 252,  590 => 251,  586 => 250,  582 => 249,  578 => 248,  572 => 244,  570 => 243,  563 => 241,  560 => 240,  557 => 239,  554 => 238,  551 => 237,  547 => 236,  545 => 235,  542 => 234,  525 => 219,  519 => 218,  516 => 217,  508 => 214,  504 => 212,  498 => 210,  496 => 209,  492 => 207,  486 => 205,  480 => 203,  478 => 202,  474 => 200,  470 => 198,  463 => 195,  461 => 194,  456 => 191,  452 => 189,  448 => 187,  446 => 186,  441 => 184,  437 => 182,  425 => 180,  423 => 179,  418 => 178,  415 => 177,  410 => 176,  407 => 175,  403 => 174,  394 => 167,  390 => 166,  370 => 149,  365 => 147,  361 => 146,  356 => 144,  352 => 143,  348 => 142,  344 => 141,  340 => 140,  336 => 139,  330 => 135,  328 => 134,  321 => 132,  318 => 131,  315 => 130,  312 => 129,  309 => 128,  305 => 127,  303 => 126,  299 => 124,  282 => 109,  276 => 108,  273 => 107,  265 => 104,  261 => 102,  255 => 100,  253 => 99,  249 => 97,  243 => 95,  237 => 93,  235 => 92,  231 => 90,  227 => 88,  220 => 85,  218 => 84,  213 => 81,  209 => 79,  205 => 77,  203 => 76,  198 => 74,  194 => 72,  182 => 70,  180 => 69,  175 => 68,  172 => 67,  167 => 66,  164 => 65,  160 => 64,  151 => 57,  147 => 56,  126 => 38,  121 => 36,  117 => 35,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  86 => 24,  84 => 23,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  61 => 16,  59 => 15,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team.html.twig", "/var/www/html/system/templates/team.html.twig");
    }
}
