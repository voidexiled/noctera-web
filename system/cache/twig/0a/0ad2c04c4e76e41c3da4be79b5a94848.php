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

/* admin.menus.form.html.twig */
class __TwigTemplate_8d1972c813e27a62b1dfee28c44d6118 extends \Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"box box-primary\">
      <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Templates</h3>
      </div>
      <div class=\"box-body\">
        <form method=\"post\" action=\"?p=menus\">
          <p>Please choose template in which you want to edit menu items.</p>
          <div class=\"row\">
            <div class=\"col-xs-6\">
              <div class=\"input-group input-group-sm\">
                <select id=\"template\" name=\"template\" class=\"form-control\">
                  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 15
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "template", [], "any", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "template", [], "any", false, false, false, 15), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </select>
                <span class=\"input-group-btn\">
                  <button type=\"submit\" type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-edit\"></i> Edit</button>
                </span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.menus.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.menus.form.html.twig", "/var/www/html/system/templates/admin.menus.form.html.twig");
    }
}
