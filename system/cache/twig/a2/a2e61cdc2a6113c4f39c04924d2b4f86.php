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

/* donate-box.html.twig */
class __TwigTemplate_6551f004f0e4cb3af73f7b3a43d5d24b extends \Twig\Template
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
  .img-box {
    width: 100%;
    max-width: 220px;
    max-height: 400px;
  }
</style>
<h2 style=\"text-align: center; margin-top: 1rem\">Select which box you want to buy!</h2>
<table width=\"100%\" border=\"0\" cellpadding=\"4\" cellspacing=\"1\">
  <tbody>
  ";
        // line 11
        $context["i"] = 1;
        // line 12
        echo "  <tr>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "pagSeguro", [], "any", false, false, false, 13), "boxes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "      <td style=\"text-align: center; cursor: pointer\">
        <img alt src=\"./images/boxes/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
             style=\"border: 2px solid ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "border", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"img-box\">
      </td>
      ";
            // line 18
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </tr>
  </tbody>
</table>
<br/>
<form target=\"pagseguro\" method=\"post\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("pagsegurobuybox"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"reference\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account_logged"] ?? null), "getId", [], "method", false, false, false, 25), "html", null, true);
        echo "\">
  <table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
    <tbody>
    <tr bgcolor=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"white\">
      <th colspan=\"2\"><strong>Choose the box you want to buy</strong></th>
    </tr>
    <tr bgcolor=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
      <td width=\"15%\">Account Name</td>
      <td><strong>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account_logged"] ?? null), "getName", [], "method", false, false, false, 33), "html", null, true);
        echo "</strong></td>
    </tr>
    <tr bgcolor=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
      <td width=\"15%\">Box</td>
      <td>
        <select name=\"code\" required>
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "pagSeguro", [], "any", false, false, false, 39), "boxes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </select>
      </td>
    </tr>
    <tr bgcolor=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
      <td colspan=\"2\">
        <input type=\"image\" src=\"https://p.simg.uol.com.br/out/pagseguro/i/botoes/carrinhoproprio/btnFinalizar.jpg\"
               name=\"submit\" ";
        // line 48
        if ((($context["is_localhost"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "enablePagseguroLocal", [], "any", false, false, false, 48))) {
            echo "disabled";
        }
        echo "/>
      </td>
    </tr>
    </tbody>
  </table>
</form>
<b><span style=\"color:#ff0000;\">OBS:</span></b> Box are delivered <b>automatically</b> after
<u>approved</u> of your payment by PagSeguro.
";
    }

    public function getTemplateName()
    {
        return "donate-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  139 => 45,  134 => 42,  123 => 40,  119 => 39,  112 => 35,  107 => 33,  102 => 31,  96 => 28,  90 => 25,  86 => 24,  80 => 20,  74 => 19,  72 => 18,  67 => 16,  61 => 15,  58 => 14,  54 => 13,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "donate-box.html.twig", "/var/www/html/system/templates/donate-box.html.twig");
    }
}
