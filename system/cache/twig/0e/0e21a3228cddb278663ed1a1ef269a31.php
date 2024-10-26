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

/* online.html.twig */
class __TwigTemplate_57190883f1552aac48dd97bd06de43bd extends \Twig\Template
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
        echo "<table border=\"0\" width=\"100%\">
\t<tbody>
\t<tr>
\t\t<td width=\"50%\" style=\"padding: 0px 5px 10px 0px;\">
\t\t\t<div class=\"TableContainer\">
\t\t\t\t<div class=\"CaptionContainer\">
\t\t\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<div class=\"Text\">World Information</div>
\t\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t</div></div>
\t\t\t\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t\t\t<table style=\"width: 100%\">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "online", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 26), "serverName", [], "any", false, false, false, 26), "html", null, true);
            echo " Server is offline.</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td width=\"25%\" class=\"LabelV150\">Status: </td>
\t\t\t\t\t\t\t\t\t\t\t<td>Online</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td width=\"25%\" class=\"LabelV150\">Players Online:</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["players"] ?? null)), "html", null, true);
            echo " Players Online</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Online Record:</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo ($context["record"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Location Datacenter:</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Brasil<br><small>(Server Date: UTC - ";
            // line 43
            echo twig_escape_filter($this->env, ($context["current_date"] ?? null), "html", null, true);
            echo ")</small></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr></tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t\t<td width=\"50%\" style=\"padding: 0px 0px 10px 5px;\">
\t\t\t<div class=\"TableContainer\">
\t\t\t\t<div class=\"CaptionContainer\">
\t\t\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<div class=\"Text\">Frags</div>
\t\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t</div></div>
\t\t\t\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t\t\t<table style=\"width: 100%; text-align: center\">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr><td><img src=\"images/white_skull.gif\"/> - 1 - 6 Frags</td></tr>
\t\t\t\t\t\t\t\t\t<tr><td><img src=\"images/red_skull.gif\"/> - 6+ Frags or Red Skull</td></tr>
\t\t\t\t\t\t\t\t\t<tr><td><img src=\"images/black_skull.gif\"/> - 10+ Frags or Black Skull</td></tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr></tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t</tr>
\t</tbody>
</table>

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody><tr>
\t\t<td>
\t\t\t<div class=\"TableContainer\">
\t\t\t\t<div class=\"CaptionContainer\">
\t\t\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<div class=\"Text\">Vocations Status</div>
\t\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t</div></div>
\t\t\t\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Sorcerers</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 117
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["vocs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Druids</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 131
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["vocs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[2] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Paladins</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 145
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["vocs"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[3] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Knights</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 159
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["vocs"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[4] ?? null) : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr></tbody></table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr></tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t</tr>
\t</tbody>
</table>
<br>

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody><tr>
\t\t<td>
\t\t\t<div class=\"TableContainer\">
\t\t\t\t<div class=\"CaptionContainer\">
\t\t\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
            <div class=\"Text\">Players Online</div>
\t\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t</div></div>
\t\t\t\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 200
        if ((twig_length_filter($this->env, ($context["players"] ?? null)) == 0)) {
            // line 201
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"text-align: center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Currently no one is playing on ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 202), "serverName", [], "any", false, false, false, 202), "html", null, true);
            echo ".</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 206
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_country", [], "any", false, false, false, 206)) {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">#</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "online_outfit", [], "any", false, false, false, 209)) {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Outfit</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Name</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Level</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV150\">Vocation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 216
            $context["i"] = 0;
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                echo "\" style=\"height: 44px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 220
                if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_country", [], "any", false, false, false, 220)) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"4%\">";
                    echo twig_get_attribute($this->env, $this->source, $context["player"], "country_image", [], "any", false, false, false, 221);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "online_outfit", [], "any", false, false, false, 223)) {
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"10%\"><img style=\"position:absolute;margin-top:";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "player", [], "any", false, false, false, 224), "looktype", [], "any", false, false, false, 224), [0 => 75, 1 => 266, 2 => 302])) {
                        echo "-20px;margin-left:-0px;";
                    } else {
                        echo "-45px;margin-left:-25px;";
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "outfit", [], "any", false, false, false, 224), "html", null, true);
                    echo "\" alt=\"player outfit\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"50%\">";
                echo twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 226);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "skull", [], "any", false, false, false, 226), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "level", [], "any", false, false, false, 227), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "vocation", [], "any", false, false, false, 228), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td></tr></tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr></tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t</tr>
\t</tbody>
</table>
<br>
";
    }

    public function getTemplateName()
    {
        return "online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 232,  359 => 231,  350 => 228,  346 => 227,  340 => 226,  328 => 224,  325 => 223,  319 => 221,  317 => 220,  312 => 219,  309 => 218,  304 => 217,  302 => 216,  296 => 212,  292 => 210,  289 => 209,  285 => 207,  283 => 206,  280 => 205,  274 => 202,  271 => 201,  269 => 200,  225 => 159,  208 => 145,  191 => 131,  174 => 117,  101 => 46,  95 => 43,  88 => 39,  81 => 35,  73 => 29,  67 => 26,  64 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "online.html.twig", "/var/www/html/system/templates/online.html.twig");
    }
}
