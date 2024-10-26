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

/* admin.news.html.twig */
class __TwigTemplate_724cac304b0a8b02a1f30c3f5eb02e4b extends \Twig\Template
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
\t\t<h3 class=\"box-title\">News:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=1\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["newses"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_constant("NEWS")] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 24);
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "date", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "news_date_format", [], "any", false, false, false, 26)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "player_link", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "player_name", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["news"], "hidden", [], "any", false, false, false, 41) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["news"], "hidden", [], "any", false, false, false, 42) != 1)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Tickers:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=2\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["newses"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_constant("TICKER")] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 84
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["ticker"], "id", [], "any", false, false, false, 85);
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "title", [], "any", false, false, false, 86), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "date", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "news_date_format", [], "any", false, false, false, 87)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "player_link", [], "any", false, false, false, 88), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "player_name", [], "any", false, false, false, 88), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticker"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "hidden", [], "any", false, false, false, 102) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 103
            if ((twig_get_attribute($this->env, $this->source, $context["ticker"], "hidden", [], "any", false, false, false, 103) != 1)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Articles:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=3\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = ($context["newses"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_constant("ARTICLE")] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 145
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 146);
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 147), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "news_date_format", [], "any", false, false, false, 148)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "player_link", [], "any", false, false, false, 149), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "player_name", [], "any", false, false, false, 149), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 151), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 156), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "hidden", [], "any", false, false, false, 161) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "hidden", [], "any", false, false, false, 162) != 1)) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t\$(function () {
\t    \$('.tb_datatable').DataTable({
\t        \"order\": [[ 0, \"desc\" ]]
\t    });
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin.news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 175,  346 => 171,  340 => 167,  334 => 163,  332 => 162,  322 => 161,  314 => 156,  306 => 151,  299 => 149,  295 => 148,  289 => 147,  285 => 146,  282 => 145,  278 => 144,  248 => 116,  239 => 112,  233 => 108,  227 => 104,  225 => 103,  215 => 102,  206 => 96,  197 => 90,  190 => 88,  186 => 87,  180 => 86,  176 => 85,  173 => 84,  169 => 83,  139 => 55,  130 => 51,  124 => 47,  118 => 43,  116 => 42,  106 => 41,  97 => 35,  88 => 29,  81 => 27,  77 => 26,  71 => 25,  67 => 24,  64 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.news.html.twig", "/var/www/html/system/templates/admin.news.html.twig");
    }
}
