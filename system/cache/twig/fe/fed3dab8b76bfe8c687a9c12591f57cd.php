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

/* gesior-shop-system/templates/gifts-header.html.twig */
class __TwigTemplate_1b3137c07fca910b55ab75c00f4bf6ea extends \Twig\Template
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
        echo "<div style=\"text-align: center\"><h1>Gifts</h1></div>

<div style=\"float:right;\">
\t<span style=\"color: green; font-weight: bold\">Your premium points: </span>";
        // line 4
        echo ($context["user_premium_points"] ?? null);
        echo "
</div>
<br/><br/>
";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/templates/gifts-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/templates/gifts-header.html.twig", "/var/www/html/plugins/gesior-shop-system/templates/gifts-header.html.twig");
    }
}
