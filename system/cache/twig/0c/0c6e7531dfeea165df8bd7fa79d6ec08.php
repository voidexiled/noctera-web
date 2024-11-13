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

/* library/chakoyatribewarden.html.twig */
class __TwigTemplate_c1354671c283f88d4a815881fa7f23b0 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=chakoyawindcaller\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=chakoyatoolshaper\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Chakoya Tribewardens</h2>  <img src=\"images/library/chakoyatribewarden.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The bulk of the chakoya tribes are the Chakoya Tribewardens. They are the hunters and gatherers of their species and it's their responsibility to protect the tribe. Chakoya Tribewardens are the most animal and wild of those little furry creatures. Everything that is not a chakoya is seen as prey. Not even other chakoyas are always safe from the ravenous bloodlust of their brethren. Survival of the fittest seems to be the principle of the Chakoya Tribewardens. When a chakoya shows some weakness, its fellows are after him to 'adjust' him to its new place in the food chain ...<br/>The harsh environment has made the Chakoya Tribewardens as unforgiving as the icy land itself. They never run if they get cornered, rather their bloodthirstiness and their wrath increases and they attack their opponents with weapons, claws and fangs until either their opponents or themselves are defeated.</p>  <p>Chakoya Tribewardens have 68 hitpoints. They are immune to ice damage. Moreover, they are strong against fire and holy damage. On the other hand, they are weak against death and energy damage. It takes 305 mana to convince these creatures but they cannot be summoned.</p>  <p>Chakoya Tribewardens yield 40 experience points. They carry fish, gold coins and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/chakoyatribewarden.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/chakoyatribewarden.html.twig", "/var/www/html/system/templates/library/chakoyatribewarden.html.twig");
    }
}
