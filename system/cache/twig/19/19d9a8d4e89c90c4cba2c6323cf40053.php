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

/* gesior-shop-system/templates/addon.html.twig */
class __TwigTemplate_9f62f32412bc14946f8e402b4e93d82c extends \Twig\Template
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
        echo "<table style=\"width: 100%; text-align: center\">
\t<tr>
\t\t<td>
\t\t\t<img alt=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" style=\"margin-left:-30px;margin-top:-30px;width:64px;height:64px;\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "outfit_images_url", [], "any", false, false, false, 4), "html", null, true);
        echo "?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "look_male", [], "any", false, false, false, 4), "html", null, true);
        echo "&addons=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "addons_male", [], "any", false, false, false, 4), "html", null, true);
        echo "&head=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "head", [], "any", false, false, false, 4), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "body", [], "any", false, false, false, 4), "html", null, true);
        echo "&legs=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "legs", [], "any", false, false, false, 4), "html", null, true);
        echo "&feet=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "feet", [], "any", false, false, false, 4), "html", null, true);
        echo "\"/>
\t\t</td>
\t\t<td>
\t\t\t<img alt=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\" style=\"margin-left:-30px;margin-top:-30px;width:64px;height:64px;\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "outfit_images_url", [], "any", false, false, false, 7), "html", null, true);
        echo "?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "look_female", [], "any", false, false, false, 7), "html", null, true);
        echo "&addons=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "addons_female", [], "any", false, false, false, 7), "html", null, true);
        echo "&head=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "head", [], "any", false, false, false, 7), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "body", [], "any", false, false, false, 7), "html", null, true);
        echo "&legs=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "legs", [], "any", false, false, false, 7), "html", null, true);
        echo "&feet=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["outfit_colors"] ?? null), "feet", [], "any", false, false, false, 7), "html", null, true);
        echo "\"/>
\t\t</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/templates/addon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/templates/addon.html.twig", "/var/www/html/plugins/gesior-shop-system/templates/addon.html.twig");
    }
}
