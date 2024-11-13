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

/* spells.html.twig */
class __TwigTemplate_ae9d7ab419a66187daac3a5a869d02b4 extends \Twig\Template
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
\t.ts_Spells > input[type=\"radio\"] {
\t\tposition: absolute;
\t\tleft: -200vw;
\t}

\t.ts_Spells .tab-panel {
\t\tdisplay: none;
\t}

\t.ts_Spells > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
\t.ts_Spells > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
\t.ts_Spells > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
\t.ts_Spells > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
\t.ts_Spells > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
\t.ts_Spells > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
\t\tdisplay: block;
\t}

\t.ts_Spells > label {
\t\tposition: relative;
\t\tdisplay: inline-block;
\t\tpadding: 10px 10px 10px;
\t\tmargin-bottom: 10px;
\t\tborder: 1px solid transparent;
\t\tborder-bottom: 0;
\t\tcursor: pointer;
\t\tfont-weight: 600;
\t\tbackground-color: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 29), "html", null, true);
        echo ";
\t\tcolor: #fff;
\t}
</style>
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
        echo "tools/css/jquery.dataTables.min.css\">

";
        // line 35
        if (($context["canEdit"] ?? null)) {
            // line 36
            echo "\t<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("spells"), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"reload_spells\" value=\"yes\"/>
\t\t<input type=\"submit\" value=\"(admin) Reload spells\"/>
\t</form>
";
        }
        // line 41
        echo "
<p>Here you can see the list of all available spells in Tibia. Click on any spell name to get detailed information.
\tPlease adjust the search criteria below if you want to see just certain spells. Also, you can sort the spell list by
\tany column of your choice.
\tFor general information about spells and magic in Tibia please see the Manual.</p>

<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 50
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 51
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 52
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 53
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Spells</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 55
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 56
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 57
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 58
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t<table class=\"Table2\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"></table>
\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#505050\">
\t\t\t\t\t\t\t\t\t\t\t<td width=\"45%\" class=\"LabelH\">Name</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelH\">Group</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelH\">Type</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelH\">Exp Lvl</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelH\">Mana</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelH\">Price</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelH\">Premium</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 83
        $context["c"] = 0;
        // line 84
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["spells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["spell"]) {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["c"] ?? null) % 2) == 0)) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#F1E0C6\">
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"?subtopic=spells&spell=";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "name", [], "any", false, false, false, 92), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "words", [], "any", false, false, false, 94), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "group", [], "any", false, false, false, 96)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "type", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "level", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "mana", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spell"], "price", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 101
            echo ((twig_get_attribute($this->env, $this->source, $context["spell"], "isPremium", [], "any", false, false, false, 101)) ? ("yes") : ("no"));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 103
            $context["c"] = (($context["c"] ?? null) + 1);
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</tbody>
\t</table>
</div>

<br>
<br>

<form action=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("spells"), "html", null, true);
        echo "\" method=\"post\">
\t<div class=\"TableContainer\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 126
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 127
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 128
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 129
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\">Spell Search</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 131
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 133
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 134
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<table class=\"Table2\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>Vocation</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>Group</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>Type</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>Premium</b></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" value=\"\" checked=\"\"> all<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" value=\"Druid\" ";
        // line 158
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "vocation", [], "any", false, false, false, 158) == "Druid")) ? ("checked") : (""));
        echo "> Druid<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" value=\"Knight\" ";
        // line 159
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "vocation", [], "any", false, false, false, 159) == "Knight")) ? ("checked") : (""));
        echo "> Knight<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" value=\"Paladin\" ";
        // line 160
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "vocation", [], "any", false, false, false, 160) == "Paladin")) ? ("checked") : (""));
        echo "> Paladin<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" value=\"Sorcerer\" ";
        // line 161
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "vocation", [], "any", false, false, false, 161) == "Sorcerer")) ? ("checked") : (""));
        echo "> Sorcerer
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"group\" value=\"\" checked=\"\"> all<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"group\" value=\"Attack\" ";
        // line 165
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "group", [], "any", false, false, false, 165) == "Attack")) ? ("checked") : (""));
        echo "> Attack<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"group\" value=\"Healing\" ";
        // line 166
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "group", [], "any", false, false, false, 166) == "Healing")) ? ("checked") : (""));
        echo "> Healing<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"group\" value=\"Support\" ";
        // line 167
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "group", [], "any", false, false, false, 167) == "Support")) ? ("checked") : (""));
        echo "> Support
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" value=\"\" checked=\"\"> all<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" value=\"Instant\" ";
        // line 171
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", false, false, false, 171) == "Instant")) ? ("checked") : (""));
        echo "> Instant<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" value=\"Rune\" ";
        // line 172
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", false, false, false, 172) == "Rune")) ? ("checked") : (""));
        echo "> Rune
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"premium\" value=\"\" checked=\"\"> all<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"premium\" value=\"no\" ";
        // line 176
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "premium", [], "any", false, false, false, 176) == "no")) ? ("checked") : (""));
        echo "> no<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"premium\" value=\"yes\" ";
        // line 177
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "premium", [], "any", false, false, false, 177) == "yes")) ? ("checked") : (""));
        echo "> yes
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"#D4C0A1\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">Sort by:
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"sort\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"name\" selected=\"\">Name</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"group\" ";
        // line 184
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "sort", [], "any", false, false, false, 184) == "group")) ? ("selected") : (""));
        echo ">Group</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"type\" ";
        // line 185
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "sort", [], "any", false, false, false, 185) == "type")) ? ("selected") : (""));
        echo ">Type</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"level\" ";
        // line 186
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "sort", [], "any", false, false, false, 186) == "level")) ? ("selected") : (""));
        echo ">Exp Lvl</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"mana\" ";
        // line 187
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "sort", [], "any", false, false, false, 187) == "mana")) ? ("selected") : (""));
        echo ">Mana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"price\" ";
        // line 188
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "sort", [], "any", false, false, false, 188) == "price")) ? ("selected") : (""));
        echo ">Price</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"premium\" ";
        // line 189
        echo (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "sort", [], "any", false, false, false, 189) == "premium")) ? ("selected") : (""));
        echo ">Premium</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
\t<br>
\t<center>
\t\t";
        // line 210
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t</center>
</form>
";
    }

    public function getTemplateName()
    {
        return "spells.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 210,  387 => 189,  383 => 188,  379 => 187,  375 => 186,  371 => 185,  367 => 184,  357 => 177,  353 => 176,  346 => 172,  342 => 171,  335 => 167,  331 => 166,  327 => 165,  320 => 161,  316 => 160,  312 => 159,  308 => 158,  281 => 134,  277 => 133,  273 => 132,  269 => 131,  264 => 129,  260 => 128,  256 => 127,  252 => 126,  245 => 122,  226 => 105,  220 => 104,  218 => 103,  213 => 101,  209 => 100,  205 => 99,  201 => 98,  197 => 97,  193 => 96,  188 => 94,  183 => 92,  179 => 91,  176 => 90,  172 => 88,  168 => 86,  165 => 85,  160 => 84,  158 => 83,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  113 => 53,  109 => 52,  105 => 51,  101 => 50,  90 => 41,  81 => 36,  79 => 35,  74 => 33,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "spells.html.twig", "/var/www/html/system/templates/spells.html.twig");
    }
}
