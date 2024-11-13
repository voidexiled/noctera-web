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

/* account.redirect.html.twig */
class __TwigTemplate_92f87f3584fb4fb0e6e699f00f543759 extends \Twig\Template
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
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t<div class=\"Text\" >Login Successful</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>You have logged in.<br/>Press <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" >here</a> if you are not returned automatically.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>

<script language=\"javascript\" type=\"text/javascript\">
\t// Automatic redirect
\tsetTimeout (\"automaticRedirect()\", 1000);
\tfunction automaticRedirect() {
\t\twindow.location = \"";
        // line 34
        echo ($context["redirect"] ?? null);
        echo "\";
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "account.redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  83 => 21,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account.redirect.html.twig", "/var/www/html/system/templates/account.redirect.html.twig");
    }
}
